# ScoreBoardBW

A simple scoreboard for your server. I will implement configuration if lots of requests about editing in config.

Bottom of the image is the preview after installed the plugin.

![image](https://i.ibb.co/KGCWs88/Screenshot-20200621-135502-Minecraft.jpg)

## Adding Lines

```
$this->loader->getScore()->setLine($player, 1 ,"§fPlayer: §b" . $player->getName());
```