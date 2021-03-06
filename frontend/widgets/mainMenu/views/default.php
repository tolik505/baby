<?php
/**
 * @var $categories StoreCategory[]
 * @var $child StoreCategory
 */
use app\modules\store\models\StoreCategory;
use common\models\StaticPage;

?>
<div id="menu">
    <ul>
        <?php foreach ($categories as $key => $category): ?>
            <li class="menu_item down <?php //echo $count == $key ? 'last_item' : '' ?>">
                <a href="<?= $category->getCatalogUrl() ?>"><?= $category->label ?></a>
                <?php $children = $category->getChildren() ?>
                <?php if ($children) { ?>
                    <div class="sub_menu">
                        <div class="bubble"></div>
                        <div class="sub_menu_block">
                            <ul>
                                <?php foreach ($children as $child): ?>
                                    <li><a href="<?= $child->getCatalogUrl() ?>"><?= $child->label ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </li>
        <?php endforeach; ?>
        <li class="menu_item down last_item">
            <a href="<?= StaticPage::getContactsUrl() ?>"><?= \Yii::t('front', 'Contact us') ?></a>
        </li>
    </ul>
</div>
<div id="mobile-menu">
    <div id="mobile-menu-nav">
        <ul>
            <?php foreach ($categories as $key => $category): ?>
                <li><a href="<?= $category->getCatalogUrl() ?>"><?= $category->label ?></a></li>
                <?php foreach ($category->getChildren() as $child): ?>
                    <li><a href="<?= $child->getCatalogUrl() ?>"><?= $child->label ?></a></li>
                <?php endforeach; ?>
            <?php endforeach; ?>
            <li>
                <a href="<?= StaticPage::getContactsUrl() ?>"><?= \Yii::t('front', 'Contact us') ?></a>
            </li>
        </ul>
    </div>
</div>
