<?php
require_once('../../simpletest/autorun.php');
require_once('../../simpletest/web_tester.php');
SimpleTest::prefer(new TextReporter());

class TestOfAlKottab extends WebTestCase {
    
    function testRegistration() {
    	$result = $this->post('http://al-kottab.net/index.php/api/schools/create' , array (
    		'data' =>array(
			'created_at' => time(),
			'updated_at'=> time(),
            'name'=>'مدرسة حنين',
            'description'=>'مدرسة ثانوية للبنين',
            'address'=>'حي العماوي، بل الأخضر عمان',
            'phones'=>'00962785168187',
            'notes'=>'ملاحظات',
            'admin_id'=>1
    		)
    	)) ;
    	print_r($result ) ;
        $result = json_decode($result) ; 
        //$this->assertFalse ( $result->fault) ;
        var_dump($result);
        
    }

/*
     function testLogin() {
     	$v =  array('data'=>json_encode(array( 'user_name' =>  'ameen','password' =>  'ameen'  ) ));
     	var_dump($this->post('http://al-kottab.net/index.php/api/users/login' ,   $v ) );
     }
*/
}
