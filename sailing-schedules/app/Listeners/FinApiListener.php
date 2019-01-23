<?php

namespace App\Listeners;

use GuzzleHttp\Client;
use App\Events\FinApi;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class FinApiListener
{
   /**
     * Create the event listener.
     *
     * @return void
     */
   public function __construct()
   {
      //
   }

   /**
     * Handle the event.
     *
     * @param  FinApi  $event
     * @return void
     */
   public function handle(FinApi $event)
   {

      $client = new Client();
      $response = $client->post($event->data['auth_post'].'oauth/token', [
         'form_params' => [
            'client_id' => $event->data['client_id'],
            // The secret generated when you ran: php artisan passport:install
            'client_secret' => $event->data['client_secret'],
            'grant_type' => 'password',
            'username' => $event->data['user_name'],
            'password' => $event->data['password'],
            'scope' => '*',
         ]
      ]);
      $auth = json_decode((string)$response->getBody());
      $response = $client->get($event->data['auth_post'].$event->data['url_get'], [
         'headers' => [
            'Authorization' => 'Bearer '.$auth->access_token,
         ]
      ]);
      $dataGen = json_decode($response->getBody()->getContents(),true);
      return $dataGen;

   }
}
