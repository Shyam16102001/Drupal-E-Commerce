<?php

namespace Drupal\checkout_page\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\user\Entity\User;

class CheckoutPageController extends ControllerBase
{
    public function checkout()
    {
        \Drupal::cache()->invalidateAll();
        $current_user = \Drupal::currentUser();
        $uid = $current_user->id();
        $cart_items = [];

        if ($current_user->isAuthenticated()) {
            $user_entity = User::load($current_user->id());
            $address = $user_entity->get('field_address');
            $balance = $user_entity->get('field_balance')->value;

            $totalItems = 0;
            $subTotal = 0;

            $query = \Drupal::database()->select('cart_table', 'cart');
            $query->fields('cart', ['product_id', 'quantity', 'price'])
                ->condition('cart.uid', $uid, '=');
            $results = $query->execute()->fetchAll();
            if (empty($results)) {
                $this->messenger()->addStatus($this->t('Kindly add product to the cart before performing checkout.'));
                return new RedirectResponse('/store');
            }

            foreach ($results as $product) {
                $quantity = $product->quantity;
                $price = $product->price;
                $totalItems += $quantity;
                $subTotal += $quantity * $price;
            }

            return [
                '#theme' => 'checkout_page_theme',
                '#title' => $this->t('Checkout'),
                '#address' => $address,
                '#user' => $current_user,
                '#totalItems' => $totalItems,
                '#subTotal' => $subTotal,
                '#balance' => $balance,
            ];
        } else {
            $this->messenger()->addError($this->t('Kindly login to perform checkout.'));
            return new RedirectResponse('/store/login');
        }
    }
}