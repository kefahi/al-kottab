<?php
class ApiController extends Controller
{
    // Members
    /**
     * Key which has to be in HTTP USERNAME and PASSWORD headers 
     */
    Const APPLICATION_ID = 'ASCCPE';

    public $layout='//layouts/api';


    public function actions()
    {
        return array(
        );
    }

    /**
     * Default response format
     * either 'json' or 'xml'
     */
    private $format = 'json';
    /**
     * @return array action filters
     */
    public function filters()
    {
            return array();
    }

    public function accessRules()
    {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions                
                'users'=>array('*'),
            ),
        );
    }

    public function actionIndex()
    {
        // Get the respective model instance
        $models = null;
    
        $model_class = $_GET['model']  ;
        $model_class[0] = strtoupper( $model_class[0]);
        $action = $_GET['action']  ;

        Yii::log(print_r( $model_class ::model()->$action()  , true) );
        exit;
    
        // // Did we get some results?
        // if(empty($models)) {
        //     // No
        //     $this->_sendResponse(200, 
        //             sprintf('No items where found for model <b>%s</b>', $_GET['model']) );
        // } else {
        //     // Prepare response
        //     $rows = array();
        //     foreach($models as $model)
        //         $rows[] = $model->attributes;
        //     // Send the response
        //     $this->_sendResponse(200, CJSON::encode($rows));
        // }
    }


    private function _getStatusCodeMessage($status)
    {
        // these could be stored in a .ini file and loaded
        // via parse_ini_file()... however, this will suffice
        // for an example
        $codes = Array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        );
        return (isset($codes[$status])) ? $codes[$status] : '';
    }

    private function _checkAuth()
    {
        // Check if we have the USERNAME and PASSWORD HTTP headers set?
        if(!(isset($_SERVER['HTTP_X_USERNAME']) and isset($_SERVER['HTTP_X_PASSWORD']))) {
            // Error: Unauthorized
            $this->_sendResponse(401);
        }
        $username = $_SERVER['HTTP_X_USERNAME'];
        $password = $_SERVER['HTTP_X_PASSWORD'];
        // Find the user
        $user=User::model()->find('LOWER(username)=?',array(strtolower($username)));
        if($user===null) {
            // Error: Unauthorized
            $this->_sendResponse(401, 'Error: User Name is invalid');
        } else if(!$user->validatePassword($password)) {
            // Error: Unauthorized
            $this->_sendResponse(401, 'Error: User Password is invalid');
        }
    }



}

