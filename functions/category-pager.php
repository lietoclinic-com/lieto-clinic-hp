<?php
  function adjust_category_paged( $query = []) {
    if (isset($query['name'])
    && $query['name'] === 'page'
    && isset($query['page'])
    && isset($query['category_name'])) {
      $query['paged'] = intval($query['page']); // 念のため整数化しておく
      unset($query['name']);
      unset($query['page']);
    }
    return $query;
  }
  add_filter('request', 'adjust_category_paged');
