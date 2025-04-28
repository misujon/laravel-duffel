<?php

namespace Misujon\LaravelDuffel\Services;

use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Support\Facades\Log;

class ResourceService
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

    /**
     * Fetches a list of airlines from Duffel.
     *
     * @return array
     */
    public function getAirlines(): array
    {
        try {
            $url = $this->baseUrl."/".$this->prefix."/airlines";

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Duffel-Version' => $this->version,
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($url);

            $response->throw();
            return $response->json();
        } catch (Exception $e) {
            Log::error('Duffel Airlines Fetch Error', [
                'message' => $e->getMessage(),
            ]);

            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    /**
     * Fetches a specific airline details by ID from Duffel.
     *
     * @param string $airlineId
     * @return array
     */
    public function getSingleAirline(string $airlineId): array
    {
        try {
            $url = $this->baseUrl."/".$this->prefix."/airlines/{$airlineId}";

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Duffel-Version' => $this->version,
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($url);

            $response->throw();
            return $response->json();
        } catch (Exception $e) {
            Log::error('Duffel Single Airline Fetch Error', [
                'message' => $e->getMessage(),
                'airline_id' => $airlineId,
            ]);

            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    /**
     * Fetches a list of aircrafts from Duffel.
     *
     * @return array
     */
    public function getAircrafts(): array
    {
        try {
            $url = $this->baseUrl."/".$this->prefix."/aircraft";

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Duffel-Version' => $this->version,
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($url);

            $response->throw();
            return $response->json();
        } catch (Exception $e) {
            Log::error('Duffel Aircrafts Fetch Error', [
                'message' => $e->getMessage(),
            ]);

            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    /**
     * Fetches a specific aircraft details by ID from Duffel.
     *
     * @param string $aircraftId
     * @return array
     */
    public function getSingleAircraft(string $aircraftId): array
    {
        try {
            $url = $this->baseUrl."/".$this->prefix."/aircraft/{$aircraftId}";

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Duffel-Version' => $this->version,
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($url);

            $response->throw();
            return $response->json();
        } catch (Exception $e) {
            Log::error('Duffel Single Aircraft Fetch Error', [
                'message' => $e->getMessage(),
                'aircraft_id' => $aircraftId,
            ]);

            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    /**
     * Fetches a list of airports from Duffel.
     *
     * @return array
     */
    public function getAirports(): array
    {
        try {
            $url = $this->baseUrl."/".$this->prefix."/airports";

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Duffel-Version' => $this->version,
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($url);

            $response->throw();
            return $response->json();
        } catch (Exception $e) {
            Log::error('Duffel Airports Fetch Error', [
                'message' => $e->getMessage(),
            ]);

            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    /**
     * Fetches a specific airport details by ID from Duffel.
     *
     * @param string $airportId
     * @return array
     */
    public function getSingleAirport(string $airportId): array
    {
        try {
            $url = $this->baseUrl."/".$this->prefix."/airports/{$airportId}";

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Duffel-Version' => $this->version,
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($url);

            $response->throw();
            return $response->json();
        } catch (Exception $e) {
            Log::error('Duffel Single Airport Fetch Error', [
                'message' => $e->getMessage(),
                'airport_id' => $airportId,
            ]);

            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    /**
     * Fetches a list of cities from Duffel.
     *
     * @return array
     */
    public function getCities(): array
    {
        try {
            $url = $this->baseUrl."/".$this->prefix."/cities";

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Duffel-Version' => $this->version,
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($url);

            $response->throw();
            return $response->json();
        } catch (Exception $e) {
            Log::error('Duffel Cities Fetch Error', [
                'message' => $e->getMessage(),
            ]);

            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    /**
     * Fetches a specific city details by ID from Duffel.
     *
     * @param string $cityId
     * @return array
     */
    public function getSingleCity(string $cityId): array
    {
        try {
            $url = $this->baseUrl."/".$this->prefix."/cities/{$cityId}";

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Duffel-Version' => $this->version,
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($url);

            $response->throw();
            return $response->json();
        } catch (Exception $e) {
            Log::error('Duffel Single City Fetch Error', [
                'message' => $e->getMessage(),
                'city_id' => $cityId,
            ]);

            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

}