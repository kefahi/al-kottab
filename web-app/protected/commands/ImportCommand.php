<?php
class ImportCommand extends CConsoleCommand {
  
  public function run($args) {
    $studentImportFlag = false;
    $contactImportFlag = false;
    $usersRelation = false;
    $subjects = true;
    if ($studentImportFlag) $this->importStudent;
    if ($contactImportFlag) $this->importContact();
    if ($usersRelation) $this->importContactRelation();
    if ($subjects) $this->importSubjects();

  }

  public function importSubjects(){
    $i = 1 ;
    $file_path = dirname(__FILE__) . '/../data/courses.csv';
    $file = fopen($file_path, "r");
    if(!isset($file)) { echo "Failed to open file\n"; die();}
    $count = 1;

    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
      $subject = new Subjects();
      $subject->created_at  = $subject ->updated_at  = time() ;
      $subject->name = $subject->description =  $data[2];
      $subject->id_string  = $data[1];
      $subject->class_id = 0;

      if(!$subject->save()){
        print_r($subject->errors); 
        print_r($data) ;
        //exit;
      }else { 
          echo "Created new entry : " . $subject->id, PHP_EOL;
          $count++;
      }
    }
  }

  public function importContactRelation() {
    $i = 1 ;
    $file_path = dirname(__FILE__) . '/../data/contactrelation.csv';
    $file = fopen($file_path, "r");
    if(!isset($file)) { echo "Failed to open file\n"; die();}
    $count = 1;

    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
      $parent = Users::model()->findByAttributes( array('user_name'=>$data[1] ) );
      $student = Users::model()->findByAttributes( array('user_name'=>$data[0] ) );
      
      if(isset( $parent ) && isset( $student ) ){
        $student->guardian_id = $parent->id ;
        if(!$student->save() ) print_r($student->errors);
        else echo 'success' ;
      }
      else echo 'there is an error(' .$data[1]  . '-'  . $data[0] . ') ('  . isset($parent) . "-" . isset($student) .')' . "\n" ;

    }



  }

  public function importContact() {
    $i = 1 ;
    $file_path = dirname(__FILE__) . '/../data/contactpersons.csv';
    $file = fopen($file_path, "r");
    if(!isset($file)) { echo "Failed to open file\n"; die();}
    $count = 1;

    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
      $people  = new Users;
      $people->user_name =$people->password = $people->id_string =  $data[0] ;
      $people->first_name = $data[2] ;
      $people->second_name = 'EMPTY' ;
      $people->fourth_name = $data[4] ;
      $people->address = $data[6] ;
      $people->mobiles= $data[16] ;
      $people->land_line= $data[16] ;
      $people->national_id = 99 ;
      $people->birth_location =  $data[8] ;
      $people->type = 2 ;
      $people->gender = 3 ;
      $people->birth_date = 
      $people ->created_at  = $people ->updated_at  = time() ;
      $people ->birth_date =strtotime( rand(1 , 28) . "-" . rand(1 , 12)."-" . rand(1970 , 1985) );
      $people ->national_id_type = 4;
    
      if(!$people->save()){
        print_r($people->errors); 
        print_r($data) ;
        exit;
         }
        else { 
          echo "Created new entry : " . $people->id, PHP_EOL;
          $count++;
        }

        echo "completed importing $count entries\n";
      }
    }



  public function importStudent() {
    $i = 1 ;
    $file_path = dirname(__FILE__) . '/../data/persons.csv';
    $file = fopen($file_path, "r");
    if(!isset($file)) { echo "Failed to open file\n"; die();}
    $count = 1;

    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
      $people  = new Users;
      $people ->id_string = $data[0] ;
      $people ->user_name = $data[0] ;
      $people ->created_at  = $people ->updated_at  = time() ;
      $people ->second_name = "EMPTY";
      $people ->birth_date =strtotime( rand(1 , 28) . "-" . rand(1 , 12)."-" . rand(1990 , 1992) );
      $people ->birth_location = $data[13];
      $people ->national_id_type = 4;
      $people ->type = 4;
      $people ->first_name = $data[2] ;
      $people ->first_name = $data[2] ;
      $people ->fourth_name = $data[4] ;
      $people ->gender = $data[8]=='male'?1:2;
      $people->password =  $data[9] ;
      $people->id = (int)$data[10] + 4 ;
      $people->address = $data[13] . "/" . $data[14];

      if(!$people->save()){
        print_r($people->errors); 
        print_r($data) ;
        //exit;
         }
        else { 
          echo "Created new entry : " . $people->id, PHP_EOL;
          $count++;
        }

        echo "completed importing $count entries\n";
      }
    }
}


