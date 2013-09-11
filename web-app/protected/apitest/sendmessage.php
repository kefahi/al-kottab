<?php
require_once('../../simpletest/autorun.php');
require_once('../../simpletest/web_tester.php');
SimpleTest::prefer(new TextReporter());

class TestOfAlKottab extends WebTestCase {
    
    function testRegistration() {
    	$result = $this->post('http://al-kottab.net/index.php/api/messages/create' , array ( 
    		'data' =>array(
			'created_at' => time(),
			'updated_at'=> time(),
			'sender_id'=>2,
			'recipient_id'=>1,
			'body'=>'رسالة اختبارية..... اذا استطعت ان تقرئهاه فغني بعبك',
			'subject'=>'رسالة اختبارية',
			'delivery_status'=> true,
			'delivery_method'=>2,
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
