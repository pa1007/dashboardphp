<?php


namespace web\dashboard\sidemenu;


use web\dashboard\utils\HTMLDrawable;

class DashboardSideMenu implements HTMLDrawable {

    private SideMenuHeader $header;
    private array $items;

    /**
     * DashboardSideMenu constructor.
     * @param SideMenuHeader $header
     * @param mixed ...$items
     */
    public function __construct(SideMenuHeader $header, ...$items) {
        $this->header = $header;
        $this->items = $items;
    }


    final public function generateHTML(): string {
        $h = $this->header->generateHTML();
        $it = "";
        foreach ($this->items as $item) {
            $it .= $item->generateHTML();
        }
        return <<<END
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
$h
      <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
       $it
       </ul>
      </nav>
  </aside>
END;


    }
}