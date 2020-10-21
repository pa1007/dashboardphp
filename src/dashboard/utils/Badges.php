<?php

namespace web\dashboard\utils;

class Badges {

    final public function newBadge(): Badge {
        return new Badge("New", "badge-danger");
    }

    final public function notifBadge(int $int): Badge {
        return new Badge($int, "badge-info");
    }


}