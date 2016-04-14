<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class WebpageGetItem
{

    protected $Id = null;

    protected $AdGroupId = null;

    protected $CampaignId = null;

    protected $Name = null;

    protected $Bid = null;

    protected $ContextBid = null;

    protected $StrategyPriority = null;

    protected $State = null;

    protected $StatusClarification = null;

    protected $Conditions = null;

    protected $ConditionType = null;

    /**
     * Creates a new instance of WebpageGetItem.
     *
     * @return WebpageGetItem
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
     * @return $this
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAdGroupId($value = null)
    {
        $this->AdGroupId = $value;

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
     * @return $this
     */
    public function setCampaignId($value = null)
    {
        $this->CampaignId = $value;

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
     * @return $this
     */
    public function setName($value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets Bid.
     *
     * @return int|null
     */
    public function getBid()
    {
        return $this->Bid;
    }

    /**
     * Sets Bid.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBid($value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets ContextBid.
     *
     * @return int|null
     */
    public function getContextBid()
    {
        return $this->ContextBid;
    }

    /**
     * Sets ContextBid.
     *
     * @param int|null $value
     * @return $this
     */
    public function setContextBid($value = null)
    {
        $this->ContextBid = $value;

        return $this;
    }

    /**
     * Gets StrategyPriority.
     *
     * @return PriorityEnum|null
     */
    public function getStrategyPriority()
    {
        return $this->StrategyPriority;
    }

    /**
     * Sets StrategyPriority.
     *
     * @param PriorityEnum|null $value
     * @return $this
     */
    public function setStrategyPriority(PriorityEnum $value = null)
    {
        $this->StrategyPriority = $value;

        return $this;
    }

    /**
     * Gets State.
     *
     * @return StateEnum|null
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * Sets State.
     *
     * @param StateEnum|null $value
     * @return $this
     */
    public function setState(StateEnum $value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Gets StatusClarification.
     *
     * @return string|null
     */
    public function getStatusClarification()
    {
        return $this->StatusClarification;
    }

    /**
     * Sets StatusClarification.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStatusClarification($value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * Gets Conditions.
     *
     * @return WebpageCondition[]|null
     */
    public function getConditions()
    {
        return $this->Conditions;
    }

    /**
     * Sets Conditions.
     *
     * @param WebpageCondition[]|null $value
     * @return $this
     */
    public function setConditions(array $value = null)
    {
        $this->Conditions = $value;

        return $this;
    }

    /**
     * Gets ConditionType.
     *
     * @return WebpageTypeEnum|null
     */
    public function getConditionType()
    {
        return $this->ConditionType;
    }

    /**
     * Sets ConditionType.
     *
     * @param WebpageTypeEnum|null $value
     * @return $this
     */
    public function setConditionType(WebpageTypeEnum $value = null)
    {
        $this->ConditionType = $value;

        return $this;
    }


}
