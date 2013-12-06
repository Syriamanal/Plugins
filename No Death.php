<?php

/*
__PocketMine Plugin__
name=No Death
description=
version=1.0
author=Syriamanal
class=Death
apiversion=11,12,13,14,15,16,17,18,19
*/

class Death implements Plugin{
    private $api;
    public function __construct(ServerAPI $api, $server = false){
        $this->api = $api;
    }
 
    public function init(){
        $this->api->addHandler("player.death", array($this, "death"));
    }
 
    public function death(){
            return false;
    }
    
 
    public function __destruct(){}
}
