<?php

namespace App\Services;

use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService implements UserServiceInterface {

  /** @var UserRepositoryInterface **/
  private $repository;

  public function __construct( UserRepositoryInterface $repository) {
    $this->repository = $repository;
  }
  
  public function getUsers() {
    return $this->repository->getUsers();
  }
}
