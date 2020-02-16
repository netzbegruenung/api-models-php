<?php

namespace Netzbegruenung\Api\Model;

class RegionalChapterFilter
{
    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var int|null
     */
    protected $offset;

    /**
     * @var string|null
     */
    protected $query;

    /**
     * @var string|null
     */
    protected $idPrefix;

    /**
     * @return string|null
     */
    public function getIdPrefix(): ?string
    {
        return $this->idPrefix;
    }

    /**
     * @param string|null $idPrefix
     */
    public function setIdPrefix(?string $idPrefix): void
    {
        $this->idPrefix = $idPrefix;
    }

    /**
     * @return string|null
     */
    public function getQuery(): ?string
    {
        return $this->query;
    }

    /**
     * @param string|null $query
     */
    public function setQuery(?string $query): void
    {
        $this->query = $query;
    }

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param int|null $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @return int|null
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * @param int|null $offset
     */
    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }
}
