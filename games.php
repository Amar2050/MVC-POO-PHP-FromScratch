<?php  
require_once "Game.php";
require_once "GameManager.php";

$game1 = new Game(1,"Tarkov", 13);
$game2 = new Game(2,"Lemnis Gate", 10);
$game3 = new Game(3,"Mario Party 280", 7);
$game4 = new Game(4,"Rayman", 1);

$gameManager = new GameManager();

$gameManager->addGame($game1);
$gameManager->addGame($game2);
$gameManager->addGame($game3);
$gameManager->addGame($game4);

$games = $gameManager->getGames();

ob_start(); 
?>

<table class="table  table-hover text-center shadow">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Nombres de joueurs</th>
      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>

     <?php foreach($games as $game) :?>
        <tr>
          <td><?= $game->getTitle() ?></td>
          <td><?= $game->getNbPlayers() ?></td>
          <td><a href=""><i class="fa-solid fa-edit"></i></a></td>
          <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
        </tr>
     <?php endforeach; ?>   

  </tbody>
</table>

<a class="btn btn-success w-25 d-block m-auto" href="">Ajouter un jeu</a>

<?php

$content =ob_get_clean();
$title = "Liste de jeux";
require_once "base.html.php";

?>


