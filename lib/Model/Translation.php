<?php
/**
 * Translation
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
 * Translation Class Doc Comment
 *
 * @category Class
 * @description the translation object returns a translated text. It shows the requested language, as well as the orignial text. If feasible the origninal text is translated to the requested language. If not feasible, the resolved text contains the English translation
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Translation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Translation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'language_requested' => 'string',
        'translation_resolved' => '\Towa\GebruederWeissSDK\Model\LingualText',
        'translation_original' => '\Towa\GebruederWeissSDK\Model\LingualText'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'language_requested' => 'bcp47',
        'translation_resolved' => null,
        'translation_original' => null
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
        'language_requested' => 'languageRequested',
        'translation_resolved' => 'translationResolved',
        'translation_original' => 'translationOriginal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language_requested' => 'setLanguageRequested',
        'translation_resolved' => 'setTranslationResolved',
        'translation_original' => 'setTranslationOriginal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language_requested' => 'getLanguageRequested',
        'translation_resolved' => 'getTranslationResolved',
        'translation_original' => 'getTranslationOriginal'
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
        $this->container['language_requested'] = $data['language_requested'] ?? null;
        $this->container['translation_resolved'] = $data['translation_resolved'] ?? null;
        $this->container['translation_original'] = $data['translation_original'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['language_requested']) && (mb_strlen($this->container['language_requested']) > 5)) {
            $invalidProperties[] = "invalid value for 'language_requested', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['language_requested']) && !preg_match("/[a-z][a-z]\\-[A-Z][A-Z]/", $this->container['language_requested'])) {
            $invalidProperties[] = "invalid value for 'language_requested', must be conform to the pattern /[a-z][a-z]\\-[A-Z][A-Z]/.";
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
     * Gets language_requested
     *
     * @return string|null
     */
    public function getLanguageRequested()
    {
        return $this->container['language_requested'];
    }

    /**
     * Sets language_requested
     *
     * @param string|null $language_requested defines the language following the BCP 47 standard https://tools.ietf.org/html/bcp47
     *
     * @return self
     */
    public function setLanguageRequested($language_requested)
    {
        if (!is_null($language_requested) && (mb_strlen($language_requested) > 5)) {
            throw new \InvalidArgumentException('invalid length for $language_requested when calling Translation., must be smaller than or equal to 5.');
        }
        if (!is_null($language_requested) && (!preg_match("/[a-z][a-z]\\-[A-Z][A-Z]/", $language_requested))) {
            throw new \InvalidArgumentException("invalid value for $language_requested when calling Translation., must conform to the pattern /[a-z][a-z]\\-[A-Z][A-Z]/.");
        }

        $this->container['language_requested'] = $language_requested;

        return $this;
    }

    /**
     * Gets translation_resolved
     *
     * @return \Towa\GebruederWeissSDK\Model\LingualText|null
     */
    public function getTranslationResolved()
    {
        return $this->container['translation_resolved'];
    }

    /**
     * Sets translation_resolved
     *
     * @param \Towa\GebruederWeissSDK\Model\LingualText|null $translation_resolved translation_resolved
     *
     * @return self
     */
    public function setTranslationResolved($translation_resolved)
    {
        $this->container['translation_resolved'] = $translation_resolved;

        return $this;
    }

    /**
     * Gets translation_original
     *
     * @return \Towa\GebruederWeissSDK\Model\LingualText|null
     */
    public function getTranslationOriginal()
    {
        return $this->container['translation_original'];
    }

    /**
     * Sets translation_original
     *
     * @param \Towa\GebruederWeissSDK\Model\LingualText|null $translation_original translation_original
     *
     * @return self
     */
    public function setTranslationOriginal($translation_original)
    {
        $this->container['translation_original'] = $translation_original;

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


