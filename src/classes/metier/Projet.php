<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\classes\metier;

use DeepCopy\TypeFilter\Date;
use App\Exceptions\AppException;
/**
 * Projets en cours dans notre ESN
 *
 * @author egor.gututui
 */
class Projet {
    private int $id;
    private string $nom;
    private Date $dateDebut;
    private int $dureePrevue;
    
    public function __construct(int $id, string $nom, Date $dateDebut, int $dureePrevue) {
        $this->id = $id;
        $this->nom = $nom;
        
        $dateActuelle = date(d-m-Y);
        if($dateDebut >= $dateActuelle){
            $this->dateDebut = $dateDebut;
        }else {
            throw new AppException("La date du début de projet ne peut pas etre anterieur à la date du jour");
        }
        
        $this->dureePrevue = $dureePrevue;
    }
    
    public function getId(): int {
        return $this->id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getDateDebut(): Date {
        return $this->dateDebut;
    }

    public function getDureePrevue(): int {
        return $this->dureePrevue;
    }

    public function setDureePrevue(int $dureePrevue): void {
        if($dureePrevue <= 0){
            throw new AppException("La durée prévue du projet (en nombre de jours) doit etre superieur stricte à 0");
        }else{
            $this->dureePrevue = $dureePrevue;
        }
    }    
}
