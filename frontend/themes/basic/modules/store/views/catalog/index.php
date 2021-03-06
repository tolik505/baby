<?php
/**
 * @var $category \app\modules\store\models\StoreCategory
 * @var $dataProvider \yii\data\ActiveDataProvider
 */

$this->registerLinkTag(['rel' => 'canonical', 'href' => \yii\helpers\Url::canonical()]);
?>
    <div class="breadcrumb">
        <?= $category->getBreadCrumbs() ?>
    </div>
    <h1><span class="h1-top"><?= $category->label ?></span></h1>
    <div class="category-info">
        <p><?= $category->description ?></p>
    </div>
    <div class="product-filter">
        <div class="display">
            <label><?= \Yii::t('front', 'Display:') ?></label>
            <p><span id="list" class="list_on"></span> <span id="grid" onclick="display('grid');"></span></p>
        </div>
        <?= \app\modules\store\widgets\sortItems\Widget::widget() ?>
        <?= \app\modules\store\widgets\limitItems\Widget::widget() ?>
    </div>
<?= \frontend\components\CatalogListView::widget([
    'dataProvider' => $dataProvider,
    'layout' => '{items}',
    'itemOptions' => ['class' => 'catalog-item'],
    'itemView' => '_item',
    'options' => ['class' => 'product-list']
]);
?>
<div class="pagination-wrap">
<?= \yii\widgets\LinkPager::widget([
    'pagination' => $dataProvider->pagination,
]);
?>
</div>
