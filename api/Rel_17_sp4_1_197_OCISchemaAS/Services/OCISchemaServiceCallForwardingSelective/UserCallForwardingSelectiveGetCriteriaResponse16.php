<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallForwardingSelective; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallForwardingSelectiveNumberSelection16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCallForwardingSelectiveGetCriteriaRequest16.
 */
class UserCallForwardingSelectiveGetCriteriaResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             TimeSchedule $timeSchedule=null,
             HolidaySchedule $holidaySchedule=null,
             $forwardToNumberSelection,
             $forwardToPhoneNumber=null,
             CriteriaFromDn $fromDnCriteria
    ) {
        $this->timeSchedule             = $timeSchedule;
        $this->holidaySchedule          = $holidaySchedule;
        $this->forwardToNumberSelection = $forwardToNumberSelection;
        $this->forwardToPhoneNumber     = new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->fromDnCriteria           = $fromDnCriteria;
        $this->args                     = func_get_args();
    }

    public function setTimeSchedule($timeSchedule)
    {
        $timeSchedule and $this->timeSchedule = new TimeSchedule($timeSchedule);
    }

    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->value();
    }

    public function setHolidaySchedule($holidaySchedule)
    {
        $holidaySchedule and $this->holidaySchedule = new HolidaySchedule($holidaySchedule);
    }

    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->value();
    }

    public function setForwardToNumberSelection($forwardToNumberSelection)
    {
        $forwardToNumberSelection and $this->forwardToNumberSelection = new CallForwardingSelectiveNumberSelection16($forwardToNumberSelection);
    }

    public function getForwardToNumberSelection()
    {
        return (!$this->forwardToNumberSelection) ?: $this->forwardToNumberSelection->value();
    }

    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $forwardToPhoneNumber and $this->forwardToPhoneNumber = new OutgoingDNorSIPURI($forwardToPhoneNumber);
    }

    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->value();
    }

    public function setFromDnCriteria($fromDnCriteria)
    {
        $fromDnCriteria and $this->fromDnCriteria = new CriteriaFromDn($fromDnCriteria);
    }

    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->value();
    }
}