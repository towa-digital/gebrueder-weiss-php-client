<?php
/**
 * CustomizedInformation
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
 * CustomizedInformation Class Doc Comment
 *
 * @category Class
 * @description customized information
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomizedInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomizedInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'qualifier' => 'string',
        'reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'qualifier' => null,
        'reference' => null
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
        'qualifier' => 'qualifier',
        'reference' => 'reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'qualifier' => 'setQualifier',
        'reference' => 'setReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'qualifier' => 'getQualifier',
        'reference' => 'getReference'
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

    const QUALIFIER_INFORMATION1 = 'CUSTOMIZED_INFORMATION1';
    const QUALIFIER_INFORMATION2 = 'CUSTOMIZED_INFORMATION2';
    const QUALIFIER_INFORMATION3 = 'CUSTOMIZED_INFORMATION3';
    const QUALIFIER_INFORMATION4 = 'CUSTOMIZED_INFORMATION4';
    const QUALIFIER_INFORMATION5 = 'CUSTOMIZED_INFORMATION5';
    const QUALIFIER_INFORMATION6 = 'CUSTOMIZED_INFORMATION6';
    const QUALIFIER_INFORMATION7 = 'CUSTOMIZED_INFORMATION7';
    const QUALIFIER_INFORMATION8 = 'CUSTOMIZED_INFORMATION8';
    const QUALIFIER_INFORMATION9 = 'CUSTOMIZED_INFORMATION9';
    const QUALIFIER_INFORMATION10 = 'CUSTOMIZED_INFORMATION10';
    const QUALIFIER_INFORMATION11 = 'CUSTOMIZED_INFORMATION11';
    const QUALIFIER_INFORMATION12 = 'CUSTOMIZED_INFORMATION12';
    const QUALIFIER_INFORMATION13 = 'CUSTOMIZED_INFORMATION13';
    const QUALIFIER_INFORMATION14 = 'CUSTOMIZED_INFORMATION14';
    const QUALIFIER_INFORMATION15 = 'CUSTOMIZED_INFORMATION15';
    const QUALIFIER_INFORMATION16 = 'CUSTOMIZED_INFORMATION16';
    const QUALIFIER_INFORMATION17 = 'CUSTOMIZED_INFORMATION17';
    const QUALIFIER_INFORMATION18 = 'CUSTOMIZED_INFORMATION18';
    const QUALIFIER_INFORMATION19 = 'CUSTOMIZED_INFORMATION19';
    const QUALIFIER_INFORMATION20 = 'CUSTOMIZED_INFORMATION20';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQualifierAllowableValues()
    {
        return [
            self::QUALIFIER_INFORMATION1,
            self::QUALIFIER_INFORMATION2,
            self::QUALIFIER_INFORMATION3,
            self::QUALIFIER_INFORMATION4,
            self::QUALIFIER_INFORMATION5,
            self::QUALIFIER_INFORMATION6,
            self::QUALIFIER_INFORMATION7,
            self::QUALIFIER_INFORMATION8,
            self::QUALIFIER_INFORMATION9,
            self::QUALIFIER_INFORMATION10,
            self::QUALIFIER_INFORMATION11,
            self::QUALIFIER_INFORMATION12,
            self::QUALIFIER_INFORMATION13,
            self::QUALIFIER_INFORMATION14,
            self::QUALIFIER_INFORMATION15,
            self::QUALIFIER_INFORMATION16,
            self::QUALIFIER_INFORMATION17,
            self::QUALIFIER_INFORMATION18,
            self::QUALIFIER_INFORMATION19,
            self::QUALIFIER_INFORMATION20,
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
        $this->container['qualifier'] = $data['qualifier'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getQualifierAllowableValues();
        if (!is_null($this->container['qualifier']) && !in_array($this->container['qualifier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'qualifier', must be one of '%s'",
                $this->container['qualifier'],
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
     * Gets qualifier
     *
     * @return string|null
     */
    public function getQualifier()
    {
        return $this->container['qualifier'];
    }

    /**
     * Sets qualifier
     *
     * @param string|null $qualifier qualifier for the customized information
     *
     * @return self
     */
    public function setQualifier($qualifier)
    {
        $allowedValues = $this->getQualifierAllowableValues();
        if (!is_null($qualifier) && !in_array($qualifier, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'qualifier', must be one of '%s'",
                    $qualifier,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['qualifier'] = $qualifier;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference string
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

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


