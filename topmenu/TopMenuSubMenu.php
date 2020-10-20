<?php


namespace web\dashboard\topmenu;

use web\dashboard\topmenu\sub\TopSubMenuItem;

class TopMenuSubMenu extends TopMenuItem {


    /**
     * @var array|TopSubMenuItem[]
     */
    private array $elements;

    /**
     * DashboardMenuSubMenu constructor.
     * @param string $href
     * @param string $name
     * @param array|TopSubMenuItem[] $elements
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