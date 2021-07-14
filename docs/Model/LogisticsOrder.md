# # LogisticsOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | URL for status response | [optional]
**warehouse_location** | **string** | location of the Warehouse | [optional]
**order_id** | **string** | the GW orderId is always a 10 digit number | [optional]
**creation_date_time** | [**\DateTime**](\DateTime.md) | date / time in format yyyy-mm-ddThh:mm:ss.mmm±hh:mm following the RFC 3339 standard, see https://tools.ietf.org/html/rfc3339 | [optional]
**owner_id** | **int** | customer account numnber of GW | [optional]
**references** | [**\Towa\GebruederWeissSDK\Model\OrderReference[]**](OrderReference.md) | array of references for this order | [optional]
**logistics_addresses** | [**\Towa\GebruederWeissSDK\Model\LogisticsAddress[]**](LogisticsAddress.md) | involved addresses for this transport | [optional]
**logistics_requirements** | [**LogisticsRequirements**](LogisticsRequirements.md) | object containing all requirments for the logistic planning and execution | [optional]
**incoterm** | [**\Towa\GebruederWeissSDK\Model\Incoterm**](Incoterm.md) |  | [optional]
**amounts** | [**\Towa\GebruederWeissSDK\Model\Amount[]**](Amount.md) |  | [optional]
**measurements** | [**\Towa\GebruederWeissSDK\Model\Measurement[]**](Measurement.md) |  | [optional]
**order_lines** | [**\Towa\GebruederWeissSDK\Model\OrderLine[]**](OrderLine.md) | identified items to be transported | [optional]
**goods_item** | [**\Towa\GebruederWeissSDK\Model\GoodsItem**](GoodsItem.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
