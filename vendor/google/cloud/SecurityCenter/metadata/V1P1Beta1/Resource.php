<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/resource.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1;

class Resource
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Folder::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/securitycenter/v1p1beta1/resource.proto%google.cloud.securitycenter.v1p1beta12google/cloud/securitycenter/v1p1beta1/folder.protogoogle/api/annotations.proto"�
Resource
name (	
project (	
project_display_name (	
parent (	
parent_display_name (	C
folders (2-.google.cloud.securitycenter.v1p1beta1.FolderB�AB�
)com.google.cloud.securitycenter.v1p1beta1BResourceProtoPZSgoogle.golang.org/genproto/googleapis/cloud/securitycenter/v1p1beta1;securitycenter�%Google.Cloud.SecurityCenter.V1P1Beta1�%Google\\Cloud\\SecurityCenter\\V1p1beta1�(Google::Cloud::SecurityCenter::V1p1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

