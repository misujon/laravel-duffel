# Laravel Duffel API Package

A Laravel-ready package to integrate Duffel's Flights, Seat Maps, Airlines, Airports, Aircraft, and Cities APIs with clean service-based methods.

----------

## 🚀 Installation

### 1. Install via Composer

```bash
composer require misujon/laravel-duffel
```

### 2. Publish Configuration

```bash
php artisan vendor:publish --provider="Misujon\\LaravelDuffel\\LaravelDuffelServiceProvider" --tag="config"
```

### 3. Set Environment Variables

In your Laravel app's `.env` file:

```env
DUFFEL_API_KEY=your_duffel_access_token_here
DUFFEL_API_URL=https://api.duffel.com/
DUFFEL_API_VERSION=v2
DUFFEL_URL_PREFIX="air"
```

### 4. (Optional) Add Facade Aliases

In `config/app.php` under aliases:

```php
'Duffel' => Misujon\LaravelDuffel\Facades\Duffel::class,
```

----------

## ✈️ FlightService Methods

### 1. searchFlights(array $searchData)

**Description:** Search available flights.

**Parameters Example:**

```php
[
    'slices' => [
        ['origin' => 'DXB', 'destination' => 'LHR', 'departure_date' => '2025-07-15'],
    ],
    'passengers' => [
        ['type' => 'adult'],
        ['type' => 'child', 'age' => 8],
    ],
    'cabin_class' => 'economy',
]
```

**Usage:**

```php
$response = Duffel::searchFlights($searchData);
```

### 2. getFlightOffer(string $offerId)

**Description:** Fetch a specific flight offer.

**Usage:**

```php
$response = Duffel::getFlightOffer('off_0000AtXxW8gsgU0dRswvHG');
```

### 3. fetchSeatMaps(string $offerId)

**Description:** Fetch seat maps for a flight offer.

**Usage:**

```php
$response = Duffel::fetchSeatMaps('off_0000AtXxW8gsgU0dRswvHG');
```

**Returns ****``**** if no seat maps found.**

----------

## 🌍 ResourceService Methods

### Class for Resource Service

Use all the methods by importing the class

```use 
Misujon\LaravelDuffel\Facades\DuffelResource;
```

### 1. getAirlines()

Fetch list of airlines.

```php
$response = DuffelResource::getAirlines();
```

### 2. getSingleAirline(string $airlineId)

Fetch a specific airline by ID.

```php
$response = DuffelResource::getSingleAirline('arl_0000A3BCD');
```

### 3. getAircrafts()

Fetch list of aircrafts.

```php
$response = DuffelResource::getAircrafts();
```

### 4. getSingleAircraft(string $aircraftId)

Fetch a specific aircraft.

```php
$response = DuffelResource::getSingleAircraft('arc_0000Abc123');
```

### 5. getAirports()

Fetch list of airports.

```php
$response = DuffelResource::getAirports();
```

### 6. getSingleAirport(string $airportId)

Fetch a specific airport.

```php
$response = DuffelResource::getSingleAirport('apt_0000AbcXYZ');
```

### 7. getCities()

Fetch list of cities.

```php
$response = DuffelResource::getCities();
```

### 8. getSingleCity(string $cityId)

Fetch a specific city.

```php
$response = DuffelResource::getSingleCity('cit_0000Abcd987');
```

----------

## 👉 Example Usage

```php
use Duffel;

class FlightController extends Controller
{
    public function search()
    {
        $searchData = [...];
        return Duffel::searchFlights($searchData);
    }

    public function airline($id)
    {
        return Duffel::getSingleAirline($id);
    }
}
```

----------

## 📜 License

This package is open-sourced software licensed under the [MIT license](https://chatgpt.com/c/LICENSE).

----------

## 💬 Contributing

Pull requests, issues, and feature suggestions are welcome! Let's build together!

# ☕ Support Me
Hi there! 👋 I'm a passionate Full Stack Web Developer with over 5 years of experience crafting powerful, efficient, and creative web solutions.  From building robust APIs with **PHP/Laravel** and **Python/Django**, to designing dynamic frontend applications with **React**, **Vue**, and **Next.js**, I thrive on solving complex problems and delivering top-quality results.

I specialize in data scraping, API integrations, responsive UI/UX, and full-cycle project management using Agile methodologies.  Every project I work on is built with care, innovation, and a strong commitment to excellence. If you enjoy my work, find it useful, or simply want to support an independent developer on their journey — feel free to **buy me a coffee!**  

Your support truly means a lot and helps me keep doing what I love every day. 🚀

**Thank you for being awesome! 🙌**

<a href="https://www.buymeacoffee.com/misujon" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" style="height: 50px !important;width: 200px !important;" ></a>