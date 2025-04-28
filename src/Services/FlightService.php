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
        $this->baseUrl = config('duffel.api_url');
        $this->token = config('duffel.access_token');
        $this->version = config('duffel.version');
        $this->prefix = config('duffel.url_prefix');
    }

    public function searchFlights(array $searchData)
    {
        try {
            $response = Http::withToken($this->token)
                ->acceptJson()
                ->post($this->baseUrl."/".$this->prefix.'/offers', $searchData);

            $response->throw(); // Will automatically throw exceptions for 4xx and 5xx

            Log::info('Duffel Flight Search Success', ['response' => $response->json()]);

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