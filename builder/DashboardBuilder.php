<?php


namespace web\dashboard\builder;


use web\dashboard\Dashboard;
use web\dashboard\sidemenu\SideMenuHeader;
use web\dashboard\sidemenu\sub\SideMenuConnection;
use web\dashboard\utils\DashboardTitle;

class DashboardBuilder implements Builder {
    /**
     * @var DashboardTopMenuBuilder
     */
    private DashboardTopMenuBuilder $topMenu;

    /**
     * @var DashboardSideMenuBuilder
     */
    private DashboardSideMenuBuilder $sideMenu;


    /**
     * DashboardBuilder constructor.
     */
    public function __construct() {
        $this->topMenu = new DashboardTopMenuBuilder();
        $this->sideMenu = new DashboardSideMenuBuilder();
    }


    /**
     * Builder function for adding the title
     *
     * @param DashboardTitle $dashboardTitle
     * @return $this
     */
    public function addTitle(DashboardTitle $dashboardTitle): DashboardBuilder {
        $this->topMenu->addTitle($dashboardTitle);
        return $this;
    }

    public function addTitleAndHeader(string $name, string $href = "", string $image = ""): DashboardBuilder {
        $this->topMenu->addTitle(new DashboardTitle("", $href));
        $this->sideMenu->addHeader(new SideMenuHeader($href, $name, $image));
        return $this;
    }

    public function addConnection(string $name, string $image): DashboardBuilder {
        $this->sideMenu->addConnections(new SideMenuConnection($name, $image));
        return $this;
    }

    public function build(): Dashboard {
        if ($this->isBuildable()) {
            return new Dashboard($this->topMenu->build(), $this->sideMenu->build());
        }
        throw new UnBuildableException();
    }

    function isBuildable(): bool {
        return $this->topMenu->isBuildable() && $this->sideMenu->isBuildable();
    }

    function addItem(...$items): Builder {
        // TODO: Implement addItem() method.
    }

    /**
     * @return DashboardTopMenuBuilder
     */
    public function getTopMenu(): DashboardTopMenuBuilder {
        return $this->topMenu;
    }

    /**
     * @return DashboardSideMenuBuilder
     */
    public function getSideMenu(): DashboardSideMenuBuilder {
        return $this->sideMenu;
    }
}