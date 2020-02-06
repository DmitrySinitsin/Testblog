<?php

namespace app\controllers;
use \yii\web\Controller;

/**
 * Description of AppController
 *
 * @author 20150519
 */
class AppController extends Controller {
    
    public function debug($arr){
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}
