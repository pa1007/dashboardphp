<?php


namespace web\dashboard\menu;


use web\dashboard\utils\HTMLDrawable;

class DashboardMenuItem implements HTMLDrawable {
    protected string $href;
    protected string $name;

    /**
     * DashboardMenuItem constructor.
     * @param string $href
     * @param string $name
     */
    public function __construct(string $href, string $name) {
        $this->href = $href;
        $this->name = $name;
    }


    public function generateHTML(): string {
        return <<<END
      <li class="nav-item d-none d-sm-inline-block">
        <a href="$this->href " class="nav-link">$this->name</a>
      </li>
END;

    }
}