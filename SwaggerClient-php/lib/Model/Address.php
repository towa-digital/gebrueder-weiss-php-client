<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @description address
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name1' => 'string',
'name2' => 'string',
'name3' => 'string',
'name4' => 'string',
'street1' => 'string',
'street2' => 'string',
'street3' => 'string',
'postbox' => 'string',
'city' => 'string',
'zip_code' => 'string',
'country_code' => '\Swagger\Client\Model\Country',
'state' => 'string',
'location' => 'AllOfAddressLocation'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name1' => null,
'name2' => null,
'name3' => null,
'name4' => null,
'street1' => null,
'street2' => null,
'street3' => null,
'postbox' => null,
'city' => null,
'zip_code' => null,
'country_code' => null,
'state' => null,
'location' => null    ];

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
        'name1' => 'name1',
'name2' => 'name2',
'name3' => 'name3',
'name4' => 'name4',
'street1' => 'street1',
'street2' => 'street2',
'street3' => 'street3',
'postbox' => 'postbox',
'city' => 'city',
'zip_code' => 'zipCode',
'country_code' => 'countryCode',
'state' => 'state',
'location' => 'location'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name1' => 'setName1',
'name2' => 'setName2',
'name3' => 'setName3',
'name4' => 'setName4',
'street1' => 'setStreet1',
'street2' => 'setStreet2',
'street3' => 'setStreet3',
'postbox' => 'setPostbox',
'city' => 'setCity',
'zip_code' => 'setZipCode',
'country_code' => 'setCountryCode',
'state' => 'setState',
'location' => 'setLocation'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name1' => 'getName1',
'name2' => 'getName2',
'name3' => 'getName3',
'name4' => 'getName4',
'street1' => 'getStreet1',
'street2' => 'getStreet2',
'street3' => 'getStreet3',
'postbox' => 'getPostbox',
'city' => 'getCity',
'zip_code' => 'getZipCode',
'country_code' => 'getCountryCode',
'state' => 'getState',
'location' => 'getLocation'    ];

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
        $this->container['name1'] = isset($data['name1']) ? $data['name1'] : null;
        $this->container['name2'] = isset($data['name2']) ? $data['name2'] : null;
        $this->container['name3'] = isset($data['name3']) ? $data['name3'] : null;
        $this->container['name4'] = isset($data['name4']) ? $data['name4'] : null;
        $this->container['street1'] = isset($data['street1']) ? $data['street1'] : null;
        $this->container['street2'] = isset($data['street2']) ? $data['street2'] : null;
        $this->container['street3'] = isset($data['street3']) ? $data['street3'] : null;
        $this->container['postbox'] = isset($data['postbox']) ? $data['postbox'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
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
     * Gets name1
     *
     * @return string
     */
    public function getName1()
    {
        return $this->container['name1'];
    }

    /**
     * Sets name1
     *
     * @param string $name1 name 1 of the address
     *
     * @return $this
     */
    public function setName1($name1)
    {
        $this->container['name1'] = $name1;

        return $this;
    }

    /**
     * Gets name2
     *
     * @return string
     */
    public function getName2()
    {
        return $this->container['name2'];
    }

    /**
     * Sets name2
     *
     * @param string $name2 name 2 of the address
     *
     * @return $this
     */
    public function setName2($name2)
    {
        $this->container['name2'] = $name2;

        return $this;
    }

    /**
     * Gets name3
     *
     * @return string
     */
    public function getName3()
    {
        return $this->container['name3'];
    }

    /**
     * Sets name3
     *
     * @param string $name3 name 3 of the address
     *
     * @return $this
     */
    public function setName3($name3)
    {
        $this->container['name3'] = $name3;

        return $this;
    }

    /**
     * Gets name4
     *
     * @return string
     */
    public function getName4()
    {
        return $this->container['name4'];
    }

    /**
     * Sets name4
     *
     * @param string $name4 name 4 of the address
     *
     * @return $this
     */
    public function setName4($name4)
    {
        $this->container['name4'] = $name4;

        return $this;
    }

    /**
     * Gets street1
     *
     * @return string
     */
    public function getStreet1()
    {
        return $this->container['street1'];
    }

    /**
     * Sets street1
     *
     * @param string $street1 street 1 of the address
     *
     * @return $this
     */
    public function setStreet1($street1)
    {
        $this->container['street1'] = $street1;

        return $this;
    }

    /**
     * Gets street2
     *
     * @return string
     */
    public function getStreet2()
    {
        return $this->container['street2'];
    }

    /**
     * Sets street2
     *
     * @param string $street2 street 2 of the address
     *
     * @return $this
     */
    public function setStreet2($street2)
    {
        $this->container['street2'] = $street2;

        return $this;
    }

    /**
     * Gets street3
     *
     * @return string
     */
    public function getStreet3()
    {
        return $this->container['street3'];
    }

    /**
     * Sets street3
     *
     * @param string $street3 street 3 of the address
     *
     * @return $this
     */
    public function setStreet3($street3)
    {
        $this->container['street3'] = $street3;

        return $this;
    }

    /**
     * Gets postbox
     *
     * @return string
     */
    public function getPostbox()
    {
        return $this->container['postbox'];
    }

    /**
     * Sets postbox
     *
     * @param string $postbox postbox of the address
     *
     * @return $this
     */
    public function setPostbox($postbox)
    {
        $this->container['postbox'] = $postbox;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city of the address
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string $zip_code zipcode of the address
     *
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return \Swagger\Client\Model\Country
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param \Swagger\Client\Model\Country $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state or province or territory of the address
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets location
     *
     * @return AllOfAddressLocation
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param AllOfAddressLocation $location location information
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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