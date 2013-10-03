<?php
echo "{
data: [{
              name: 'Ahmed',
                      dob : '21/5/1999',
                      attend_at : '1/1/2012',
                      mobile : '0791234567',
                      parent_mobile : '0799123456' ,
                      parent : {
                              name: 'Ahmed',
                              dob : '21/5/1999',
                              attend_at : '1/1/2012',
                              mobile : '0791234567' , 
                                email: 'parent@example.com'
                       } , 
                       score :  [  { 'name' : 'math'  , 'score' : 1 } , { 'name' : 'history'  , 'score' : 15   }  , {  'name' : 'Scinse'  , 'score' : 25   } ]
      }]
} "; 

