<?php

namespace App\Models;

class Job extends BaseElement {

    public function __construct($title, $description) {
        $newTitle = 'Job: ' . $title;
        parent::__construct($newTitle, $description);
    }

    function getDurationString() {
      $years = floor($this->months / 12);
      $extraMonths = $this->months % 12;
      if($years > 0){
        if($extraMonths > 0){
          return "Job duration: $years years $extraMonths months";
        } else {
          return "Job duration: $years years";
        }  
      } else {
        return "Job duration: $extraMonths months";
      }  
    }
}

?>