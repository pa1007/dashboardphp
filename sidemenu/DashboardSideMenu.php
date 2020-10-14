<?php


namespace web\dashboard\sidemenu;


use web\dashboard\utils\HTMLDrawable;

class DashboardSideMenu implements HTMLDrawable {

    final public function generateHTML(): string {
        return <<<END
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">



  </aside>
END;


    }
}