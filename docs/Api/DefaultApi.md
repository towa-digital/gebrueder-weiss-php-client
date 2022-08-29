# Towa\GebruederWeissSDK\DefaultApi

All URIs are relative to https://my.api.gw-world.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLogisticsOrderByOrderId()**](DefaultApi.md#getLogisticsOrderByOrderId) | **GET** /logistics-order/{orderId}/ | by identifying your logistics-order using the orderId in the path, you get the data of the logistics-order
[**getStatusByOrderId()**](DefaultApi.md#getStatusByOrderId) | **GET** /logistics-order/{orderId}/current-status | by identifying your logistics-order using the orderId in the path, you get the current status of the logistics-order
[**logisticsOrderPost()**](DefaultApi.md#logisticsOrderPost) | **POST** /logistics-order | create a logisticsOrder


## `getLogisticsOrderByOrderId()`

```php
getLogisticsOrderByOrderId($order_id, $accept_language): \Towa\GebruederWeissSDK\Model\LogisticsOrder
```

by identifying your logistics-order using the orderId in the path, you get the data of the logistics-order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: default
$config = Towa\GebruederWeissSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: default
$config = Towa\GebruederWeissSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Towa\GebruederWeissSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$accept_language = 'accept_language_example'; // string | set the response language, default is en-US - defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47

try {
    $result = $apiInstance->getLogisticsOrderByOrderId($order_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLogisticsOrderByOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |
 **accept_language** | **string**| set the response language, default is en-US - defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47 | [optional]

### Return type

[**\Towa\GebruederWeissSDK\Model\LogisticsOrder**](../Model/LogisticsOrder.md)

### Authorization

[default](../../README.md#default), [default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatusByOrderId()`

```php
getStatusByOrderId($order_id, $calculate_eta, $accept_language): \Towa\GebruederWeissSDK\Model\OrderCurrentStatus
```

by identifying your logistics-order using the orderId in the path, you get the current status of the logistics-order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: default
$config = Towa\GebruederWeissSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: default
$config = Towa\GebruederWeissSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Towa\GebruederWeissSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$calculate_eta = false; // bool | includes the calculation of an ETA if it is a logistics order
$accept_language = 'accept_language_example'; // string | set the response language, default is en-US - defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47

try {
    $result = $apiInstance->getStatusByOrderId($order_id, $calculate_eta, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStatusByOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |
 **calculate_eta** | **bool**| includes the calculation of an ETA if it is a logistics order | [optional] [default to false]
 **accept_language** | **string**| set the response language, default is en-US - defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47 | [optional]

### Return type

[**\Towa\GebruederWeissSDK\Model\OrderCurrentStatus**](../Model/OrderCurrentStatus.md)

### Authorization

[default](../../README.md#default), [default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logisticsOrderPost()`

```php
logisticsOrderPost($accept_language, $inline_object): object
```

create a logisticsOrder

posts an logisticsOrder structure to GW to create a new logisticsOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: default
$config = Towa\GebruederWeissSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: default
$config = Towa\GebruederWeissSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Towa\GebruederWeissSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = 'accept_language_example'; // string | set the response language, default is en-US - defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47
$inline_object = new \Towa\GebruederWeissSDK\Model\InlineObject(); // \Towa\GebruederWeissSDK\Model\InlineObject

try {
    $result = $apiInstance->logisticsOrderPost($accept_language, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->logisticsOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| set the response language, default is en-US - defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47 | [optional]
 **inline_object** | [**\Towa\GebruederWeissSDK\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

**object**

### Authorization

[default](../../README.md#default), [default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
