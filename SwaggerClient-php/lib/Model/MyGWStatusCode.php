<?php
/**
 * MyGWStatusCode
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
use \Swagger\Client\ObjectSerializer;

/**
 * MyGWStatusCode Class Doc Comment
 *
 * @category Class
 * @description status as in myGW shown
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MyGWStatusCode
{
    /**
     * Possible values of this enum
     */
    const OPEN = 'Open';
const IN_PROGRESS = 'InProgress';
const ATTENTION = 'Attention';
const CRITICAL = 'Critical';
const COMPLETED = 'Completed';
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
self::COMPLETED,        ];
    }
}