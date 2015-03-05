<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupUnreachableDestinationAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupTrunkGroupGetInstanceRequest15.
 *             Returns the profile information for the Trunk Group.
 *             Contains a hosted user table with column headings: "User Id", "Last Name",
 *             "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceResponse15 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $pilotUserId=null,
             DepartmentKey $department=null,
             AccessDevice $accessDevice=null,
             $maxActiveCalls,
             $maxIncomingCalls=null,
             $maxOutgoingCalls=null,
             $enableBursting,
             $burstingMaxActiveCalls=null,
             $burstingMaxIncomingCalls=null,
             $burstingMaxOutgoingCalls=null,
             $capacityExceededAction=null,
             $capacityExceededForwardAddress=null,
             TrunkGroupKey $capacityExceededRerouteTrunkGroupKey=null,
             $capacityExceededTrapInitialCalls,
             $capacityExceededTrapOffsetCalls,
             $unreachableDestinationAction=null,
             $unreachableDestinationForwardAddress=null,
             TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey=null,
             $invitationTimeout,
             $requireAuthentication,
             $sipAuthenticationUserName=null,
             $hostedUserTable=null
    ) {
        $this->pilotUserId                                = new UserId($pilotUserId);
        $this->department                                 = $department;
        $this->accessDevice                               = $accessDevice;
        $this->maxActiveCalls                             = new MaxActiveCalls($maxActiveCalls);
        $this->maxIncomingCalls                           = new MaxIncomingCalls($maxIncomingCalls);
        $this->maxOutgoingCalls                           = new MaxOutgoingCalls($maxOutgoingCalls);
        $this->enableBursting                             = $enableBursting;
        $this->burstingMaxActiveCalls                     = new BurstingMaxActiveCalls($burstingMaxActiveCalls);
        $this->burstingMaxIncomingCalls                   = new BurstingMaxIncomingCalls($burstingMaxIncomingCalls);
        $this->burstingMaxOutgoingCalls                   = new BurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
        $this->capacityExceededAction                     = new TrunkGroupCapacityExceededAction($capacityExceededAction);
        $this->capacityExceededForwardAddress             = new OutgoingDNorSIPURI($capacityExceededForwardAddress);
        $this->capacityExceededRerouteTrunkGroupKey       = $capacityExceededRerouteTrunkGroupKey;
        $this->capacityExceededTrapInitialCalls           = new TrapInitialThreshold($capacityExceededTrapInitialCalls);
        $this->capacityExceededTrapOffsetCalls            = new TrapOffsetThreshold($capacityExceededTrapOffsetCalls);
        $this->unreachableDestinationAction               = $unreachableDestinationAction;
        $this->unreachableDestinationForwardAddress       = new OutgoingDNorSIPURI($unreachableDestinationForwardAddress);
        $this->unreachableDestinationRerouteTrunkGroupKey = $unreachableDestinationRerouteTrunkGroupKey;
        $this->invitationTimeout                          = new TrunkGroupInvitationTimeoutSeconds($invitationTimeout);
        $this->requireAuthentication                      = $requireAuthentication;
        $this->sipAuthenticationUserName                  = new SIPAuthenticationUserName($sipAuthenticationUserName);
        $this->hostedUserTable                            = $hostedUserTable;
        $this->args                                       = func_get_args();
    }

    public function setPilotUserId($pilotUserId)
    {
        $pilotUserId and $this->pilotUserId = new UserId($pilotUserId);
    }

    public function getPilotUserId()
    {
        return (!$this->pilotUserId) ?: $this->pilotUserId->value();
    }

    public function setDepartment($department)
    {
        $department and $this->department = new DepartmentKey($department);
    }

    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->value();
    }

    public function setAccessDevice($accessDevice)
    {
        $accessDevice and $this->accessDevice = new AccessDevice($accessDevice);
    }

    public function getAccessDevice()
    {
        return (!$this->accessDevice) ?: $this->accessDevice->value();
    }

    public function setMaxActiveCalls($maxActiveCalls)
    {
        $maxActiveCalls and $this->maxActiveCalls = new MaxActiveCalls($maxActiveCalls);
    }

    public function getMaxActiveCalls()
    {
        return (!$this->maxActiveCalls) ?: $this->maxActiveCalls->value();
    }

    public function setMaxIncomingCalls($maxIncomingCalls)
    {
        $maxIncomingCalls and $this->maxIncomingCalls = new MaxIncomingCalls($maxIncomingCalls);
    }

    public function getMaxIncomingCalls()
    {
        return (!$this->maxIncomingCalls) ?: $this->maxIncomingCalls->value();
    }

    public function setMaxOutgoingCalls($maxOutgoingCalls)
    {
        $maxOutgoingCalls and $this->maxOutgoingCalls = new MaxOutgoingCalls($maxOutgoingCalls);
    }

    public function getMaxOutgoingCalls()
    {
        return (!$this->maxOutgoingCalls) ?: $this->maxOutgoingCalls->value();
    }

    public function setEnableBursting($enableBursting)
    {
        $enableBursting and $this->enableBursting = new xs:boolean($enableBursting);
    }

    public function getEnableBursting()
    {
        return (!$this->enableBursting) ?: $this->enableBursting->value();
    }

    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls)
    {
        $burstingMaxActiveCalls and $this->burstingMaxActiveCalls = new BurstingMaxActiveCalls($burstingMaxActiveCalls);
    }

    public function getBurstingMaxActiveCalls()
    {
        return (!$this->burstingMaxActiveCalls) ?: $this->burstingMaxActiveCalls->value();
    }

    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls)
    {
        $burstingMaxIncomingCalls and $this->burstingMaxIncomingCalls = new BurstingMaxIncomingCalls($burstingMaxIncomingCalls);
    }

    public function getBurstingMaxIncomingCalls()
    {
        return (!$this->burstingMaxIncomingCalls) ?: $this->burstingMaxIncomingCalls->value();
    }

    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls)
    {
        $burstingMaxOutgoingCalls and $this->burstingMaxOutgoingCalls = new BurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
    }

    public function getBurstingMaxOutgoingCalls()
    {
        return (!$this->burstingMaxOutgoingCalls) ?: $this->burstingMaxOutgoingCalls->value();
    }

    public function setCapacityExceededAction($capacityExceededAction)
    {
        $capacityExceededAction and $this->capacityExceededAction = new TrunkGroupCapacityExceededAction($capacityExceededAction);
    }

    public function getCapacityExceededAction()
    {
        return (!$this->capacityExceededAction) ?: $this->capacityExceededAction->value();
    }

    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress)
    {
        $capacityExceededForwardAddress and $this->capacityExceededForwardAddress = new OutgoingDNorSIPURI($capacityExceededForwardAddress);
    }

    public function getCapacityExceededForwardAddress()
    {
        return (!$this->capacityExceededForwardAddress) ?: $this->capacityExceededForwardAddress->value();
    }

    public function setCapacityExceededRerouteTrunkGroupKey($capacityExceededRerouteTrunkGroupKey)
    {
        $capacityExceededRerouteTrunkGroupKey and $this->capacityExceededRerouteTrunkGroupKey = new TrunkGroupKey($capacityExceededRerouteTrunkGroupKey);
    }

    public function getCapacityExceededRerouteTrunkGroupKey()
    {
        return (!$this->capacityExceededRerouteTrunkGroupKey) ?: $this->capacityExceededRerouteTrunkGroupKey->value();
    }

    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls)
    {
        $capacityExceededTrapInitialCalls and $this->capacityExceededTrapInitialCalls = new TrapInitialThreshold($capacityExceededTrapInitialCalls);
    }

    public function getCapacityExceededTrapInitialCalls()
    {
        return (!$this->capacityExceededTrapInitialCalls) ?: $this->capacityExceededTrapInitialCalls->value();
    }

    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls)
    {
        $capacityExceededTrapOffsetCalls and $this->capacityExceededTrapOffsetCalls = new TrapOffsetThreshold($capacityExceededTrapOffsetCalls);
    }

    public function getCapacityExceededTrapOffsetCalls()
    {
        return (!$this->capacityExceededTrapOffsetCalls) ?: $this->capacityExceededTrapOffsetCalls->value();
    }

    public function setUnreachableDestinationAction($unreachableDestinationAction)
    {
        $unreachableDestinationAction and $this->unreachableDestinationAction = new TrunkGroupUnreachableDestinationAction($unreachableDestinationAction);
    }

    public function getUnreachableDestinationAction()
    {
        return (!$this->unreachableDestinationAction) ?: $this->unreachableDestinationAction->value();
    }

    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress)
    {
        $unreachableDestinationForwardAddress and $this->unreachableDestinationForwardAddress = new OutgoingDNorSIPURI($unreachableDestinationForwardAddress);
    }

    public function getUnreachableDestinationForwardAddress()
    {
        return (!$this->unreachableDestinationForwardAddress) ?: $this->unreachableDestinationForwardAddress->value();
    }

    public function setUnreachableDestinationRerouteTrunkGroupKey($unreachableDestinationRerouteTrunkGroupKey)
    {
        $unreachableDestinationRerouteTrunkGroupKey and $this->unreachableDestinationRerouteTrunkGroupKey = new TrunkGroupKey($unreachableDestinationRerouteTrunkGroupKey);
    }

    public function getUnreachableDestinationRerouteTrunkGroupKey()
    {
        return (!$this->unreachableDestinationRerouteTrunkGroupKey) ?: $this->unreachableDestinationRerouteTrunkGroupKey->value();
    }

    public function setInvitationTimeout($invitationTimeout)
    {
        $invitationTimeout and $this->invitationTimeout = new TrunkGroupInvitationTimeoutSeconds($invitationTimeout);
    }

    public function getInvitationTimeout()
    {
        return (!$this->invitationTimeout) ?: $this->invitationTimeout->value();
    }

    public function setRequireAuthentication($requireAuthentication)
    {
        $requireAuthentication and $this->requireAuthentication = new xs:boolean($requireAuthentication);
    }

    public function getRequireAuthentication()
    {
        return (!$this->requireAuthentication) ?: $this->requireAuthentication->value();
    }

    public function setSipAuthenticationUserName($sipAuthenticationUserName)
    {
        $sipAuthenticationUserName and $this->sipAuthenticationUserName = new SIPAuthenticationUserName($sipAuthenticationUserName);
    }

    public function getSipAuthenticationUserName()
    {
        return (!$this->sipAuthenticationUserName) ?: $this->sipAuthenticationUserName->value();
    }

    public function setHostedUserTable($hostedUserTable)
    {
        $hostedUserTable and $this->hostedUserTable = new core:OCITable($hostedUserTable);
    }

    public function getHostedUserTable()
    {
        return (!$this->hostedUserTable) ?: $this->hostedUserTable->value();
    }
}