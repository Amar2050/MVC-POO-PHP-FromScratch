<?php

class GameController {
    private $gameManager;




}


  
require_once "GameManager.php";
$gameManager = new GameManager();
$gameManager->loadGames();
$games = $gameManager->getGames();

