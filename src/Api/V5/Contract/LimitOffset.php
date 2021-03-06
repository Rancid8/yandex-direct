<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class LimitOffset
{

    protected $Limit = null;

    protected $Offset = null;

    /**
     * Creates a new instance of LimitOffset.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Limit.
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @param int|null $value
     * @return self
     */
    public function setLimit($value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets Offset.
     *
     * @param int|null $value
     * @return self
     */
    public function setOffset($value = null)
    {
        $this->Offset = $value;

        return $this;
    }


}

