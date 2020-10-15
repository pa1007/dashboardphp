<?php


namespace web\dashboard\sidemenu\sub;


use web\dashboard\utils\HTMLDrawable;

class SideSubMenu implements HTMLDrawable {


    private array $items;

    /**
     * SideSubMenu constructor.
     * @param  $items
     */
    public function __construct(...$items) { $this->items = $items; }


    final public function generateHTML(): string {


    }
}