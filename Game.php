<?php

class Game {


    private $id;
    private $title;
    private $nb_players;

    public function __construct($id,$title,$nb_players){

        $this->id = $id;
        $this->title = $title;
        $this->nb_players = $nb_players;
        
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of nb_players
     */ 
    public function getNb_players()
    {
        return $this->nb_players;
    }

    /**
     * Set the value of nb_players
     *
     * @return  self
     */ 
    public function setNb_players($nb_players)
    {
        $this->nb_players = $nb_players;

        return $this;
    }
}