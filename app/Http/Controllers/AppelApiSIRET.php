<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppelApiSIRET extends Controller
{
    public function CallSiretApi()
    {

        $api_request = Htpp::get('https://data.siren-api.fr/v3/etablissements'. $SiretValue);
        $result_request = array();
        $result_request = $api_request;

    }
}
