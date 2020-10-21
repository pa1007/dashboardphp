<?php


namespace web\dashboard\utils;


class Infos {

    static public function getInfo($items): string {
        $res = "";
        foreach ($items as $item) {
            if (is_array($item)) {
                $res .= Infos::getInfo($item);
            } else {
                $res .= $item->generateHTML();
            }
        }
        return $res;
    }

}