<?php

namespace Drupal\addProduct\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AddProductController extends ControllerBase
{

  public function addToCart($node, $quantity)
  {
    $entity = \Drupal::entityTypeManager()->getStorage('node')->load($node);
    $current_user = \Drupal::currentUser();
    $roles = $current_user->getRoles();

    if (in_array('customer', $roles)) {
      if ($entity instanceof \Drupal\node\NodeInterface) {
        $productId = $entity->id();
        $productTitle = $entity->label();
        $price = $entity->get('field_price')->value;
        $availability = $entity->get('field_availablity')->value;
        $query = \Drupal::database()->select('cart_table', 'ct');
        $query->fields('ct', ['id', 'quantity']);
        $query->condition('ct.uid', $current_user->id());
        $query->condition('ct.product_id', $productId);
        $cartItemExists = $query->countQuery()->execute()->fetchField();
        $oldQuantity = $query->execute()->fetchField(1);
        if ($availability > 0) {
          if ($cartItemExists) {
            $availability = $availability - $quantity + $oldQuantity;
            $entity->get('field_availablity')->setValue($availability);
            $entity->save();
            if ($quantity > 0) {
              \Drupal::database()->update('cart_table')
                ->fields([
                  'price' => $price,
                  'quantity' => $quantity,
                ])
                ->condition('uid', $current_user->id())
                ->condition('product_id', $productId)
                ->execute();
            } else {
              \Drupal::database()->delete('cart_table')
                ->condition('uid', $current_user->id())
                ->condition('product_id', $productId)
                ->execute();
            }
          } else {
            $availability = $availability - $quantity;
            $entity->get('field_availablity')->setValue($availability);
            $entity->save();
            $values = [
              'uid' => $current_user->id(),
              'product_id' => $productId,
              'product_title' => $productTitle,
              'price' => $price,
              'quantity' => $quantity,
            ];
            if ($quantity > 0) {
              \Drupal::database()->insert('cart_table')
                ->fields($values)
                ->execute();
            }
          }
        }
        return new RedirectResponse('/store/cart');
      }
    } else {
      $this->messenger()->addStatus($this->t('Kindly login as a customer to add the products'));
      return new RedirectResponse('/store/login');
    }
  }

}