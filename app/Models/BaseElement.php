<?php

namespace App\Models;

class BaseElement implements Printable {
    private $title;
    public $description;
    public $visible = true;
    public $months;
  
    public function __construct($title, $description) {
      $this->setTitle($title);
      $this->description = $description;
    }
  
    public function getTitle(){
      return $this->title;
    }
  
    public function setTitle($title){
      if($title == "") {
        $this->title = 'N/A';
      } else {
        $this->title = $title;
      }    
    }

    public function getDescription() {
      return $this->description;
    }
  
    public function getVisible(){
      return $this->visible;
    }
  
    public function setVisible($visible){
      $this->visible = $visible;  
    }
  
    function getDurationString() {
      $years = floor($this->months / 12);
      $extraMonths = $this->months % 12;
      if($years > 0){
        if($extraMonths > 0){
          return "$years years $extraMonths months";
        } else {
          return "$years years";
        }  
      } else {
        return "$extraMonths months";
      }  
    }
  }

?>