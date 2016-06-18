<?php
/* @var $this yii\web\View */

use backend\modules\callback\models\Callback;
use backend\modules\common\models\GiftRequest;
use backend\modules\common\models\NewsSubscribe;
use backend\modules\store\models\StoreOrder;
use yii\helpers\Html;
use yii\widgets\Pjax;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php Pjax::begin(); ?>
    <div class="body-content">
        <?= \backend\widgets\lastItemsGrid\Widget::widget([
            'model' => new StoreOrder(),
            'label' => 'Заказы',
            'buttonsPath' => '/store/store-order'
        ]) ?>
        <?= \backend\widgets\lastItemsGrid\Widget::widget([
            'model' => new Callback(),
            'label' => 'Запросы обратного звонка',
            'buttonsPath' => '/callback/callback'
        ]) ?>
        <?= \backend\widgets\lastItemsGrid\Widget::widget([
            'model' => new GiftRequest(),
            'label' => 'Запросы на подбор подарка',
            'buttonsPath' => '/common/gift-request'
        ]) ?>
        <?= \backend\widgets\lastItemsGrid\Widget::widget([
            'model' => new NewsSubscribe(),
            'label' => 'Запросы на подписку',
            'buttonsPath' => '/common/news-subscribe'
        ]) ?>
    </div>
    <?= Html::a("Refresh", ['site/index'], ['class' => 'btn btn-lg btn-primary hidden', 'id' => 'refreshButton']) ?>
    <?php Pjax::end(); ?>
</div>
