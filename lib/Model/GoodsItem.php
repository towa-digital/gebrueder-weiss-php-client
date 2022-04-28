<?php
/**
 * GoodsItem
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
 * GoodsItem Class Doc Comment
 *
 * @category Class
 * @description goods information
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GoodsItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GoodsItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'position' => 'string',
        'quantity' => 'float',
        'package_type' => '\Towa\GebruederWeissSDK\Model\PackageType',
        'description' => 'string',
        'stackable' => 'bool',
        'measurements' => '\Towa\GebruederWeissSDK\Model\Measurement[]',
        'dimensions' => '\Towa\GebruederWeissSDK\Model\Dimension',
        'references' => '\Towa\GebruederWeissSDK\Model\GoodsItemReference[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'position' => null,
        'quantity' => 'float',
        'package_type' => null,
        'description' => null,
        'stackable' => null,
        'measurements' => null,
        'dimensions' => null,
        'references' => null
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
        'position' => 'position',
        'quantity' => 'quantity',
        'package_type' => 'packageType',
        'description' => 'description',
        'stackable' => 'stackable',
        'measurements' => 'measurements',
        'dimensions' => 'dimensions',
        'references' => 'references'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'position' => 'setPosition',
        'quantity' => 'setQuantity',
        'package_type' => 'setPackageType',
        'description' => 'setDescription',
        'stackable' => 'setStackable',
        'measurements' => 'setMeasurements',
        'dimensions' => 'setDimensions',
        'references' => 'setReferences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'position' => 'getPosition',
        'quantity' => 'getQuantity',
        'package_type' => 'getPackageType',
        'description' => 'getDescription',
        'stackable' => 'getStackable',
        'measurements' => 'getMeasurements',
        'dimensions' => 'getDimensions',
        'references' => 'getReferences'
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
        $this->container['position'] = $data['position'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['package_type'] = $data['package_type'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['stackable'] = $data['stackable'] ?? false;
        $this->container['measurements'] = $data['measurements'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['references'] = $data['references'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] > 999999.999)) {
            $invalidProperties[] = "invalid value for 'quantity', must be smaller than or equal to 999999.999.";
        }

        if (($this->container['quantity'] < 0.001)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 0.001.";
        }

        if ($this->container['package_type'] === null) {
            $invalidProperties[] = "'package_type' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['measurements'] === null) {
            $invalidProperties[] = "'measurements' can't be null";
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
     * Gets position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string $position position of goods
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity defines the quantity of shipping units
     *
     * @return self
     */
    public function setQuantity($quantity)
    {

        if (($quantity > 999999.999)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling GoodsItem., must be smaller than or equal to 999999.999.');
        }
        if (($quantity < 0.001)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling GoodsItem., must be bigger than or equal to 0.001.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets package_type
     *
     * @return \Towa\GebruederWeissSDK\Model\PackageType
     */
    public function getPackageType()
    {
        return $this->container['package_type'];
    }

    /**
     * Sets package_type
     *
     * @param \Towa\GebruederWeissSDK\Model\PackageType $package_type package_type
     *
     * @return self
     */
    public function setPackageType($package_type)
    {
        $this->container['package_type'] = $package_type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description of goods
     *
     * @return self
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 200)) {
            throw new \InvalidArgumentException('invalid length for $description when calling GoodsItem., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets stackable
     *
     * @return bool|null
     */
    public function getStackable()
    {
        return $this->container['stackable'];
    }

    /**
     * Sets stackable
     *
     * @param bool|null $stackable indicates the stackabiltiy of the goods
     *
     * @return self
     */
    public function setStackable($stackable)
    {
        $this->container['stackable'] = $stackable;

        return $this;
    }

    /**
     * Gets measurements
     *
     * @return \Towa\GebruederWeissSDK\Model\Measurement[]
     */
    public function getMeasurements()
    {
        return $this->container['measurements'];
    }

    /**
     * Sets measurements
     *
     * @param \Towa\GebruederWeissSDK\Model\Measurement[] $measurements goods measurements
     *
     * @return self
     */
    public function setMeasurements($measurements)
    {


        $this->container['measurements'] = $measurements;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \Towa\GebruederWeissSDK\Model\Dimension|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \Towa\GebruederWeissSDK\Model\Dimension|null $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets references
     *
     * @return \Towa\GebruederWeissSDK\Model\GoodsItemReference[]|null
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param \Towa\GebruederWeissSDK\Model\GoodsItemReference[]|null $references goods references
     *
     * @return self
     */
    public function setReferences($references)
    {


        $this->container['references'] = $references;

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


