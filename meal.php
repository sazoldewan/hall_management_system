<?php
   class Meal {
      /* Member variables */
      var $name;
      var $date;
      var $breakfast;
      var $lunch;
      var $dinner;
      
      function __construct( $name, $date ,$breakfast, $lunch, $dinner) {
           $this->name = $name;
           $this->date = $date;
           $this->breakfast = $breakfast;
           $this->lunch = $lunch;
           $this->dinner = $dinner;
      }

      /* Member functions */
      function setName($par){
         $this->name = $par;
      }
      function getName(){
         echo $this->name ."<br/>";
      }
      function setDate($par){
         $this->date = $par;
      }
      function getDate(){
         echo $this->date ." <br/>";
      }

      function setBreakfast($par){
         $this->breakfast = $par;
      }
      function getLunch(){
         echo $this->lunch ."<br/>";
      }
      function setDinner($par){
         $this->dinner = $par;
      }
      function getDinner(){
         echo $this->dinner ." <br/>";
      }
   }