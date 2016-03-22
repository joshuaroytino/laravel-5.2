<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use LucaDegasperi\OAuth2Server\Authorizer;

class OAuthController extends Controller
{
    /**
     * @return mixed
     */
    public function getOAuthToken()
    {
        return \Response::json(Authorizer::issueAccessToken());
    }
}
