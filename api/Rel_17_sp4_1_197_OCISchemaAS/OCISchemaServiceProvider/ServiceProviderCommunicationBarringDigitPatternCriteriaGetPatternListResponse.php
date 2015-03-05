<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest.
 *         The response contains the Digit Pattern Criteria information.
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $matchDigitPattern=null
    ) {
        $this->matchDigitPattern = new DigitPattern($matchDigitPattern);
        $this->args              = func_get_args();
    }

    public function setMatchDigitPattern($matchDigitPattern)
    {
        $matchDigitPattern and $this->matchDigitPattern = new DigitPattern($matchDigitPattern);
    }

    public function getMatchDigitPattern()
    {
        return (!$this->matchDigitPattern) ?: $this->matchDigitPattern->value();
    }
}