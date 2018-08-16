<?php 

namespace CookieCode\HealthOverHead;

use pocketmine\{Server, Player};
use pocketmine\scheduler\Task;
use pocketmine\Plugin;
use pocketmine\utils\TextFormat as TF;

 /**
 *  _____   ______   ______   _  _   _   ______
 * |  _ _| |  __  | |  __  | | |/ / |_| |  ____|
 * | |     |      | | |  | | |   /   _  | |___
 * | |     | |  | | | |  | | |  (   | | |  ___|
 * | |_ _  | |__| | | |__| | |   \  | | | |____
 * |_____| |______| |______| |_|\_\ |_| |______|
 * Coded by Cookie.
**/

class HealthTask extends Task {

	public function __construct($plugin){
		$this->plugin = $plugin;
	}
	
	public function onRun($currentTick){
		foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p){
			$player = $p;
			if(!$p->isOp()){
				$p->setNameTag(TF::YELLOW . $p->getName() . "§c[" . ($player->getHealth() / $player->getMaxHealth() * 20)."]");
			}else{
				$p->setNameTag(TF::BLUE . $p->getName() . "§c[" . ($player->getHealth() / $player->getMaxHealth() * 20)."]");
			}
		}
	}
}
