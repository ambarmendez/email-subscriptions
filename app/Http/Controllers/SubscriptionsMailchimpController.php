<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SubscriptionsMailchimpController extends Controller
{
    public function store(){
		$userData = '{"members": [{
			"email_address": "testing@example.com", 
			"status_if_new": "subscribed"}], 
		"update_existing": true}';
		 
        $curl_options = array
        (
        	CURLOPT_USERPWD => 'ambarmendez:8123ffd6223cd6a06024869671ba71e2-us13',
        	CURLOPT_VERBOSE => true,
        	CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
        	CURLOPT_POSTFIELDS => $userData//'{"members": [{"email_address": "probando@testing.com", "status_if_new": "subscribed"}], "update_existing": true}'
        );

        $client = new Client();
        $response =  $client->request('POST', 'https://us13.api.mailchimp.com/3.0/lists/cd9637fc6d', [
            'curl' => $curl_options
        ]);

        dd($response);
    }
}