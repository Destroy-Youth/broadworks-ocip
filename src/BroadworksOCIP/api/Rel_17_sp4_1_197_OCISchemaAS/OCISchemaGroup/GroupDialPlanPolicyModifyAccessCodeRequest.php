<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCodeDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify a Group level Dial Plan Access Code and its attribues.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupDialPlanPolicyModifyAccessCodeRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDialPlanPolicyModifyAccessCodeRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $accessCode;
    protected $includeCodeForNetworkTranslationsAndRouting;
    protected $includeCodeForScreeningServices;
    protected $enableSecondaryDialTone;
    protected $description;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $accessCode = '',
         $includeCodeForNetworkTranslationsAndRouting = null,
         $includeCodeForScreeningServices = null,
         $enableSecondaryDialTone = null,
         $description = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setAccessCode($accessCode);
        $this->setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting);
        $this->setIncludeCodeForScreeningServices($includeCodeForScreeningServices);
        $this->setEnableSecondaryDialTone($enableSecondaryDialTone);
        $this->setDescription($description);
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
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf DialPlanAccessCode)
             ? $accessCode
             : new DialPlanAccessCode($accessCode);
        $this->accessCode->setElementName('accessCode');
        return $this;
    }

    /**
     * 
     * @return DialPlanAccessCode $accessCode
     */
    public function getAccessCode()
    {
        return ($this->accessCode)
            ? $this->accessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting = null)
    {
        $this->includeCodeForNetworkTranslationsAndRouting = new PrimitiveType($includeCodeForNetworkTranslationsAndRouting);
        $this->includeCodeForNetworkTranslationsAndRouting->setElementName('includeCodeForNetworkTranslationsAndRouting');
        return $this;
    }

    /**
     * 
     * @return boolean $includeCodeForNetworkTranslationsAndRouting
     */
    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return ($this->includeCodeForNetworkTranslationsAndRouting)
            ? $this->includeCodeForNetworkTranslationsAndRouting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices = null)
    {
        $this->includeCodeForScreeningServices = new PrimitiveType($includeCodeForScreeningServices);
        $this->includeCodeForScreeningServices->setElementName('includeCodeForScreeningServices');
        return $this;
    }

    /**
     * 
     * @return boolean $includeCodeForScreeningServices
     */
    public function getIncludeCodeForScreeningServices()
    {
        return ($this->includeCodeForScreeningServices)
            ? $this->includeCodeForScreeningServices->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableSecondaryDialTone($enableSecondaryDialTone = null)
    {
        $this->enableSecondaryDialTone = new PrimitiveType($enableSecondaryDialTone);
        $this->enableSecondaryDialTone->setElementName('enableSecondaryDialTone');
        return $this;
    }

    /**
     * 
     * @return boolean $enableSecondaryDialTone
     */
    public function getEnableSecondaryDialTone()
    {
        return ($this->enableSecondaryDialTone)
            ? $this->enableSecondaryDialTone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DialPlanAccessCodeDescription)
             ? $description
             : new DialPlanAccessCodeDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return DialPlanAccessCodeDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
