<?php

namespace HealthOverHead;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\scheduler\ClosureTask;

class Main extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getScheduler()->scheduleRepeatingTask(new ClosureTask(
            function(): void {
                $this->updateAllPlayerNames();
            }
        ), 20); // Update every second (20 ticks)
    }

    public function onPlayerJoin(PlayerJoinEvent $event): void {
        $this->updatePlayerName($event->getPlayer());
    }

    private function updateAllPlayerNames(): void {
        foreach ($this->getServer()->getOnlinePlayers() as $player) {
            $this->updatePlayerName($player);
        }
    }

    private function updatePlayerName($player): void {
        $health = $player->getHealth();
        $maxHealth = $player->getMaxHealth();
        $healthPercentage = ($health / $maxHealth) * 100;
        
        $color = $this->getHealthColor($healthPercentage);
        $displayName = $player->getName() . " " . $color . "[" . round($healthPercentage) . "%]";
        
        $player->setNameTag($displayName);
    }

    private function getHealthColor(float $percentage): string {
        if ($percentage > 75) {
            return TextFormat::GREEN;
        } elseif ($percentage > 50) {
            return TextFormat::YELLOW;
        } elseif ($percentage > 25) {
            return TextFormat::GOLD;
        } else {
            return TextFormat::RED;
        }
    }
}