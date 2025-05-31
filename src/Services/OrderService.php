<?php

namespace Misujon\LaravelDuffel\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OrderService
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

    public function listOrders(): array
    {
        try 
        {
            $url = $this->baseUrl . "{$this->prefix}/orders";

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
                'Duffel-Version' => $this->version,
                'Accept' => 'application/json',
            ])->get($url);

            $response->throw();
            return $response->json();
        } 
        catch (Exception $e) 
        {
            Log::error('Duffel List Orders Error', ['message' => $e->getMessage()]);
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function createOrder(array $data): array
    {
        try 
        {
            $url = $this->baseUrl . "{$this->prefix}/orders";

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
                'Duffel-Version' => $this->version,
                'Content-Type' => 'application/json',
            ])->post($url, $data);

            $response->throw();
            return $response->json();
        } 
        catch (Exception $e) 
        {
            Log::error('Duffel Create Order Error', [
                'message' => $e->getMessage(),
                'payload' => $data,
            ]);
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function listOrderServices(string $orderId): array
    {
        try 
        {
            $url = $this->baseUrl . "{$this->prefix}/orders/{$orderId}/available_services";

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
                'Duffel-Version' => $this->version,
            ])->get($url);

            $response->throw();
            return $response->json();
        } 
        catch (Exception $e) 
        {
            Log::error('Duffel List Order Services Error', [
                'order_id' => $orderId,
                'message' => $e->getMessage(),
            ]);
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function getOrder(string $orderId): array
    {
        try 
        {
            $url = $this->baseUrl . "{$this->prefix}/orders/{$orderId}";

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
                'Duffel-Version' => $this->version,
            ])->get($url);

            $response->throw();
            return $response->json();
        } 
        catch (Exception $e) 
        {
            Log::error('Duffel Get Order Error', [
                'order_id' => $orderId,
                'message' => $e->getMessage(),
            ]);
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function updateOrder(string $orderId, array $data): array
    {
        try 
        {
            $url = $this->baseUrl . "{$this->prefix}/orders/{$orderId}";

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
                'Duffel-Version' => $this->version,
                'Content-Type' => 'application/json',
            ])->patch($url, $data);

            $response->throw();
            return $response->json();
        } 
        catch (Exception $e) 
        {
            Log::error('Duffel Update Order Error', [
                'order_id' => $orderId,
                'message' => $e->getMessage(),
                'payload' => $data,
            ]);
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function addServiceToOrder(string $orderId, array $data): array
    {
        try 
        {
            $url = $this->baseUrl . "{$this->prefix}/orders/{$orderId}/services";

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
                'Duffel-Version' => $this->version,
                'Content-Type' => 'application/json',
            ])->post($url, $data);

            $response->throw();
            return $response->json();
        } 
        catch (Exception $e) 
        {
            Log::error('Duffel Add Service to Order Error', [
                'order_id' => $orderId,
                'message' => $e->getMessage(),
                'payload' => $data,
            ]);
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

}