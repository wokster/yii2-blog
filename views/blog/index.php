<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel wokster\blog\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Blog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>




    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {check}',
                'buttons' => [
                    'check'=>function($url, $model, $key){
                        return Html::a('<i class="fa fa-check" aria-hidden="true"></i>',$url);
                    }
                ],
                'visibleButtons' => [
                    'check'=> function($model, $key, $index){
                        return $model->status_id === 1;
                    }
                ]

            ],
            'id',
            'title',
            ['attribute'=>'url', 'format'=>'raw'],
            ['attribute'=>'status_id','filter'=>\wokster\blog\models\Blog::STATUS_LIST,'value'=>'statusName'],
            'sort',
            'smallImage:image',
            'date_create:datetime',
            'date_update:datetime',
            ['attribute'=>'tags', 'value'=>'tagsAsString'],

        ],
    ]); ?>




<?php Pjax::end(); ?></div>
