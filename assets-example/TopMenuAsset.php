<?php

namespace frontend\assets\components\menu;

use frontend\assets\AssetBundle;

class TopMenuAsset extends AssetBundle
{
	public $sourcePath = '@webroot/themes/basic';

	public $criticalCss = [
		'overall-scss/common-theme/components/menu/_top-menu.scss',
	];

	public $js = [
		'js/common-theme/components/menu/top-menu.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];

	public $jsOptions = [
		'defer' => 'defer',
		'position' => \yii\web\View::POS_END,
	];
}