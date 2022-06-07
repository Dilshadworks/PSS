<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use MailchimpTransactional;

class MailChimp extends Controller
{
    public function store(Request $request)
    {


        $list_id = env('MAILCHIMP_LIST_ID');
        $subscriber_hash = md5(strtolower($request->EMAIL));
        $client = new \MailchimpMarketing\ApiClient();

        $client->setConfig([
                'apiKey' => env('MAILCHIMP_APIKEY'),
                'server' => 'us20',
            ]);

        $api = Newsletter::getApi();

        if ( ! Newsletter::isSubscribed($request->EMAIL) ) {
            $newUserVars = [
                'EMAIL'     => $request->EMAIL,
                'COMPNAME'  => $request->COMPNAME,
                'FNAME'     => $request->FNAME,
                'LNAME'     => $request->LNAME,
                'PHONE'     => $request->PHONE,
                'DEVICE'    => $request->DEVICE,
                'SALESTAT'  => 'Open-Not Contacted',
                'CLIENTCNT' => $request->CLIENTCNT,
                'UTCOFFSET' => $request->UTCOFFSET,
                'SOURCE' => $request->SOURCE,
                'WEBSITE_GET_DEMO' => 1,
                'LICENSE'      =>'Free'
                
            ];
            Newsletter::subscribe($request->EMAIL, $newUserVars);

            $response = $client->lists->updateListMemberTags($list_id, $subscriber_hash, [
                "tags" => [["name" => "WEBSITE_GET_DEMO", "status" => "active"]],
            ]);
            dd($response);
        }
        else{


            $response = $client->lists->updateListMemberTags($list_id, $subscriber_hash, [
                "tags" => [["name" => "WEBSITE_GET_DEMO", "status" => "inactive"]],
            ]);

            $response = $client->lists->updateListMemberTags($list_id, $subscriber_hash, [
                "tags" => [["name" => "WEBSITE_GET_DEMO", "status" => "active"]],
            ]);
            dd($response);
            echo 'subscribe to mailchimp';
        }

    }
}
