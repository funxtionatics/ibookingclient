# Swagger\Client\GymApi

All URIs are relative to *http://funxtion.testing.ibooking.no/webapp/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGyms**](GymApi.md#getgyms) | **GET** /Chain/gyms | Get gyms

# **getGyms**
> \Swagger\Client\model\GetGymsResponse getGyms()

Get gyms

### Example
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

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\model\GetGymsResponse**](../Model/GetGymsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

