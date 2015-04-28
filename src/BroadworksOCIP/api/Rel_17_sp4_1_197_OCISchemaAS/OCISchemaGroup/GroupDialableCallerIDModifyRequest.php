<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaPriorityOrder;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NsScreeningFailurePolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the groups Dialable Caller ID settings and criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDialableCallerIDModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDialableCallerIDModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $useGroupCriteria;
    protected $nsScreeningFailurePolicy;
    protected $criteriaPriorityOrder;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $useGroupCriteria = null,
         $nsScreeningFailurePolicy = null,
         $criteriaPriorityOrder = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUseGroupCriteria($useGroupCriteria);
        $this->setNsScreeningFailurePolicy($nsScreeningFailurePolicy);
        $this->setCriteriaPriorityOrder($criteriaPriorityOrder);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseGroupCriteria($useGroupCriteria = null)
    {
        $this->useGroupCriteria = new PrimitiveType($useGroupCriteria);
        $this->useGroupCriteria->setElementName('useGroupCriteria');
        return $this;
    }

    /**
     * 
     * @return boolean $useGroupCriteria
     */
    public function getUseGroupCriteria()
    {
        return ($this->useGroupCriteria)
            ? $this->useGroupCriteria->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy = null)
    {
        $this->nsScreeningFailurePolicy = ($nsScreeningFailurePolicy InstanceOf NsScreeningFailurePolicy)
             ? $nsScreeningFailurePolicy
             : new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
        $this->nsScreeningFailurePolicy->setElementName('nsScreeningFailurePolicy');
        return $this;
    }

    /**
     * 
     * @return NsScreeningFailurePolicy $nsScreeningFailurePolicy
     */
    public function getNsScreeningFailurePolicy()
    {
        return ($this->nsScreeningFailurePolicy)
            ? $this->nsScreeningFailurePolicy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCriteriaPriorityOrder(DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder = null)
    {
        $this->criteriaPriorityOrder = ($criteriaPriorityOrder InstanceOf DialableCallerIDCriteriaPriorityOrder)
             ? $criteriaPriorityOrder
             : new DialableCallerIDCriteriaPriorityOrder($criteriaPriorityOrder);
        $this->criteriaPriorityOrder->setElementName('criteriaPriorityOrder');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder
     */
    public function getCriteriaPriorityOrder()
    {
        return $this->criteriaPriorityOrder;
    }
}
