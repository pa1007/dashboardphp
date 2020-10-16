<?php


namespace web\dashboard\sidemenu\sub;


use web\dashboard\utils\Badge;

class SubMenuLinks extends SubMenuText {

    private string $href;
    private ?Badge $badge;
    private string $icon;
    private bool $activated;

    /**
     * SubMenuLinks constructor.
     * @param string $name
     * @param string $href
     * @param string $icon
     * @param ?Badge $badge
     * @param bool $activated
     */
    public function __construct(string $name,
                                string $href,
                                string $icon,
                                bool $activated = false,
                                ?Badge $badge = null) {
        parent::__construct($name);
        $this->href = $href;
        $this->badge = $badge;
        $this->icon = $icon;
        $this->activated = $activated;
    }

    final public function generateHTML(): string {
        $b = is_null($this->badge) ? "" : $this->badge;
        $a = $this->activated ? "active" : "";
        return <<<END
        <li class="nav-item">
            <a href="$this->href" class="nav-link $a">
              <i class="nav-icon fas $this->icon"></i>
              <p>
               $this->name
              $b
              </p>
            </a>
          </li>
END;

    }


}