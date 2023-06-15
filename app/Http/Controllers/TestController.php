<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TestController extends Controller
{
    public function getToken()
    {
        $client = new Client();

        $response = $client->request('POST', 'https://zoom.us/oauth/token', [
            'form_params' => [
                'grant_type' => 'account_credentials',
                'account_id' => '8FnuhCgPSumbtIUkJgKfzA',
            ],
            'headers' => [
                'Host' => 'zoom.us',
                'Authorization' => 'Basic MGNLV05zZnBSZFNNNjNXN3BzZExzdzpZMlJkNXl6V2NMdmcxbWRRUVE0cGxPNFkzVlF6VGNIUg==',
            ],
        ]);

        $body = $response->getBody();
        $contents = $body->getContents();
        return json_decode($contents);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'OK';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
