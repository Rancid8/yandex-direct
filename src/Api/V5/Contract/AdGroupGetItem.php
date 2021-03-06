<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupGetItem extends AdGroupBase
{

    protected $Id = null;

    protected $Name = null;

    protected $CampaignId = null;

    protected $Status = null;

    protected $Type = null;

    protected $Subtype = null;

    protected $MobileAppAdGroup = null;

    protected $DynamicTextAdGroup = null;

    protected $DynamicTextFeedAdGroup = null;

    protected $ServingStatus = null;

    protected $RestrictedRegionIds = null;

    /**
     * Creates a new instance of AdGroupGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return self
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return self
     */
    public function setName($value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets CampaignId.
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @param int|null $value
     * @return self
     */
    public function setCampaignId($value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return string|null
     * @see StatusEnum
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return self
     * @see StatusEnum
     */
    public function setStatus($value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return string|null
     * @see AdGroupTypesEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return self
     * @see AdGroupTypesEnum
     */
    public function setType($value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Subtype.
     *
     * @return string|null
     * @see AdGroupSubtypeEnum
     */
    public function getSubtype()
    {
        return $this->Subtype;
    }

    /**
     * Sets Subtype.
     *
     * @param string|null $value
     * @return self
     * @see AdGroupSubtypeEnum
     */
    public function setSubtype($value = null)
    {
        $this->Subtype = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdGroup.
     *
     * @return MobileAppAdGroupGet|null
     */
    public function getMobileAppAdGroup()
    {
        return $this->MobileAppAdGroup;
    }

    /**
     * Sets MobileAppAdGroup.
     *
     * @param MobileAppAdGroupGet|null $value
     * @return self
     */
    public function setMobileAppAdGroup(MobileAppAdGroupGet $value = null)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdGroup.
     *
     * @return DynamicTextAdGroupGet|null
     */
    public function getDynamicTextAdGroup()
    {
        return $this->DynamicTextAdGroup;
    }

    /**
     * Sets DynamicTextAdGroup.
     *
     * @param DynamicTextAdGroupGet|null $value
     * @return self
     */
    public function setDynamicTextAdGroup(DynamicTextAdGroupGet $value = null)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    /**
     * Gets DynamicTextFeedAdGroup.
     *
     * @return DynamicTextFeedAdGroupGet|null
     */
    public function getDynamicTextFeedAdGroup()
    {
        return $this->DynamicTextFeedAdGroup;
    }

    /**
     * Sets DynamicTextFeedAdGroup.
     *
     * @param DynamicTextFeedAdGroupGet|null $value
     * @return self
     */
    public function setDynamicTextFeedAdGroup(DynamicTextFeedAdGroupGet $value = null)
    {
        $this->DynamicTextFeedAdGroup = $value;

        return $this;
    }

    /**
     * Gets ServingStatus.
     *
     * @return string|null
     * @see ServingStatusEnum
     */
    public function getServingStatus()
    {
        return $this->ServingStatus;
    }

    /**
     * Sets ServingStatus.
     *
     * @param string|null $value
     * @return self
     * @see ServingStatusEnum
     */
    public function setServingStatus($value = null)
    {
        $this->ServingStatus = $value;

        return $this;
    }

    /**
     * Gets RestrictedRegionIds.
     *
     * @return struct[]|null
     */
    public function getRestrictedRegionIds()
    {
        return $this->RestrictedRegionIds;
    }

    /**
     * Sets RestrictedRegionIds.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setRestrictedRegionIds(array $value = null)
    {
        $this->RestrictedRegionIds = $value;

        return $this;
    }


}

