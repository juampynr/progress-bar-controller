<?php

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
* An example controller.
*/
class MyModuleController extends ControllerBase {

  /**
  * {@inheritdoc}
  */
  public function getProgressBar() {
    $build = [
      'defaults' => [
        '#theme' => 'progress_bar',
        '#label' => 'Default values',
        '#percent' => 50,
        '#message' => 'Processing',
      ],
      'loading' => [
        '#theme' => 'progress_bar',
        '#label' => 'Label',
        '#percent' => 60,
        '#message' => 'Processing',
        '#status' => 'loading',
        '#prefix' => '</br></br>',
      ],
      'success' => [
        '#theme' => 'progress_bar',
        '#label' => 'Label',
        '#percent' => 100,
        '#message' => 'Done!',
        '#status' => 'success',
        '#prefix' => '</br></br>',
      ],
      'error' => [
        '#theme' => 'progress_bar',
        '#label' => 'Label',
        '#percent' => 87,
        '#message' => 'Error message',
        '#status' => 'error',
        '#prefix' => '</br></br>',
      ],
    ];
    return $build;
  }

}