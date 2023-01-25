<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {
  
  /** @var User **/
  private $user;

  public function __construct( User $user ) {
    $this->user = $user;
  }

  public function getUsers() {
    return $this->user->select( 'id', 'name', 'email' )->get();
  }
}
