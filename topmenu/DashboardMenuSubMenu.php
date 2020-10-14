<?php


namespace web\dashboard\topmenu;

use web\dashboard\topmenu\sub\DashboardSubMenuItem;

class DashboardMenuSubMenu extends DashboardMenuItem {


    /**
     * @var array|DashboardSubMenuItem[]
     */
    private array $elements;

    /**
     * DashboardMenuSubMenu constructor.
     * @param string $href
     * @param string $name
     * @param array|DashboardSubMenuItem[] $elements
     */
    public function __construct(string $href, string $name, ...$elements) {
        parent::__construct($href, $name);
        $this->elements = $elements;
    }


    final public function generateHTML(): string {
        $res = "";

        foreach ($this->elements as $element) {
            $res .= $element->generateHTML();
        }
        return <<<END
<li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" href="$this->href" id="navbarDropdown" role="button" data-toggle="dropdown" 
    aria-expanded="false">
   $this->name
 </a>
 <ul class="dropdown-menu" aria-labelledby="navbarDropdown" role="menu">
 $res
</ul>
</li>
END;

    }
}