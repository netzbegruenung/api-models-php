<?php

namespace Netzbegruenung\Api\Model;

class Organization
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $regionalChapterIdPrefix;

    /**
     * @return string
     */
    public function getRegionalChapterIdPrefix(): string
    {
        return $this->regionalChapterIdPrefix;
    }

    /**
     * @param string $regionalChapterIdPrefix
     */
    public function setRegionalChapterIdPrefix(string $regionalChapterIdPrefix): void
    {
        $this->regionalChapterIdPrefix = $regionalChapterIdPrefix;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
