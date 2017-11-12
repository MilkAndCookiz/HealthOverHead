<?php 

namespace HealthOverHead;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\scheduler\PluginTask;
use pocketmine\Plugin;
use pocketmine\utils\TextFormat;

 /**
 *  _____   ______   ______   _  _   _   ______
 * |  _ _| |  __  | |  __  | | |/ / |_| |  ____|
 * | |     |      | | |  | | |   /   _  | |___
 * | |     | |  | | | |  | | |  (   | | |  ___|
 * | |_ _  | |__| | | |__| | |   \  | | | |____
 * |_____| |______| |______| |_|\_\ |_| |______|
 * Coded by Cookie.
**/

class Funcion extends PluginTask {

	public function __construct($plugin){
		$this->plugin = $plugin;		
		parent::__construct($plugin); 
	}
	
	public function onRun($currentTick){
	  foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p){
	    $player = $p;
	    $p->setNameTag(TextFormat::GREEN . $p->getName() . "§c[" . ($player->getHealth() / $player->getMaxHealth() * 20)."]");
          }
     }
}
