Laravel Duffel API Package
==========================

A Laravel-ready package to integrate Duffel's Flights, Seat Maps, Airlines, Airports, Aircraft, and Cities APIs with clean service-based methods.

🚀 Installation
---------------

### 1\. Install via Composer

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   composer require misujon/laravel-duffel   `

### 2\. Publish Configuration

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   php artisan vendor:publish --provider="Misujon\\LaravelDuffel\\LaravelDuffelServiceProvider" --tag="config"   `

### 3\. Set Environment Variables

In your Laravel app's .env file:

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   DUFFEL_API_KEY=your_duffel_access_token_here  DUFFEL_API_URL=https://api.duffel.com/  DUFFEL_API_VERSION=v2   `

### 4\. (Optional) Add Facade Aliases

In config/app.php under aliases:

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   'Duffel' => Misujon\LaravelDuffel\Facades\Duffel::class,   `

✈️ FlightService Methods
------------------------

### 1\. searchFlights(array $searchData)

**Description:** Search available flights.

**Parameters Example:**

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   [      'slices' => [          ['origin' => 'DXB', 'destination' => 'LHR', 'departure_date' => '2025-07-15'],      ],      'passengers' => [          ['type' => 'adult'],          ['type' => 'child', 'age' => 8],      ],      'cabin_class' => 'economy',  ]   `

**Usage:**

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   $response = Duffel::searchFlights($searchData);   `

### 2\. getFlightOffer(string $offerId)

**Description:** Fetch a specific flight offer.

**Usage:**

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   $response = Duffel::getFlightOffer('off_0000AtXxW8gsgU0dRswvHG');   `

### 3\. fetchSeatMaps(string $offerId)

**Description:** Fetch seat maps for a flight offer.

**Usage:**

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   $response = Duffel::fetchSeatMaps('off_0000AtXxW8gsgU0dRswvHG');   `

**Returns \`\` if no seat maps found.**

🌍 ResourceService Methods
--------------------------

### 1\. getAirlines()

Fetch list of airlines.

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   $response = Duffel::getAirlines();   `

### 2\. getSingleAirline(string $airlineId)

Fetch a specific airline by ID.

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   $response = Duffel::getSingleAirline('arl_0000A3BCD');   `

### 3\. getAircrafts()

Fetch list of aircrafts.

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   $response = Duffel::getAircrafts();   `

### 4\. getSingleAircraft(string $aircraftId)

Fetch a specific aircraft.

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   $response = Duffel::getSingleAircraft('arc_0000Abc123');   `

### 5\. getAirports()

Fetch list of airports.

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   $response = Duffel::getAirports();   `

### 6\. getSingleAirport(string $airportId)

Fetch a specific airport.

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   $response = Duffel::getSingleAirport('apt_0000AbcXYZ');   `

### 7\. getCities()

Fetch list of cities.

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   $response = Duffel::getCities();   `

### 8\. getSingleCity(string $cityId)

Fetch a specific city.

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   $response = Duffel::getSingleCity('cit_0000Abcd987');   `

👉 Example Usage
----------------

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   use Duffel;  class FlightController extends Controller  {      public function search()      {          $searchData = [...];          return Duffel::searchFlights($searchData);      }      public function airline($id)      {          return Duffel::getSingleAirline($id);      }  }   `

📜 License
----------

This package is open-sourced software licensed under the [MIT license](https://chatgpt.com/c/LICENSE).

💬 Contributing
---------------

Pull requests, issues, and feature suggestions are welcome! Let's build together!

💬 Support Me
---------------
Hi there! 👋 I'm a passionate Full Stack Web Developer with over 5 years of experience crafting powerful, efficient, and creative web solutions.
From building robust APIs with PHP/Laravel and Python/Django, to designing dynamic frontend applications with React, Vue, and Next.js, I thrive on solving complex problems and delivering top-quality results.

I specialize in data scraping, API integrations, responsive UI/UX, and full-cycle project management using Agile methodologies.
Every project I work on is built with care, innovation, and a strong commitment to excellence.

If you enjoy my work, find it useful, or simply want to support an independent developer on their journey — feel free to buy me a coffee!
Your support truly means a lot and helps me keep doing what I love every day. 🚀

Thank you for being awesome! 🙌
<script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="misujon" data-color="#FFDD00" data-emoji="☕"  data-font="Cookie" data-text="Buy me a coffee" data-outline-color="#000000" data-font-color="#000000" data-coffee-color="#ffffff" ></script>