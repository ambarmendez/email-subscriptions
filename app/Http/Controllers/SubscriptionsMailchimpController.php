<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SubscriptionsMailchimpController extends Controller
{
    public function store(){
		$data = [
            'members' => [
                [
                    'email_address' => request('inputEmail'), 
                    'status_if_new' => 'subscribed'
                ]
            ], 
            'update_existing' => true
        ];

        $userData = json_encode($data); 
		 
        $curl_options = array
        (
        	CURLOPT_USERPWD => 'user:' . config('services.mailchimp.secret'),
        	CURLOPT_VERBOSE => true,
        	CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
        	CURLOPT_POSTFIELDS => $userData
        );

        $client = new Client();
        $response =  $client->request('POST', config('services.mailchimp.domain') . config('services.mailchimp.list_id'), [
            'curl' => $curl_options
        ]);

        dd(json_decode(strval($response->getBody())));
    }
}
