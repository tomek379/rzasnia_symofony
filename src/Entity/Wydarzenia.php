<?php

namespace App\Entity;

use App\Repository\WydarzeniaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WydarzeniaRepository::class)
 */
class Wydarzenia
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

   /**
     * @ORM\Column(type="string")
     */
    private $title;
    
    /**
     * @ORM\Column(type="string")
     */
    private $data_dodania;
    
    /**
     * @ORM\Column(type="string")
     */
    private $title_folder;
    
    /**
     * @ORM\Column(type="text")
     */
    private $opis_krotki;
    
    /**
     * @ORM\Column(type="text")
     */
    private $opis_dlugi;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $ilosc_zdjec;
    
    /**
     * @ORM\Column(type="string")
     */
    private $dodal;
    
    public function getId(){
        return $this->id;
    }
    
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title=$title;
    }
    
    public function getData_dodania(){
        return $this->data_dodania;
    }
    public function setData_dodania($data_dodania){
        $this->data_dodania=$data_dodania;
    }
    
    public function getTitle_folder(){
        return $this->title_folder;
    }
    public function setTitle_folder($title_folder){
        $this->title_folder=$title_folder;
    }
    
    public function getOpis_krotki(){
        return $this->opis_krotki;
    }
    public function setOpis_krotki($opis_krotki){
        $this->opis_krotki=$opis_krotki;
    }
    
    public function getOpis_dlugi(){
        return $this->opis_dlugi;
    }
    public function setOpis_dlugi($opis_dlugi){
        $this->opis_dlugi=$opis_dlugi;
    }
    
    public function getIlosc_zdjec(){
        return $this->ilosc_zdjec;
    }
    public function setIlosc_zdjec($ilosc_zdjec){
        $this->ilosc_zdjec=$ilosc_zdjec;
    }
    
    public function getDodal(){
        return $this->dodal;
    }
    public function setDodal($dodal){
        $this->dodal=$dodal;
    }
}
