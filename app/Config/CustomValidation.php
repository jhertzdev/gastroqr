<?php

namespace Config;

/**
 * Validaciones personalizadas para GastroQR
 */

class CustomValidation
{
  public function valid_coordinates(string $str) {
    return (bool) preg_match('/^(?<latitude>[-]?[0-8]?[0-9]\.\d+|[-]?90\.0+?)(?<delimeter>,)(?<longitude>[-]?1[0-7][0-9]\.\d+|[-]?[0-9]?[0-9]\.\d+|[-]?180\.0+?)$/', $str);
  }
}

