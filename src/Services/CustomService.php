<?php

namespace Drupal\custom_block\Services;

/**
 * Class CustomService.
 */
class CustomService {

  /**
   * Constructs a new CustomService object.
   */
  public function __construct() {

  }

  /**
   * Get service data.
   */
  public function getServiceData() {
    $query = \Drupal::entityQuery('node');
    $query->condition('status', 1);
    $query->condition('type', 'article');
    $query->range(0, 5);
    $query->sort('title', 'ASC');
    $nids = $query->execute();
    $nodes = \Drupal::entityTypeManager()->getStorage('node')->loadMultiple($nids);
    $output = array();
    $output .= "<ul>";
    foreach ($nodes as $key => $value) {
      $output .= "<li>";
      $output .= $value->title->value;
      $output .= "</li>";
    }
    $output .= "</ul>";
    return $output;
  }

}
