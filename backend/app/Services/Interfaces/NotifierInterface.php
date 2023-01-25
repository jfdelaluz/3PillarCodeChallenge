<?php

namespace App\Services\Interfaces;

interface NotifierInterface {
  
  public function sendNotification( $data = [] );

}