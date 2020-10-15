<?php


namespace web\dashboard\sidemenu\sub;


use web\dashboard\utils\Badge;

class SubMenuLinks extends SubMenuText {

    private string $href;
    private Badge $badge;
    private string $icon;

    /**
     * SubMenuLinks constructor.
     * @param string $name
     * @param string $href
     * @param Badge $badge
     * @param string $icon
     */
    public function __construct(string $name, string $href, Badge $badge, string $icon) {
        parent::__construct($name);
        $this->href = $href;
        $this->badge = $badge;
        $this->icon = $icon;
    }

    public function generateHTML(): string {
        return <<<END
        <li class="nav-item">
            <a href="$this->href" class="nav-link">
              <i class="nav-icon fas $this->icon"></i>
              <p>
               $this->name
              $this->badge
              </p>
            </a>
          </li>
END;

    }


}