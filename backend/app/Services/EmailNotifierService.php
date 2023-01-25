<?php

namespace App\Services;

use App\Services\Interfaces\NotifierInterface;
use App\Mail\NotifyUserEmail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailNotifierService implements NotifierInterface {

  public function sendNotification( $data = [] ) {
    Log::info( 'Email Data: ' . $data[ 'user' ] );
    Mail::to( $data[ 'user' ]->email )->send( new NotifyUserEmail( $data[ 'user' ] ) );
  }
  
}