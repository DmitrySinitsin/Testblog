<?php



namespace app\controllers;
use app\models\Post;

/**
 * Description of PostController
 *
 * @author 20150519
 */
class PostController extends AppController {
    
    public function actionIndex(){
//        $posts = Post::find()->select('id, title, excerpt')->orderBy('id DESC')->all();
        $query = Post::find()->select('id, title, excerpt')->orderBy('id DESC');
        $pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 2,'pageSizeParam'=>false,'forcePageParam'=>false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        //$this->debug($posts);
        //debug($posts);
        return $this->render('index', compact('posts','pages'));
    }
    
    public function actionView() {
        $id = \Yii::$app->request->get('id');//получение из массива гет параметров идентификатора записи
        $post = Post::findOne($id);
        if(empty($post)) throw new \yii\web\HttpException(404, 'Вай вай вай, такой страницы нет!');
        return $this->render('view', compact('post'));
    }
    
    public function actionTest(){
        return $this->render('test');
    }
    
    public function actionHello(){
        return $this->render('hello');
    }
}
