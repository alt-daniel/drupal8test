<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 18/03/2019
 * Time: 22:50
 */

namespace Drupal\soccer_backstop\Controller;

use Drupal\Core\Controller\ControllerBase;


class Backstop extends ControllerBase
{
    public function content() {
        $content_types = \Drupal::service('entity_type.bundle.info')->getBundleInfo('node');
        var_dump($content_types);

        return [
            '#type' => 'markup',
            '#markup' => $content_types,
        ];

    }
}