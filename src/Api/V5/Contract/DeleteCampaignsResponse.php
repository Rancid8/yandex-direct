<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteCampaignsResponse
{

    protected $DeleteResults = null;

    /**
     * Creates a new instance of DeleteCampaignsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets DeleteResults.
     *
     * @return ActionResult[]|null
     */
    public function getDeleteResults()
    {
        return $this->DeleteResults;
    }

    /**
     * Sets DeleteResults.
     *
     * @param ActionResult[]|null $value
     * @return self
     */
    public function setDeleteResults(array $value = null)
    {
        $this->DeleteResults = $value;

        return $this;
    }


}

