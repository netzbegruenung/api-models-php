<?php

namespace Netzbegruenung\Api\Model;

class RegionalChapterList
{
    /**
     * @var int|null
     */
    protected $count;

    /**
     * @var RegionalChapter[]
     */
    protected $items = [];

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param int|null $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * @return RegionalChapter[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param RegionalChapter[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @param RegionalChapter $item
     */
    public function addItem(RegionalChapter $item): void
    {
        $this->items[] = $item;
    }
}