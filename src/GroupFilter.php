<?php

namespace Netzbegruenung\Api\Model;

class GroupFilter
{
    /**
     * @var string|null
     */
    protected $externalRefsType;

    /**
     * @var string|null
     */
    protected $externalRefsKey;

    /**
     * @var boolean|null
     */
    protected $active;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $level;

    /**
     * @return string|null
     */
    public function getExternalRefsType(): ?string
    {
        return $this->externalRefsType;
    }

    /**
     * @param string|null $externalRefsType
     */
    public function setExternalRefsType(?string $externalRefsType): void
    {
        $this->externalRefsType = $externalRefsType;
    }

    /**
     * @return string|null
     */
    public function getExternalRefsKey(): ?string
    {
        return $this->externalRefsKey;
    }

    /**
     * @param string|null $externalRefsKey
     */
    public function setExternalRefsKey(?string $externalRefsKey): void
    {
        $this->externalRefsKey = $externalRefsKey;
    }

    /**
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param bool|null $active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * @param string|null $level
     */
    public function setLevel(?string $level): void
    {
        $this->level = $level;
    }
}
