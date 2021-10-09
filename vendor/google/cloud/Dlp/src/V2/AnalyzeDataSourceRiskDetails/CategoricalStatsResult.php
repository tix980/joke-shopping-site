<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result of the categorical stats computation.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.CategoricalStatsResult</code>
 */
class CategoricalStatsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Histogram of value frequencies in the column.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.CategoricalStatsResult.CategoricalStatsHistogramBucket value_frequency_histogram_buckets = 5;</code>
     */
    private $value_frequency_histogram_buckets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\CategoricalStatsResult\CategoricalStatsHistogramBucket[]|\Google\Protobuf\Internal\RepeatedField $value_frequency_histogram_buckets
     *           Histogram of value frequencies in the column.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Histogram of value frequencies in the column.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.CategoricalStatsResult.CategoricalStatsHistogramBucket value_frequency_histogram_buckets = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValueFrequencyHistogramBuckets()
    {
        return $this->value_frequency_histogram_buckets;
    }

    /**
     * Histogram of value frequencies in the column.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.CategoricalStatsResult.CategoricalStatsHistogramBucket value_frequency_histogram_buckets = 5;</code>
     * @param \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\CategoricalStatsResult\CategoricalStatsHistogramBucket[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValueFrequencyHistogramBuckets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\CategoricalStatsResult\CategoricalStatsHistogramBucket::class);
        $this->value_frequency_histogram_buckets = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CategoricalStatsResult::class, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails_CategoricalStatsResult::class);

