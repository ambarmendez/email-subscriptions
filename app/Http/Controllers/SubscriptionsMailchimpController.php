<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SubscriptionsMailchimpController extends Controller
{
    public function store(){
		$userData = '{"members": [{
			"email_address": "testing01@example.com", 
			"status_if_new": "subscribed"}], 
		"update_existing": true}';
		 
        $curl_options = array
        (
        	CURLOPT_USERPWD => 'user:' . config('services.mailchimp.secret'),
        	CURLOPT_VERBOSE => true,
        	CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
        	CURLOPT_POSTFIELDS => $userData//'{"members": [{"email_address": "probando@testing.com", "status_if_new": "subscribed"}], "update_existing": true}'
        );

        $client = new Client();
        $response =  $client->request('POST', config('services.mailchimp.domain') . config('services.mailchimp.list_id'), [
            'curl' => $curl_options
        ]);

        dd($response);
    }
}
