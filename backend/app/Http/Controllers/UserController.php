<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\UserServiceInterface;

class UserController extends Controller {

  /** @var UserServiceInterface **/
  private $service;

  public function __construct( UserServiceInterface $service ) {
    $this->service = $service;
  }
  
  public function getUsers() {

    try {

      return view(
        'users',
        [ 'data' => $this->service->getUsers() ]
      );

    } catch ( Exception $e ) {
      return 'Error: ' . $e->getMessage();
    }
    
  }
}
