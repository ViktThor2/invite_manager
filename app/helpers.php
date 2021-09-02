<?php

//ezt a filet be kell autoloadolni. a composer.json autoload ->files majd composer dump-autoload
if (!function_exists('orderTableHeader')) {

  function orderTableHeader($field, $tableHeaderText)
  {   //  \Route-ot azért használhatom így, mert szerepel a config/app.php aliasai közt.
    $currentRouteName = \Route::currentRouteName();
    $orderBy = request()->input('orderby');
    $orderDir = request()->input('order_dir');
    $link = '<a href="' . route($currentRouteName, [
        'search' => request()->input('search'),
        'orderby' => $field,
        'order_dir' =>
          $orderBy == $field &&
          $orderDir == 'asc' ? 'desc' : 'asc'
      ]) . '">' . $tableHeaderText;

    $icon = '<i class="fa fa-sort';
    if ($orderBy == $field) {
      $icon .= $orderDir == 'asc' ? '-up' : '-down';
    }
    $icon .= '"></i>';

    $link .= $icon . '</a>';


    return $link;
  }
}

if (!function_exists('authCustomer')) {
  function authCustomer()
  {
    return auth()->guard('customer')->user();
  }
}

if (!function_exists('activeAdminMenu')) {
  function activeAdminMenu($resources)
  {
    foreach ((array)$resources as $resource) {
      if (preg_match('/admin.' . $resource . '.*/', \Route::currentRouteName())) {
        return true;
        //return 'active';
      }
    }
    return false;
  }

}