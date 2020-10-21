<?php


namespace web\dashboard\builder;


use web\dashboard\sidemenu\DashboardSideMenu;
use web\dashboard\sidemenu\SideMenuHeader;
use web\dashboard\sidemenu\sub\SideMenuConnection;
use web\dashboard\sidemenu\sub\SideSubMenu;
use web\dashboard\sidemenu\sub\SubMenuLinks;

class DashboardSideMenuBuilder implements Builder {
    private SideMenuConnection $connect;
    private SideMenuHeader $header;
    private array $items;

    /**
     * DashboardSideMenuBuilder constructor.
     */
    public function __construct() {
        $this->items = [];
    }


    function build(): DashboardSideMenu {
        return new DashboardSideMenu($this->header, $this->connect, $this->items);
    }

    function isBuildable(): bool {
        return !is_null($this->connect) && !is_null($this->header);
    }

    function addLink(string $name, string $href, string $icon): DashboardSideMenuBuilder {
        return $this->addItem(new SubMenuLinks($name, $href, $icon));
    }

    function addItem(...$items): DashboardSideMenuBuilder {
        array_push($this->items, ...$items);
        return $this;
    }

    function addMenu(string $name, string $icon, array $items): DashboardSideMenuBuilder {
        array_push($this->items, new SideSubMenu($name, $icon, false, $items));
        return $this;
    }

    public function addConnection(string $name, string $image): DashboardSideMenuBuilder {
        return $this->addConnections(new SideMenuConnection($name, $image));
    }

    public function addConnections(SideMenuConnection $con): DashboardSideMenuBuilder {
        $this->connect = $con;
        return $this;
    }

    public function addHeader(SideMenuHeader $head): DashboardSideMenuBuilder {
        $this->header = $head;
        return $this;
    }
}