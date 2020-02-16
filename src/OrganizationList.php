<?php

namespace Netzbegruenung\Api\Model;

class OrganizationList
{
    /**
     * @var int|null
     */
    protected $count;

    /**
     * @var Organization[]
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
     * @return Organization[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Organization[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @param Organization $item
     */
    public function addItem(Organization $item): void
    {
        $this->items[] = $item;
    }
}
