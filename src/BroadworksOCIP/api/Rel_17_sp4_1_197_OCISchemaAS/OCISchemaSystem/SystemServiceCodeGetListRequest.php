<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceCodeDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get all service codes that have been defined in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either SystemServiceCodeGetListResponse or ErrorResponse.
 */
class SystemServiceCodeGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServiceCodeGetListResponse';
    public    $elementName = 'SystemServiceCodeGetListRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaServiceCode;
    protected $searchCriteriaServiceCodeDescription;

    public function __construct(
         $responseSizeLimit = null,
         $searchCriteriaServiceCode = null,
         $searchCriteriaServiceCodeDescription = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaServiceCode($searchCriteriaServiceCode);
        $this->setSearchCriteriaServiceCodeDescription($searchCriteriaServiceCodeDescription);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServiceCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setElementName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit)
            ? $this->responseSizeLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaServiceCode(SearchCriteriaServiceCode $searchCriteriaServiceCode = null)
    {
        $this->searchCriteriaServiceCode = ($searchCriteriaServiceCode InstanceOf SearchCriteriaServiceCode)
             ? $searchCriteriaServiceCode
             : new SearchCriteriaServiceCode($searchCriteriaServiceCode);
        $this->searchCriteriaServiceCode->setElementName('searchCriteriaServiceCode');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaServiceCode $searchCriteriaServiceCode
     */
    public function getSearchCriteriaServiceCode()
    {
        return $this->searchCriteriaServiceCode;
    }

    /**
     * 
     */
    public function setSearchCriteriaServiceCodeDescription(SearchCriteriaServiceCodeDescription $searchCriteriaServiceCodeDescription = null)
    {
        $this->searchCriteriaServiceCodeDescription = ($searchCriteriaServiceCodeDescription InstanceOf SearchCriteriaServiceCodeDescription)
             ? $searchCriteriaServiceCodeDescription
             : new SearchCriteriaServiceCodeDescription($searchCriteriaServiceCodeDescription);
        $this->searchCriteriaServiceCodeDescription->setElementName('searchCriteriaServiceCodeDescription');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaServiceCodeDescription $searchCriteriaServiceCodeDescription
     */
    public function getSearchCriteriaServiceCodeDescription()
    {
        return $this->searchCriteriaServiceCodeDescription;
    }
}
