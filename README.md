# SwaggerClient-php
iBooking components

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\iBookingApi\GymApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGyms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GymApi->getGyms: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *http://funxtion.testing.ibooking.no/webapp/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GymApi* | [**getGyms**](docs/Api/GymApi.md#getgyms) | **GET** /Chain/gyms | Get gyms
*LoginApi* | [**login**](docs/Api/LoginApi.md#login) | **POST** /User/login | This method will upon success return a token that must be used for further communication with the API.
*LoginApi* | [**logout**](docs/Api/LoginApi.md#logout) | **POST** /User/logout | Invalidates the token provided, and resets any auth session used for other iBooking services.
*MembersApi* | [**getMembers**](docs/Api/MembersApi.md#getmembers) | **GET** /Chain/members | This method will list all the members in the same chain as the current company.
*MembersApi* | [**getUserInfo**](docs/Api/MembersApi.md#getuserinfo) | **GET** /User/getUserInfo | This method will upon success return user info

## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Body](docs/Model/Body.md)
 - [CommunicationChannels](docs/Model/CommunicationChannels.md)
 - [Contract](docs/Model/Contract.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [GetGymsResponse](docs/Model/GetGymsResponse.md)
 - [GetMembersResponse](docs/Model/GetMembersResponse.md)
 - [Gym](docs/Model/Gym.md)
 - [LoginRequestParameters](docs/Model/LoginRequestParameters.md)
 - [LoginResponse](docs/Model/LoginResponse.md)
 - [Member](docs/Model/Member.md)
 - [UserInfoResponse](docs/Model/UserInfoResponse.md)

## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-Access-Token
- **Location**: HTTP header


## Author



