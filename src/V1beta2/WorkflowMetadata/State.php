<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1beta2\WorkflowMetadata;

/**
 * The operation state.
 *
 * Protobuf type <code>google.cloud.dataproc.v1beta2.WorkflowMetadata.State</code>
 */
class State
{
    /**
     * Unused.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * The operation has been created.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * The operation is running.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * The operation is done; either cancelled or completed.
     *
     * Generated from protobuf enum <code>DONE = 3;</code>
     */
    const DONE = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Dataproc\V1beta2\WorkflowMetadata_State::class);

