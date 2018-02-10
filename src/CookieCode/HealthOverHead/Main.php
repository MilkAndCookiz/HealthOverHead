<?php

namespace CookieCode\HealthOverHead;

//Commands
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;
//Events
use pocketmine\event\Listener;
//Mains
use pocketmine\Server;

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
     $this->getServer()->getLogger()->info(TF::LIGHT_PURPLE . "[HealthOverHead]" . TF::GREEN . " Plugin enabled by CookieCode");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	  	$this->getServer()->getScheduler()->scheduleRepeatingTask(new HealthTask($this),10);
	}
    
	public function onDisable(){
        $this->getServer()->getLogger()->info(TF::LIGHT_PURPLE . "[HealthOverHead]" . TF::GREEN . " Plugin disabled by CookieCode");
	}
}
