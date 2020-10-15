<?php


namespace web\dashboard\sidemenu;


use web\dashboard\utils\HTMLDrawable;

class SideMenuHeader implements HTMLDrawable {

    protected string $href;
    protected string $name;
    protected string $image;

    /**
     * DashboardMenuItem constructor.
     * @param string $href
     * @param string $name
     * @param string $image
     */
    public function __construct(string $href, string $name, string $image = "None") {
        $this->href = $href;
        $this->name = $name;
        $this->image = $image;
    }


    public function generateHTML(): string {
        $img = "";
        if ($this->image !== "None") {
            $img = <<<END
      <img src="$this->image" alt="$this->name image" class="brand-image img-circle elevation-3" style="opacity: .8">
END;
        }
        return <<<END
    <a href="$this->href" class="brand-link">
$img
      <span class="brand-text font-weight-light">$this->name</span>
    </a>
END;

    }
}