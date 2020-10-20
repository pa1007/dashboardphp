<?php


namespace web\dashboard\topmenu\sub;


use web\dashboard\utils\HTMLDrawable;

class TopSubMenuSeparator implements HTMLDrawable {

    final public function generateHTML(): string {
        return "<li class=\"dropdown-divider divider\"></li>";
    }
}