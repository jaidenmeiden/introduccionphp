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
  public $visible;
  public $months;

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

$job1 = new Job();
$job1->setTitle('PHP Developer');
$job1->description = 'This is an awesome job!!!';
$job1->visible = true;
$job1->months = 16;

$job2 = new Job();
$job2->setTitle('Python Dev');
$job2->description = 'This is an awesome job!!!';
$job2->visible = false;
$job2->months = 14;

$job3 = new Job();  
$job3->setTitle('Devops');
$job3->description = 'This is an awesome job!!!';
$job3->visible = true;
$job3->months = 24;

$job4 = new Job();
$job4->setTitle('NodeJS Dev');
$job4->description = 'This is an awesome job!!!';
$job4->visible = true;
$job4->months = 22;

$job5 = new Job();
$job5->setTitle('Frontend Dev');
$job5->description = 'This is an awesome job!!!';
$job5->visible = true;
$job5->months = 3;

$job6 = new Job();
$job6->setTitle('');
$job6->description = 'This is an awesome job!!!';
$job6->visible = true;
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