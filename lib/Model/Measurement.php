<?php
/**
 * Measurement
 *
 * PHP version 7.2
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
 * Contact: michael.beck@gw-world.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
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
 * Measurement Class Doc Comment
 *
 * @category Class
 * @description Measurement
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Measurement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Measurement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'measure_qualifier' => 'string',
        'measure_unit' => 'string',
        'measure' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'measure_qualifier' => null,
        'measure_unit' => null,
        'measure' => 'float'
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
        'measure_qualifier' => 'measureQualifier',
        'measure_unit' => 'measureUnit',
        'measure' => 'measure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'measure_qualifier' => 'setMeasureQualifier',
        'measure_unit' => 'setMeasureUnit',
        'measure' => 'setMeasure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'measure_qualifier' => 'getMeasureQualifier',
        'measure_unit' => 'getMeasureUnit',
        'measure' => 'getMeasure'
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

    const MEASURE_QUALIFIER_GROSSWEIGHT = 'grossweight';
    const MEASURE_QUALIFIER_NETWEIGHT = 'netweight';
    const MEASURE_QUALIFIER_VOLUME = 'volume';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMeasureQualifierAllowableValues()
    {
        return [
            self::MEASURE_QUALIFIER_GROSSWEIGHT,
            self::MEASURE_QUALIFIER_NETWEIGHT,
            self::MEASURE_QUALIFIER_VOLUME,
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
        $this->container['measure_qualifier'] = $data['measure_qualifier'] ?? null;
        $this->container['measure_unit'] = $data['measure_unit'] ?? null;
        $this->container['measure'] = $data['measure'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMeasureQualifierAllowableValues();
        if (!is_null($this->container['measure_qualifier']) && !in_array($this->container['measure_qualifier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'measure_qualifier', must be one of '%s'",
                $this->container['measure_qualifier'],
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
     * Gets measure_qualifier
     *
     * @return string|null
     */
    public function getMeasureQualifier()
    {
        return $this->container['measure_qualifier'];
    }

    /**
     * Sets measure_qualifier
     *
     * @param string|null $measure_qualifier qualifier of the measurement
     *
     * @return self
     */
    public function setMeasureQualifier($measure_qualifier)
    {
        $allowedValues = $this->getMeasureQualifierAllowableValues();
        if (!is_null($measure_qualifier) && !in_array($measure_qualifier, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'measure_qualifier', must be one of '%s'",
                    $measure_qualifier,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['measure_qualifier'] = $measure_qualifier;

        return $this;
    }

    /**
     * Gets measure_unit
     *
     * @return string|null
     */
    public function getMeasureUnit()
    {
        return $this->container['measure_unit'];
    }

    /**
     * Sets measure_unit
     *
     * @param string|null $measure_unit unit of the measure
     *
     * @return self
     */
    public function setMeasureUnit($measure_unit)
    {
        $this->container['measure_unit'] = $measure_unit;

        return $this;
    }

    /**
     * Gets measure
     *
     * @return float|null
     */
    public function getMeasure()
    {
        return $this->container['measure'];
    }

    /**
     * Sets measure
     *
     * @param float|null $measure measure
     *
     * @return self
     */
    public function setMeasure($measure)
    {
        $this->container['measure'] = $measure;

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

