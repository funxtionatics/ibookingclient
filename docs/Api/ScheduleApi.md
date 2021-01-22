# iBooking\Client\ScheduleApi

All URIs are relative to *http://funxtion.testing.ibooking.no/webapp/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBasicInfo**](ScheduleApi.md#getbasicinfo) | **GET** /Schedule/getBasicInfo | This method returns basic information, and optionally also the output of the getStudios and getInstructors methods.
[**getScheduleStudios**](ScheduleApi.md#getschedulestudios) | **GET** /Schedule/getStudios | This method returns a full list of all studios that belongs to the parent entity.
[**scheduleAddBookingPost**](ScheduleApi.md#scheduleaddbookingpost) | **POST** /Schedule/addBooking | This method adds a booking to the provided class for the provided user (via token).
[**scheduleCancelBookingPost**](ScheduleApi.md#schedulecancelbookingpost) | **POST** /Schedule/cancelBooking | This method cancels/deletes a booking from the provided class for the provided user (via token).
[**scheduleGetClassGet**](ScheduleApi.md#schedulegetclassget) | **GET** /Schedule/getClass | Will return all information related to a group class, including descriptions and/or images of the class/instructors.
[**scheduleGetInstructorsGet**](ScheduleApi.md#schedulegetinstructorsget) | **GET** /Schedule/getInstructors | This method returns a full list of all group class instructors.
[**scheduleGetScheduleGet**](ScheduleApi.md#schedulegetscheduleget) | **GET** /Schedule/getSchedule | Will return the group class schedule. All parameters are GET parameters.

# **getBasicInfo**
> \iBooking\Client\Model\GetBasicInfoResponse getBasicInfo($include_studios, $include_instructors, $only_with_future_classes)

This method returns basic information, and optionally also the output of the getStudios and getInstructors methods.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_studios = true; // bool | If true, the output will include the output from getStudios.
$include_instructors = true; // bool | If true, the output will include the output from getInstructors.
$only_with_future_classes = true; // bool | If true, only instructors with classes today or later will be returned from getInstructors. Default value: 0

try {
    $result = $apiInstance->getBasicInfo($include_studios, $include_instructors, $only_with_future_classes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->getBasicInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_studios** | **bool**| If true, the output will include the output from getStudios. | [optional]
 **include_instructors** | **bool**| If true, the output will include the output from getInstructors. | [optional]
 **only_with_future_classes** | **bool**| If true, only instructors with classes today or later will be returned from getInstructors. Default value: 0 | [optional]

### Return type

[**\iBooking\Client\Model\GetBasicInfoResponse**](../Model/GetBasicInfoResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduleStudios**
> \iBooking\Client\Model\GetScheduleStudiosResponse getScheduleStudios()

This method returns a full list of all studios that belongs to the parent entity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getScheduleStudios();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->getScheduleStudios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\iBooking\Client\Model\GetScheduleStudiosResponse**](../Model/GetScheduleStudiosResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleAddBookingPost**
> \iBooking\Client\Model\AddScheduleBookingResponse scheduleAddBookingPost($body)

This method adds a booking to the provided class for the provided user (via token).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \iBooking\Client\Model\AddBookingPayload(); // \iBooking\Client\Model\AddBookingPayload | AddBookingRequestParameters object

try {
    $result = $apiInstance->scheduleAddBookingPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleAddBookingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\iBooking\Client\Model\AddBookingPayload**](../Model/AddBookingPayload.md)| AddBookingRequestParameters object |

### Return type

[**\iBooking\Client\Model\AddScheduleBookingResponse**](../Model/AddScheduleBookingResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleCancelBookingPost**
> \iBooking\Client\Model\CancelScheduleBookingResponse scheduleCancelBookingPost($body)

This method cancels/deletes a booking from the provided class for the provided user (via token).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \iBooking\Client\Model\CancelScheduleBookingPayload(); // \iBooking\Client\Model\CancelScheduleBookingPayload | 

try {
    $result = $apiInstance->scheduleCancelBookingPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleCancelBookingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\iBooking\Client\Model\CancelScheduleBookingPayload**](../Model/CancelScheduleBookingPayload.md)|  | [optional]

### Return type

[**\iBooking\Client\Model\CancelScheduleBookingResponse**](../Model/CancelScheduleBookingResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleGetClassGet**
> \iBooking\Client\Model\GetGroupClassesResponse scheduleGetClassGet($id, $lang, $token)

Will return all information related to a group class, including descriptions and/or images of the class/instructors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The unique ID for the class to get information about.
$lang = "lang_example"; // string | Language code in ISO 3166-1 alpha-2 format. Default value: NO
$token = "token_example"; // string | A user authorization token.

try {
    $result = $apiInstance->scheduleGetClassGet($id, $lang, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleGetClassGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique ID for the class to get information about. |
 **lang** | **string**| Language code in ISO 3166-1 alpha-2 format. Default value: NO | [optional]
 **token** | **string**| A user authorization token. | [optional]

### Return type

[**\iBooking\Client\Model\GetGroupClassesResponse**](../Model/GetGroupClassesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleGetInstructorsGet**
> \iBooking\Client\Model\GetScheduleInstructorsResponse scheduleGetInstructorsGet($only_with_future_classes)

This method returns a full list of all group class instructors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$only_with_future_classes = true; // bool | Only list instructors with classes today or in the future. Default value: 0

try {
    $result = $apiInstance->scheduleGetInstructorsGet($only_with_future_classes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleGetInstructorsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **only_with_future_classes** | **bool**| Only list instructors with classes today or in the future. Default value: 0 | [optional]

### Return type

[**\iBooking\Client\Model\GetScheduleInstructorsResponse**](../Model/GetScheduleInstructorsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleGetScheduleGet**
> \iBooking\Client\Model\GetScheduleScheduleResponse scheduleGetScheduleGet($studios, $categories, $instructors, $from, $lang, $token)

Will return the group class schedule. All parameters are GET parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$studios = "studios_example"; // string | Comma separated list of studio IDs to include. All studios are returned by default.
$categories = "categories_example"; // string | Comma separated list of category IDs to include. All categories are returned by default.
$instructors = "instructors_example"; // string | Comma separated list of instructor IDs to include. All instructors are returned by default.
$from = new \DateTime("2013-10-20"); // \DateTime | Inclusive from date in format YYYY-MM-DD. If blank, today is used as from date.
$lang = "lang_example"; // string | Language code in ISO 3166-1 alpha-2 format. Default value: NO
$token = "token_example"; // string | 

try {
    $result = $apiInstance->scheduleGetScheduleGet($studios, $categories, $instructors, $from, $lang, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->scheduleGetScheduleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **studios** | **string**| Comma separated list of studio IDs to include. All studios are returned by default. | [optional]
 **categories** | **string**| Comma separated list of category IDs to include. All categories are returned by default. | [optional]
 **instructors** | **string**| Comma separated list of instructor IDs to include. All instructors are returned by default. | [optional]
 **from** | **\DateTime**| Inclusive from date in format YYYY-MM-DD. If blank, today is used as from date. | [optional]
 **lang** | **string**| Language code in ISO 3166-1 alpha-2 format. Default value: NO | [optional]
 **token** | **string**|  | [optional]

### Return type

[**\iBooking\Client\Model\GetScheduleScheduleResponse**](../Model/GetScheduleScheduleResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

