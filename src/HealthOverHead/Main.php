<?php

namespace HealthOverHead;

//Commands
use pocketmine\command\{Command, CommandSender, CommandExecutor};
use pocketmine\plugin\PluginBase;
use pocketmine\utils\{TextFormat, Config};
use pocketmine\permission\ServerOperator;
//Events
use pocketmine\event\Listener;
use pocketmine\event\player\{PlayerJoinEvent, PlayerCommandPreprocessEvent};
use pocketmine\event\entity\EntityDamageEvent;
//Mains
use pocketmine\scheduler\PluginTask;
use pocketmine\{Player, Server};

 /**
 *  _____   ______   ______   _  _   _   ______
 * |  _ _| |  __  | |  __  | | |/ / |_| |  ____|
 * | |     |      | | |  | | |   /   _  | |___
 * | |     | |  | | | |  | | |  (   | | |  ___|
 * | |_ _  | |__| | | |__| | |   \  | | | |____
 * |_____| |______| |______| |_|\_\ |_| |______|
 * Coded by Cookie.
**/

class Main extends PluginBase implements Listener{
  
	public function onEnable(){
       		$this->getLogger()->info(TextFormat::BLUE . "HealthOverHead by CookieCode enabled.");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	    	$this->getServer()->getScheduler()->scheduleRepeatingTask(new Function($this),10);
	}
    
	public function onDisable(){
        $this->getLogger()->info(TextFormat::BLUE . "HealthOverHead disabled.");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
	switch($cmd->getName()){
 
		case "healthoverhead":

		$sender->sendMessage(TextFormat::YELLOW."------------");
		$sender->sendMessage(TextFormat::GREEN."HealthOverHead created by CookieCode. Twitter : @ImCookieGame");
		$sender->sendMessage(TextFormat::RED."Youtube : ImCookieGame");
		$sender->sendMessage(TextFormat::YELLOW."------------");
		
		return true;
		}
	}
}
