<?php

namespace App\Http\Controllers;

use App\CoscoRoute;
use App\MaerskRoute;
use App\MaritimeLine;
use GuzzleHttp\Client;
use App\CoscoTransferVessel;
use Illuminate\Http\Request;
use App\MaerskTransferVessel;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\MaritimeLineResource;

class MaritimeLineController extends Controller
{


    public function SchedulesMaerks(){
        $schedules = MaerskRoute::with('MaerskTransferVessels')->get();
        return new MaritimeLineResource($schedules);
    }

    public function SchedulesCosco(){
        $schedules = CoscoRoute::with('CoscoTransferVessels')->get();
        return new MaritimeLineResource($schedules);
    }

    public function SOriginDestinMaerks($origin, $destiny){
        $schedules = MaerskRoute::where('OriginPortCode','=',$origin)
            ->where('DestinationPortCode','=',$destiny)
            ->with('MaerskTransferVessels')
            ->get();

        return new MaritimeLineResource($schedules);
    }

    public function SOriginDestinCosco($origin, $destiny){
        $schedules = CoscoRoute::where('OriginPortCode','=',$origin)
            ->where('DestinationPortCode','=',$destiny)
            ->with('CoscoTransferVessels')
            ->get();
        return new MaritimeLineResource($schedules);
    }


    public function test(){

/*
        $client = new Client();

        $response = $client->post('http://sautomatic/oauth/token', [
            'form_params' => [
                'client_id' => 3,
                // The secret generated when you ran: php artisan passport:install
                'client_secret' => '2utTvgPepnbOSo2P3lXiQgKprCJioXc3EPyw2i8U',
                'grant_type' => 'password',
                'username' => 'admin@example.com',
                'password' => 'secret',
                'scope' => '*',
            ]
        ]);

        $auth = json_decode((string)$response->getBody());

        $response = $client->get('http://sautomatic/schedule/maersk', [
            'headers' => [
                'Authorization' => 'Bearer '.$auth->access_token,
            ]
        ]);

        echo $response->getStatusCode(); # 200
        echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
        $todos = json_decode((string)$response->getBody(),true);*/


        //-------------------------------------------------------------------------------

        $client = new Client([
            'headers' => ['Content-Type'=>'application/json','Accept'=>'*/*'],
        ]);
        try {
            $response = $client->post('http://smanual/oauth/token', [
                'form_params' => [
                    'client_id' => 3,
                    // The secret generated when you ran: php artisan passport:install
                    'client_secret' => '2utTvgPepnbOSo2P3lXiQgKprCJioXc3EPyw2i8U',
                    'grant_type' => 'password',
                    'username' => 'admin@example.com',
                    'password' => 'secret',
                    'scope' => '*',
                ]
            ]);

            // You'd typically save this payload in the session
            $auth = json_decode( (string) $response->getBody() );

            $response = $client->get('http://smanual/api/msc', [
                'headers' => [
                    'Authorization' => 'Bearer '.$auth->access_token,
                ]
            ]);

            $todos = json_decode( (string) $response->getBody() );
            dd($todos);
            $todoList = "";
            foreach ($todos as $todo) {
                dd($todo);
                $todoList .= "<li>{$todo->origin}".($todo->destination ? '✅' : '')."</li>";
            }

            echo "<ul>{$todoList}</ul>";

        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            echo "Unable to retrieve access token.";
        }
    }

}
