# LogisticsOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | [**\Swagger\Client\Model\Url**](Url.md) |  | [optional] 
**warehouse_location** | [**\Swagger\Client\Model\WarehouseLocation**](WarehouseLocation.md) |  | [optional] 
**order_id** | [**\Swagger\Client\Model\GWOrderId**](GWOrderId.md) |  | [optional] 
**creation_date_time** | [**\Swagger\Client\Model\\DateTime**](\DateTime.md) |  | [optional] 
**owner_id** | [**\Swagger\Client\Model\GWCustomerId**](GWCustomerId.md) |  | [optional] 
**references** | [**\Swagger\Client\Model\OrderReference[]**](OrderReference.md) | array of references for this order | [optional] 
**logistics_addresses** | [**\Swagger\Client\Model\LogisticsAddress[]**](LogisticsAddress.md) | involved addresses for this transport | [optional] 
**logistics_requirements** | [**AllOfLogisticsOrderLogisticsRequirements**](AllOfLogisticsOrderLogisticsRequirements.md) | object containing all requirments for the logistic planning and execution | [optional] 
**incoterm** | [**\Swagger\Client\Model\Incoterm**](Incoterm.md) |  | [optional] 
**amounts** | [**\Swagger\Client\Model\Amount[]**](Amount.md) |  | [optional] 
**measurements** | [**\Swagger\Client\Model\Measurement[]**](Measurement.md) |  | [optional] 
**order_lines** | [**\Swagger\Client\Model\OrderLine[]**](OrderLine.md) | identified items to be transported | [optional] 
**goods_item** | [**\Swagger\Client\Model\GoodsItem**](GoodsItem.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

