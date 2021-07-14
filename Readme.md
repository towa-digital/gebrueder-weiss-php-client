# towa/gbw-sdk

API to create and retrieve logistics orders

## Generation

execute `generate.sh` and manually merge `composer.template.json` into the generated `composer.json` to meet licensing and authorship requirements.

## Mock Server

in the plugin root folder run `docker run -ti -p 8888:8080 \
    -v $(pwd):/opt/imposter/config \
    outofcoffee/imposter-openapi`

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "git",
      "url": "git@github.com:towa-digital/gebrueder-weiss-php-client.git"
    }
  ],
  "require": {
    "towa/gbw-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/towa/gbw-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oAuth
$config = Towa\GebruederWeissSDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Towa\GebruederWeissSDK\Api\ReadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$accept_language = 'en-EN'; // string | set the response language, default is en - defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47

try {
    $result = $apiInstance->getLogisticsOrderByOrderId($order_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReadApi->getLogisticsOrderByOrderId: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ReadApi* | [**getLogisticsOrderByOrderId**](docs/Api/ReadApi.md#getlogisticsorderbyorderid) | **GET** /logistics-order/{orderId}/ | by identifying your logistics-order using the orderId in the path, you get the data of the logistics-order
*ReadApi* | [**getStatusByOrderId**](docs/Api/ReadApi.md#getstatusbyorderid) | **GET** /logistics-order/{orderId}/current-status | by identifying your logistics-order using the orderId in the path, you get the current status of the logistics-order
*WriteApi* | [**logisticsOrderPost**](docs/Api/WriteApi.md#logisticsorderpost) | **POST** /logistics-order | create a logistics order

## Models

- [AdditionalService](docs/Model/AdditionalService.md)
- [Address](docs/Model/Address.md)
- [AddressReference](docs/Model/AddressReference.md)
- [Amount](docs/Model/Amount.md)
- [Article](docs/Model/Article.md)
- [ArticleDateTime](docs/Model/ArticleDateTime.md)
- [ArticleNote](docs/Model/ArticleNote.md)
- [ArticleReference](docs/Model/ArticleReference.md)
- [Contact](docs/Model/Contact.md)
- [ErrorMessage](docs/Model/ErrorMessage.md)
- [ErrorMessageLogInfo](docs/Model/ErrorMessageLogInfo.md)
- [EtaInfo](docs/Model/EtaInfo.md)
- [Event](docs/Model/Event.md)
- [External](docs/Model/External.md)
- [GWEventCode](docs/Model/GWEventCode.md)
- [GWEventReasonCode](docs/Model/GWEventReasonCode.md)
- [GeoLocation](docs/Model/GeoLocation.md)
- [GoodsItem](docs/Model/GoodsItem.md)
- [GoodsItemReference](docs/Model/GoodsItemReference.md)
- [Incoterm](docs/Model/Incoterm.md)
- [LingualText](docs/Model/LingualText.md)
- [Location](docs/Model/Location.md)
- [LogisticsAddress](docs/Model/LogisticsAddress.md)
- [LogisticsOrder](docs/Model/LogisticsOrder.md)
- [LogisticsProduct](docs/Model/LogisticsProduct.md)
- [LogisticsRequirementDateTime](docs/Model/LogisticsRequirementDateTime.md)
- [LogisticsRequirementNote](docs/Model/LogisticsRequirementNote.md)
- [LogisticsRequirements](docs/Model/LogisticsRequirements.md)
- [LogisticsRequirementsOrderLine](docs/Model/LogisticsRequirementsOrderLine.md)
- [Measurement](docs/Model/Measurement.md)
- [MyGWStatusCode](docs/Model/MyGWStatusCode.md)
- [OrderCurrentStatus](docs/Model/OrderCurrentStatus.md)
- [OrderLine](docs/Model/OrderLine.md)
- [OrderReference](docs/Model/OrderReference.md)
- [OrderReferenced](docs/Model/OrderReferenced.md)
- [OrderType](docs/Model/OrderType.md)
- [Reference](docs/Model/Reference.md)
- [Translation](docs/Model/Translation.md)

## Authorization

### oAuth

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://apitest.gw-world.com:443/authorize`
- **Scopes**: 
    - **API_LOGISTICS_ORDER_ORDER_STATUS_READ**: API_LOGISTICS_ORDER_ORDER_STATUS_READ
    - **API_LOGISTICS_ORDER_ORDER_CREATE**: API_LOGISTICS_ORDER_ORDER_CREATE
    - **API_LOGISTICS_ORDER_ORDER_READ**: API_LOGISTICS_ORDER_ORDER_READ

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

michael.beck@gw-world.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
