<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `UpdateService` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.UpdateServiceRequest</code>
 */
class UpdateServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The `Service` to draw updates from.
     * The given `name` specifies the resource to update.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Service service = 1;</code>
     */
    private $service = null;
    /**
     * A set of field paths defining which fields to use for the update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Monitoring\V3\Service $service
     *           The `Service` to draw updates from.
     *           The given `name` specifies the resource to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           A set of field paths defining which fields to use for the update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\ServiceService::initOnce();
        parent::__construct($data);
    }

    /**
     * The `Service` to draw updates from.
     * The given `name` specifies the resource to update.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Service service = 1;</code>
     * @return \Google\Cloud\Monitoring\V3\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * The `Service` to draw updates from.
     * The given `name` specifies the resource to update.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Service service = 1;</code>
     * @param \Google\Cloud\Monitoring\V3\Service $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\Service::class);
        $this->service = $var;

        return $this;
    }

    /**
     * A set of field paths defining which fields to use for the update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * A set of field paths defining which fields to use for the update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
