<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SuspendAdsResponse
{

    protected $SuspendResults = null;

    /**
     * Creates a new instance of SuspendAdsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SuspendResults.
     *
     * @return ActionResult[]|null
     */
    public function getSuspendResults()
    {
        return $this->SuspendResults;
    }

    /**
     * Sets SuspendResults.
     *
     * @param ActionResult[]|null $value
     * @return self
     */
    public function setSuspendResults(array $value = null)
    {
        $this->SuspendResults = $value;

        return $this;
    }


}

