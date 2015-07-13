<?php

namespace barlaKarime\userSystem {

  /**
   * Description of usuarioClass
   *
   * @author debian
   */
  class userClass {
    private $user;
    private $pass;
    
    public function __construct() {
      $this->user = 'gatoViejo';
      $this->pass = 'rojasPinilla';
    }
    public function validate($user, $pass) {
      $answer = false;
      if($this->user == $user and $this->pass == $pass) {
        $answer = true;
      }
      return $answer;
  }
  
  public function errorUser() {
    $answer = false;
    if(filter_has_var(INPUT_GET, 'user') === true and filter_input(INPUT_GET, 'user') === false) {
      $answer = true;
    }
    return $answer;
  }
          
  }

}