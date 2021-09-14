<?php

class student {
  public $name;
  public $id;
  public $dob;
  public $courses=[];
  
 
  function show_info() {  
    echo"Name: $this->name<br>";
    echo"Id: $this->id <br>";
    echo"DOB: $this->dob <br>";
  }
  function AddCourse($coursename){
    array_push($this->courses,$coursename);
  }
  function showallcourses(){
    echo"Name: $this->name <br>";
    echo"Id: $this->id <br>";
    foreach($this->courses as $c){
        echo "$c <br>";
    }
  }
}
$student1 = new student("Marina","02","06-12-99"); 
echo $student1->show_info(). "<br>";
$student1->AddCourse("ATP3");
echo $student1->showallcourses();
$student1->AddCourse("SQT");
echo $student1->showallcourses();

?>
