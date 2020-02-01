<?php

namespace Netzbegruenung\Api\Model;

class Group
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $slug;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var boolean|null
     */
    protected $active;

    /**
     * @var string|null
     */
    protected $level;

    /**
     * @var ExternalRef[]
     */
    protected $externalRefs = [];

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string|null $slug
     */
    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
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

    /**
     * @return ExternalRef[]
     */
    public function getExternalRefs(): array
    {
        return $this->externalRefs;
    }

    /**
     * @param ExternalRef $externalRef
     */
    public function addExternalRef(ExternalRef $externalRef): void
    {
        $this->externalRefs[] = $externalRef;
    }

    /**
     * @param ExternalRef[] $externalRefs
     */
    public function setExternalRefs(array $externalRefs): void
    {
        $this->externalRefs = $externalRefs;
    }
}
