<?php


namespace web\dashboard\sidemenu\sub;


use web\dashboard\utils\HTMLDrawable;
use web\dashboard\utils\Infos;

class SideSubMenu implements HTMLDrawable {


    private array $items;

    private string $name;
    private string $icon;
    private bool $activated;

    /**
     * SideSubMenu constructor.
     * @param string $name
     * @param string $icon
     * @param bool $activated
     * @param mixed ...$items
     */
    public function __construct(string $name,
                                string $icon,
                                bool $activated = false,
                                ...$items) {
        $this->items = $items;
        $this->name = $name;
        $this->icon = $icon;
        $this->activated = $activated;
    }


    final public function generateHTML(): string {
        $h = Infos::getInfo($this->items);
        $a = $this->activated ? "active" : "";
        return <<<END
<li class="nav-item has-treeview">
    <a href="#" class="nav-link $a">
      <i class="nav-icon fas $this->icon"></i>
      <p>
        $this->name
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
    $h
    </ul>
</li>
END;


    }
}