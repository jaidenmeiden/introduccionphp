<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $table = 'jobs';

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