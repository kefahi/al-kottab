<?php if(Yii::app()->user->isGuest)  $this->renderPartial('/site/login' , array('model'=>$model)) ;
else    $this->renderPartial('/site/home' , array('model'=>$model , 'classes'=>$classes , 'teacher'=>$teacher)) ;
?>