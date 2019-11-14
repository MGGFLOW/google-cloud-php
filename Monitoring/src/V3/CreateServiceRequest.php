<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `CreateService` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.CreateServiceRequest</code>
 */
class CreateServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the parent workspace.
     * Of the form `projects/{project_id}`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Optional. The Service id to use for this Service. If omitted, an id will be
     * generated instead. Must match the pattern [a-z0-9\-]+
     *
     * Generated from protobuf field <code>string service_id = 3;</code>
     */
    private $service_id = '';
    /**
     * The `Service` to create.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Service service = 2;</code>
     */
    private $service = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the parent workspace.
     *           Of the form `projects/{project_id}`.
     *     @type string $service_id
     *           Optional. The Service id to use for this Service. If omitted, an id will be
     *           generated instead. Must match the pattern [a-z0-9\-]+
     *     @type \Google\Cloud\Monitoring\V3\Service $service
     *           The `Service` to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\ServiceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the parent workspace.
     * Of the form `projects/{project_id}`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the parent workspace.
     * Of the form `projects/{project_id}`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The Service id to use for this Service. If omitted, an id will be
     * generated instead. Must match the pattern [a-z0-9\-]+
     *
     * Generated from protobuf field <code>string service_id = 3;</code>
     * @return string
     */
    public function getServiceId()
    {
        return $this->service_id;
    }

    /**
     * Optional. The Service id to use for this Service. If omitted, an id will be
     * generated instead. Must match the pattern [a-z0-9\-]+
     *
     * Generated from protobuf field <code>string service_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_id = $var;

        return $this;
    }

    /**
     * The `Service` to create.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Service service = 2;</code>
     * @return \Google\Cloud\Monitoring\V3\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * The `Service` to create.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Service service = 2;</code>
     * @param \Google\Cloud\Monitoring\V3\Service $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\Service::class);
        $this->service = $var;

        return $this;
    }

}
