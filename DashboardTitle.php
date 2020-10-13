<?php


class DashboardTitle {


    private string $title;

    private CssClass $cssClass;

    private string $id;

    private string $style;

    /**
     * DashboardTitle constructor.
     * @param string $title
     * @param CssClass $cssClass
     * @param string $id
     * @param string|null $style
     */
    public function __construct(string $title, CssClass $cssClass, string $id = "title", string $style = null) {
        $this->title = $title;
        $this->cssClass = $cssClass;
        $this->id = $id;
        if (is_null($style)) {
            $style = "";
        } else {
            $style = "style='" . $style . "'";
        }
        $this->style = $style;
    }


}