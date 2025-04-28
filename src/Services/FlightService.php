<?php

namespace Misujon\LaravelDuffel\Services;

use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Support\Facades\Log;

class FlightService
{
    protected $baseUrl;
    protected $token;
    protected $version;
    protected $prefix;

    public function __construct()
    {
        $this->baseUrl = config('laravel-duffel.api_url');
        $this->token = config('laravel-duffel.access_token');
        $this->version = config('laravel-duffel.version');
        $this->prefix = config('laravel-duffel.url_prefix');
    }

    public function searchFlights(array $searchData)
    {
        try {
            $url = $this->baseUrl."/".$this->prefix.'/offer_requests';
            $response = Http::withHeaders([
                    'Accept' => 'application/json',
                    'Duffel-Version' => 'v2',
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->token,
                ])
                ->post($url, $searchData);

            $response->throw();
            return $response->json();
        } catch (Exception $e) {
            Log::error('Duffel Flight Search Error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }
}