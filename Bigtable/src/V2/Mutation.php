<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a particular change to be made to the contents of a row.
 *
 * Generated from protobuf message <code>google.bigtable.v2.Mutation</code>
 */
class Mutation extends \Google\Protobuf\Internal\Message
{
    protected $mutation;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct();
    }

    /**
     * Set a cell's value.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Mutation.SetCell set_cell = 1;</code>
     * @return \Google\Cloud\Bigtable\V2\Mutation_SetCell
     */
    public function getSetCell()
    {
        return $this->readOneof(1);
    }

    /**
     * Set a cell's value.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Mutation.SetCell set_cell = 1;</code>
     * @param \Google\Cloud\Bigtable\V2\Mutation_SetCell $var
     * @return $this
     */
    public function setSetCell($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\Mutation_SetCell::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Deletes cells from a column.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Mutation.DeleteFromColumn delete_from_column = 2;</code>
     * @return \Google\Cloud\Bigtable\V2\Mutation_DeleteFromColumn
     */
    public function getDeleteFromColumn()
    {
        return $this->readOneof(2);
    }

    /**
     * Deletes cells from a column.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Mutation.DeleteFromColumn delete_from_column = 2;</code>
     * @param \Google\Cloud\Bigtable\V2\Mutation_DeleteFromColumn $var
     * @return $this
     */
    public function setDeleteFromColumn($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\Mutation_DeleteFromColumn::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Deletes cells from a column family.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Mutation.DeleteFromFamily delete_from_family = 3;</code>
     * @return \Google\Cloud\Bigtable\V2\Mutation_DeleteFromFamily
     */
    public function getDeleteFromFamily()
    {
        return $this->readOneof(3);
    }

    /**
     * Deletes cells from a column family.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Mutation.DeleteFromFamily delete_from_family = 3;</code>
     * @param \Google\Cloud\Bigtable\V2\Mutation_DeleteFromFamily $var
     * @return $this
     */
    public function setDeleteFromFamily($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\Mutation_DeleteFromFamily::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Deletes cells from the entire row.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Mutation.DeleteFromRow delete_from_row = 4;</code>
     * @return \Google\Cloud\Bigtable\V2\Mutation_DeleteFromRow
     */
    public function getDeleteFromRow()
    {
        return $this->readOneof(4);
    }

    /**
     * Deletes cells from the entire row.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Mutation.DeleteFromRow delete_from_row = 4;</code>
     * @param \Google\Cloud\Bigtable\V2\Mutation_DeleteFromRow $var
     * @return $this
     */
    public function setDeleteFromRow($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\Mutation_DeleteFromRow::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMutation()
    {
        return $this->whichOneof("mutation");
    }

}
