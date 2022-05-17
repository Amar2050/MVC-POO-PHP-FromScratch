<?php

require_once "GameManager.php";
class GameController {
    private $gameManager;


    public function __construct(){
        $this->gameManager = new GameManager();
        $this->gameManager->loadGames();        
    }


}


  
// $games = $gameManager->getGames();

