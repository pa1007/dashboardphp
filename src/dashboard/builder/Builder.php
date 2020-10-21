<?php


namespace web\dashboard\builder;


interface Builder {

    function build();

    function isBuildable(): bool;

}