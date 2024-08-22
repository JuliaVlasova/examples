<?php

namespace frontend\assets\base;

use frontend\assets\AssetBundle;

class GoogleRobotoFontAsset extends AssetBundle
{
	public $sourcePath = '@webroot/sass';

	public $criticalCss = [
		'google-roboto-font-lcp.scss',
	];
}
