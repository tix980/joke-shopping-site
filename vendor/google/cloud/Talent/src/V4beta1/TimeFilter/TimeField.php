<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/filters.proto

namespace Google\Cloud\Talent\V4beta1\TimeFilter;

use UnexpectedValueException;

/**
 * Time fields can be used in TimeFilter.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.TimeFilter.TimeField</code>
 */
class TimeField
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>TIME_FIELD_UNSPECIFIED = 0;</code>
     */
    const TIME_FIELD_UNSPECIFIED = 0;
    /**
     * Earliest profile create time.
     *
     * Generated from protobuf enum <code>CREATE_TIME = 1;</code>
     */
    const CREATE_TIME = 1;
    /**
     * Latest profile update time.
     *
     * Generated from protobuf enum <code>UPDATE_TIME = 2;</code>
     */
    const UPDATE_TIME = 2;

    private static $valueToName = [
        self::TIME_FIELD_UNSPECIFIED => 'TIME_FIELD_UNSPECIFIED',
        self::CREATE_TIME => 'CREATE_TIME',
        self::UPDATE_TIME => 'UPDATE_TIME',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TimeField::class, \Google\Cloud\Talent\V4beta1\TimeFilter_TimeField::class);
