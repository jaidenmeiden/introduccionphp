<?php
//$jobs = [
//  'PHP Developer',
//  'Python Dev',
//  'Devops'
//];

//$jobs = [
//  0 => 'PHP Developer',
//  1 => 'Python Dev',
//  2 => 'Devops'
//];

class Job {
  private $title;
  public $description;
  public $visible = true;
  public $months;

  public function __construct($title, $description) {
    if($title == "") {
      $this->title = 'N/A';
    } else {
      $this->setTitle($title);
    } 
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

$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Dev', 'This is an awesome job!!!');
$job2->months = 14;

$job3 = new Job('Devops', 'This is an awesome job!!!');
$job3->months = 24;

$job4 = new Job('NodeJS Dev', 'This is an awesome job!!!');
$job4->months = 22;

$job5 = new Job('Frontend Dev', 'This is an awesome job!!!');
$job5->setVisible(false);
$job5->months = 3;

$job6 = new Job('', 'This is an awesome job!!!');
$job6->months = 3;

$jobs = [
    $job1,    
    $job2,  
    $job3,  
    $job4,  
    $job5,  
    $job6
  ];
  
  //var_dump($jobs);
?>