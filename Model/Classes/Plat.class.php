<?php

class Plat {
    private $id;
    private $libelle;
    private $description;
    private $prix;
    private $image;
    private $id_categorie;
    private $active;

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getImage() {
        return $this->image;
    }

    public function getIdCategorie() {
        return $this->id_categorie;
    }

    public function getActive() {
        return $this->active;
    }

    // Setters
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setIdCategorie($id_categorie) {
        $this->id_categorie = $id_categorie;
    }

    public function setActive($active) {
        $this->active = $active;
    }
}