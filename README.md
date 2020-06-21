# ScoreBoardBW

A simple scoreboard for your server. I will implement configuration if lots of requests about editing in config.

Bottom of the image is the preview after installed the plugin.

![image](https://i.ibb.co/KGCWs88/Screenshot-20200621-135502-Minecraft.jpg)

## Editing Title

"world" is default selector of the world that scoreboard activates in.

```csharp
$this->loader->getScore()->new ($player, "world", "§eServer");
```

## Adding Lines

You cannot add more than 15 lines.

```csharp
$this->loader->getScore()->setLine($player, 1 ,"Your Text"; // 1 means the first line
```

```csharp
$this->loader->getScore()->setLine($player, 15 ,"Your Text"; // 15 means the last line
```