<?php 

class Project {
    private $student  = [];

    public function addstudent($name){
        if(count($this->student) < 5){
            $this->student [] = $name ; 
        }else{
            throw new Exception("The Project Team Full ");
        }
    }
}

try{
$project = new Project(); 
$project->addstudent('ahmed');
$project->addstudent('ahmed');
$project->addstudent('ahmed');
$project->addstudent('ahmed');
$project->addstudent('ahmed');
$project->addstudent('ahmed');
}catch(Exception $error){
    echo $error->getMessage() ;
}