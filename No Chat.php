<?php

/*
__PocketMine Plugin__
name=No Chat
description=
version=1.0
author=Syriamanal
class=Chat
apiversion=11,12,13,14,15,16,17,18,19
*/

class Chat implements Plugin{
    private $api;
    public function __construct(ServerAPI $api, $server = false){
        $this->api = $api;
    }
 
    public function init(){
        $this->api->addHandler("player.chat", array($this, "chat"));
    }
 
    public function chat(){
            return false;
    }
    
 
    public function __destruct(){}
}
