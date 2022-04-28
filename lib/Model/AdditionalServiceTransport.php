<?php
/**
 * AdditionalServiceTransport
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
 * AdditionalServiceTransport Class Doc Comment
 *
 * @category Class
 * @description contains information of an additional service. The availability of an additional service depends on the GW product, in combination with the relation and your contract with GW.
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AdditionalServiceTransport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalServiceTransport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_service' => 'string',
        'additional_service_text' => '\Towa\GebruederWeissSDK\Model\Translation',
        'additional_service_attribute' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_service' => null,
        'additional_service_text' => null,
        'additional_service_attribute' => null
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
        'additional_service' => 'additionalService',
        'additional_service_text' => 'additionalServiceText',
        'additional_service_attribute' => 'additionalServiceAttribute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_service' => 'setAdditionalService',
        'additional_service_text' => 'setAdditionalServiceText',
        'additional_service_attribute' => 'setAdditionalServiceAttribute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_service' => 'getAdditionalService',
        'additional_service_text' => 'getAdditionalServiceText',
        'additional_service_attribute' => 'getAdditionalServiceAttribute'
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

    const ADDITIONAL_SERVICE_ARRIVAL = 'ARRIVAL';
    const ADDITIONAL_SERVICE_AVISO = 'AVISO';
    const ADDITIONAL_SERVICE_DGM = 'DGM';
    const ADDITIONAL_SERVICE_COD = 'COD';
    const ADDITIONAL_SERVICE_CUSTOMS = 'CUSTOMS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdditionalServiceAllowableValues()
    {
        return [
            self::ADDITIONAL_SERVICE_ARRIVAL,
            self::ADDITIONAL_SERVICE_AVISO,
            self::ADDITIONAL_SERVICE_DGM,
            self::ADDITIONAL_SERVICE_COD,
            self::ADDITIONAL_SERVICE_CUSTOMS,
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
        $this->container['additional_service'] = $data['additional_service'] ?? null;
        $this->container['additional_service_text'] = $data['additional_service_text'] ?? null;
        $this->container['additional_service_attribute'] = $data['additional_service_attribute'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAdditionalServiceAllowableValues();
        if (!is_null($this->container['additional_service']) && !in_array($this->container['additional_service'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'additional_service', must be one of '%s'",
                $this->container['additional_service'],
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
     * Gets additional_service
     *
     * @return string|null
     */
    public function getAdditionalService()
    {
        return $this->container['additional_service'];
    }

    /**
     * Sets additional_service
     *
     * @param string|null $additional_service additional service coded
     *
     * @return self
     */
    public function setAdditionalService($additional_service)
    {
        $allowedValues = $this->getAdditionalServiceAllowableValues();
        if (!is_null($additional_service) && !in_array($additional_service, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'additional_service', must be one of '%s'",
                    $additional_service,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['additional_service'] = $additional_service;

        return $this;
    }

    /**
     * Gets additional_service_text
     *
     * @return \Towa\GebruederWeissSDK\Model\Translation|null
     */
    public function getAdditionalServiceText()
    {
        return $this->container['additional_service_text'];
    }

    /**
     * Sets additional_service_text
     *
     * @param \Towa\GebruederWeissSDK\Model\Translation|null $additional_service_text additional_service_text
     *
     * @return self
     */
    public function setAdditionalServiceText($additional_service_text)
    {
        $this->container['additional_service_text'] = $additional_service_text;

        return $this;
    }

    /**
     * Gets additional_service_attribute
     *
     * @return string|null
     */
    public function getAdditionalServiceAttribute()
    {
        return $this->container['additional_service_attribute'];
    }

    /**
     * Sets additional_service_attribute
     *
     * @param string|null $additional_service_attribute some additional service require additional information
     *
     * @return self
     */
    public function setAdditionalServiceAttribute($additional_service_attribute)
    {
        $this->container['additional_service_attribute'] = $additional_service_attribute;

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


