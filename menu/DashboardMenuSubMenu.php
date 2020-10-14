<?php


namespace web\dashboard\menu;

use web\dashboard\menu\sub\DashboardSubMenuItem;

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
 <a class="nav-link dropdown-toggle" href="$this->href" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   $this->name
 </a>
 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
 $res
</div>
END;

    }
}