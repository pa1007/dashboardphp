<?php

namespace web\dashboard\topmenu;

use web\dashboard\utils\DashboardTitle;
use web\dashboard\utils\HTMLDrawable;
use web\dashboard\utils\Infos;

class DashboardTopMenu implements HTMLDrawable {

    private DashboardTitle $title;
    private array $items;

    /**
     * DashboardMenu constructor.
     * @param DashboardTitle|null $title
     * @param array $items
     */
    public function __construct(?DashboardTitle $title, ...$items) {
        if (is_null($title)) {
            $title = new DashboardTitle("");
        }
        $this->title = $title;
        $this->items = $items;
    }

    final public function generateHTML(): string {
        $t = $this->title->generateHTML();
        $menuT = Infos::getInfo($this->items);
        return <<<END
<nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
 $t
 <ul class="navbar-nav">
  <li class="nav-item">
   <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
  </li>
  $menuT
 </ul>

</nav>
END;
    }
}