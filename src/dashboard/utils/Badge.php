<?php


namespace web\dashboard\utils;

class Badge {

    private string $title;
    private string $badgeCol;

    /**
     * Badge constructor.
     * @param string $title
     * @param string $badgeCol
     */
    public function __construct(string $title, string $badgeCol) {
        $this->title = $title;
        $this->badgeCol = $badgeCol;
    }

    public function __toString() {
        return <<<END
<span class="right badge $this->badgeCol">$this->title</span>
END;

    }


}
