# Swagger\Client\ReadApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLogisticsOrderByOrderId**](ReadApi.md#getlogisticsorderbyorderid) | **GET** /logistics-order/{orderId}/ | by identifying your logistics-order using the orderId in the path, you get the data of the logistics-order
[**getStatusByOrderId**](ReadApi.md#getstatusbyorderid) | **GET** /logistics-order/{orderId}/current-status | by identifying your logistics-order using the orderId in the path, you get the current status of the logistics-order

# **getLogisticsOrderByOrderId**
> \Swagger\Client\Model\LogisticsOrder getLogisticsOrderByOrderId($order_id, $accept_language)

by identifying your logistics-order using the orderId in the path, you get the data of the logistics-order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ReadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | 
$accept_language = "en-EN"; // string | set the response language, default is en - defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47

try {
    $result = $apiInstance->getLogisticsOrderByOrderId($order_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReadApi->getLogisticsOrderByOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |
 **accept_language** | **string**| set the response language, default is en - defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47 | [optional] [default to en-EN]

### Return type

[**\Swagger\Client\Model\LogisticsOrder**](../Model/LogisticsOrder.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatusByOrderId**
> \Swagger\Client\Model\OrderCurrentStatus getStatusByOrderId($order_id, $calculate_eta, $accept_language)

by identifying your logistics-order using the orderId in the path, you get the current status of the logistics-order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ReadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | 
$calculate_eta = false; // bool | includes the calculation of an ETA if it is a logistics order
$accept_language = "en-EN"; // string | set the response language, default is en - defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47

try {
    $result = $apiInstance->getStatusByOrderId($order_id, $calculate_eta, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReadApi->getStatusByOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |
 **calculate_eta** | **bool**| includes the calculation of an ETA if it is a logistics order | [optional] [default to false]
 **accept_language** | **string**| set the response language, default is en - defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47 | [optional] [default to en-EN]

### Return type

[**\Swagger\Client\Model\OrderCurrentStatus**](../Model/OrderCurrentStatus.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

