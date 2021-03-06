# iBooking\Client\MembersApi

All URIs are relative to *http://funxtion.testing.ibooking.no/webapp/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMembers**](MembersApi.md#getmembers) | **GET** /Chain/members | This method will list all the members in the same chain as the current company.
[**getUserInfo**](MembersApi.md#getuserinfo) | **GET** /User/getUserInfo | This method will upon success return user info
[**userGetBookingsGet**](MembersApi.md#usergetbookingsget) | **GET** /User/getBookings | This method returns a list of the bookings for a user. Sorted descending by class.from.

# **getMembers**
> \iBooking\Client\Model\MembersResponse getMembers()

This method will list all the members in the same chain as the current company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMembers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\iBooking\Client\Model\MembersResponse**](../Model/MembersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserInfo**
> \iBooking\Client\Model\UserInfoResponse getUserInfo($user_id, $username)

This method will upon success return user info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Either userId of username
$username = "username_example"; // string | Either userId of username

try {
    $result = $apiInstance->getUserInfo($user_id, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Either userId of username | [optional]
 **username** | **string**| Either userId of username | [optional]

### Return type

[**\iBooking\Client\Model\UserInfoResponse**](../Model/UserInfoResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGetBookingsGet**
> \iBooking\Client\Model\GetUserBookingsResponse userGetBookingsGet($token, $limit, $sort)

This method returns a list of the bookings for a user. Sorted descending by class.from.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iBooking\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new iBooking\Client\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | The user's token
$limit = 56; // int | How many bookings to return. Default: 60
$sort = "sort_example"; // string | Default: desc

try {
    $result = $apiInstance->userGetBookingsGet($token, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->userGetBookingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The user&#x27;s token |
 **limit** | **int**| How many bookings to return. Default: 60 | [optional]
 **sort** | **string**| Default: desc | [optional]

### Return type

[**\iBooking\Client\Model\GetUserBookingsResponse**](../Model/GetUserBookingsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

