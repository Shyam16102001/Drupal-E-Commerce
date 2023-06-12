<?php

namespace Drupal\checkout\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CheckoutController extends ControllerBase
{
    public function checkout()
    {
        $current_user = \Drupal::currentUser();
        $uid = $current_user->id();

        $query = \Drupal::database()->select('cart_table', 'ct');
        $query->fields('ct', ['product_id', 'quantity']);
        $query->condition('ct.uid', $uid);
        $cartItems = $query->execute()->fetchAll();

        foreach ($cartItems as $item) {
            $product_id = $item->product_id;
            $quantity = $item->quantity;

            $product_entity = \Drupal::entityTypeManager()->getStorage('node')->load($product_id);
            if ($product_entity) {
                $product_title = $product_entity->label();
                $price = $product_entity->get('field_price')->value;

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
                    'field_timestamp' => time(),
                ]);

                $cart_item->save();
            }
        }

        \Drupal::database()->delete('cart_table')
            ->condition('uid', $uid)
            ->execute();
        $this->messenger()->addStatus($this->t('Order Placed Sucessfully'));
        return new RedirectResponse('/store');
    }
}