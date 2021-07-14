<?php
/**
 * LogisticsOrder
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Logistics Order
 *
 * API to create and retrieve logistics orders
 *
 * OpenAPI spec version: 1.0.0
 * Contact: michael.beck@gw-world.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LogisticsOrder Class Doc Comment
 *
 * @category Class
 * @description object for a logistics order
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LogisticsOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LogisticsOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => '\Swagger\Client\Model\Url',
'warehouse_location' => '\Swagger\Client\Model\WarehouseLocation',
'order_id' => '\Swagger\Client\Model\GWOrderId',
'creation_date_time' => '\Swagger\Client\Model\\DateTime',
'owner_id' => '\Swagger\Client\Model\GWCustomerId',
'references' => '\Swagger\Client\Model\OrderReference[]',
'logistics_addresses' => '\Swagger\Client\Model\LogisticsAddress[]',
'logistics_requirements' => 'AllOfLogisticsOrderLogisticsRequirements',
'incoterm' => '\Swagger\Client\Model\Incoterm',
'amounts' => '\Swagger\Client\Model\Amount[]',
'measurements' => '\Swagger\Client\Model\Measurement[]',
'order_lines' => '\Swagger\Client\Model\OrderLine[]',
'goods_item' => '\Swagger\Client\Model\GoodsItem'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
'warehouse_location' => null,
'order_id' => null,
'creation_date_time' => null,
'owner_id' => null,
'references' => null,
'logistics_addresses' => null,
'logistics_requirements' => null,
'incoterm' => null,
'amounts' => null,
'measurements' => null,
'order_lines' => null,
'goods_item' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'url' => 'url',
'warehouse_location' => 'warehouseLocation',
'order_id' => 'orderId',
'creation_date_time' => 'creationDateTime',
'owner_id' => 'ownerId',
'references' => 'references',
'logistics_addresses' => 'logisticsAddresses',
'logistics_requirements' => 'logisticsRequirements',
'incoterm' => 'incoterm',
'amounts' => 'amounts',
'measurements' => 'measurements',
'order_lines' => 'orderLines',
'goods_item' => 'goodsItem'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
'warehouse_location' => 'setWarehouseLocation',
'order_id' => 'setOrderId',
'creation_date_time' => 'setCreationDateTime',
'owner_id' => 'setOwnerId',
'references' => 'setReferences',
'logistics_addresses' => 'setLogisticsAddresses',
'logistics_requirements' => 'setLogisticsRequirements',
'incoterm' => 'setIncoterm',
'amounts' => 'setAmounts',
'measurements' => 'setMeasurements',
'order_lines' => 'setOrderLines',
'goods_item' => 'setGoodsItem'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
'warehouse_location' => 'getWarehouseLocation',
'order_id' => 'getOrderId',
'creation_date_time' => 'getCreationDateTime',
'owner_id' => 'getOwnerId',
'references' => 'getReferences',
'logistics_addresses' => 'getLogisticsAddresses',
'logistics_requirements' => 'getLogisticsRequirements',
'incoterm' => 'getIncoterm',
'amounts' => 'getAmounts',
'measurements' => 'getMeasurements',
'order_lines' => 'getOrderLines',
'goods_item' => 'getGoodsItem'    ];

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
        return self::$swaggerModelName;
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['warehouse_location'] = isset($data['warehouse_location']) ? $data['warehouse_location'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['creation_date_time'] = isset($data['creation_date_time']) ? $data['creation_date_time'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['references'] = isset($data['references']) ? $data['references'] : null;
        $this->container['logistics_addresses'] = isset($data['logistics_addresses']) ? $data['logistics_addresses'] : null;
        $this->container['logistics_requirements'] = isset($data['logistics_requirements']) ? $data['logistics_requirements'] : null;
        $this->container['incoterm'] = isset($data['incoterm']) ? $data['incoterm'] : null;
        $this->container['amounts'] = isset($data['amounts']) ? $data['amounts'] : null;
        $this->container['measurements'] = isset($data['measurements']) ? $data['measurements'] : null;
        $this->container['order_lines'] = isset($data['order_lines']) ? $data['order_lines'] : null;
        $this->container['goods_item'] = isset($data['goods_item']) ? $data['goods_item'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets url
     *
     * @return \Swagger\Client\Model\Url
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param \Swagger\Client\Model\Url $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets warehouse_location
     *
     * @return \Swagger\Client\Model\WarehouseLocation
     */
    public function getWarehouseLocation()
    {
        return $this->container['warehouse_location'];
    }

    /**
     * Sets warehouse_location
     *
     * @param \Swagger\Client\Model\WarehouseLocation $warehouse_location warehouse_location
     *
     * @return $this
     */
    public function setWarehouseLocation($warehouse_location)
    {
        $this->container['warehouse_location'] = $warehouse_location;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return \Swagger\Client\Model\GWOrderId
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param \Swagger\Client\Model\GWOrderId $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets creation_date_time
     *
     * @return \Swagger\Client\Model\\DateTime
     */
    public function getCreationDateTime()
    {
        return $this->container['creation_date_time'];
    }

    /**
     * Sets creation_date_time
     *
     * @param \Swagger\Client\Model\\DateTime $creation_date_time creation_date_time
     *
     * @return $this
     */
    public function setCreationDateTime($creation_date_time)
    {
        $this->container['creation_date_time'] = $creation_date_time;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return \Swagger\Client\Model\GWCustomerId
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param \Swagger\Client\Model\GWCustomerId $owner_id owner_id
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets references
     *
     * @return \Swagger\Client\Model\OrderReference[]
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param \Swagger\Client\Model\OrderReference[] $references array of references for this order
     *
     * @return $this
     */
    public function setReferences($references)
    {
        $this->container['references'] = $references;

        return $this;
    }

    /**
     * Gets logistics_addresses
     *
     * @return \Swagger\Client\Model\LogisticsAddress[]
     */
    public function getLogisticsAddresses()
    {
        return $this->container['logistics_addresses'];
    }

    /**
     * Sets logistics_addresses
     *
     * @param \Swagger\Client\Model\LogisticsAddress[] $logistics_addresses involved addresses for this transport
     *
     * @return $this
     */
    public function setLogisticsAddresses($logistics_addresses)
    {
        $this->container['logistics_addresses'] = $logistics_addresses;

        return $this;
    }

    /**
     * Gets logistics_requirements
     *
     * @return AllOfLogisticsOrderLogisticsRequirements
     */
    public function getLogisticsRequirements()
    {
        return $this->container['logistics_requirements'];
    }

    /**
     * Sets logistics_requirements
     *
     * @param AllOfLogisticsOrderLogisticsRequirements $logistics_requirements object containing all requirments for the logistic planning and execution
     *
     * @return $this
     */
    public function setLogisticsRequirements($logistics_requirements)
    {
        $this->container['logistics_requirements'] = $logistics_requirements;

        return $this;
    }

    /**
     * Gets incoterm
     *
     * @return \Swagger\Client\Model\Incoterm
     */
    public function getIncoterm()
    {
        return $this->container['incoterm'];
    }

    /**
     * Sets incoterm
     *
     * @param \Swagger\Client\Model\Incoterm $incoterm incoterm
     *
     * @return $this
     */
    public function setIncoterm($incoterm)
    {
        $this->container['incoterm'] = $incoterm;

        return $this;
    }

    /**
     * Gets amounts
     *
     * @return \Swagger\Client\Model\Amount[]
     */
    public function getAmounts()
    {
        return $this->container['amounts'];
    }

    /**
     * Sets amounts
     *
     * @param \Swagger\Client\Model\Amount[] $amounts amounts
     *
     * @return $this
     */
    public function setAmounts($amounts)
    {
        $this->container['amounts'] = $amounts;

        return $this;
    }

    /**
     * Gets measurements
     *
     * @return \Swagger\Client\Model\Measurement[]
     */
    public function getMeasurements()
    {
        return $this->container['measurements'];
    }

    /**
     * Sets measurements
     *
     * @param \Swagger\Client\Model\Measurement[] $measurements measurements
     *
     * @return $this
     */
    public function setMeasurements($measurements)
    {
        $this->container['measurements'] = $measurements;

        return $this;
    }

    /**
     * Gets order_lines
     *
     * @return \Swagger\Client\Model\OrderLine[]
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     *
     * @param \Swagger\Client\Model\OrderLine[] $order_lines identified items to be transported
     *
     * @return $this
     */
    public function setOrderLines($order_lines)
    {
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets goods_item
     *
     * @return \Swagger\Client\Model\GoodsItem
     */
    public function getGoodsItem()
    {
        return $this->container['goods_item'];
    }

    /**
     * Sets goods_item
     *
     * @param \Swagger\Client\Model\GoodsItem $goods_item goods_item
     *
     * @return $this
     */
    public function setGoodsItem($goods_item)
    {
        $this->container['goods_item'] = $goods_item;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}