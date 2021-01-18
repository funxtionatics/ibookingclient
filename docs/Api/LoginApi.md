# iBooking\Client\LoginApi

All URIs are relative to *http://funxtion.testing.ibooking.no/webapp/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**login**](LoginApi.md#login) | **POST** /User/login | This method will upon success return a token that must be used for further communication with the API.
[**logout**](LoginApi.md#logout) | **POST** /User/logout | Invalidates the token provided, and resets any auth session used for other iBooking services.

# **login**
> \iBooking\Client\model\LoginResponse login($body)

This method will upon success return a token that must be used for further communication with the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new iBooking\Client\iBookingApi\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \iBooking\Client\model\LoginRequestParameters(); // \iBooking\Client\model\LoginRequestParameters | LoginRequestParameters object

try {
    $result = $apiInstance->login($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\iBooking\Client\model\LoginRequestParameters**](../Model/LoginRequestParameters.md)| LoginRequestParameters object |

### Return type

[**\iBooking\Client\model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logout**
> logout($body)

Invalidates the token provided, and resets any auth session used for other iBooking services.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\iBookingApi\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \iBooking\Client\model\Body(); // \iBooking\Client\model\Body | Token to invalidate

try {
    $apiInstance->logout($body);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->logout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\iBooking\Client\model\Body**](../Model/Body.md)| Token to invalidate | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

