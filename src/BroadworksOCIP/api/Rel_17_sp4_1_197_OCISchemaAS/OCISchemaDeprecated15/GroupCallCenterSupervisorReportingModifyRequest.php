<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Replaces a list of users as supervisors for a call center.
 *         Also allows the modification of the reporting server URL address.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifySupervisorListRequest16
 */
class GroupCallCenterSupervisorReportingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterSupervisorReportingModifyRequest';
    protected $serviceUserId;
    protected $reportingServerName;
    protected $supervisorUserIdList;

    public function __construct(
         $serviceUserId = '',
         $reportingServerName = null,
         $supervisorUserIdList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setReportingServerName($reportingServerName);
        $this->setSupervisorUserIdList($supervisorUserIdList);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportingServerName($reportingServerName = null)
    {
        $this->reportingServerName = ($reportingServerName InstanceOf CallCenterReportingServerName)
             ? $reportingServerName
             : new CallCenterReportingServerName($reportingServerName);
        $this->reportingServerName->setElementName('reportingServerName');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerName $reportingServerName
     */
    public function getReportingServerName()
    {
        return ($this->reportingServerName)
            ? $this->reportingServerName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSupervisorUserIdList(ReplacementUserIdList $supervisorUserIdList = null)
    {
        $this->supervisorUserIdList = ($supervisorUserIdList InstanceOf ReplacementUserIdList)
             ? $supervisorUserIdList
             : new ReplacementUserIdList($supervisorUserIdList);
        $this->supervisorUserIdList->setElementName('supervisorUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $supervisorUserIdList
     */
    public function getSupervisorUserIdList()
    {
        return $this->supervisorUserIdList;
    }
}
