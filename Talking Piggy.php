<?php

/*
__PocketMine Plugin__
name=Piggy
description=KIll person
version=1.0
author=Syriamanal
class=Talk
apiversion=11
*/

class Talk implements Plugin{
    private $api;

    public function __construct(ServerAPI $api, $server = false){

    $this -> api = $api;
    $this -> crafting = array();
    $this -> diamond = array();
     }
 
    public function init(){
	$this->api->console->register("pig ","Sends a message to a user", array($this, "pig"));
	$this->api->addHandler("player.chat", array($this, "eventHandler"), 100);
     	$this->api->addHandler("item.drop", array($this, "itemDrop"));
	$this->api->addHandler("item.pickup", array($this, "itempickup"));
	$this->api->addHandler("player.block.break", array($this, "breakHandler"));
	$this->api->addHandler("player.block.touch", array($this, "touchHandler"));
	$this->api->ban->cmdwhitelist("pig");

    }
 
    public function itemDrop(){
            return true;
    }

    public function pig($cmd, $args, $issuer){
     		 $username = $issuer->username;
    		 $this->api->chat->sendTo(false, "<Piggly> Well I Cant Move Their is no mob api yet ok!", $username);
   }

    public function itempickup(){
            return true;
    }
    
    
    public function eventHandler($data, $event)
    {
        switch($event)
        {
            case "player.chat":
            $message = strtolower($data['message']);
                if(strpos($message,'hi pig') !== false) {
				$data['player']->sendChat("<Piggy> Helo!");
				return false;
				}
				 if(strpos($message,'hi piggy') !== false) {
				$data['player']->sendChat("<Piggy> Helo!");
				return false;
				}
				if(strpos($message, 'im going to kill you') !== false) {
				$data['player']->sendchat("<Piggy> Pleas No!");
				return false;
				}
				if(strpos($message, 'where are you') !== false) {
				$data['player']->sendchat("<Piggy> Im just a pig im not a map lol!");
				return false;
				}
				if(strpos($message, 'helo') !== false) {
				$data['player']->sendchat("<Piggy> Helo!");
				return false;
				}
				else {
				return true;
				}
   break;
		}
	}

		public function touchHandler($data)
    			 {
       		  $target = $data["target"];
        		  $issuer = $data["player"];
       		  $username = $data["player"]->username;
       		  if ($target -> getID() === 58)
       		  {
          		  $getCraft = in_array($username, $this -> crafting);
           	  if ($getCraft === false)
                  {
                  $issuer->sendChat("<Piggy> Cool You Have Bench!");
                  $issuer->sendChat("<Piggy>". $username . "What Are You Going To Make Now");
                  array_push($this -> crafting, $username);
                  }
                  else
                  {
                  return;
                  }
			  }
			  }
                  


    public function pig(){

		/*
	define("MOB_PIG", 12);
		*/

	$pigg = strtolower(trim($npcname));
          switch ($pigys) {
          case "pig":
          $type = 12;

		}

	$entityit = $this->api->entity->add($this->api->level->getDefault(), ENTITY_MOB, $type, array(
        "x"      => $location->x,
        "y"      => $location->y,
        "z"      => $location->z,
        "Health" => 10,
        "mob" => $pigy
     			 ));

          break;
    		$breathes = true;
    		$dropsPork = true;
    		$walks = true;
		$swims = true;
     		$jumps = true;
		$flys = false;
		$dies = false;
		$turns = true;
		$chats = true;
		$moves = true;
		$follows = true;
		$breads = true;
		$eats = false;
    		$name;
    		$Pigy = new Pig(Piggy);
    }
  
    public function talk() {
          $this->api->chat->bradcast("My name is $pigy");
          $this->api->chat->bradcast("My name is $pigy");
           return  true;
    } 

    public function name() {
           $pigy = "Piggyala";
           $this->api->chat->bradcast("My name is $pigy"); 
           $this->api->chat->bradcast("Pleas Spare me!!");
           return  true;
    }
    

    public function __destruct(){}
}
?>
