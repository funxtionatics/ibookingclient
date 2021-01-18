# LoginRequestParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username** | **string** | The username of the user logging in. | 
**password** | **string** | The password of the user logging in. | 
**lang** | **string** | Language code in ISO 3166-1 alpha-2 format. | [optional] [default to 'NO']
**ttl** | **string** | Token Time To Live in seconds. | [optional] [default to '3600']
**access_token** | **string** | Access token for server-to-server requests. | [optional] 
**spc** | **bool** | If true, the password field will be optional. Requires valid accessToken. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

