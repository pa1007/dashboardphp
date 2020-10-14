<?php

namespace web\dashboard\topmenu;


use web\dashboard\DashboardTitle;
use web\dashboard\utils\HTMLDrawable;

class DashboardMenu implements HTMLDrawable {

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
        $title = $this->title->generateHTML();
        $menuT = "";

        foreach ($this->items as $item) {
            $menuT .= $item->generateHTML();
        }
        return <<<END
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
$title
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