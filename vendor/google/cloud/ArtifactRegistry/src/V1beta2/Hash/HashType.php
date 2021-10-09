<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/file.proto

namespace Google\Cloud\ArtifactRegistry\V1beta2\Hash;

use UnexpectedValueException;

/**
 * The algorithm used to compute the hash.
 *
 * Protobuf type <code>google.devtools.artifactregistry.v1beta2.Hash.HashType</code>
 */
class HashType
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>HASH_TYPE_UNSPECIFIED = 0;</code>
     */
    const HASH_TYPE_UNSPECIFIED = 0;
    /**
     * SHA256 hash.
     *
     * Generated from protobuf enum <code>SHA256 = 1;</code>
     */
    const SHA256 = 1;

    private static $valueToName = [
        self::HASH_TYPE_UNSPECIFIED => 'HASH_TYPE_UNSPECIFIED',
        self::SHA256 => 'SHA256',
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
class_alias(HashType::class, \Google\Cloud\ArtifactRegistry\V1beta2\Hash_HashType::class);

