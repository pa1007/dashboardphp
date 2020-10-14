<?php


namespace web\dashboard\menu\sub;


use web\dashboard\utils\HTMLDrawable;

class DashboardSubMenuItem implements HTMLDrawable {

    private string $href;
    private string $name;

    /**
     * DashboardMenuItem constructor.
     * @param string $href
     * @param string $name
     */
    public function __construct(string $href, string $name) {
        $this->href = $href;
        $this->name = $name;
    }


    final public function generateHTML(): string {
        return <<<END
<a class="dropdown-item" href="$this->href">$this->name</a>
END;

    }
}