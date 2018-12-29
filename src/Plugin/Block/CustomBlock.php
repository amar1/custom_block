<?php

namespace Drupal\custom_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'custom_block' block.
 *
 * @Block(
 *   id = "custom_block",
 *   admin_label = @Translation("Custom block"),
 *   category = @Translation("Custom block example")
 * )
 */
class CustomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $service = \Drupal::service('custom_block.custom_services');
    $node_title = $service->getServiceData();
    return array(
      '#theme' => 'tcdev',
      '#title' => 'Article Block',
      '#description' => $node_title,
    );
  }

}
