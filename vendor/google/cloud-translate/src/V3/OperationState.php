<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/common.proto

namespace Google\Cloud\Translate\V3;

use UnexpectedValueException;

/**
 * Possible states of long running operations.
 *
 * Protobuf type <code>google.cloud.translation.v3.OperationState</code>
 */
class OperationState
{
    /**
     * Invalid.
     *
     * Generated from protobuf enum <code>OPERATION_STATE_UNSPECIFIED = 0;</code>
     */
    const OPERATION_STATE_UNSPECIFIED = 0;
    /**
     * Request is being processed.
     *
     * Generated from protobuf enum <code>OPERATION_STATE_RUNNING = 1;</code>
     */
    const OPERATION_STATE_RUNNING = 1;
    /**
     * The operation was successful.
     *
     * Generated from protobuf enum <code>OPERATION_STATE_SUCCEEDED = 2;</code>
     */
    const OPERATION_STATE_SUCCEEDED = 2;
    /**
     * Failed to process operation.
     *
     * Generated from protobuf enum <code>OPERATION_STATE_FAILED = 3;</code>
     */
    const OPERATION_STATE_FAILED = 3;
    /**
     * Request is in the process of being canceled after caller invoked
     * longrunning.Operations.CancelOperation on the request id.
     *
     * Generated from protobuf enum <code>OPERATION_STATE_CANCELLING = 4;</code>
     */
    const OPERATION_STATE_CANCELLING = 4;
    /**
     * The operation request was successfully canceled.
     *
     * Generated from protobuf enum <code>OPERATION_STATE_CANCELLED = 5;</code>
     */
    const OPERATION_STATE_CANCELLED = 5;

    private static $valueToName = [
        self::OPERATION_STATE_UNSPECIFIED => 'OPERATION_STATE_UNSPECIFIED',
        self::OPERATION_STATE_RUNNING => 'OPERATION_STATE_RUNNING',
        self::OPERATION_STATE_SUCCEEDED => 'OPERATION_STATE_SUCCEEDED',
        self::OPERATION_STATE_FAILED => 'OPERATION_STATE_FAILED',
        self::OPERATION_STATE_CANCELLING => 'OPERATION_STATE_CANCELLING',
        self::OPERATION_STATE_CANCELLED => 'OPERATION_STATE_CANCELLED',
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
