<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Studio\V2\Flow\Execution;

use Twilio\ListResource;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
class ExecutionContextList extends ListResource {
    /**
     * Construct the ExecutionContextList
     *
     * @param Version $version Version that contains the resource
     * @param string $flowSid The flow_sid
     * @param string $executionSid The execution_sid
     */
    public function __construct(Version $version, string $flowSid, string $executionSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['flowSid' => $flowSid, 'executionSid' => $executionSid, ];
    }

    /**
     * Constructs a ExecutionContextContext
     */
    public function getContext(): ExecutionContextContext {
        return new ExecutionContextContext(
            $this->version,
            $this->solution['flowSid'],
            $this->solution['executionSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Studio.V2.ExecutionContextList]';
    }
}