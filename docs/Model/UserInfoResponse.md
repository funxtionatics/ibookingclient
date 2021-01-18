# UserInfoResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**firstname** | **string** |  | [optional] 
**lastname** | **string** |  | [optional] 
**expires** | **string** | Membership expires at this time. Format: YYYY-MM-DD HH:MM:SS. | [optional] 
**active_block** | **bool** | If true, the member can&#x27;t book online. | [optional] 
**email** | **string** |  | [optional] 
**phone** | **string** |  | [optional] 
**username** | **string** |  | [optional] 
**cardnumber** | **string** |  | [optional] 
**customer_number** | **int** |  | [optional] 
**studio** | **int** | Studio ID | [optional] 
**contract** | [**\Swagger\Client\model\Contract**](Contract.md) |  | [optional] 
**noshow_count** | **int** | Current active noshow count | [optional] 
**avtalegiro_status** | **string** | {new,not-applicable,signed,revoked,unkown}. | [optional] 
**date_of_birth** | [**\DateTime**](\DateTime.md) | Format: YYYY-MM-DD. | [optional] 
**address** | [**\Swagger\Client\model\Address**](Address.md) |  | [optional] 
**has_password** | **bool** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

