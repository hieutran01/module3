<?php 
// class Base{
//      public final function show(){
//          echo "Base::show() called.";
//      }
//     }

// class Derived extends Base{
//      public function show(){
//          echo "Derived::show() called.";
//      }
//     }

// $base = new Derived();
// $base->show(); 


//  class Student{
//      public $name;
//       function __construct($name){
//         $this->name = $name; 
//       }
// function __toString(){
//      return "Student[name = $this->name]"; 
// }
//       }
// $trung = new Student("Trung");
//  $cuc = $trung;
// $cuc = null; 
// echo $trung; 
// echo $cuc; //kq = Student[name = Trung]



//  class MyClass{
//      public static function show(){
//          echo "Myclass::show() called.";
//      }
//     }

// MyClass::show(); //kq = Myclass::show() called.
class Staff
{
     static function show(){
          echo 'Staff class.';
     }
}

Staff::show();
?>