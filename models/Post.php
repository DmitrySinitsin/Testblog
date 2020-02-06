<?php


namespace app\models;
use yii\db\ActiveRecord;
/**
 * Description of Post
 *
 * @author 20150519
 */
class Post extends ActiveRecord {
   
    public static function tableName() {
        return 'post';//привязка модели к имени таблицы в базе данных в случае, если имя модели отличается от имени таблицы
    }
}
