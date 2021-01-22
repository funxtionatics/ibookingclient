# iBooking\Client\ResourceBookingApi

All URIs are relative to *http://funxtion.testing.ibooking.no/webapp/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActivities**](ResourceBookingApi.md#getactivities) | **GET** /ResourceBooking/getActivities | Get activities
[**getActivityInfo**](ResourceBookingApi.md#getactivityinfo) | **GET** /ResourceBooking/getActivityInfo | Get Activity Info
[**getClassSchedule**](ResourceBookingApi.md#getclassschedule) | **GET** /ResourceBooking/getSchedule | Returns class schedule
[**removeResourceBooking**](ResourceBookingApi.md#removeresourcebooking) | **POST** /ResourceBooking/removeBooking | Remove resource booking
[**resourceBookingAddBookingPost**](ResourceBookingApi.md#resourcebookingaddbookingpost) | **POST** /ResourceBooking/addBooking | Add resource booking.

# **getActivities**
> \iBooking\Client\Model\GetActivitiesResponse getActivities()

Get activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ResourceBookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getActivities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceBookingApi->getActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\iBooking\Client\Model\GetActivitiesResponse**](../Model/GetActivitiesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityInfo**
> \iBooking\Client\Model\GetActivityInfoResponse getActivityInfo($id)

Get Activity Info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ResourceBookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Activity ID

try {
    $result = $apiInstance->getActivityInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceBookingApi->getActivityInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Activity ID |

### Return type

[**\iBooking\Client\Model\GetActivityInfoResponse**](../Model/GetActivityInfoResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClassSchedule**
> \iBooking\Client\Model\GetResourceBookingScheduleResponse getClassSchedule($sid, $resource_ids, $from, $to, $lang)

Returns class schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ResourceBookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sid = "sid_example"; // string | studio ID
$resource_ids = "resource_ids_example"; // string | Comma separated list of resource IDs to include. All resources are returned by default.
$from = new \DateTime("2013-10-20"); // \DateTime | Inclusive from date in format YYYY-MM-DD. If blank, today is used as from date.
$to = new \DateTime("2013-10-20"); // \DateTime | Inclusive to date in format YYYY-MM-DD. If blank, defaults to one week from from-field
$lang = "NO"; // string | Language code in ISO 3166-1 alpha-2 format. Default value: NO

try {
    $result = $apiInstance->getClassSchedule($sid, $resource_ids, $from, $to, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceBookingApi->getClassSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| studio ID |
 **resource_ids** | **string**| Comma separated list of resource IDs to include. All resources are returned by default. | [optional]
 **from** | **\DateTime**| Inclusive from date in format YYYY-MM-DD. If blank, today is used as from date. | [optional]
 **to** | **\DateTime**| Inclusive to date in format YYYY-MM-DD. If blank, defaults to one week from from-field | [optional]
 **lang** | **string**| Language code in ISO 3166-1 alpha-2 format. Default value: NO | [optional] [default to NO]

### Return type

[**\iBooking\Client\Model\GetResourceBookingScheduleResponse**](../Model/GetResourceBookingScheduleResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeResourceBooking**
> \iBooking\Client\Model\Success removeResourceBooking($body)

Remove resource booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ResourceBookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \iBooking\Client\Model\RemoveResourceBookingPayload(); // \iBooking\Client\Model\RemoveResourceBookingPayload | 

try {
    $result = $apiInstance->removeResourceBooking($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceBookingApi->removeResourceBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\iBooking\Client\Model\RemoveResourceBookingPayload**](../Model/RemoveResourceBookingPayload.md)|  | [optional]

### Return type

[**\iBooking\Client\Model\Success**](../Model/Success.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourceBookingAddBookingPost**
> \iBooking\Client\Model\AddResourceBookingResponse resourceBookingAddBookingPost($body)

Add resource booking.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ResourceBookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \iBooking\Client\Model\AddBookingPayload(); // \iBooking\Client\Model\AddBookingPayload | 

try {
    $result = $apiInstance->resourceBookingAddBookingPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceBookingApi->resourceBookingAddBookingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\iBooking\Client\Model\AddBookingPayload**](../Model/AddBookingPayload.md)|  | [optional]

### Return type

[**\iBooking\Client\Model\AddResourceBookingResponse**](../Model/AddResourceBookingResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

