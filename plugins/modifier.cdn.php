<?php

function smarty_modifier_cdn($url) {
    return "//cdn." . $_SERVER['HTTP_HOST'] . "/" . $url;
}
