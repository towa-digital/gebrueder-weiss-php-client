<?php
/**
 * Event
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
 * Event Class Doc Comment
 *
 * @category Class
 * @description status object, collecting all information of a status event
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Event implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event_code' => '\Towa\GebruederWeissSDK\Model\GWEventCode',
        'event_description' => '\Towa\GebruederWeissSDK\Model\Translation',
        'event_reason_code' => '\Towa\GebruederWeissSDK\Model\GWEventReasonCode',
        'event_reason' => '\Towa\GebruederWeissSDK\Model\Translation',
        'my_gw_status_code' => '\Towa\GebruederWeissSDK\Model\MyGWStatusCode',
        'location' => '\Towa\GebruederWeissSDK\Model\Location',
        'event_date_time' => '\DateTime',
        'event_signee' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event_code' => null,
        'event_description' => null,
        'event_reason_code' => null,
        'event_reason' => null,
        'my_gw_status_code' => null,
        'location' => null,
        'event_date_time' => 'date-time',
        'event_signee' => null
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
        'event_code' => 'eventCode',
        'event_description' => 'eventDescription',
        'event_reason_code' => 'eventReasonCode',
        'event_reason' => 'eventReason',
        'my_gw_status_code' => 'myGwStatusCode',
        'location' => 'location',
        'event_date_time' => 'eventDateTime',
        'event_signee' => 'eventSignee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_code' => 'setEventCode',
        'event_description' => 'setEventDescription',
        'event_reason_code' => 'setEventReasonCode',
        'event_reason' => 'setEventReason',
        'my_gw_status_code' => 'setMyGwStatusCode',
        'location' => 'setLocation',
        'event_date_time' => 'setEventDateTime',
        'event_signee' => 'setEventSignee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_code' => 'getEventCode',
        'event_description' => 'getEventDescription',
        'event_reason_code' => 'getEventReasonCode',
        'event_reason' => 'getEventReason',
        'my_gw_status_code' => 'getMyGwStatusCode',
        'location' => 'getLocation',
        'event_date_time' => 'getEventDateTime',
        'event_signee' => 'getEventSignee'
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
        $this->container['event_code'] = $data['event_code'] ?? null;
        $this->container['event_description'] = $data['event_description'] ?? null;
        $this->container['event_reason_code'] = $data['event_reason_code'] ?? null;
        $this->container['event_reason'] = $data['event_reason'] ?? null;
        $this->container['my_gw_status_code'] = $data['my_gw_status_code'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['event_date_time'] = $data['event_date_time'] ?? null;
        $this->container['event_signee'] = $data['event_signee'] ?? null;
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
     * Gets event_code
     *
     * @return \Towa\GebruederWeissSDK\Model\GWEventCode|null
     */
    public function getEventCode()
    {
        return $this->container['event_code'];
    }

    /**
     * Sets event_code
     *
     * @param \Towa\GebruederWeissSDK\Model\GWEventCode|null $event_code event_code
     *
     * @return self
     */
    public function setEventCode($event_code)
    {
        $this->container['event_code'] = $event_code;

        return $this;
    }

    /**
     * Gets event_description
     *
     * @return \Towa\GebruederWeissSDK\Model\Translation|null
     */
    public function getEventDescription()
    {
        return $this->container['event_description'];
    }

    /**
     * Sets event_description
     *
     * @param \Towa\GebruederWeissSDK\Model\Translation|null $event_description event_description
     *
     * @return self
     */
    public function setEventDescription($event_description)
    {
        $this->container['event_description'] = $event_description;

        return $this;
    }

    /**
     * Gets event_reason_code
     *
     * @return \Towa\GebruederWeissSDK\Model\GWEventReasonCode|null
     */
    public function getEventReasonCode()
    {
        return $this->container['event_reason_code'];
    }

    /**
     * Sets event_reason_code
     *
     * @param \Towa\GebruederWeissSDK\Model\GWEventReasonCode|null $event_reason_code event_reason_code
     *
     * @return self
     */
    public function setEventReasonCode($event_reason_code)
    {
        $this->container['event_reason_code'] = $event_reason_code;

        return $this;
    }

    /**
     * Gets event_reason
     *
     * @return \Towa\GebruederWeissSDK\Model\Translation|null
     */
    public function getEventReason()
    {
        return $this->container['event_reason'];
    }

    /**
     * Sets event_reason
     *
     * @param \Towa\GebruederWeissSDK\Model\Translation|null $event_reason event_reason
     *
     * @return self
     */
    public function setEventReason($event_reason)
    {
        $this->container['event_reason'] = $event_reason;

        return $this;
    }

    /**
     * Gets my_gw_status_code
     *
     * @return \Towa\GebruederWeissSDK\Model\MyGWStatusCode|null
     */
    public function getMyGwStatusCode()
    {
        return $this->container['my_gw_status_code'];
    }

    /**
     * Sets my_gw_status_code
     *
     * @param \Towa\GebruederWeissSDK\Model\MyGWStatusCode|null $my_gw_status_code my_gw_status_code
     *
     * @return self
     */
    public function setMyGwStatusCode($my_gw_status_code)
    {
        $this->container['my_gw_status_code'] = $my_gw_status_code;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Towa\GebruederWeissSDK\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Towa\GebruederWeissSDK\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets event_date_time
     *
     * @return \DateTime|null
     */
    public function getEventDateTime()
    {
        return $this->container['event_date_time'];
    }

    /**
     * Sets event_date_time
     *
     * @param \DateTime|null $event_date_time date / time in format yyyy-mm-ddThh:mm:ss.mmm±hh:mm following the RFC 3339 standard, see https://tools.ietf.org/html/rfc3339
     *
     * @return self
     */
    public function setEventDateTime($event_date_time)
    {
        $this->container['event_date_time'] = $event_date_time;

        return $this;
    }

    /**
     * Gets event_signee
     *
     * @return string|null
     */
    public function getEventSignee()
    {
        return $this->container['event_signee'];
    }

    /**
     * Sets event_signee
     *
     * @param string|null $event_signee Person (or system) which reported the event or signed it
     *
     * @return self
     */
    public function setEventSignee($event_signee)
    {
        $this->container['event_signee'] = $event_signee;

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

