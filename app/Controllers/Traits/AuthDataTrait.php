<?php
namespace App\Controllers\Traits;
/**
 * The trait contains current authorized user information
 */
trait AuthDataTrait
{
/**
 * Returns information about current authorized user
 *It also receives extra associative array of data
 * @param array $attributes
 * @return array
 */
  protected function getAuthData(array $attributes =[]):array
  {
    $data['user']=session()->get("loggedUser");
    return array_merge($data,$attributes);
  }
}