<?php

class student {
  public $name;
  public $id;
  public $dob;
  public $courses = array("SE","COE","C#");
  function show_info() {  
    return $this->name;
    return $this->id;
    return $this->dob;
  }
  function AddCourse($coursename){
      $this->coursename=$coursename;
    array_push($courses,$coursename);
  }
  function showallcourses(){
    return $this->name;
    return $this->id;
    return $this->courses;
  }
}
$student1 = new student("Marina","02","06-12-99"); 

echo $student1->show_info(). "<br>";
$student1->AddCourse("ATP3");
echo $student1->showallcourses();

?>