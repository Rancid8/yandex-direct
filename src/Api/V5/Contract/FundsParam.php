<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FundsParam
{

    protected $Mode = null;

    protected $CampaignFunds = null;

    protected $SharedAccountFunds = null;

    /**
     * Creates a new instance of FundsParam.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Mode.
     *
     * @return string
     * @see CampaignFundsEnum
     */
    public function getMode()
    {
        return $this->Mode;
    }

    /**
     * Sets Mode.
     *
     * @param string $value
     * @return self
     * @see CampaignFundsEnum
     */
    public function setMode($value)
    {
        $this->Mode = $value;

        return $this;
    }

    /**
     * Gets CampaignFunds.
     *
     * @return CampaignFundsParam|null
     */
    public function getCampaignFunds()
    {
        return $this->CampaignFunds;
    }

    /**
     * Sets CampaignFunds.
     *
     * @param CampaignFundsParam|null $value
     * @return self
     */
    public function setCampaignFunds(CampaignFundsParam $value = null)
    {
        $this->CampaignFunds = $value;

        return $this;
    }

    /**
     * Gets SharedAccountFunds.
     *
     * @return SharedAccountFundsParam|null
     */
    public function getSharedAccountFunds()
    {
        return $this->SharedAccountFunds;
    }

    /**
     * Sets SharedAccountFunds.
     *
     * @param SharedAccountFundsParam|null $value
     * @return self
     */
    public function setSharedAccountFunds(SharedAccountFundsParam $value = null)
    {
        $this->SharedAccountFunds = $value;

        return $this;
    }


}

