<?php


namespace Netzbegruenung\Api\Model;

class GroupList
{
    /**
     * @var Group[]
     */
    protected $items = [];

    /**
     * @return Group[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Group[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }
}