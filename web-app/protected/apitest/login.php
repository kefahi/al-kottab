<?php
require_once('../../simpletest/autorun.php');
require_once('../../simpletest/web_tester.php');
SimpleTest::prefer(new TextReporter());

class TestOfAlKottab extends WebTestCase {
    
    function testRegistration() {
    	$result = $this->post('http://al-kottab.net/index.php/api/users/create' , array ( 
    		'data' =>array(
    			'first_name'=> 'جعفر',
    			'second_name'=> 'تحسين',
    			'fourth_name'=> 'حسان',
		    	'gender'=> '1',
		    	'birth_date'=> '1985/5/25',
		    	'birth_location'=> 'Amman, Jordan',
		    	'address'=> 'Amman, Jordan',
		    	'national_id_type'=> '1',
		    	'national_id'=> '9851025050',
		    	'type'=> '4',
		    	'school_id'=> '0',
		    	'password'=> 'asd',
		    	'isApi'=> true,
		    	'user_name'=>'ameen'
    		)
    	)) ;
    	var_dump($result ) ;
        $result = json_decode($result) ; 
        $this->assertFalse ( $result->fault) ;
        var_dump($result);
        
    }


     function testLogin() {
     	$v =  array('data'=>json_encode(array( 'user_name' =>  'ameen','password' =>  'ameen'  ) ));
     	var_dump($this->post('http://al-kottab.net/index.php/api/users/login' ,   $v ) );
     }
}
