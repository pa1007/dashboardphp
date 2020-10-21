<?php


namespace web\dashboard\topmenu\sub;


use web\dashboard\utils\HTMLDrawable;

class TopSubMenuItem implements HTMLDrawable {

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
<li><a class="dropdown-item" href="$this->href">$this->name</a></li>
END;

    }
}