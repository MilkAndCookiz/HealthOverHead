<?php

namespace HealthOverHead;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\scheduler\PluginTask;
use pocketmine\event\entity\EntityDamageEvent;

//Coded by CookieCode.

class Main extends PluginBase implements Listener{
  
    public function onEnable(){
        $this->getLogger()->info(TextFormat::BLUE . "HealthOverHead coded by CookieCode enabled.");
		    $this->getServer()->getPluginManager()->registerEvents($this,$this);
	    	$this->getServer()->getScheduler()->scheduleRepeatingTask(new Funcion($this),10);
    }
    
    public function onDisable(){
        $this->getLogger()->info(TextFormat::BLUE . "HealthOverHead disabled.");
    }
	
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch($command->getName()){
 
            case "healthoverhead":

$sender->sendMessage(TextFormat::YELLOW."------------");
$sender->sendMessage(TextFormat::GREEN."HealthOverHead created by CookieCode. Twitter : @ImCookieGame");
$sender->sendMessage(TextFormat::RED."Youtube : ImCookieGame");
$sender->sendMessage(TextFormat::YELLOW."------------");


return true;

}
}
}
