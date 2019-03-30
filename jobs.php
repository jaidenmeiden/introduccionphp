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
  public $title;
  public $description;
  public $visible;
  public $months;
}

$job1 = new Job();
$job1->title = 'PHP Developer';
$job1->description = 'This is an awesome job!!!';
$job1->visible = true;
$job1->months = 16;

$job2 = new Job();
$job2->title = 'Python Dev';
$job2->description = 'This is an awesome job!!!';
$job2->visible = false;
$job2->months = 14;

$job3 = new Job();  
$job3->title = 'Devops';
$job3->description = 'This is an awesome job!!!';
$job3->visible = true;
$job3->months = 24;

$job4 = new Job();
$job4->title = 'NodeJS Dev';
$job4->description = 'This is an awesome job!!!';
$job4->visible = true;
$job4->months = 22;

$job5 = new Job();
$job5->title = 'Frontend Dev';
$job5->description = 'This is an awesome job!!!';
$job5->visible = true;
$job5->months = 3;

$jobs = [
    $job1,    
    $job2,  
    $job3,  
    $job4,  
    $job5,  
  ];
  
  //var_dump($jobs);
?>