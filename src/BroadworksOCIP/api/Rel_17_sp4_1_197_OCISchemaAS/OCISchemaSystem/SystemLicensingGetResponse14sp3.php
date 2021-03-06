<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\GroupUserLicenseLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LicenseStrictness;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ServerHostId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LicenseName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemLicensingGetRequest14sp3. The subscriber license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The group service license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The virtual service license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The user service license table columns are: "Name", "Licensed", "Used", "Used By Hosted Users", "Used By Trunk Users", "Available" and "Expiration Date".
 *         The system param license table columns are: "Name", "Licensed", "Used", Available".
 */
class SystemLicensingGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemLicensingGetResponse14sp3';
    protected $licenseStrictness;
    protected $groupUserlimit;
    protected $expirationDate;
    protected $hostId;
    protected $licenseName;
    protected $numberOfTrunkUsers;
    protected $subscriberLicenseTable;
    protected $groupServiceLicenseTable;
    protected $virtualServiceLicenseTable;
    protected $userServiceLicenseTable;
    protected $systemParamLicenseTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemLicensingGetResponse14sp3 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLicenseStrictness($licenseStrictness = null)
    {
        $this->licenseStrictness = ($licenseStrictness InstanceOf LicenseStrictness)
             ? $licenseStrictness
             : new LicenseStrictness($licenseStrictness);
        $this->licenseStrictness->setElementName('licenseStrictness');
        return $this;
    }

    /**
     * 
     * @return LicenseStrictness $licenseStrictness
     */
    public function getLicenseStrictness()
    {
        return ($this->licenseStrictness)
            ? $this->licenseStrictness->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupUserlimit($groupUserlimit = null)
    {
        $this->groupUserlimit = ($groupUserlimit InstanceOf GroupUserLicenseLimit)
             ? $groupUserlimit
             : new GroupUserLicenseLimit($groupUserlimit);
        $this->groupUserlimit->setElementName('groupUserlimit');
        return $this;
    }

    /**
     * 
     * @return GroupUserLicenseLimit $groupUserlimit
     */
    public function getGroupUserlimit()
    {
        return ($this->groupUserlimit)
            ? $this->groupUserlimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExpirationDate($expirationDate = null)
    {
        $this->expirationDate = new PrimitiveType($expirationDate);
        $this->expirationDate->setElementName('expirationDate');
        return $this;
    }

    /**
     * 
     * @return string $expirationDate
     */
    public function getExpirationDate()
    {
        return ($this->expirationDate)
            ? $this->expirationDate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHostId($hostId = null)
    {
        $this->hostId = ($hostId InstanceOf ServerHostId)
             ? $hostId
             : new ServerHostId($hostId);
        $this->hostId->setElementName('hostId');
        return $this;
    }

    /**
     * 
     * @return ServerHostId $hostId
     */
    public function getHostId()
    {
        return ($this->hostId)
            ? $this->hostId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLicenseName($licenseName = null)
    {
        $this->licenseName = ($licenseName InstanceOf LicenseName)
             ? $licenseName
             : new LicenseName($licenseName);
        $this->licenseName->setElementName('licenseName');
        return $this;
    }

    /**
     * 
     * @return LicenseName $licenseName
     */
    public function getLicenseName()
    {
        return ($this->licenseName)
            ? $this->licenseName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfTrunkUsers($numberOfTrunkUsers = null)
    {
        $this->numberOfTrunkUsers = new PrimitiveType($numberOfTrunkUsers);
        $this->numberOfTrunkUsers->setElementName('numberOfTrunkUsers');
        return $this;
    }

    /**
     * 
     * @return int $numberOfTrunkUsers
     */
    public function getNumberOfTrunkUsers()
    {
        return ($this->numberOfTrunkUsers)
            ? $this->numberOfTrunkUsers->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSubscriberLicenseTable(TableType $subscriberLicenseTable = null)
    {
        $this->subscriberLicenseTable = $subscriberLicenseTable;
        $this->subscriberLicenseTable->setElementName('subscriberLicenseTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSubscriberLicenseTable()
    {
        return $this->subscriberLicenseTable;
    }

    /**
     * 
     */
    public function setGroupServiceLicenseTable(TableType $groupServiceLicenseTable = null)
    {
        $this->groupServiceLicenseTable = $groupServiceLicenseTable;
        $this->groupServiceLicenseTable->setElementName('groupServiceLicenseTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupServiceLicenseTable()
    {
        return $this->groupServiceLicenseTable;
    }

    /**
     * 
     */
    public function setVirtualServiceLicenseTable(TableType $virtualServiceLicenseTable = null)
    {
        $this->virtualServiceLicenseTable = $virtualServiceLicenseTable;
        $this->virtualServiceLicenseTable->setElementName('virtualServiceLicenseTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getVirtualServiceLicenseTable()
    {
        return $this->virtualServiceLicenseTable;
    }

    /**
     * 
     */
    public function setUserServiceLicenseTable(TableType $userServiceLicenseTable = null)
    {
        $this->userServiceLicenseTable = $userServiceLicenseTable;
        $this->userServiceLicenseTable->setElementName('userServiceLicenseTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUserServiceLicenseTable()
    {
        return $this->userServiceLicenseTable;
    }

    /**
     * 
     */
    public function setSystemParamLicenseTable(TableType $systemParamLicenseTable = null)
    {
        $this->systemParamLicenseTable = $systemParamLicenseTable;
        $this->systemParamLicenseTable->setElementName('systemParamLicenseTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSystemParamLicenseTable()
    {
        return $this->systemParamLicenseTable;
    }
}
