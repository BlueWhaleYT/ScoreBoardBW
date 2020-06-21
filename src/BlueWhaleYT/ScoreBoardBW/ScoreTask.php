<?php

namespace BlueWhaleYT\ScoreBoardBW;

use pocketmine\{Server, Player};

use pocketmine\scheduler\Task;

use pocketmine\level\Level;

use BlueWhaleYT\ScoreBoardBW\Main;

class ScoreTask extends Task {
  
  
  public $loader;
  public function __construct(Main $loader){
    $this->loader = $loader;
  }
  
  public function onRun($task){
    foreach(Server::getInstance()->getDefaultLevel()->getPlayers() as $player){
      $this->loader->getScore()->new ($player, "world", "§eServer");
      $this->loader->getScore()->setLine($player, 1 ,"§fPlayer: §b" . $player->getName());
      
      // 1 is the first line, 15 is the last line
      
      // Limit is 15 lines, add by yourself, just editing your text inside the ""
    }
  }
}
