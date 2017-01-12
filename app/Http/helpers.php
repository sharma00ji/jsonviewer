<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function assetsJs($param) {
    if ($param) {
        echo "<script src='" . URL::to('/vendor/sharmaji/jsonviewer/resources/assets/js/' . $param) . "'></script>";
    }
}
function assetsCss($param) {
    if ($param) {
        echo " <link rel='stylesheet' href='" . URL::to('/vendor/sharmaji/jsonviewer/resources/assets/css/' . $param) . "'>";
    }
}
