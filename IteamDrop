<?php

/*
__PocketMine Plugin__
name=ItemDropDissabler
description=
version=1.0
author=Syriamanal
class=ItemDropDissabler
apiversion=11,12,13,14,15,16,17,18,19
*/

class ItemDropDissabler implements Plugin{
    private $api;
    public function __construct(ServerAPI $api, $server = false){
        $this->api = $api;
    }
 
    public function init(){
        $this->api->addHandler("item.drop", array($this, "itemDrop"));
    }
 
    public function itemDrop(){
            return false;
    }
    
 
    public function __destruct(){}
}
