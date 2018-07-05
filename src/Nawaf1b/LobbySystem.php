/* soon */<?php

namespace Nawaf1b;

class LobbySystem extends pocketmine\plugin\PluginBase {

    public function onEnable() {
        $this->getServer()->getPluginManger()->registerEvents(new Event(),$this);
    }
    
    
}
class Player {
    
    public function __toString() {
        return "steve";
    }
    
    public function getPlayer(){
        return $this->p;
    }
    
    public function isInSpawn(){
        if(!$this->spawn){
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
