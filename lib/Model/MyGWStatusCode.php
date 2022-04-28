<?php
/**
 * MyGWStatusCode
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
use \Towa\GebruederWeissSDK\ObjectSerializer;

/**
 * MyGWStatusCode Class Doc Comment
 *
 * @category Class
 * @description status as in myGW shown
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MyGWStatusCode
{
    /**
     * Possible values of this enum
     */
    const OPEN = 'OPEN';

    const IN_PROGRESS = 'IN_PROGRESS';

    const ATTENTION = 'ATTENTION';

    const CRITICAL = 'CRITICAL';

    const COMPLETED = 'COMPLETED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPEN,
            self::IN_PROGRESS,
            self::ATTENTION,
            self::CRITICAL,
            self::COMPLETED
        ];
    }
}


