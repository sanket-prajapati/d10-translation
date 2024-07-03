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

    $var = "Passing var in translating string";
    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('Welcome! @var', ['@var' => $var]),
    ];

    return $build;
  }

}
