<?php

namespace backend\models;
use backend\modules\categoria\models\Categoria;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use Yii;
/*modificar cuando se agregan nuevos articulos*/
/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property integer $categoria
 * @property string $precio
 * @property string $body
 * @property integer $photo
 * @property integer $status
 * @property string $created_at
 * @property integer $created_by
 * 
 * @property Categoria $categoria
 * 
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title','categoria','precio', 'body', 'photo', 'created_at', 'created_by'], 'required'],
            [['title','precio', 'body'], 'string'],
            [['categoria','photo', 'status', 'created_by'], 'integer'],
            [['created_at'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'categoria'=>'Categoria',
            'precio'=>'Precio',
            'body' => 'Body',
            'photo' => 'Photo',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
     /**
     * Gets query for [[Categoria]].
     *
     * @return \yii\db\ActiveQuery
     */
   
   public function getCategoria()
   {
       return $this->hasOne(Categoria::className(), ['id' => 'categoria_id']);
   }//relacion

   public static function getCategorias(){
    $categoria = Article::find(['id', 'categoria'])->all();
    
    return ArrayHelper::map($categoria, 'categoria', 'categoria');
}
public function getNombrecompleto()
   {
       return $this->id." ".$this->title;
   }//relacion
    
}
