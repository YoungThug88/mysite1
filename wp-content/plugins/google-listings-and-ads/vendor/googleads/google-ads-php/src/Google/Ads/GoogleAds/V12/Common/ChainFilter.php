<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/asset_set_types.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One chain level filter on location in a feed item set.
 * The filtering logic among all the fields is AND.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.ChainFilter</code>
 */
class ChainFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Used to filter chain locations by chain id. Only chain locations that
     * belong to the specified chain will be in the asset set.
     *
     * Generated from protobuf field <code>int64 chain_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $chain_id = 0;
    /**
     * Used to filter chain locations by location attributes.
     * Only chain locations that belong to all of the specified attribute(s) will
     * be in the asset set. If this field is empty, it means no filtering on this
     * field.
     *
     * Generated from protobuf field <code>repeated string location_attributes = 2;</code>
     */
    private $location_attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $chain_id
     *           Required. Used to filter chain locations by chain id. Only chain locations that
     *           belong to the specified chain will be in the asset set.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $location_attributes
     *           Used to filter chain locations by location attributes.
     *           Only chain locations that belong to all of the specified attribute(s) will
     *           be in the asset set. If this field is empty, it means no filtering on this
     *           field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\AssetSetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Used to filter chain locations by chain id. Only chain locations that
     * belong to the specified chain will be in the asset set.
     *
     * Generated from protobuf field <code>int64 chain_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getChainId()
    {
        return $this->chain_id;
    }

    /**
     * Required. Used to filter chain locations by chain id. Only chain locations that
     * belong to the specified chain will be in the asset set.
     *
     * Generated from protobuf field <code>int64 chain_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setChainId($var)
    {
        GPBUtil::checkInt64($var);
        $this->chain_id = $var;

        return $this;
    }

    /**
     * Used to filter chain locations by location attributes.
     * Only chain locations that belong to all of the specified attribute(s) will
     * be in the asset set. If this field is empty, it means no filtering on this
     * field.
     *
     * Generated from protobuf field <code>repeated string location_attributes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocationAttributes()
    {
        return $this->location_attributes;
    }

    /**
     * Used to filter chain locations by location attributes.
     * Only chain locations that belong to all of the specified attribute(s) will
     * be in the asset set. If this field is empty, it means no filtering on this
     * field.
     *
     * Generated from protobuf field <code>repeated string location_attributes = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocationAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->location_attributes = $arr;

        return $this;
    }

}

