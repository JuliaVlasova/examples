<?php

namespace frontend\assets\pages\projectpage;

use frontend\assets\AssetBundle;
use frontend\assets\base\GoogleRobotoFontAsset;
use frontend\assets\components\menu\TopMenuAsset;
use frontend\assets\layouts\MainLayoutAsset;

class ProjectPageAsset extends AssetBundle
{
    public $sourcePath = '@webroot/themes/basic';

    public $criticalCss = [
        'overall-scss/common-theme/pages/backlink-api/backlink-api-critical.scss',
    ];

    public $css = [
        'overall-scss/common-theme/pages/backlink-api/backlink-api.scss',
    ];

    public $js = [
        'js/common-theme/components/scroll/beautiful-scroll.js',
        'js/common-theme/pages/backlink-api/backlink-api.js'
	];

	public $jsOptions = [
        'defer' => 'defer',
        'position' => \yii\web\View::POS_END,
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        MainLayoutAsset::class,
        GoogleRobotoFontAsset::class,
        TopMenuAsset::class
    ];
}
