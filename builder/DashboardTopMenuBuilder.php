<?php


namespace web\dashboard\builder;


use web\dashboard\topmenu\DashboardTopMenu;
use web\dashboard\topmenu\TopMenuItem;
use web\dashboard\topmenu\TopMenuSubMenu;
use web\dashboard\utils\DashboardTitle;

class DashboardTopMenuBuilder implements Builder {
    /**
     * @var DashboardTitle
     */
    private DashboardTitle $title;
    private array $items;

    /**
     * DashboardTopMenuBuilder constructor.
     */
    public function __construct() {
        $this->items = [];
    }

    function build(): ?DashboardTopMenu {
        return new DashboardTopMenu($this->title);
    }

    function isBuildable(): bool {
        return true;
    }

    function createMenu(string $name, string $href, ...$items): DashboardTopMenuBuilder {
        $c = new TopMenuSubMenu($href, $name, $items);
        array_push($this->items, $c);
        return $this;
    }

    function addItem(string $name, string $href): DashboardTopMenuBuilder {
        array_push($this->items, new TopMenuItem($href, $name));
        return $this;
    }

    function addItems(...$items): DashboardTopMenuBuilder {
        array_push($this->items, $items);
        return $this;
    }

    function addTitle(DashboardTitle $dashboardTitle) {
        $this->title = $dashboardTitle;
    }
}