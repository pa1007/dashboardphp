<?php


namespace web\dashboard\sidemenu;


use web\dashboard\sidemenu\sub\SideMenuConnection;
use web\dashboard\utils\HTMLDrawable;

class DashboardSideMenu implements HTMLDrawable {

    private SideMenuHeader $header;
    private array $items;
    private SideMenuConnection $userConnection;

    /**
     * DashboardSideMenu constructor.
     * @param SideMenuHeader $header
     * @param SideMenuConnection $userConnection
     * @param mixed ...$items
     */
    public function __construct(SideMenuHeader $header, SideMenuConnection $userConnection, ...$items) {
        $this->header = $header;
        $this->items = $items;
        $this->userConnection = $userConnection;
    }


    final public function generateHTML(): string {
        $h = $this->header->generateHTML();
        $us = $this->userConnection->generateHTML();
        $it = "";
        var_dump($this->items);
        foreach ($this->items as $item) {
            $it .= $item->generateHTML();
        }
        return <<<END
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
$h
    <!-- Sidebar -->
    <div class="sidebar">
$us
      <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
       $it
       </ul>
      </nav>
      </div>
  </aside>
END;


    }
}