<?php


namespace web\dashboard\sidemenu\sub;


use web\dashboard\utils\HTMLDrawable;

class SubMenuText implements HTMLDrawable {

    protected string $name;

    /**
     * SubMenuText constructor.
     * @param string $name
     */
    public function __construct(string $name) { $this->name = $name; }


    public function generateHTML(): string {
        return <<<END
<li class="nav-header">$this->name</li>
END;

    }
}