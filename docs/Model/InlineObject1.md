# # InlineObject1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | the GW orderId is always a 10 digit number |
**customer_order** | [**\Towa\GebruederWeissSDK\Model\Reference**](Reference.md) |  |
**timestamp** | **\DateTime** | date / time in format yyyy-mm-ddThh:mm:ss.mmm±hh:mm following the RFC 3339 standard, see https://tools.ietf.org/html/rfc3339 |
**transport_product** | [**\Towa\GebruederWeissSDK\Model\Product**](Product.md) |  | [optional]
**tracking_url** | **string** | tracking link for this fulfilment, if transport is booked (no self-pickup) | [optional]
**status** | [**\Towa\GebruederWeissSDK\Model\EventCallback**](EventCallback.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
