<?php

class cliente {
    public $codcli;
    public $nombre;
    public $mail;
    public $psw;
    
    function __construct($codcli, $nombre, $mail, $psw) {
        $this->codcli = $codcli;
        $this->nombre = $nombre;
        $this->mail = $mail;
        $this->psw = $psw;
    }
    
    function getCodcli() {
        return $this->codcli;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getMail() {
        return $this->mail;
    }

    function getPsw() {
        return $this->psw;
    }

    function setCodcli($codcli) {
        $this->codcli = $codcli;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setPsw($psw) {
        $this->psw = $psw;
    }



}
