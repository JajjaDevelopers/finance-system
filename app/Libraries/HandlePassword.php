<?php
namespace App\Libraries;
/**
 * This class is used to hash and verify user password
 */
class HandlePassword {
  /**
   * Verifies user Password
   *
   * @param [type] $userPassword
   * @param [type] $hashedPassword
   * @return boolean 
   */
   public static function verifyPassword(string $userPassword, string $hashedPassword){
      if(password_verify($userPassword,$hashedPassword)){
        return true;
      }else{
        return false;
      }
   }
   /**
    * Undocumented function
    *
    * @param string $password
    * @return string
    */
   public static function hashPassword(string $password){
      return password_hash($password,PASSWORD_DEFAULT);
  }
}