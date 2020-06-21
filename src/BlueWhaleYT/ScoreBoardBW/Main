<?php

namespace BlueWhaleYT\ScoreboardBW;

use pocketmine\plugin\PluginBase;

use BlueWhaleYT\ScoreboardBW\ScoreAPI\ScoreAPI;
use BlueWhaleYT\ScoreboardBW\ScoreTask;

class Main extends PluginBase {
  
  public static $loader;
  public static $score;
  
  public function onLoad(){
    self::$loader = $this;
  }
  
  public function onEnable(){
    self::$score = new ScoreAPI($this);
    $this->getScheduler()->scheduleRepeatingTask(new ScoreTask($this),20);
    $this->getLogger()->info("§aScoreboard activated");
  }
  
  public static function getInstance (){
    return sefl::$loader;
  }
  
  public static function getScore(){
    return self::$score;
  }
}
