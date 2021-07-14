# Swagger\Client\WriteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**logisticsOrderPost**](WriteApi.md#logisticsorderpost) | **POST** /logistics-order | create a logistics order

# **logisticsOrderPost**
> \Swagger\Client\Model\GWOrderId logisticsOrderPost($body)

create a logistics order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\WriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LogisticsOrder(); // \Swagger\Client\Model\LogisticsOrder | logistics order

try {
    $result = $apiInstance->logisticsOrderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WriteApi->logisticsOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LogisticsOrder**](../Model/LogisticsOrder.md)| logistics order |

### Return type

[**\Swagger\Client\Model\GWOrderId**](../Model/GWOrderId.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

