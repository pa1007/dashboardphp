<?php

namespace web\dashboard;

use web\dashboard\utils\CssClass;
use web\dashboard\utils\HTMLDrawable;

class DashboardTitle implements HTMLDrawable {


    private string $title;

    private CssClass $cssClass;

    private string $id;

    private string $style;

    private string $href;

    /**
     * DashboardTitle constructor.
     * @param string $title
     * @param string $href
     * @param string $id
     * @param CssClass|null $cssClass
     * @param string|null $style
     */
    public function __construct(string $title,
                                string $href = "",
                                string $id = "title",
                                CssClass $cssClass = null,
                                string $style = null) {
        $this->title = $title;

        $this->id = $id;
        if (is_null($style)) {
            $style = "";
        } else {
            $style = "style='" . $style . "'";
        }
        if (is_null($cssClass)) {
            $cssClass = new CssClass();
        }
        $this->cssClass = $cssClass;
        $this->style = $style;
        $this->href = $href;
    }

    final public function generateHTML(): string {
        return <<<END
 <a href="$this->href" class="navbar-brand $this->cssClass">
        <span class="brand-text font-weight-light" $this->style>$this->title</span>
      </a>
END;


    }
}