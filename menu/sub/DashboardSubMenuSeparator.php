<?php


namespace web\dashboard\menu\sub;


use web\dashboard\utils\HTMLDrawable;

class DashboardSubMenuSeparator implements HTMLDrawable {

    final public function generateHTML(): string {
        return "<div class=\"dropdown-divider\"></div>";
    }
}