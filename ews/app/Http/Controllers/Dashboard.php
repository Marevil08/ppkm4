<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Dashboard extends Controller
{
    public function index()
    {
        $title = "Dashboard Admin";


        $sensorData = [Dashboard::getSensor()];
        // $ultrasonicHistory = [Dashboard::getHistoryUltrasonic()];
        // $flowmeterHistory = [Dashboard::getHistoryFlowmeter()];

        // dd($ultrasonicHistory);

        return view('admin.dashboard', [
            'title' => $title,
            'sensorData' => $sensorData,
            // 'ultrasonicHistory' => $ultrasonicHistory,
            // 'flowmeterHistory' => $flowmeterHistory
        ]);
    }


    public function getSensor()
    {
        $url = "https://blynk.cloud/external/api/getAll";

        $response = Http::get($url, [
            "token" => "xJ_50RKyBPCHWcWVmkNOPPApEVWVKQ0e"
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return ($responseBody);
    }

    public function getHistoryAcceleration()
    {
        $url = "https://blynk.cloud/external/api/data/get";

        $response = Http::get($url, [
            "token" => "xJ_50RKyBPCHWcWVmkNOPPApEVWVKQ0e",
            "period" => "DAY",
            "granularityType" => "MINUTE",
            "sourceType" => "MAX",
            "tzName" => "Asia/Tokyo",
            "format" => "ISO_SIMPLE",
            "output" => "JSON",
            "dataStreamId" => "1"
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return ($responseBody);
    }

    public function getHistoryRotation()
    {
        $url = "https://blynk.cloud/external/api/data/get";

        $response = Http::get($url, [
            "token" => "xJ_50RKyBPCHWcWVmkNOPPApEVWVKQ0e",
            "period" => "DAY",
            "granularityType" => "MINUTE",
            "sourceType" => "MAX",
            "tzName" => "Asia/Tokyo",
            "format" => "ISO_SIMPLE",
            "output" => "JSON",
            "dataStreamId" => "2"
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return ($responseBody);
    }
    public function getHistoryTemperature()
    {
        $url = "https://blynk.cloud/external/api/data/get";

        $response = Http::get($url, [
            "token" => "xJ_50RKyBPCHWcWVmkNOPPApEVWVKQ0e",
            "period" => "DAY",
            "granularityType" => "MINUTE",
            "sourceType" => "MAX",
            "tzName" => "Asia/Tokyo",
            "format" => "ISO_SIMPLE",
            "output" => "JSON",
            "dataStreamId" => "1"
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return ($responseBody);
    }

    public function getHistoryHumidity()
    {
        $url = "https://blynk.cloud/external/api/data/get";

        $response = Http::get($url, [
            "token" => "xJ_50RKyBPCHWcWVmkNOPPApEVWVKQ0e",
            "period" => "DAY",
            "granularityType" => "MINUTE",
            "sourceType" => "MAX",
            "tzName" => "Asia/Tokyo",
            "format" => "ISO_SIMPLE",
            "output" => "JSON",
            "dataStreamId" => "2"
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return ($responseBody);
    }

}