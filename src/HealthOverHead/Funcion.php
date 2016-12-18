<?php 

namespace HealthOverHead;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\scheduler\PluginTask;
use pocketmine\Plugin;

//Coded by CookieCode.

class Funcion extends PluginTask {

	public function __construct($plugin){
		$this->plugin = $plugin;		
		parent::__construct($plugin); 
	}
	
	public function onRun($tick){
	  foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p){
	    $player = $p;
	    $p->setNameTag($p->getName() . "\n" . ($player->getHealth() / $player->getMaxHealth() * 20)."§c♥");
	  }
	}
}
