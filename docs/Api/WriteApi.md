# Towa\GebruederWeissSDK\WriteApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**logisticsOrderPost()**](WriteApi.md#logisticsOrderPost) | **POST** /logistics-order | create a logistics order


## `logisticsOrderPost()`

```php
logisticsOrderPost($logistics_order): string
```

create a logistics order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Towa\GebruederWeissSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Towa\GebruederWeissSDK\Api\WriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logistics_order = new \Towa\GebruederWeissSDK\Model\LogisticsOrder(); // \Towa\GebruederWeissSDK\Model\LogisticsOrder | logistics order

try {
    $result = $apiInstance->logisticsOrderPost($logistics_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WriteApi->logisticsOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logistics_order** | [**\Towa\GebruederWeissSDK\Model\LogisticsOrder**](../Model/LogisticsOrder.md)| logistics order |

### Return type

**string**

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
