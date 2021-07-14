<?php
/**
 * LogisticsAddress
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
 * LogisticsAddress Class Doc Comment
 *
 * @category Class
 * @description specific object to contain an address for a given purpose within a transport order
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LogisticsAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LogisticsAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_type' => 'string',
        'address_references' => '\Towa\GebruederWeissSDK\Model\AddressReference[]',
        'address' => 'Address',
        'contact' => 'Contact'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_type' => null,
        'address_references' => null,
        'address' => null,
        'contact' => null
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
        'address_type' => 'addressType',
        'address_references' => 'addressReferences',
        'address' => 'address',
        'contact' => 'contact'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_type' => 'setAddressType',
        'address_references' => 'setAddressReferences',
        'address' => 'setAddress',
        'contact' => 'setContact'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_type' => 'getAddressType',
        'address_references' => 'getAddressReferences',
        'address' => 'getAddress',
        'contact' => 'getContact'
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

    const ADDRESS_TYPE_ORDERBY = 'orderby';
    const ADDRESS_TYPE_SUPPLIER = 'supplier';
    const ADDRESS_TYPE_CONSIGNEE = 'consignee';
    const ADDRESS_TYPE_CONTRACTEE = 'contractee';
    const ADDRESS_TYPE_LOGISTICSSERVICEPROVIDER = 'logisticsserviceprovider';
    const ADDRESS_TYPE_DELIVERY = 'delivery';
    const ADDRESS_TYPE_DEPOSITOR = 'depositor';
    const ADDRESS_TYPE_GOODSOWNER = 'goodsowner';
    const ADDRESS_TYPE_BUYER = 'buyer';
    const ADDRESS_TYPE_DISTRIBUTOR = 'distributor';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressTypeAllowableValues()
    {
        return [
            self::ADDRESS_TYPE_ORDERBY,
            self::ADDRESS_TYPE_SUPPLIER,
            self::ADDRESS_TYPE_CONSIGNEE,
            self::ADDRESS_TYPE_CONTRACTEE,
            self::ADDRESS_TYPE_LOGISTICSSERVICEPROVIDER,
            self::ADDRESS_TYPE_DELIVERY,
            self::ADDRESS_TYPE_DEPOSITOR,
            self::ADDRESS_TYPE_GOODSOWNER,
            self::ADDRESS_TYPE_BUYER,
            self::ADDRESS_TYPE_DISTRIBUTOR,
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
        $this->container['address_type'] = $data['address_type'] ?? null;
        $this->container['address_references'] = $data['address_references'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['contact'] = $data['contact'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($this->container['address_type']) && !in_array($this->container['address_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'address_type', must be one of '%s'",
                $this->container['address_type'],
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
     * Gets address_type
     *
     * @return string|null
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param string|null $address_type qualifier for the purpose of the address
     *
     * @return self
     */
    public function setAddressType($address_type)
    {
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($address_type) && !in_array($address_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'address_type', must be one of '%s'",
                    $address_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['address_type'] = $address_type;

        return $this;
    }

    /**
     * Gets address_references
     *
     * @return \Towa\GebruederWeissSDK\Model\AddressReference[]|null
     */
    public function getAddressReferences()
    {
        return $this->container['address_references'];
    }

    /**
     * Sets address_references
     *
     * @param \Towa\GebruederWeissSDK\Model\AddressReference[]|null $address_references references for this address
     *
     * @return self
     */
    public function setAddressReferences($address_references)
    {
        $this->container['address_references'] = $address_references;

        return $this;
    }

    /**
     * Gets address
     *
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param Address|null $address address for this purpose
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return Contact|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param Contact|null $contact contact for this address
     *
     * @return self
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

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


