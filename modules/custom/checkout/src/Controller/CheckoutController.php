<?php

namespace Drupal\checkout\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\user\Entity\User;

class CheckoutController extends ControllerBase
{
    public function checkout($parameter)
    {
        $current_user = \Drupal::currentUser();
        $uid = $current_user->id();
        $user = User::load($uid);

        $query = \Drupal::database()->select('cart_table', 'ct');
        $query->fields('ct', ['product_id', 'quantity', 'price']);
        $query->condition('ct.uid', $uid);
        $cartItems = $query->execute()->fetchAll();
        $subTotal = (int) $parameter;

        foreach ($cartItems as $item) {
            $product_id = $item->product_id;
            $quantity = $item->quantity;
            $product_entity = \Drupal::entityTypeManager()->getStorage('node')->load($product_id);
            if ($product_entity) {
                $product_title = $product_entity->label();
                $price = $product_entity->get('field_price')->value;
                $subTotal += $price;
                $cart_item = \Drupal::entityTypeManager()->getStorage('node')->create([
                    'type' => 'cart',
                    'title' => $product_title,
                    'field_quantity_price' => $price,
                    'field_product' => $product_entity,
                    'field_product_image' => $product_entity->get('field_product_image'),
                    'field_product_id' => $product_id,
                    'field_item_total_price' => $price * $quantity,
                    'field_quantity' => $quantity,
                    'field_user_id' => $uid,
                    'field_delivery_method' => $parameter,
                    'field_timestamp' => time(),
                ]);
                $cart_item->save();
            }
        }

        $current_balance = $user->get('field_balance')->getValue()[0]['value'];
        $new_balance = $current_balance - $subTotal;
        $user->set('field_balance', $new_balance);
        $user->save();

        $balance = $user->get('field_balance')->getValue()[0]['value'];

        \Drupal::database()->delete('cart_table')
            ->condition('uid', $uid)
            ->execute();
        $this->messenger()->addStatus($this->t('Order Placed Successfully. Updated Wallet Balance: @balance', ['@balance' => $balance]));
        return new RedirectResponse('/store/my-order');
    }
}