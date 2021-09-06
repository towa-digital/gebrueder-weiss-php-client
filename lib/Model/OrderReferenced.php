<?php
/**
 * OrderReferenced
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
 * OpenAPI Generator version: 5.2.1
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
 * OrderReferenced Class Doc Comment
 *
 * @category Class
 * @description shortest form of an order information, used to identify the referenced order in responses
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderReferenced implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderReferenced';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_id' => 'int',
        'order_id' => 'string',
        'creation_date' => '\DateTime',
        'references' => '\Towa\GebruederWeissSDK\Model\Reference[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_id' => 'int32',
        'order_id' => null,
        'creation_date' => 'date',
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
        'customer_id' => 'customerId',
        'order_id' => 'orderId',
        'creation_date' => 'creationDate',
        'references' => 'references'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'order_id' => 'setOrderId',
        'creation_date' => 'setCreationDate',
        'references' => 'setReferences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'order_id' => 'getOrderId',
        'creation_date' => 'getCreationDate',
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
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['creation_date'] = $data['creation_date'] ?? null;
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

        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if (($this->container['customer_id'] > 9999999)) {
            $invalidProperties[] = "invalid value for 'customer_id', must be smaller than or equal to 9999999.";
        }

        if (($this->container['customer_id'] < 100000)) {
            $invalidProperties[] = "invalid value for 'customer_id', must be bigger than or equal to 100000.";
        }

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ((mb_strlen($this->container['order_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['order_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be bigger than or equal to 10.";
        }

        if (!preg_match("/[0-9A-Z]{10}/", $this->container['order_id'])) {
            $invalidProperties[] = "invalid value for 'order_id', must be conform to the pattern /[0-9A-Z]{10}/.";
        }

        if ($this->container['creation_date'] === null) {
            $invalidProperties[] = "'creation_date' can't be null";
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
     * Gets customer_id
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id customer account numnber of GW
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {

        if (($customer_id > 9999999)) {
            throw new \InvalidArgumentException('invalid value for $customer_id when calling OrderReferenced., must be smaller than or equal to 9999999.');
        }
        if (($customer_id < 100000)) {
            throw new \InvalidArgumentException('invalid value for $customer_id when calling OrderReferenced., must be bigger than or equal to 100000.');
        }

        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id the GW orderId is always a 10 digit number
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if ((mb_strlen($order_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling OrderReferenced., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($order_id) < 10)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling OrderReferenced., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/[0-9A-Z]{10}/", $order_id))) {
            throw new \InvalidArgumentException("invalid value for $order_id when calling OrderReferenced., must conform to the pattern /[0-9A-Z]{10}/.");
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime $creation_date date in format yyyy-mm-dd
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets references
     *
     * @return \Towa\GebruederWeissSDK\Model\Reference[]|null
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param \Towa\GebruederWeissSDK\Model\Reference[]|null $references references of the order
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


