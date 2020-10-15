<?php


namespace web\dashboard\sidemenu;


use web\dashboard\utils\HTMLDrawable;

class DashboardSideMenu implements HTMLDrawable {

    private SideMenuHeader $header;

    /**
     * DashboardSideMenu constructor.
     * @param SideMenuHeader $header
     */
    public function __construct(SideMenuHeader $header) { $this->header = $header; }


    final public function generateHTML(): string {
        $h = $this->header->generateHTML();
        return <<<END
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
$h
      <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
       
       </ul>
      </nav>
  </aside>
END;


    }
}