<?php


namespace web\dashboard\sidemenu\sub;


use web\dashboard\utils\HTMLDrawable;

class SideMenuConnection implements HTMLDrawable {

    private string $name;
    private string $image;

    /**
     * SideMenuConnection constructor.
     * @param string $name
     * @param string $image
     */
    public function __construct(string $name, string $image) {
        $this->name = $name;
        $this->image = $image;
    }

    final public function generateHTML(): string {
        return <<<END
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="$this->image" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">$this->name</a>
        </div>
      </div>
END;

    }
}