<?php

class Commande {
    private $id;
    private $id_plat;
    private $quantite;
    private $total;
    private $date_commande;
    private $etat;
    private $nom_client;
    private $telephone_client;
    private $email_client;
    private $adresse_client;

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getIdPlat() {
        return $this->id_plat;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getDateCommande() {
        return $this->date_commande;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function getNomClient() {
        return $this->nom_client;
    }

    public function getTelephoneClient() {
        return $this->telephone_client;
    }

    public function getEmailClient() {
        return $this->email_client;
    }

    public function getAdresseClient() {
        return $this->adresse_client;
    }

    // Setters
    public function setIdPlat($id_plat) {
        $this->id_plat = $id_plat;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function setDateCommande($date_commande) {
        $this->date_commande = $date_commande;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }

    public function setNomClient($nom_client) {
        $this->nom_client = $nom_client;
    }

    public function setTelephoneClient($telephone_client) {
        $this->telephone_client = $telephone_client;
    }

    public function setEmailClient($email_client) {
        $this->email_client = $email_client;
    }

    public function setAdresseClient($adresse_client) {
        $this->adresse_client = $adresse_client;
    }
}
