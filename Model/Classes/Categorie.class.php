<?php

class Categorie {
    private $id;
    private $libelle;
    private $image;
    private $active;

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function getImage() {
        return $this->image;
    }

    public function getActive() {
        return $this->active;
    }

    // Setters
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setActive($active) {
        $this->active = $active;
    }
}
