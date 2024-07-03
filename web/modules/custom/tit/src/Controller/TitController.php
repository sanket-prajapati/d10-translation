<?php

declare(strict_types=1);

namespace Drupal\tit\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Test Interface transaltion routes.
 */
final class TitController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
