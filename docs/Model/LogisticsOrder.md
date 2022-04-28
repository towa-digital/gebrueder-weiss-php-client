# # LogisticsOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | the GW orderId is always a 10 digit number | [optional]
**customer_id** | **int** | customer account number of GW | [optional]
**customer_order** | **string** | reference from the customer |
**creation_date_time** | **\DateTime** | date / time in format yyyy-mm-ddThh:mm:ss.mmm±hh:mm following the RFC 3339 standard, see https://tools.ietf.org/html/rfc3339 |
**warehouse_id** | **string** |  | [optional]
**references** | [**\Towa\GebruederWeissSDK\Model\Reference[]**](Reference.md) | array of references for this order | [optional]
**customized_information** | [**\Towa\GebruederWeissSDK\Model\CustomizedInformation[]**](CustomizedInformation.md) |  | [optional]
**logistics_addresses** | [**\Towa\GebruederWeissSDK\Model\LogisticsAddress[]**](LogisticsAddress.md) | involved addresses for this logistics order |
**logistics_requirements** | [**\Towa\GebruederWeissSDK\Model\LogisticsRequirements**](LogisticsRequirements.md) |  | [optional]
**order_lines** | [**\Towa\GebruederWeissSDK\Model\OrderLine[]**](OrderLine.md) | identified items to be handled |
**measurements** | [**\Towa\GebruederWeissSDK\Model\Measurement[]**](Measurement.md) |  | [optional]
**dimension** | [**\Towa\GebruederWeissSDK\Model\Dimension**](Dimension.md) |  | [optional]
**values** | [**\Towa\GebruederWeissSDK\Model\Value[]**](Value.md) |  | [optional]
**goods_item** | [**\Towa\GebruederWeissSDK\Model\GoodsItem[]**](GoodsItem.md) | packed goods item to be transported | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
