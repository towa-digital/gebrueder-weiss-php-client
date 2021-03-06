<?php
/**
 * GWEventReasonCode
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
 * GWEventReasonCode Class Doc Comment
 *
 * @category Class
 * @description gives and additional reason code, not mandatory
 * @package  Towa\GebruederWeissSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GWEventReasonCode
{
    /**
     * Possible values of this enum
     */
    const _1 = '1';

    const _2 = '2';

    const _4 = '4';

    const _5 = '5';

    const _8 = '8';

    const _9 = '9';

    const _10 = '10';

    const _11 = '11';

    const _12 = '12';

    const _14 = '14';

    const _15 = '15';

    const _16 = '16';

    const _17 = '17';

    const _18 = '18';

    const _19 = '19';

    const _20 = '20';

    const _22 = '22';

    const _54 = '54';

    const _56 = '56';

    const _63 = '63';

    const _64 = '64';

    const _66 = '66';

    const _67 = '67';

    const _68 = '68';

    const _69 = '69';

    const _70 = '70';

    const _72 = '72';

    const _74 = '74';

    const _80 = '80';

    const _81 = '81';

    const _82 = '82';

    const _83 = '83';

    const _84 = '84';

    const _85 = '85';

    const _89 = '89';

    const _90 = '90';

    const _95 = '95';

    const _99 = '99';

    const _100 = '100';

    const _124 = '124';

    const _138 = '138';

    const _172 = '172';

    const _711 = '711';

    const _1111 = '1111';

    const _3321 = '3321';

    const _3333 = '3333';

    const A12 = 'A12';

    const BC1 = 'BC1';

    const BC2 = 'BC2';

    const CA2 = 'CA2';

    const CP1 = 'CP1';

    const CP2 = 'CP2';

    const CR1 = 'CR1';

    const CR11 = 'CR11';

    const CR2 = 'CR2';

    const DG6 = 'DG6';

    const E01 = 'E01';

    const E02 = 'E02';

    const E11 = 'E11';

    const E21 = 'E21';

    const E22 = 'E22';

    const E23 = 'E23';

    const E24 = 'E24';

    const E25 = 'E25';

    const E27 = 'E27';

    const E29 = 'E29';

    const E31 = 'E31';

    const E32 = 'E32';

    const E33 = 'E33';

    const E34 = 'E34';

    const E35 = 'E35';

    const E37 = 'E37';

    const E38 = 'E38';

    const E39 = 'E39';

    const E40 = 'E40';

    const E4_A5 = 'E4A5';

    const E4_AM = 'E4AM';

    const E4_AO = 'E4AO';

    const E4_BS = 'E4BS';

    const E51 = 'E51';

    const E62 = 'E62';

    const FM4 = 'FM4';

    const FM7 = 'FM7';

    const FM8 = 'FM8';

    const MH1 = 'MH1';

    const MH6 = 'MH6';

    const MOB = 'MOB';

    const PC1 = 'PC1';

    const RA1 = 'RA1';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_1,
            self::_2,
            self::_4,
            self::_5,
            self::_8,
            self::_9,
            self::_10,
            self::_11,
            self::_12,
            self::_14,
            self::_15,
            self::_16,
            self::_17,
            self::_18,
            self::_19,
            self::_20,
            self::_22,
            self::_54,
            self::_56,
            self::_63,
            self::_64,
            self::_66,
            self::_67,
            self::_68,
            self::_69,
            self::_70,
            self::_72,
            self::_74,
            self::_80,
            self::_81,
            self::_82,
            self::_83,
            self::_84,
            self::_85,
            self::_89,
            self::_90,
            self::_95,
            self::_99,
            self::_100,
            self::_124,
            self::_138,
            self::_172,
            self::_711,
            self::_1111,
            self::_3321,
            self::_3333,
            self::A12,
            self::BC1,
            self::BC2,
            self::CA2,
            self::CP1,
            self::CP2,
            self::CR1,
            self::CR11,
            self::CR2,
            self::DG6,
            self::E01,
            self::E02,
            self::E11,
            self::E21,
            self::E22,
            self::E23,
            self::E24,
            self::E25,
            self::E27,
            self::E29,
            self::E31,
            self::E32,
            self::E33,
            self::E34,
            self::E35,
            self::E37,
            self::E38,
            self::E39,
            self::E40,
            self::E4_A5,
            self::E4_AM,
            self::E4_AO,
            self::E4_BS,
            self::E51,
            self::E62,
            self::FM4,
            self::FM7,
            self::FM8,
            self::MH1,
            self::MH6,
            self::MOB,
            self::PC1,
            self::RA1
        ];
    }
}


