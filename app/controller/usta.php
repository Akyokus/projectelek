<?php

if (!route(2)){
    $route[2] = 'index';
}
if(!file_exists(usta_controller(route(2)))){
    $route[2] = 'index';
}


require usta_controller(route(2));