<?php
/**
 * LogisticsProduct
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Logistics Order
 *
 * API to create and retrieve logistics orders
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Towa\GebruederWeissSDK\Model;

use \ArrayAccess;
use \Towa\GebruederWeissSDK\ObjectSerializer;

/**
 * LogisticsProduct Class Doc Comment
 *
 * @category Class
 * @description specification of the required GW logistics product
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LogisticsProduct implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LogisticsProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product' => 'string',
        'product_service_level' => 'string',
        'cargo_type' => 'string',
        'product_service_level_text' => '\Towa\GebruederWeissSDK\Model\Translation',
        'additional_services' => '\Towa\GebruederWeissSDK\Model\AdditionalServiceLogistics[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product' => null,
        'product_service_level' => null,
        'cargo_type' => null,
        'product_service_level_text' => null,
        'additional_services' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product' => 'product',
        'product_service_level' => 'productServiceLevel',
        'cargo_type' => 'cargoType',
        'product_service_level_text' => 'productServiceLevelText',
        'additional_services' => 'additionalServices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product' => 'setProduct',
        'product_service_level' => 'setProductServiceLevel',
        'cargo_type' => 'setCargoType',
        'product_service_level_text' => 'setProductServiceLevelText',
        'additional_services' => 'setAdditionalServices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product' => 'getProduct',
        'product_service_level' => 'getProductServiceLevel',
        'cargo_type' => 'getCargoType',
        'product_service_level_text' => 'getProductServiceLevelText',
        'additional_services' => 'getAdditionalServices'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const PRODUCT_OUTBOUND_DELIVERY = 'OUTBOUND_DELIVERY';
    const PRODUCT_SERVICE_LEVEL_STANDARD = 'STANDARD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductAllowableValues()
    {
        return [
            self::PRODUCT_OUTBOUND_DELIVERY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductServiceLevelAllowableValues()
    {
        return [
            self::PRODUCT_SERVICE_LEVEL_STANDARD,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['product'] = $data['product'] ?? null;
        $this->container['product_service_level'] = $data['product_service_level'] ?? null;
        $this->container['cargo_type'] = $data['cargo_type'] ?? null;
        $this->container['product_service_level_text'] = $data['product_service_level_text'] ?? null;
        $this->container['additional_services'] = $data['additional_services'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProductAllowableValues();
        if (!is_null($this->container['product']) && !in_array($this->container['product'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'product', must be one of '%s'",
                $this->container['product'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProductServiceLevelAllowableValues();
        if (!is_null($this->container['product_service_level']) && !in_array($this->container['product_service_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'product_service_level', must be one of '%s'",
                $this->container['product_service_level'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets product
     *
     * @return string|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string|null $product definition of the GW logistics product
     *
     * @return self
     */
    public function setProduct($product)
    {
        $allowedValues = $this->getProductAllowableValues();
        if (!is_null($product) && !in_array($product, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'product', must be one of '%s'",
                    $product,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets product_service_level
     *
     * @return string|null
     */
    public function getProductServiceLevel()
    {
        return $this->container['product_service_level'];
    }

    /**
     * Sets product_service_level
     *
     * @param string|null $product_service_level definition of the GW service level of the product. Available service levels depend on the logistics product plus your contract with GW.
     *
     * @return self
     */
    public function setProductServiceLevel($product_service_level)
    {
        $allowedValues = $this->getProductServiceLevelAllowableValues();
        if (!is_null($product_service_level) && !in_array($product_service_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'product_service_level', must be one of '%s'",
                    $product_service_level,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_service_level'] = $product_service_level;

        return $this;
    }

    /**
     * Gets cargo_type
     *
     * @return string|null
     */
    public function getCargoType()
    {
        return $this->container['cargo_type'];
    }

    /**
     * Sets cargo_type
     *
     * @param string|null $cargo_type can be defined per customer; for special transport-routing; or special pricing-calculation (sortage-criteria)
     *
     * @return self
     */
    public function setCargoType($cargo_type)
    {
        $this->container['cargo_type'] = $cargo_type;

        return $this;
    }

    /**
     * Gets product_service_level_text
     *
     * @return \Towa\GebruederWeissSDK\Model\Translation|null
     */
    public function getProductServiceLevelText()
    {
        return $this->container['product_service_level_text'];
    }

    /**
     * Sets product_service_level_text
     *
     * @param \Towa\GebruederWeissSDK\Model\Translation|null $product_service_level_text product_service_level_text
     *
     * @return self
     */
    public function setProductServiceLevelText($product_service_level_text)
    {
        $this->container['product_service_level_text'] = $product_service_level_text;

        return $this;
    }

    /**
     * Gets additional_services
     *
     * @return \Towa\GebruederWeissSDK\Model\AdditionalServiceLogistics[]|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param \Towa\GebruederWeissSDK\Model\AdditionalServiceLogistics[]|null $additional_services additional_services
     *
     * @return self
     */
    public function setAdditionalServices($additional_services)
    {


        $this->container['additional_services'] = $additional_services;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


