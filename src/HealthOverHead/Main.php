<?php

namespace HealthOverHead;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\permission\ServerOperator;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\scheduler\PluginTask;
use pocketmine\event\entity\EntityDamageEvent;

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
        $this->getLogger()->info(TextFormat::BLUE . "HealthOverHead coded by CookieCode enabled.");
		    $this->getServer()->getPluginManager()->registerEvents($this,$this);
	    	$this->getServer()->getScheduler()->scheduleRepeatingTask(new Funcion($this),10);
    }
    
    public function onDisable(){
        $this->getLogger()->info(TextFormat::BLUE . "HealthOverHead disabled.");
    }
	
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
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
