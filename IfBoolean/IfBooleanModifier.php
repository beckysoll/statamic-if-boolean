<?php

namespace Statamic\Addons\IfBoolean;

use Statamic\Extend\Modifier;

class IfBooleanModifier extends Modifier
{
  /**
  * Filter an array by a boolean value within each set
  *
  * @param $value
  * @param $params
  * @return array
  */
  public function index($value, $params)
  {

    $key = array_get($params, 0);

    if (array_get($params, 1, 'true') == 'false') {

      return collect($value)->filter(function ($value) use ($key) {
        return !isset($value[$key]);
      })->all();

    } 

    return collect($value)->filter(function ($value) use ($key) {
      return !empty($value[$key]);
    })->all();

  }
}
