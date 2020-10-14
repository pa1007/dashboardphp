<?php

namespace web\dashboard\utils;


class CssClass {

    private array $classes;

    /**
     * CssClass constructor.
     * @param array $classes
     */
    public function __construct(array $classes = []) { $this->classes = $classes; }


    public function __toString(): string {
        $s = "";
        foreach ($this->classes as $item) {
            $s .= $item . " ";
        }
        return $s;
    }


}