<?php

namespace Drupal\cart\Controller;


use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CartController extends ControllerBase
{

  public function displayCart()
  {
    \Drupal::cache()->invalidateAll();

    $current_user = \Drupal::currentUser();
    $uid = $current_user->id();
    $roles = $current_user->getRoles();
    $cart_items = [];
    if (in_array('customer', $roles)) {
      $query = \Drupal::database()->select('cart_table', 'cart');
      $query->fields('cart', ['product_id', 'quantity'])
        ->condition('cart.uid', $uid, '=');
      $results = $query->execute()->fetchAll();
      foreach ($results as $product) {
        $product_id = $product->product_id;
        $entity = \Drupal::entityTypeManager()->getStorage('node')->load($product_id);
        if ($entity instanceof \Drupal\node\NodeInterface) {
          $productTitle = $entity->label();
          $price = $entity->get('field_price')->value;
          $quantity = $product->quantity;
          $availability = $entity->get('field_availablity')->value;
          $productImage = $entity->get('field_product_image');
          $imageRenderArray = $productImage->view(['label' => 'hidden']);
          $imageHtml = \Drupal::service('renderer')->render($imageRenderArray);
          $cart_items[] = [
            'product_title' => $productTitle,
            'image' => $imageHtml,
            'price' => $price,
            'quantity' => $quantity,
            'availability' => $availability,
            'product_id' => $product_id
          ];
        }
      }
      return [
        '#theme' => 'cart_theme',
        '#title' => $this->t('Cart Details'),
        '#products' => $cart_items,
      ];
    } else {
      $this->messenger()->addStatus($this->t('Kindly login as a customer to add the products'));
      return new RedirectResponse('/store/login');
    }
  }

}