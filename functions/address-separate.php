<?php 
  function separate_address(string $address) {
    if (preg_match('@^(.{2,3}?[都道府県])(.+?郡.+?[町村]|.+?市.+?区|.+?[市区町村])(.+)@u', $address, $matches) !== 1) {
      return [
        'state' => null,
        'city' => null,
        'other' => null
      ];
    }
    return [
      'state' => $matches[1],
      'city' => $matches[2],
      'other' => $matches[3],
    ];
  }
  