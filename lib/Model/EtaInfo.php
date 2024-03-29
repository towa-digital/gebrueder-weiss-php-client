<?php
/**
 * EtaInfo
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
 * EtaInfo Class Doc Comment
 *
 * @category Class
 * @description describes a time window for the estimated time of arrival
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EtaInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EtaInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'estimated_time_of_arrival_min' => '\DateTime',
        'estimated_time_of_arrival_max' => '\DateTime',
        'eta_specification' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'estimated_time_of_arrival_min' => 'date-time',
        'estimated_time_of_arrival_max' => 'date-time',
        'eta_specification' => null
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
        'estimated_time_of_arrival_min' => 'estimatedTimeOfArrivalMin',
        'estimated_time_of_arrival_max' => 'estimatedTimeOfArrivalMax',
        'eta_specification' => 'etaSpecification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'estimated_time_of_arrival_min' => 'setEstimatedTimeOfArrivalMin',
        'estimated_time_of_arrival_max' => 'setEstimatedTimeOfArrivalMax',
        'eta_specification' => 'setEtaSpecification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'estimated_time_of_arrival_min' => 'getEstimatedTimeOfArrivalMin',
        'estimated_time_of_arrival_max' => 'getEstimatedTimeOfArrivalMax',
        'eta_specification' => 'getEtaSpecification'
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

    const ETA_SPECIFICATION_ATA_AT_RECIPIENT = 'ATA at recipient';
    const ETA_SPECIFICATION_ETA_AT_RECIPIENT = 'ETA at recipient';
    const ETA_SPECIFICATION_ATA_AT_DESTINATION__AIRPORT = 'ATA at destination (air)port';
    const ETA_SPECIFICATION_ETA_AT_DESTINATION__AIRPORT = 'ETA at destination (air)port';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEtaSpecificationAllowableValues()
    {
        return [
            self::ETA_SPECIFICATION_ATA_AT_RECIPIENT,
            self::ETA_SPECIFICATION_ETA_AT_RECIPIENT,
            self::ETA_SPECIFICATION_ATA_AT_DESTINATION__AIRPORT,
            self::ETA_SPECIFICATION_ETA_AT_DESTINATION__AIRPORT,
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
        $this->container['estimated_time_of_arrival_min'] = $data['estimated_time_of_arrival_min'] ?? null;
        $this->container['estimated_time_of_arrival_max'] = $data['estimated_time_of_arrival_max'] ?? null;
        $this->container['eta_specification'] = $data['eta_specification'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['estimated_time_of_arrival_min']) && (mb_strlen($this->container['estimated_time_of_arrival_min']) > 29)) {
            $invalidProperties[] = "invalid value for 'estimated_time_of_arrival_min', the character length must be smaller than or equal to 29.";
        }

        if (!is_null($this->container['estimated_time_of_arrival_max']) && (mb_strlen($this->container['estimated_time_of_arrival_max']) > 29)) {
            $invalidProperties[] = "invalid value for 'estimated_time_of_arrival_max', the character length must be smaller than or equal to 29.";
        }

        $allowedValues = $this->getEtaSpecificationAllowableValues();
        if (!is_null($this->container['eta_specification']) && !in_array($this->container['eta_specification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eta_specification', must be one of '%s'",
                $this->container['eta_specification'],
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
     * Gets estimated_time_of_arrival_min
     *
     * @return \DateTime|null
     */
    public function getEstimatedTimeOfArrivalMin()
    {
        return $this->container['estimated_time_of_arrival_min'];
    }

    /**
     * Sets estimated_time_of_arrival_min
     *
     * @param \DateTime|null $estimated_time_of_arrival_min date / time in format yyyy-mm-ddThh:mm:ss.mmm±hh:mm following the RFC 3339 standard, see https://tools.ietf.org/html/rfc3339
     *
     * @return self
     */
    public function setEstimatedTimeOfArrivalMin($estimated_time_of_arrival_min)
    {
        if (!is_null($estimated_time_of_arrival_min) && (mb_strlen($estimated_time_of_arrival_min) > 29)) {
            throw new \InvalidArgumentException('invalid length for $estimated_time_of_arrival_min when calling EtaInfo., must be smaller than or equal to 29.');
        }

        $this->container['estimated_time_of_arrival_min'] = $estimated_time_of_arrival_min;

        return $this;
    }

    /**
     * Gets estimated_time_of_arrival_max
     *
     * @return \DateTime|null
     */
    public function getEstimatedTimeOfArrivalMax()
    {
        return $this->container['estimated_time_of_arrival_max'];
    }

    /**
     * Sets estimated_time_of_arrival_max
     *
     * @param \DateTime|null $estimated_time_of_arrival_max date / time in format yyyy-mm-ddThh:mm:ss.mmm±hh:mm following the RFC 3339 standard, see https://tools.ietf.org/html/rfc3339
     *
     * @return self
     */
    public function setEstimatedTimeOfArrivalMax($estimated_time_of_arrival_max)
    {
        if (!is_null($estimated_time_of_arrival_max) && (mb_strlen($estimated_time_of_arrival_max) > 29)) {
            throw new \InvalidArgumentException('invalid length for $estimated_time_of_arrival_max when calling EtaInfo., must be smaller than or equal to 29.');
        }

        $this->container['estimated_time_of_arrival_max'] = $estimated_time_of_arrival_max;

        return $this;
    }

    /**
     * Gets eta_specification
     *
     * @return string|null
     */
    public function getEtaSpecification()
    {
        return $this->container['eta_specification'];
    }

    /**
     * Sets eta_specification
     *
     * @param string|null $eta_specification how is the ETA calculated, what does it express
     *
     * @return self
     */
    public function setEtaSpecification($eta_specification)
    {
        $allowedValues = $this->getEtaSpecificationAllowableValues();
        if (!is_null($eta_specification) && !in_array($eta_specification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eta_specification', must be one of '%s'",
                    $eta_specification,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eta_specification'] = $eta_specification;

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


