<?php



namespace app\controllers;

/**
 * Description of PostController
 *
 * @author 20150519
 */
class PostController extends AppController {
    public function actionIndex($name= 'Гостинец'){
        $hello = 'Привет, мир!';
        $hi = 'Hi!!!!!';
        return $this->render('index',compact('hello','hi', 'name'));
    }
    public function actionTest(){
        return $this->render('test');
    }
}
