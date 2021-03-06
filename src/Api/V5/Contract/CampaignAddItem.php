<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignAddItem extends CampaignBase
{

    protected $Name = null;

    protected $StartDate = null;

    protected $DailyBudget = null;

    protected $EndDate = null;

    protected $NegativeKeywords = null;

    protected $BlockedIps = null;

    protected $ExcludedSites = null;

    protected $TextCampaign = null;

    protected $MobileAppCampaign = null;

    protected $DynamicTextCampaign = null;

    protected $TimeTargeting = null;

    /**
     * Creates a new instance of CampaignAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return self
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets StartDate.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets StartDate.
     *
     * @param string $value
     * @return self
     */
    public function setStartDate($value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets DailyBudget.
     *
     * @return DailyBudget|null
     */
    public function getDailyBudget()
    {
        return $this->DailyBudget;
    }

    /**
     * Sets DailyBudget.
     *
     * @param DailyBudget|null $value
     * @return self
     */
    public function setDailyBudget(DailyBudget $value = null)
    {
        $this->DailyBudget = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Sets EndDate.
     *
     * @param string|null $value
     * @return self
     */
    public function setEndDate($value = null)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return struct[]|null
     */
    public function getNegativeKeywords()
    {
        return $this->NegativeKeywords;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setNegativeKeywords(array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Gets BlockedIps.
     *
     * @return struct[]|null
     */
    public function getBlockedIps()
    {
        return $this->BlockedIps;
    }

    /**
     * Sets BlockedIps.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setBlockedIps(array $value = null)
    {
        $this->BlockedIps = $value;

        return $this;
    }

    /**
     * Gets ExcludedSites.
     *
     * @return struct[]|null
     */
    public function getExcludedSites()
    {
        return $this->ExcludedSites;
    }

    /**
     * Sets ExcludedSites.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setExcludedSites(array $value = null)
    {
        $this->ExcludedSites = $value;

        return $this;
    }

    /**
     * Gets TextCampaign.
     *
     * @return TextCampaignAddItem|null
     */
    public function getTextCampaign()
    {
        return $this->TextCampaign;
    }

    /**
     * Sets TextCampaign.
     *
     * @param TextCampaignAddItem|null $value
     * @return self
     */
    public function setTextCampaign(TextCampaignAddItem $value = null)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    /**
     * Gets MobileAppCampaign.
     *
     * @return MobileAppCampaignAddItem|null
     */
    public function getMobileAppCampaign()
    {
        return $this->MobileAppCampaign;
    }

    /**
     * Sets MobileAppCampaign.
     *
     * @param MobileAppCampaignAddItem|null $value
     * @return self
     */
    public function setMobileAppCampaign(MobileAppCampaignAddItem $value = null)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }

    /**
     * Gets DynamicTextCampaign.
     *
     * @return DynamicTextCampaignAddItem|null
     */
    public function getDynamicTextCampaign()
    {
        return $this->DynamicTextCampaign;
    }

    /**
     * Sets DynamicTextCampaign.
     *
     * @param DynamicTextCampaignAddItem|null $value
     * @return self
     */
    public function setDynamicTextCampaign(DynamicTextCampaignAddItem $value = null)
    {
        $this->DynamicTextCampaign = $value;

        return $this;
    }

    /**
     * Gets TimeTargeting.
     *
     * @return TimeTargetingAdd|null
     */
    public function getTimeTargeting()
    {
        return $this->TimeTargeting;
    }

    /**
     * Sets TimeTargeting.
     *
     * @param TimeTargetingAdd|null $value
     * @return self
     */
    public function setTimeTargeting(TimeTargetingAdd $value = null)
    {
        $this->TimeTargeting = $value;

        return $this;
    }


}

