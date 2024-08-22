<?php

use yii\helpers\Url;
use belprime\sps\download\helpers\Detect;
use frontend\widgets\microdata\ResponsiveImage; 
use frontend\models\Feedback;
use frontend\assets\pages\projectpage\ProjectPageAsset;
use frontend\assets\components\faq\FaqAsset;
use frontend\assets\components\video\VideoBackgroundAsset;

$isMobile = Detect::isMobile();

$feedback = new Feedback([
	'scenario' => Feedback::SCENARIO_REQUEST,
	'to' => 'api@link-assistant.com',
	'subject' => 'Backlink API request',
	'message' => 'Request a full-featured Backlink API trial',
]);

if (Yii::$app->request->isPost) {
	if ($feedback->load(Yii::$app->request->post())) {
		if ($feedback->validate()) {
			$feedback->from = $feedback->email;

			if ($feedback->send(true)) {
				$feedback->reset();
			}
		}

		if ($feedback->isModal) {
			$this->registerJsVar('mainFormIsModal', 1);
		}
	}
}

$this->context->layout = '/real-project-page-layout';
$this->faqLayout = true;
$this->activeClass = 'resources';
$title = Yii::t('app', 'Backlinks API – the Largest Backlink Index by SEO PowerSuite');
$description = Yii::t('app', 'Backlink Checker API for next-level competition analysis, website comparison, and campaign monitoring. Quick integration, the best value for money, and free trial.');
$images = '{@cdn}/images/common-theme/landings/backlink-api/opengraph-light.png';

Yii::$app->meta()->setTitle($title);
Yii::$app->meta()->setKeywords('');
Yii::$app->meta()->setDescription($description);
Yii::$app->view->registerMetaTag(['property' => 'og:image', 'content' => $images], 'og:image');

Yii::$app->view->registerMetaTag(['name' => 'twitter:card', 'content' => 'summary_large_image'], 'twitter:card');
Yii::$app->view->registerMetaTag(['name' => 'twitter:site', 'content' => '@website'], 'twitter:site');
Yii::$app->view->registerMetaTag(['name' => 'twitter:title', 'content' => $title], 'twitter:title');
Yii::$app->view->registerMetaTag(['name' => 'twitter:description', 'content' => $description], 'twitter:description');
Yii::$app->view->registerMetaTag(['name' => 'twitter:image', 'content' => $images], 'twitter:image');

ProjectPageAsset::register($this);
FaqAsset::register($this);

if(!$isMobile) {
    VideoBackgroundAsset::register($this);
}

$plansMap = [
    [
        'units' => 100,
        'price' => 100,
    ],
    [
        'units' => 200,
        'price' => 200,
    ],
    [
        'units' => 300,
        'price' => 300,
    ],
];

$this->registerJs(<<<JS
$(document).ready(function() {
  $('#trackedBtn').click(function() {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({'event': 'ba_testinplayground_btn'});
  });
});
JS
);
?>

<div class="popup-overlay">
	<div class="popup-window popup-window_table relative">
		<svg class="popup-window__close popup-window__close_table">
			<use xlink:href="#close"></use>
		</svg>
		<div class="p-table-container__title">API documentation</div>
		<div class="p-table-wrapper">
			<table class="table p-table-hidden">
				<tr>
					<th class="pro-33">
						Method
					</th>
					<th>
						Request cost, units
					</th>
					<th class="pro-33">
						Returned result cost, units
					</th>
				</tr>

				<tr>
					<td>get-summary</td>
					<td>0</td>
					<td>60</td>
				</tr>

				<tr>
					<td>get-metrics</td>
					<td>0</td>
					<td>30</td>
				</tr>

				<tr>
					<td>get-inlink-rank</td>
					<td>0</td>
					<td>30</td>
				</tr>

				<tr>
					<td>get-backlinks</td>
					<td>0</td>
					<td>1</td>
				</tr>

				<tr>
					<td>get-refdomains</td>
					<td>0</td>
					<td>1</td>
				</tr>

				<tr>
					<td>get-anchors</td>
					<td>0</td>
					<td>1</td>
				</tr>

				<tr>
					<td>get-pages</td>
					<td>0</td>
					<td>1</td>
				</tr>

				<tr>
					<td>get-ips</td>
					<td>0</td>
					<td>1</td>
				</tr>

				<tr>
					<td>download-all-backlinks</td>
					<td>0</td>
					<td>1</td>
				</tr>

				<tr>
					<td>get-raw-backlinks</td>
					<td>0</td>
					<td>1</td>
				</tr>

				<tr>
					<td>get-new-lost-backlinks</td>
					<td>0</td>
					<td>1</td>
				</tr>

				<tr>
					<td>get-new-lost-refdomains</td>
					<td>0</td>
					<td>1</td>
				</tr>

				<tr>
					<td>get-new-lost-backlinks-count</td>
					<td>0</td>
					<td>30</td>
				</tr>

				<tr>
					<td>get-new-lost-refdomains-count</td>
					<td>0</td>
					<td>30</td>
				</tr>

				<tr>
					<td>get-backlinks-count</td>
					<td>0</td>
					<td>10</td>
				</tr>

				<tr>
					<td>get-refdomains-count</td>
					<td>0</td>
					<td>10</td>
				</tr>

				<tr>
					<td>get-subnets-count</td>
					<td>0</td>
					<td>10</td>
				</tr>

				<tr>
					<td>get-ips-count</td>
					<td>0</td>
					<td>10</td>
				</tr>

				<tr>
					<td>get-page-inlink-rank</td>
					<td>0</td>
					<td>10</td>
				</tr>

				<tr>
					<td>get-domain-inlink-rank</td>
					<td>0</td>
					<td>10</td>
				</tr>

				<tr>
					<td>get-subscription-info</td>
					<td>0</td>
					<td>0</td>
				</tr>
			</table>
		</div>
	</div>


	<div class="popup-window popup-window_form">
		<?= ResponsiveImage::widget([
            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/form/texture-background',
            'mimeTypes' => ['image/svg'],
            'sourceDprs' => [],
            'pictureAttrs' => ['class' => 'pic_container'],
            'imgAttrs' => [
                'class' => 'popup-window__bg',
                'alt' => '',
                'width' => 748,
                'height' => 624,
                'data-src' => false,
            ],
        ]); ?>

		<svg class="popup-window__close popup-window__close_form">
			<use xlink:href="#close"></use>
		</svg>
		<div class="popup-window__title">Try Backlinks API for free</div>
		<span id="main-form-child"></span>
	</div>
</div>

<div class="main-container">
	<div class="first-screen">
		<?= ResponsiveImage::widget([
            'lazyload' => false,
            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/top-video',
            'breakpoints' => [
                '(min-width: 1280px)' => '{@cdn}/images/common-theme/landings/backlink-api/top-video',
                '(max-width: 1279px) and (min-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/top-video-800',
                '(max-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/top-video-360'
            ],
            'mimeTypes' => ['image/webp', 'image/png'],
            'sourceDprs' => ['2x'],
            'pictureAttrs' => ['class' => 'pic_container'],
            'imgAttrs' => [
                'class' => 'top-video-bg',
                'alt' => '',
                'width' => 1779,
                'height' => 820,
                'data-src' => '{@cdn}/images/common-theme/landings/backlink-api/top-video@2x.webp',
            ],
        ]); ?>

		<video autoplay muted loop id="firstScreenVideo" class="transition fading"
			data-src="{@cdn}/images/common-theme/landings/backlink-api/top-video.mp4" src="" type="video/mp4">
		</video>

		<div class="content-container">
			<div class="first-screen__container">
				<div class="heading">
					<h1 class="title">Backlinks API</h1>
					<div class="sub">
						Delivering superb backlink data to developers and SEO agencies since 2008.
					</div>
				</div>
				<div class="first-screen__buttons">
					<div class="first-screen__button popup-opener popup-opener_form">
						Try for FREE
					</div>
					<div class="first-screen__buttons-row">
						<div class="first-screen__button complex-button popup-opener popup-opener_form" id="trackedBtn">
							<span>Test in playground</span>
						</div>
						<a href="#pricing" class="first-screen__button complex-button beautiful-scroll">
							<span>See pricing</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content-container numbers-container">
		<?= ResponsiveImage::widget([
                'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/illustration-server',
                'breakpoints' => [
                    '(min-width: 1280px)' => '{@cdn}/images/common-theme/landings/backlink-api/illustration-server',
                    '(max-width: 1279px) and (min-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/illustration-server-800',
                    '(max-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/illustration-server-360'
                ],
                'mimeTypes' => ['image/webp', 'image/png'],
                'sourceDprs' => ['2x'],
                'pictureAttrs' => ['class' => 'pic_container_numbers-bg'],
                'imgAttrs' => [
                    'src' => '{@cdn}/images/common-theme/landings/backlink-api/illustration-server@2x.png',
                    'class' => 'numbers-bg',
                    'alt' => '',
                    'width' => 968,
                    'height' => 1093,
                    'data-src' => false,
                ],
            ]);?>

		<div class="numbers-block">
			<div class="numbers-block__inner numbers-block__inner_1">
				<div class="numbers-block__1">
					<div class="numbers-block__title-sup">
						Our numbers speak for themselves
					</div>
					<h2 class="p-h2 numbers-block__title">
						Huge, always
						up&#8209;to&#8209;date index
					</h2>
					<div class="numbers-block__description">
						You don't need to compromise on coverage, freshness, or quality
						of backlink data. Every minute our BLEXBot discovers millions of new pages and
						constantly recrawls the previously explored ones, removing outdated and non-existent
						backlinks from our index.
					</div>
				</div>
				<div class="numbers-block__2">
					<div class="numbers-block__number numbers-block__number_blue numbers-block__number_lg">6.5T
					</div>
					<div class="numbers-block__numer-sub numbers-block__numer-sub_md">external links</div>
				</div>
			</div>
			<div class="numbers-block__inner numbers-block__inner_2">
				<div class="numbers-block__3">
					<div class="numbers-block__number numbers-block__number_blue numbers-block__number_sm">4.2M
					</div>
					<div class="numbers-block__numer-sub numbers-block__numer-sub_sm">page crawls per minute</div>
				</div>
				<div class="numbers-block__4">
					<div class="numbers-block__number numbers-block__number_blue numbers-block__number_md">400M
					</div>
					<div class="numbers-block__numer-sub numbers-block__numer-sub_md">indexed domains</div>
				</div>
			</div>
		</div>
		<div class="numbers-block">
			<div class="numbers-block__inner numbers-block__inner_3">
				<div class="numbers-block__5">
					<div class="numbers-block__number numbers-block__number_pink numbers-block__number_xl">1.1K
					</div>
					<div class="numbers-block__numer-sub numbers-block__numer-sub_md">servers</div>
				</div>
				<div class="numbers-block__6">
					<h2 class="p-h2 numbers-block__title">
						Powerful backend
						infrastructure
					</h2>
					<div class="numbers-block__description">
						Imagine having the ability to store and enjoy a musical playlist lasting more than 26 years
						straight – that's how potent our servers are. We have hundreds of servers that are capable
						of non-stop web scraping and data storage. This way, you get the most comprehensive and
						up-to-date information on backlinks.
					</div>
				</div>
			</div>
			<div class="numbers-block__inner numbers-block__inner_4">
				<div class="numbers-block__7">
					<div class="numbers-block__number numbers-block__number_pink numbers-block__number_xs">70K
					</div>
					<div class="numbers-block__numer-sub numbers-block__numer-sub_sm">CPU</div>
				</div>
				<div class="numbers-block__8">
					<div class="numbers-block__number numbers-block__number_pink numbers-block__number_xs">105 TB
					</div>
					<div class="numbers-block__numer-sub numbers-block__numer-sub_sm">RAM</div>
				</div>
				<div class="numbers-block__9">
					<div class="numbers-block__number numbers-block__number_pink numbers-block__number_xs">35 PB
					</div>
					<div class="numbers-block__numer-sub numbers-block__numer-sub_xs">storage space</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content-container tables-container">
		<?= ResponsiveImage::widget([
            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/glow',
            'mimeTypes' => ['image/svg'],
            'sourceDprs' => ['1x'],
            'pictureAttrs' => ['class' => 'pic_container glow_desktop'],
            'imgAttrs' => [
                'src' => '{@cdn}/images/common-theme/landings/backlink-api/glow@1x.svg',
                'class' => 'glow',
                'alt' => '',
                'width' => 1148,
                'height' => 1051,
                'data-src' => false,
            ],
        ]);?>

		<?= ResponsiveImage::widget([
            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/glow-800',
            'mimeTypes' => ['image/svg'],
            'sourceDprs' => ['1x'],
            'pictureAttrs' => ['class' => 'pic_container glow_mobile'],
            'imgAttrs' => [
                'src' => '{@cdn}/images/common-theme/landings/backlink-api/glow-800@1x.svg',
                'class' => 'glow',
                'alt' => '',
                'width' => 800,
                'height' => 1144,
                'data-src' => false,
            ],
        ]);?>

		<div class="p-heading p-heading_light">
			<h2 class="p-h2">
				We took our place in the market
			</h2>
			<div class="sub">
				Our backlink API is proven to be <strong class="text-pink">one of the best</strong> data
				providers 
			</div>
		</div>

		<div class="tables-row">
			<div class="tables-block">
				<div class="tables-block__heading">
					Top 1
				</div>
				<div class="tables-block__sub">
					by referring domains*
				</div>
				<?= ResponsiveImage::widget([
                    'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/top1-table',
                    'mimeTypes' => ['image/svg'],
                    'sourceDprs' => ['1x'],
                    'pictureAttrs' => ['class' => 'pic_container'],
                    'imgAttrs' => [
                        'src' => '{@cdn}/images/common-theme/landings/backlink-api/top1-table@1x.svg',
                        'class' => 'tables-block__table',
                        'alt' => 'the chart showing SEO PowerSuite as a winner backlink data provider by referring domains',
                        'width' => 512,
                        'height' => 246,
                        'data-src' => false,
                    ],
                ]);?>
				<div class="tables-block__refs">
					<i>*According to the <a
							href="https://searchengineland.com/top-4-backlink-api-vendors-compared-1-million-domain-study-377160"
							target="_blank" class="internal-link">1 million domain study</a>.</i>
				</div>
			</div>
			<div class="tables-block">
				<div class="tables-block__heading">
					Top 3
				</div>
				<div class="tables-block__sub">
					by number of requests*
				</div>
				<?= ResponsiveImage::widget([
                    'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/top3-table-v2',
                    'mimeTypes' => ['image/svg'],
                    'sourceDprs' => ['1x'],
                    'pictureAttrs' => ['class' => 'pic_container'],
                    'imgAttrs' => [
                        'src' => '{@cdn}/images/common-theme/landings/backlink-api/top3-table-v2@1x.svg',
                        'class' => 'tables-block__table',
                        'alt' => 'the table showing SEO PowerSuite\'s bot in the top 3.',
                        'width' => 512,
                        'height' => 244,
                        'data-src' => false,
                    ],
                ]);?>
				<div class="tables-block__refs">
					<span><strong>BLEXBot**</strong> - web crawler by SEO PowerSuite</span>
					<i>*According to <a href="https://radar.cloudflare.com/traffic/verified-bots" target="_blank"
							class="internal-link">Cloudflare research</a> (search engine optimization category).</i>
				</div>
			</div>
		</div>
	</div>

	<div class="p-section-light">
		<div class="content-container p-screens-section">
			<div class="p-heading p-heading_dark">
				<h3 class="p-h3">
					We bring the <span class="text-peach_sm">best in class</span> backlink
					data to your table
				</h3>
				<div class="sub sub_lg">This is what makes us different from other backlink APIs</div>
			</div>

			<div class="p_screen">
				<div class="p_screen__body">
					<div class="p_screen__block">
						<?= ResponsiveImage::widget([
                            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-01',
                            'breakpoints' => [
                                '(min-width: 1280px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-01',
                                '(max-width: 1279px) and (min-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-tablet/screen-01',
                                '(max-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-mobile/screen-01'
                            ],
                            'mimeTypes' => ['image/webp', 'image/png'],
                            'sourceDprs' => ['2x'],
                            'pictureAttrs' => ['class' => 'pic_container'],
                            'imgAttrs' => [
                                'class' => 'main-pic',
                                'alt' => 'backlink data provided by Backlink API by SEO PowerSuite',
                                'width' => 582,
                                'height' => 537,
                                'data-src' => false,
                            ],
                        ]); ?>

						<?= ResponsiveImage::widget([
                            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/texture1',
                            'mimeTypes' => ['image/webp', 'image/png'],
                            'sourceDprs' => ['2x'],
                            'pictureAttrs' => ['class' => 'pic_container tablet-mobile-hidden'],
                            'imgAttrs' => [
                                'class' => 'texture texture_1',
                                'alt' => '',
                                'width' => 650,
                                'height' => 425,
                                'data-src' => false,
                            ],
                        ]); ?>
					</div>
					<div class="text_container">
						<div class="title">
							Accurate data
						</div>
						<div class="text">
							At our core, we prioritize data accuracy throughout our crawling, parsing, processing, and
							storing. It means you always get the correct and valid data even from the most complex web
							pages. This commitment to accuracy is in line with the industry's best practices, including
							those recommended by Google.
						</div>
					</div>
				</div>
			</div>
			<div class="p_screen">
				<div class="p_screen__body">
					<div class="text_container">
						<div class="title">
							Sophisticated algorithms
						</div>
						<div class="text">
							We go beyond raw computing power by leveraging sophisticated mathematical techniques and AI
							algorithms to efficiently process large volumes of data. This approach allows us to deliver
							exceptional value for your investment, providing you with the best cost-effective solution
							on the market.
						</div>
					</div>
					<div class="p_screen__block">
						<?= ResponsiveImage::widget([
                            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-02',
                            'breakpoints' => [
                                '(min-width: 1280px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-02',
                                '(max-width: 1279px) and (min-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-tablet/screen-02',
                                '(max-width: 449px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-mobile/screen-02'
                            ],
                            'mimeTypes' => ['image/webp', 'image/png'],
                            'sourceDprs' => ['2x'],
                            'pictureAttrs' => ['class' => 'pic_container'],
                            'imgAttrs' => [
                                'class' => 'main-pic',
                                'alt' => 'sophisticated algorithms used by Backlinks API',
                                'width' => 570,
                                'height' => 483,
                                'data-src' => false,
                            ],
                        ]); ?>

						<?= ResponsiveImage::widget([
                            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/texture2',
                            'mimeTypes' => ['image/webp', 'image/png'],
                            'sourceDprs' => ['2x'],
                            'pictureAttrs' => ['class' => 'pic_container tablet-mobile-hidden'],
                            'imgAttrs' => [
                                'class' => 'texture texture_2',
                                'alt' => '',
                                'width' => 629,
                                'height' => 425,
                                'data-src' => false,
                            ],
                        ]); ?>
					</div>
				</div>
			</div>
			<div class="p_screen">
				<div class="p_screen__body">
					<div class="p_screen__block">
						<?= ResponsiveImage::widget([
                            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-03',
                            'breakpoints' => [
                                '(min-width: 1280px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-03',
                                '(max-width: 1279px) and (min-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-tablet/screen-03',
                                '(max-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-mobile/screen-03'
                            ],
                            'mimeTypes' => ['image/webp', 'image/png'],
                            'sourceDprs' => ['2x'],
                            'pictureAttrs' => ['class' => 'pic_container'],
                            'imgAttrs' => [
                                'class' => 'main-pic',
                                'alt' => 'unique metrics by SEO PowerSuite\'s Backlink API: InLink Rank and Domain InLink Rank',
                                'width' => 540,
                                'height' => 423,
                                'data-src' => false,
                            ],
                        ]); ?>

						<?= ResponsiveImage::widget([
                            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/texture3',
                            'mimeTypes' => ['image/webp', 'image/png'],
                            'sourceDprs' => ['2x'],
                            'pictureAttrs' => ['class' => 'pic_container tablet-mobile-hidden'],
                            'imgAttrs' => [
                                'class' => 'texture texture_3',
                                'alt' => '',
                                'width' => 657,
                                'height' => 425,
                                'data-src' => false,
                            ],
                        ]); ?>
					</div>
					<div class="text_container">
						<div class="title">
							Unique quality metrics
						</div>
						<div class="text">
							We use our index to calculate our proprietary metrics – InLink Rank and Domain InLink Rank –
							to help you assess each backlink, domain, or webpage. These metrics mirror Google's original
							PageRank algorithm and can be easily understood or even reverse-engineered by any software
							developer. 
						</div>
					</div>
				</div>
			</div>
			<div class="p_screen">
				<div class="p_screen__body">
					<div class="text_container">
						<div class="title">
							White-label data
						</div>
						<div class="text">
							With our backlink index, you have the flexibility to utilize the data without revealing the
							source. Empower your own tools and seamlessly incorporate our data into your software and
							client reports. Thus, you can offer a comprehensive and customized solution to your clients
							while maintaining complete control over the data's origin.
						</div>
					</div>
					<div class="p_screen__block">
						<?= ResponsiveImage::widget([
                            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-04',
                            'breakpoints' => [
                                '(min-width: 1280px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-04',
                                '(max-width: 1279px) and (min-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-tablet/screen-04',
                                '(max-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-mobile/screen-04'
                            ],
                            'mimeTypes' => ['image/webp', 'image/png'],
                            'sourceDprs' => ['2x'],
                            'pictureAttrs' => ['class' => 'pic_container'],
                            'imgAttrs' => [
                                'class' => 'main-pic',
                                'alt' => 'the dashboard with data',
                                'width' => 600,
                                'height' => 443,
                                'data-src' => false,
                            ],
                        ]); ?>

						<?= ResponsiveImage::widget([
                            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/texture4',
                            'mimeTypes' => ['image/webp', 'image/png'],
                            'sourceDprs' => ['2x'],
                            'pictureAttrs' => ['class' => 'pic_container tablet-mobile-hidden'],
                            'imgAttrs' => [
                                'class' => 'texture texture_4',
                                'alt' => '',
                                'width' => 619,
                                'height' => 425,
                                'data-src' => false,
                            ],
                        ]); ?>
					</div>
				</div>
			</div>
			<div class="p_screen">
				<div class="p_screen__body">
					<div class="p_screen__block">
						<?= ResponsiveImage::widget([
                            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-05',
                            'breakpoints' => [
                                '(min-width: 1280px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-05',
                                '(max-width: 1279px) and (min-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-tablet/screen-05',
                                '(max-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-mobile/screen-05'
                            ],
                            'mimeTypes' => ['image/webp', 'image/png'],
                            'sourceDprs' => ['2x'],
                            'pictureAttrs' => ['class' => 'pic_container'],
                            'imgAttrs' => [
                                'class' => 'main-pic',
                                'alt' => 'live and historical backlinks data provided by Backlinks API',
                                'width' => 540,
                                'height' => 480,
                                'data-src' => false,
                            ],
                        ]); ?>

						<?= ResponsiveImage::widget([
                            'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/texture5',
                            'mimeTypes' => ['image/webp', 'image/png'],
                            'sourceDprs' => ['2x'],
                            'pictureAttrs' => ['class' => 'pic_container tablet-mobile-hidden'],
                            'imgAttrs' => [
                                'class' => 'texture texture_5',
                                'alt' => '',
                                'width' => 426,
                                'height' => 561,
                                'data-src' => false,
                            ],
                        ]); ?>
					</div>
					<div class="text_container">
						<div class="title">
							Live and historical data
						</div>
						<div class="text">
							Besides delivering real-time information on active backlinks, we provide insights into newly
							gained and lost backlinks for any date in the past. Our backlink index saves backlink
							history for the previous 12 months, enabling you to analyze trends and track changes over
							time.
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="content-container styled-block styled-block_lg styled-block_blue">
			<?= ResponsiveImage::widget([
                'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/texture-background-6',
                'breakpoints' => [
                    '(min-width: 1280px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/texture-background-6',
                    '(max-width: 1279px) and (min-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-tablet/texture-background-6',
                    '(max-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-mobile/texture-background-6'
                ],
                'mimeTypes' => ['image/webp', 'image/jpg'],
                'sourceDprs' => ['2x'],
                'pictureAttrs' => ['class' => 'pic_container'],
                'imgAttrs' => [
                    'class' => 'styled-block__texture',
                    'alt' => '',
                    'width' => 1180,
                    'height' => 758,
                    'data-src' => false,
                ],
            ]); ?>
			<div class="styled-block__content">
				<div class="p-heading p-heading_dark">
					<h3 class="p-h3">
						<span class="text-peach_lg">Easily analyze</span> the most complicated
						backlink profiles
					</h3>
					<div class="sub">Our backlink API features multiple metrics and endpoints that provide all the data
						you
						or your users need for backlink analysis</div>
				</div>

				<div class="p_screen">
					<div class="p_screen__body">
						<div class="text_container">
							<div class="check_list">
								<div class="check_list__inner">
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">Backlinks</div>
									</div>
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">Referral domains</div>
									</div>
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">IPs</div>
									</div>
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">Backlink Sources Pages</div>
									</div>
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">Anchor Texts</div>
									</div>
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">Countries and TLDs</div>
									</div>
								</div>
								<div class="check_list__inner">
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">Target URLs</div>
									</div>
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">Image and Text Links</div>
									</div>
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">HTTP Headers</div>
									</div>
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">Dofollow and Nofollow Links</div>
									</div>
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">Redirects</div>
									</div>
									<div class="check_list__item">
										<?= $this->render('//widgets/check-box', ['cssClasses' => '',]);?>
										<div class="content">Page and Domain Power Scores</div>
									</div>
								</div>
							</div>
						</div>
						<?= ResponsiveImage::widget([
                        'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-06',
                        'breakpoints' => [
                            '(min-width: 1280px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-desktop/screen-06',
                            '(max-width: 1279px) and (min-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-tablet/screen-06',
                            '(max-width: 450px)' => '{@cdn}/images/common-theme/landings/backlink-api/screens-mobile/screen-06'
                        ],
                        'mimeTypes' => ['image/webp', 'image/png'],
                        'sourceDprs' => ['2x'],
                        'pictureAttrs' => ['class' => 'pic_container'],
                        'imgAttrs' => [
                            'class' => 'main-pic',
                            'alt' => 'backlink API data sample',
                            'width' => 540,
                            'height' => 480,
                            'data-src' => false,
                        ],
                    ]); ?>
					</div>
				</div>
			</div>
			<span id="main-form"></span>
		</div>

		<td style="width: 25%"></td>
		<div class="content-container content-container_noindent-desktop content-container_form bg-dark">
			<div class="main-form">
				<?= ResponsiveImage::widget([
                    'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/texture-right-top',
                    'mimeTypes' => ['image/svg'],
                    'sourceDprs' => ['1x'],
                    'pictureAttrs' => ['class' => 'texture-right-top'],
                    'imgAttrs' => [
                        'class' => 'main-pic',
                        'alt' => '',
                        'width' => 715,
                        'height' => 423,
                        'data-src' => false,
                    ],
                ]); ?>
				<?= ResponsiveImage::widget([
                    'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/texture-left-bottom',
                    'breakpoints' => [
                        '(min-width: 1280px)' => '{@cdn}/images/common-theme/landings/backlink-api/texture-left-bottom',
                        '(max-width: 1279px)' => '{@cdn}/images/common-theme/landings/backlink-api/texture-left-bottom',
                    ],
                    'mimeTypes' => ['image/svg'],
                    'sourceDprs' => ['1x'],
                    'pictureAttrs' => ['class' => 'texture-left-bottom'],
                    'imgAttrs' => [
                        'class' => 'main-pic',
                        'alt' => '',
                        'width' => 715,
                        'height' => 219,
                        'data-src' => false,
                    ],
                ]); ?>
				<div class="ellipse pink"></div>
				<div class="ellipse blue"></div>

				<div class="main-form__content">
					<div class="main-form__heading">
						<h2 class="p-h2">Request a&nbsp;full-featured Backlink API trial</h2>
						<div class="sub">Try before you buy. Take a spin with our free trial and witness we are the best
							backlinks API solution firsthand.</div>
					</div>
					<span id="main-form-parent"></span>
					<div class="main-form__form">
						<?php if ($feedback->sent !== null) { ?>
						<div class="p-success-message">
							<svg class="p-success-message__image">
								<use xlink:href="#check-email"></use>
							</svg>
							<div class="p-success-message__text">
								<strong>Thanks for getting in touch!</strong>
								We'll get back to you asap.
							</div>
						</div>
						<?php } else {
                            $form = \yii\widgets\ActiveForm::begin([
                            'action' => '#main-form',
                        ]); ?>

						<?= $form->field($feedback, 'isModal')
	                        ->hiddenInput(['class' => 'form-control main-form__modal',])
	                        ->label(false) ?>

						<div class="main-form__field">
							<?= $form->field($feedback, 'name')
                        ->textInput(['placeholder' => $feedback->getAttributeLabel('name') . '*', 'class' => 'form-control'])
                        ->label(false); ?>
						</div>
						<div class="main-form__field">
							<?= $form->field($feedback, 'email')
                        ->textInput(['placeholder' => $feedback->getAttributeLabel('email') . '*', 'class' => 'form-control'])
                        ->label(false); ?>
						</div>
						<div class="main-form__field">
							<?= $form->field($feedback, 'job_title')
                        ->textInput(['placeholder' => $feedback->getAttributeLabel('job_title'), 'class' => 'form-control'])
                        ->label(false); ?>
						</div>
						<div class="main-form__field">
							<?= $form->field($feedback, 'company')
                        ->textInput(['placeholder' => $feedback->getAttributeLabel('company'), 'class' => 'form-control'])
                        ->label(false); ?>
						</div>
						<div class="main-form__recaptcha">
							<?= $form->field($feedback, 'verifyCode')->widget(
                        \frontend\widgets\ReCaptcha::class, ['lazyload' => true]
                    )->label(false) ?>
						</div>
						<div class="form-group">
							<button type="submit" class="main-form__button" name="contact-button">Send Request</button>
						</div>
						<?php \yii\widgets\ActiveForm::end(); } ?>
					</div>
				</div>
			</div>
		</div>


		<div class="content-container sm-blocks-section">
			<div class="p-heading p-heading_dark">
				<h3 class="p-h3">Cost efficiency is at the core of what we offer</h3>
				<div class="sub">We know how business works and are ready to <strong class="text-peach_xs">provide the
						best
						API</strong> solution you need</div>
			</div>
			<div class="sm-blocks-section__grid">
				<div class="sm-blocks-section__block styled-block_blue">
					<div class="sm-blocks-section__icon">
						<svg class="sm-blocks-section__image sm-blocks-section__image_1">
							<use xlink:href="#icon-1"></use>
						</svg>
					</div>
					<div class="sm-blocks-section__title">
						Real-time results
					</div>
					<div class="sm-blocks-section__text">
						Access up-to-the-minute backlinks data effortlessly through our API, delivered within a mere 2
						seconds.
					</div>
				</div>
				<div class="sm-blocks-section__block styled-block_blue">
					<div class="sm-blocks-section__icon">
						<svg class="sm-blocks-section__image sm-blocks-section__image_2">
							<use xlink:href="#icon-2"></use>
						</svg>
					</div>
					<div class="sm-blocks-section__title">
						Quick integration
					</div>
					<div class="sm-blocks-section__text">
						With our comprehensive support, you can integrate and launch your solution in a matter of days,
						not weeks.
					</div>
				</div>
				<div class="sm-blocks-section__block styled-block_blue">
					<div class="sm-blocks-section__icon">
						<svg class="sm-blocks-section__image sm-blocks-section__image_3">
							<use xlink:href="#icon-3"></use>
						</svg>
					</div>
					<div class="sm-blocks-section__title">
						Round-the-clock help
					</div>
					<div class="sm-blocks-section__text">
						Our dedicated customer support team is available 24/7, guiding you every step of the way.
					</div>
				</div>
				<div class="sm-blocks-section__block styled-block_blue">
					<div class="sm-blocks-section__icon">
						<svg class="sm-blocks-section__image sm-blocks-section__image_4">
							<use xlink:href="#icon-4"></use>
						</svg>
					</div>
					<div class="sm-blocks-section__title">
						Best value for money
					</div>
					<div class="sm-blocks-section__text">
						Get the best bang for your buck, as our costs are at least 60% lower than any competing service.
					</div>
				</div>
				<div class="sm-blocks-section__block styled-block_blue">
					<div class="sm-blocks-section__icon">
						<svg class="sm-blocks-section__image sm-blocks-section__image_5">
							<use xlink:href="#icon-5"></use>
						</svg>
					</div>
					<div class="sm-blocks-section__title">
						Free trial for confidence
					</div>
					<div class="sm-blocks-section__text">
						Take advantage of our risk-free trial to fully assess our offering, including the transparent
						API explorer.
					</div>
				</div>
				<div class="sm-blocks-section__block styled-block_blue">
					<div class="sm-blocks-section__icon">
						<svg class="sm-blocks-section__image sm-blocks-section__image_6">
							<use xlink:href="#icon-6"></use>
						</svg>
					</div>
					<div class="sm-blocks-section__title">
						Flexible scalability
					</div>
					<div class="sm-blocks-section__text">
						Start small and expand as you grow, with minimal commitments and the option for tailored larger
						plans.
					</div>
				</div>
			</div>
		</div>

		<div class="content-container pricing-section" id="pricing">
			<?= ResponsiveImage::widget([
                'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/pricing-texture-top',
                'mimeTypes' => ['image/webp', 'image/png'],
                'sourceDprs' => ['2x'],
                'pictureAttrs' => ['class' => 'pic_container mobile-hidden'],
                'imgAttrs' => [
                    'class' => 'pricing-section__bg pricing-section__bg_top',
                    'alt' => '',
                    'width' => 1430,
                    'height' => 425,
                    'data-src' => false,
                ],
            ]); ?>
			<div class="pricing-section__content">
				<div class="p-heading p-heading_dark">
					<h2 class="p-h2_lg">Backlink API pricing</h2>
					<div class="sub">No hidden costs, no multipliers, no sorting fees — no surprises.
						You are charged per results fetched, end of story.</div>
				</div>
				<div class="pricing-section__row">
					<?php foreach ($plansMap as $plan) { ?>
					<div class="pricing-section__block">
						<div class="pricing-section__top">
							<div class="pricing-section__number"><?= number_format($plan['units']) ?></div>
							<div class="pricing-section__units">units</div>
						</div>
						<div class="pricing-section__price-block">
							<span class="pricing-section__currency">$</span><span
								class="pricing-section__price"><?= number_format($plan['price']) ?></span><span
								class="pricing-section__duration">/month</span>
						</div>

						<div class="pricing-section__container">
							<a href="<?= \frontend\helpers\App::urlList()->getBlexApiLink('plans', $plan['units']) ?>"
								target="_blank" class="pricing-section__button">Buy</a>
						</div>
					</div>
					<?php } ?>

					<div class="pricing-section__block pricing-section__block_custom">
						<div class="pricing-section__top">
							<div class="pricing-section__number">Custom plan</div>
						</div>
						<div class="pricing-section__description">
							Need larger volumes? We're open to discussing custom solutions.
						</div>
						<div class="pricing-section__container">
							<a href="mailto:api@link-assistant.com" class="pricing-section__button">Request</a>
						</div>
					</div>
				</div>

				<div class="pricing-section__info">
					Different API method requests and results returned consume a <span
						class="pricing-section__table-opener popup-opener popup-opener_table">different number of API
						units</span>. Check
					out the table below for API units consumption and look through the API documentation for a detailed
					method description.
				</div>
			</div>

			<?= ResponsiveImage::widget([
                'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/pricing-texture-bottom-tablet',
                'mimeTypes' => ['image/webp', 'image/png'],
                'sourceDprs' => ['2x'],
                'pictureAttrs' => ['class' => 'pic_container mobile-hidden desktop-hidden'],
                'imgAttrs' => [
                    'class' => 'pricing-section__bg pricing-section__bg_bottom',
                    'alt' => '',
                    'width' => 800,
                    'height' => 1070,
                    'data-src' => false,
                ],
            ]); ?>
		</div>

		<div class="content-container info-section">
			<div class="p-heading p-heading_dark">
				<h3 class="p-h3">Apply our backlink data anywhere you need</h3>
				<div class="sub">Here is how you can use our backlink API</div>
			</div>

			<div class="info-section__grid">
				<div class="info-section__block info-section__block_blue info-section__block_1">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/background-1.svg" alt="" width="380"
						height="134" class="info-section__bg">
					<div class="info-section__title">Analyze
						competition</div>
					<div class="info-section__descr">
						Uncover your competitors' marketing strategies, business partnerships, and market share by
						analyzing their backlink profiles.
					</div>
				</div>
				<div class="info-section__block info-section__block_2">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/background-2.svg" alt="" width="380"
						height="134" class="info-section__bg">
					<div class="info-section__title">Come up
						with&nbsp;content ideas</div>
					<div class="info-section__descr">
						Quickly and easily discover popular content ideas by leveraging the exact number of backlinks
						pointing to any page of a website.
					</div>
				</div>
				<div class="info-section__block info-section__block_3">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/background-3.svg" alt="" width="380"
						height="134" class="info-section__bg">
					<div class="info-section__title">Monitor campaign success</div>
					<div class="info-section__descr">
						Run backlinks analysis to track the growth of your backlink profile. Measure the success of your
						campaigns and ensure they align with your efforts.
					</div>
				</div>
				<div class="info-section__block info-section__block_blue info-section__block_4">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/background-4.svg" alt="" width="380"
						height="134" class="info-section__bg">
					<div class="info-section__title">Find promotion opportunities</div>
					<div class="info-section__descr">
						Identify popular websites within your niche and seize partnership opportunities for quality link
						building and guest posting.
					</div>
				</div>
				<div class="info-section__block info-section__block_blue info-section__block_5">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/background-5.svg" alt="" width="380"
						height="134" class="info-section__bg">
					<div class="info-section__title">Research
						keywords</div>
					<div class="info-section__descr">
						Evaluate your chances of ranking for specific keywords by assessing the authority of the
						websites you're up against.
					</div>
				</div>
				<div class="info-section__block info-section__block_6">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/background-6.svg" alt="" width="380"
						height="134" class="info-section__bg">
					<div class="info-section__title">Compare
						websites</div>
					<div class="info-section__descr">
						Assess the authority of websites by examining
						the number of high-quality incoming links, enabling quick and effective evaluations.
					</div>
				</div>
				<div class="contact-block">
					<?= ResponsiveImage::widget([
                        'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/texture-small-bg',
                        'breakpoints' => [
                            '(min-width: 1280px)' => '{@cdn}/images/common-theme/landings/backlink-api/texture-small-bg',
                        ],
                        'mimeTypes' => ['image/svg'],
                        'sourceDprs' => ['1x'],
                        'pictureAttrs' => ['class' => 'pic_container bg'],
                        'imgAttrs' => [
                            'class' => 'contact-block__bg',
                            'alt' => '',
                            'width' => 946,
                            'height' => 992,
                            'data-src' => false,
                        ],
                    ]); ?>
					<?= ResponsiveImage::widget([
                        'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/texture-small-md',
                        'breakpoints' => [
                            '(max-width: 1279px)' => '{@cdn}/images/common-theme/landings/backlink-api/texture-small-md',
                        ],
                        'mimeTypes' => ['image/svg'],
                        'sourceDprs' => ['1x'],
                        'pictureAttrs' => ['class' => 'pic_container md'],
                        'imgAttrs' => [
                            'class' => 'contact-block__bg',
                            'alt' => '',
                            'width' => 946,
                            'height' => 992,
                            'data-src' => false,
                        ],
                    ]); ?>
					<?= ResponsiveImage::widget([
                        'sourceSrc' => '{@cdn}/images/common-theme/landings/backlink-api/texture-small-sm',
                        'breakpoints' => [
                            '(max-width: 799px)' => '{@cdn}/images/common-theme/landings/backlink-api/texture-small-sm',
                        ],
                        'mimeTypes' => ['image/svg'],
                        'sourceDprs' => ['1x'],
                        'pictureAttrs' => ['class' => 'pic_container sm'],
                        'imgAttrs' => [
                            'class' => 'contact-block__bg',
                            'alt' => '',
                            'width' => 946,
                            'height' => 992,
                            'data-src' => false,
                        ],
                    ]); ?>
					<div class="ellipse-sm pink"></div>
					<div class="ellipse-sm blue"></div>
					<div class="contact-block__title">Didn't find what you were looking for?</div>
					<div class="contact-block__text">Want to discuss more use cases?
						We are open for your suggestions.</div>
					<a href="mailto:api@link-assistant.com" class="contact-block__button">Contact us</a>
				</div>
			</div>
		</div>

		<div class="content-container links-section">
			<div class="p-heading p-heading_dark">
				<h3 class="p-h3">Access quality data with Backlink API
					by SEO PowerSuite</h3>
				<div class="sub">We don't push – choose the next step you are ready to take</div>
			</div>
			<div class="links-section__grid">
				<a class="links-section__block styled-block_blue"
					href="{@cdn}/upload/pdf/seo-powersuite-backlink-api.pdf" target="_blank">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/frame-7.svg" alt="" width="319"
						height="86" class="links-section__bg links-section__bg_7">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/arrow.svg" alt="" width="16" height="16"
						class="links-section__arrow">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/icon-7.svg" alt="" width="48" height="48"
						class="links-section__icon">
					<span class="links-section__title">See
						documentation</span>
					<span class="links-section__text">Review all essential API information: available data,
						authentication, command overview, and
						error handling.</span>
				</a>
				<a class="links-section__block styled-block_blue"
					href="<?=Url::to(['/page/default/page', 'view' => 'backlink-api-comparison'])?>" target="_blank">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/frame-8.svg" alt="" width="329"
						height="56" class="links-section__bg links-section__bg_8">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/arrow.svg" alt="" width="16" height="16"
						class="links-section__arrow">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/icon-8.svg" alt="" width="48" height="48"
						class="links-section__icon">
					<span class="links-section__title">Compare backlink
						data providers</span>
					<span class="links-section__text">See the best backlink providers compared: SEO PowerSuite vs.
						Ahrefs vs. SEMRush vs. Majestic.</span>
				</a>
				<a class="links-section__block styled-block_blue" href="mailto:api@link-assistant.com">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/frame-9.svg" alt="" width="179"
						height="116" class="links-section__bg links-section__bg_9">

					<img src="{@cdn}/images/common-theme/landings/backlink-api/arrow.svg" alt="" width="16" height="16"
						class="links-section__arrow">
					<img src="{@cdn}/images/common-theme/landings/backlink-api/icon-9.svg" alt="" width="48" height="48"
						class="links-section__icon">
					<span class="links-section__title">Contact
						support&nbsp;team</span>
					<span class="links-section__text">Get all the answers to your questions about our API to come up
						with the right R&D decision for your business.</span>
				</a>
			</div>
		</div>

		<div class="content-container faq-section">
			<div class="faq">
				<div class="p-heading p-heading_dark">
					<h2 class="p-h2">FAQ</h2>
				</div>
				<div class="faq-block">
					<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-block__item">
						<p itemprop="name" class="faq-block__title"><strong>1. How do I access SEO PowerSuite Backlink
								API?</strong></p>
						<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
							class="faq-block__text">
							<div itemprop="text">
								<ul class="list-dotted">
									<li>
										<strong>Buy a Backlink API subscription.</strong> We provide subscription plans
										that grant access to 5, 20, and 100 million units of API data every month.
										Remember that you can freely request a free trial before finalizing your
										decision to buy. 
									</li>
									<li>
										<strong>Contact us for a custom plan.</strong> If you need more data or have a
										specific use case, don't hesitate to <a
											href="mailto:api@link-assistant.com">reach out to us</a> for a personalized
										plan. Our support team is here to assist you in developing a customized solution
										that meets your requirements.
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-block__item">
						<p itemprop="name" class="faq-block__title"><strong>2. Can I integrate Backlink API with Google
								Sheets?</strong>
						</p>
						<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
							class="faq-block__text">
							<div itemprop="text">
								<p>
									One of the simplest ways to manage your data is by integrating Backlink API with
									Google Sheets. You can utilize functions such as IMPORTXML or IMPORTDATA to initiate
									an API call directly from your spreadsheet and have your data automatically
									displayed in the table.
								</p>
								<p>
									You can find more detailed information on that in our <a
										href="<?=Url::to(['/news/post/view', 'uri' => 'backlink-api-guide'])?>"
										target="_blank">Backlink
										API guide</a>.
								</p>
							</div>
						</div>
					</div>
					<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-block__item">
						<p itemprop="name" class="faq-block__title"><strong>3. Can I connect Backlink API to Google
								Looker Studio?</strong>
						</p>
						<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
							class="faq-block__text">
							<div itemprop="text">
								<p>Yes, you can. However, unlike with the case with Google Sheets, here you can't do
									without a developer. </p>
								<p>
									To connect our Backlink API to Looker Studio, you'll need to build your own <a
										href="https://developers.google.com/looker-studio/connector"
										target="_blank">community connector</a> through Apps Script. In brief, you'll
									need to set up your <a href="https://script.google.com/home/" target="_blank">Apps
										Script project</a> and define the following functions: <i>getAuthType(),
										getConfig(), getSchema(), getData()</i>. Then, you update the manifest and
									finally test your connector in Looker Studio.
								</p>
								<p>
									You can find the full instruction on how to build a connector in <a
										href="https://developers.google.com/looker-studio/connector/get-started"
										target="_blank">Google's guide</a>.
								</p>
							</div>
						</div>
					</div>
					<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-block__item">
						<p itemprop="name" class="faq-block__title"><strong>4. What are the API units?</strong></p>
						<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
							class="faq-block__text">
							<div itemprop="text">
								<p>
									An API unit is the usage quota we charge for. 
								</p>
								<p>
									We charge different number of units for different requests. For example, raw data
									methods use 1 unit per URL. Thus, when requesting backlinks to a domain, 1
									downloaded backlink costs 1 unit. Thus checking 1,000 backlinks for 1,000 domains
									equals 1,000,000 units.
								</p>
								<p>
									Methods providing calculated metrics require 30 units per URL, and the
									<i>get-summary</i>
									method requires 60 units per URL <i>(get-inlink-rank + get-metrics)</i>.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<svg width="0" height="0" class="hidden">
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 10" id="check">
		<path
			d="M2.24505 3.90132C1.84469 3.50096 1.19558 3.50096 0.795227 3.90132V3.90132C0.394868 4.30168 0.39487 4.95079 0.79523 5.35115L4.32709 8.88299C4.82197 9.37786 5.62431 9.37786 6.11918 8.88299L13.2054 1.79681C13.6058 1.39645 13.6058 0.74734 13.2054 0.346982V0.346982C12.805 -0.0533753 12.1559 -0.0533755 11.7556 0.346983L5.22317 6.87941L2.24505 3.90132Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67 60" fill="none" id="icon-1">
		<path
			d="M16.4136 11.2349L16.4744 10.7386C16.6808 10.7639 16.8902 10.7483 17.0906 10.6926C17.2911 10.637 17.4785 10.5424 17.6424 10.4143C21.0736 7.73178 26.5999 4.49992 33.3337 4.49992C47.3952 4.49992 58.8337 15.9384 58.8337 29.9999C58.8337 44.0615 47.3952 55.4999 33.3337 55.4999C19.2721 55.4999 7.83366 44.0615 7.83366 29.9999C7.83366 29.58 7.66684 29.1773 7.36991 28.8803C7.07298 28.5834 6.67025 28.4166 6.25033 28.4166C5.8304 28.4166 5.42767 28.5834 5.13074 28.8803C4.83381 29.1773 4.66699 29.58 4.66699 29.9999C4.66699 45.8071 17.5265 58.6666 33.3337 58.6666C49.1408 58.6666 62.0003 45.8071 62.0003 29.9999C62.0003 14.1927 49.1408 1.33325 33.3337 1.33325C25.728 1.33325 19.5559 4.90118 15.6916 7.91884L16.4136 11.2349ZM16.4136 11.2349L16.4744 10.7386C16.268 10.7133 16.0685 10.6476 15.8875 10.5452C15.7064 10.4429 15.5473 10.3058 15.4192 10.142C15.2912 9.97812 15.1966 9.79064 15.141 9.59024L14.6592 9.72399M16.4136 11.2349L14.6592 9.72399M14.6592 9.72399L15.141 9.59024C15.0853 9.38984 15.0697 9.18044 15.095 8.974M14.6592 9.72399L15.095 8.974M15.095 8.974C15.1203 8.76757 15.186 8.56813 15.2884 8.38709M15.095 8.974L15.2884 8.38709M15.2884 8.38709C15.3907 8.20611 15.5276 8.04706 15.6914 7.91899L15.2884 8.38709Z"
			fill="#47B8FF" stroke="#F0F6FF" />
		<path
			d="M16.1667 9.16669V9.66669H16.6667H20.8333C21.2533 9.66669 21.656 9.8335 21.9529 10.1304C22.2499 10.4274 22.4167 10.8301 22.4167 11.25C22.4167 11.6699 22.2499 12.0727 21.9529 12.3696C21.656 12.6665 21.2533 12.8334 20.8333 12.8334H14.5833C14.1634 12.8334 13.7607 12.6665 13.4637 12.3696C13.1668 12.0727 13 11.6699 13 11.25V5.00002C13 4.58009 13.1668 4.17737 13.4637 3.88043C13.7607 3.5835 14.1634 3.41669 14.5833 3.41669C15.0033 3.41669 15.406 3.5835 15.7029 3.88043L16.0565 3.52688L15.7029 3.88043C15.9999 4.17737 16.1667 4.58009 16.1667 5.00002V9.16669ZM33.3333 42C26.7157 42 21.3333 36.6176 21.3333 30C21.3333 23.3824 26.7157 18 33.3333 18C39.9509 18 45.3333 23.3824 45.3333 30C45.3333 36.6176 39.9509 42 33.3333 42ZM33.3333 21.1667C28.4614 21.1667 24.5 25.128 24.5 30C24.5 34.872 28.4614 38.8334 33.3333 38.8334C38.2053 38.8334 42.1667 34.872 42.1667 30C42.1667 25.128 38.2053 21.1667 33.3333 21.1667Z"
			fill="#47B8FF" stroke="#F0F6FF" />
		<path
			d="M33.3333 35.75C32.9134 35.75 32.5107 35.5832 32.2137 35.2862C31.9168 34.9893 31.75 34.5866 31.75 34.1667C31.75 33.7467 31.9168 33.344 32.2137 33.0471C32.5107 32.7501 32.9134 32.5833 33.3333 32.5833C34.7574 32.5833 35.9167 31.424 35.9167 30C35.9167 29.5801 36.0835 29.1773 36.3804 28.8804C36.6773 28.5835 37.0801 28.4167 37.5 28.4167C37.9199 28.4167 38.3227 28.5835 38.6196 28.8804C38.9165 29.1773 39.0833 29.5801 39.0833 30C39.0833 33.1697 36.503 35.75 33.3333 35.75Z"
			fill="#47B8FF" stroke="#F0F6FF" />
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60" fill="none" id="icon-2">
		<g clip-path="url(#clip0_1071_11314)">
			<path
				d="M58.324 2.32032C58.1951 2.02735 57.9607 1.79298 57.6795 1.67579C57.5271 1.60548 42.5271 -4.69921 30.1873 7.62892C27.8318 9.98439 25.5584 12.7617 23.4725 15.6914L20.6248 15.0352C16.324 14.0391 11.8943 15.3047 8.76543 18.4219L0.995899 26.2031C-1.0666 28.2656 0.257618 31.7695 3.12871 31.9922L14.074 32.8711C13.5936 34.1484 13.1834 35.4024 12.949 36.2344C12.7381 36.9727 12.7732 37.7344 12.9959 38.4375C11.0154 38.9766 9.21074 39.9609 8.19121 40.9805C5.94121 43.2188 3.93731 53.0274 3.56231 54.9727C3.39824 55.9102 4.23027 56.625 5.02715 56.4375C6.97246 56.0508 16.7811 54.0469 19.0193 51.8086C20.0857 50.7422 21.0467 48.9141 21.574 47.0039C22.324 47.2383 23.0857 47.2383 23.7771 47.0391H23.7889C24.6209 46.8047 25.8396 46.418 27.1404 45.9141L28.0193 56.8594C28.242 59.7305 31.7576 61.043 33.8084 58.9922L41.5896 51.2109C44.7068 48.0938 45.9842 43.6524 44.9764 39.3516L44.3201 36.5039C47.2498 34.418 50.0271 32.1445 52.3826 29.7891C64.7107 17.4727 58.3943 2.47267 58.324 2.32032ZM2.77715 27.9727L10.5467 20.1914C13.0662 17.6719 16.6287 16.6641 20.0623 17.4727L21.949 17.9063C19.1482 22.1133 16.7811 26.5195 15.0701 30.4336L3.32793 29.4961C2.56621 29.4258 2.23809 28.5 2.77715 27.9727ZM17.2498 50.0508C16.16 51.1406 10.7576 52.6524 6.39824 53.6133C7.34746 49.2422 8.85918 43.8516 9.96074 42.7617C10.91 41.8008 12.7615 40.9688 14.5662 40.6406L19.3709 45.4453C19.3592 45.4922 19.3592 45.5391 19.3475 45.5977C18.9959 47.3203 18.1404 49.1602 17.2498 50.0508ZM21.7498 44.2734L15.7264 38.25C15.3748 37.8984 15.2342 37.3711 15.3631 36.9024C15.4686 36.5391 15.6678 35.8594 15.9256 35.0977L24.9021 44.0742C24.3631 44.2617 23.6482 44.4844 23.0975 44.6367C22.6287 44.7774 22.1131 44.6367 21.7498 44.2734ZM42.5271 39.9375C43.324 43.3945 42.3162 46.9453 39.8084 49.4531L32.0271 57.2344C31.4881 57.7734 30.574 57.4336 30.5037 56.6836L29.5662 44.9414C33.4803 43.2422 37.8865 40.8633 42.0936 38.0625L42.5271 39.9375ZM27.4686 43.1016L16.8865 32.5195C19.8748 25.2188 25.5818 15.7617 31.9451 9.39845C39.2107 2.13282 48.7615 1.04298 56.2029 3.78517C57.0818 6.2461 60.574 18.0703 50.5896 28.0547C44.2264 34.418 34.7693 40.125 27.4686 43.1016Z"
				fill="#47B8FF" />
			<path
				d="M36.6328 11.1797C33.2695 14.543 33.2695 19.9922 36.6328 23.3672C39.9961 26.7305 45.4453 26.7305 48.8203 23.3672C52.1836 20.0039 52.1836 14.543 48.8203 11.1797C45.4453 7.81641 39.9961 7.81641 36.6328 11.1797ZM47.0508 21.5977C44.6602 23.9883 40.793 23.9883 38.4023 21.5977C36.0117 19.207 36.0117 15.3398 38.4023 12.9492C40.793 10.5586 44.6602 10.5586 47.0508 12.9492C49.4297 15.3398 49.4297 19.2188 47.0508 21.5977Z"
				fill="#47B8FF" />
		</g>
		<defs>
			<clipPath id="clip0_1071_11314">
				<rect width="60" height="60" fill="white" />
			</clipPath>
		</defs>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59 59" fill="none" id="icon-3">
		<path
			d="M15.211 10.4172C14.3353 9.17266 14.5657 7.23672 15.672 6.31484C18.8524 3.6875 22.6321 2.30469 26.7345 2.30469C30.6985 2.30469 34.4321 3.59531 37.5665 6.13047C38.6728 7.00625 38.9032 8.94219 38.0735 10.2328C37.3821 11.293 36.1376 11.5695 35.2157 10.832C32.7728 8.85 29.8688 7.83594 26.7345 7.83594C23.5079 7.83594 20.5579 8.89609 18.0688 10.9703C17.147 11.7078 15.9024 11.4773 15.211 10.4172Z"
			fill="#F0F6FF" />
		<path
			d="M39.9633 8.98828C40.1477 7.46719 39.5945 5.94609 38.4422 5.02422C35.0312 2.35078 30.975 0.921875 26.7344 0.921875C22.3555 0.921875 18.207 2.39687 14.7961 5.25469C13.6437 6.17656 13.1367 7.74375 13.3211 9.21875C9.26484 13.4594 6.91406 20.0047 6.91406 28.1172C6.91406 28.9008 7.51328 29.5 8.29688 29.5C9.08047 29.5 9.67969 28.9008 9.67969 28.1172C9.67969 21.2953 11.4773 15.718 14.7039 11.8922C15.2109 12.3531 15.8102 12.6297 16.4555 12.7219C16.5938 12.7219 16.732 12.768 16.9164 12.768C17.6539 12.768 18.3914 12.4914 18.9906 12.0305C21.2031 10.1406 23.8305 9.21875 26.7344 9.21875C29.5461 9.21875 32.1273 10.0945 34.3398 11.8922C35.0773 12.4914 35.9531 12.7219 36.8289 12.5836C37.4742 12.4914 38.0734 12.1687 38.5805 11.7539C41.8992 15.4875 43.7891 21.157 43.7891 28.1172C43.7891 28.9008 44.3883 29.5 45.1719 29.5C45.9555 29.5 46.5547 28.9008 46.5547 28.1172C46.5547 19.8664 44.1578 13.275 39.9633 8.98828ZM36.9211 9.44922C36.7828 9.67969 36.5984 9.81797 36.4141 9.81797C36.2758 9.81797 36.1836 9.81797 36.0453 9.67969C33.3719 7.55937 30.1453 6.45312 26.7344 6.45312C23.2313 6.45312 19.9125 7.65156 17.193 9.86406C17.0547 9.95625 16.9625 10.0023 16.8242 10.0023C16.6398 9.95625 16.4555 9.86406 16.3172 9.63359C15.8563 8.98828 15.9484 7.83594 16.5016 7.375C19.4977 4.93203 22.9086 3.6875 26.6883 3.6875C30.3758 3.6875 33.7406 4.88594 36.6445 7.19063C37.2898 7.65156 37.382 8.75781 36.9211 9.44922Z"
			fill="#47B8FF" />
		<path
			d="M24.8906 56.6953H23.0469C21.5258 56.6953 20.2812 55.4508 20.2812 53.9297C20.2812 52.4086 21.5258 51.1641 23.0469 51.1641H24.8906C26.4117 51.1641 27.6562 52.4086 27.6562 53.9297C27.6562 55.4508 26.4117 56.6953 24.8906 56.6953Z"
			fill="#F0F6FF" />
		<path
			d="M43.3281 49.3203C42.5445 49.3203 41.9453 49.9195 41.9453 50.7031C41.9453 51.7172 41.1156 52.5469 40.1016 52.5469H28.8086C28.2555 50.9336 26.6883 49.7812 24.8906 49.7812H23.0469C20.7422 49.7812 18.8984 51.625 18.8984 53.9297C18.8984 56.2344 20.7422 58.0781 23.0469 58.0781H24.8906C26.6883 58.0781 28.2094 56.9258 28.8086 55.3125H40.1016C42.6367 55.3125 44.7109 53.2383 44.7109 50.7031C44.7109 49.9195 44.1117 49.3203 43.3281 49.3203ZM24.8906 55.3125H23.0469C22.2633 55.3125 21.6641 54.7133 21.6641 53.9297C21.6641 53.1461 22.2633 52.5469 23.0469 52.5469H24.8906C25.6742 52.5469 26.2734 53.1461 26.2734 53.9297C26.2734 54.7133 25.6742 55.3125 24.8906 55.3125Z"
			fill="#47B8FF" />
		<path
			d="M13.3672 45.1719C11.6156 45.1719 9.67969 42.7289 9.67969 39.1797C9.67969 35.6305 11.6156 33.1875 13.3672 33.1875C15.1188 33.1875 17.0547 35.6305 17.0547 39.1797C17.0547 42.7289 15.1188 45.1719 13.3672 45.1719Z"
			fill="#F0F6FF" />
		<path
			d="M13.3672 46.5547C10.6016 46.5547 8.29688 43.1898 8.29688 39.1797C8.29688 35.1695 10.6016 31.8047 13.3672 31.8047C16.1328 31.8047 18.4375 35.1695 18.4375 39.1797C18.4375 43.1898 16.1328 46.5547 13.3672 46.5547ZM13.3672 34.5703C12.5375 34.5703 11.0625 36.3219 11.0625 39.1797C11.0625 42.0375 12.5375 43.7891 13.3672 43.7891C14.1969 43.7891 15.6719 42.0375 15.6719 39.1797C15.6719 36.3219 14.1969 34.5703 13.3672 34.5703Z"
			fill="#47B8FF" />
		<path
			d="M13.3672 29.0391C11.293 29.0391 9.40312 30.0992 7.97422 31.8508C5.39297 32.0812 3.22656 35.3539 3.22656 39.1797C3.22656 43.0055 5.39297 46.2781 7.97422 46.5086C9.35703 48.2141 11.293 49.3203 13.3672 49.3203C17.7 49.3203 21.2031 44.757 21.2031 39.1797C21.2031 33.6023 17.7 29.0391 13.3672 29.0391ZM13.3672 43.7891C12.5375 43.7891 11.0625 42.0375 11.0625 39.1797C11.0625 36.3219 12.5375 34.5703 13.3672 34.5703C14.1969 34.5703 15.6719 36.3219 15.6719 39.1797C15.6719 42.0375 14.1969 43.7891 13.3672 43.7891Z"
			fill="#47B8FF" />
		<path
			d="M40.1016 47.9375C43.6655 47.9375 46.5547 44.0165 46.5547 39.1797C46.5547 34.3429 43.6655 30.4219 40.1016 30.4219C36.5376 30.4219 33.6484 34.3429 33.6484 39.1797C33.6484 44.0165 36.5376 47.9375 40.1016 47.9375Z"
			fill="#F0F6FF" />
		<path
			d="M40.1016 49.3203C35.7688 49.3203 32.2656 44.757 32.2656 39.1797C32.2656 33.6023 35.7688 29.0391 40.1016 29.0391C44.4344 29.0391 47.9375 33.6023 47.9375 39.1797C47.9375 44.757 44.4344 49.3203 40.1016 49.3203ZM40.1016 31.8047C37.3359 31.8047 35.0312 35.1695 35.0312 39.1797C35.0312 43.1898 37.3359 46.5547 40.1016 46.5547C42.8672 46.5547 45.1719 43.1898 45.1719 39.1797C45.1719 35.1695 42.8672 31.8047 40.1016 31.8047Z"
			fill="#47B8FF" />
		<path
			d="M40.1016 49.3203C35.7688 49.3203 32.2656 44.757 32.2656 39.1797C32.2656 33.6023 35.7688 29.0391 40.1016 29.0391C44.4344 29.0391 47.9375 33.6023 47.9375 39.1797C47.9375 44.757 44.4344 49.3203 40.1016 49.3203ZM40.1016 31.8047C37.3359 31.8047 35.0312 35.1695 35.0312 39.1797C35.0312 43.1898 37.3359 46.5547 40.1016 46.5547C42.8672 46.5547 45.1719 43.1898 45.1719 39.1797C45.1719 35.1695 42.8672 31.8047 40.1016 31.8047Z"
			fill="#47B8FF" />
		<path
			d="M45.1719 31.8047C42.4062 31.8047 40.1016 35.1695 40.1016 39.1797C40.1016 43.1898 42.4062 46.5547 45.1719 46.5547C47.9375 46.5547 50.2422 43.1898 50.2422 39.1797C50.2422 35.1695 47.9375 31.8047 45.1719 31.8047Z"
			fill="#47B8FF" />
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60" fill="none" id="icon-4">
		<g clip-path="url(#clip0_1071_11343)">
			<path
				d="M45.6375 38.2125C44.8888 37.7319 44.0145 37.4839 43.125 37.5M43.125 37.5C41.0625 37.5 39.375 38.775 39.375 40.3125C39.375 41.85 41.0625 43.125 43.125 43.125C45.1875 43.125 46.875 44.4 46.875 45.9375C46.875 47.475 45.1875 48.75 43.125 48.75M43.125 37.5V33.75M43.125 48.75C42.2355 48.7661 41.3612 48.5181 40.6125 48.0375M43.125 48.75V52.5"
				stroke="#47B8FF" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
				stroke-linejoin="round" />
			<path
				d="M43.125 58.125C51.4093 58.125 58.125 51.4093 58.125 43.125C58.125 34.8407 51.4093 28.125 43.125 28.125C34.8407 28.125 28.125 34.8407 28.125 43.125C28.125 51.4093 34.8407 58.125 43.125 58.125Z"
				stroke="#47B8FF" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
				stroke-linejoin="round" />
			<path
				d="M20.625 43.0125C10.0875 42.075 1.875 33.2625 1.875 22.5C1.875 11.1 11.1 1.875 22.5 1.875C33.2625 1.875 42.075 10.0875 43.0125 20.625"
				stroke="#47B8FF" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
				stroke-linejoin="round" />
			<path d="M22.5 9.375V22.5H34.125" stroke="#47B8FF" stroke-width="2.5" stroke-miterlimit="10"
				stroke-linecap="round" stroke-linejoin="round" />
		</g>
		<defs>
			<clipPath id="clip0_1071_11343">
				<rect width="60" height="60" fill="white" />
			</clipPath>
		</defs>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" fill="none" id="icon-5">
		<path
			d="M32.5 15.1856C29.0755 15.1852 25.7277 16.2003 22.8801 18.1026C20.0325 20.0049 17.813 22.7089 16.5022 25.8727C15.1914 29.0364 14.8482 32.5178 15.516 35.8766C16.1839 39.2354 17.8328 42.3207 20.2541 44.7424C22.6755 47.1641 25.7606 48.8133 29.1194 49.4815C32.4781 50.1498 35.9595 49.807 39.1234 48.4966C42.2873 47.1862 44.9916 44.9669 46.8942 42.1196C48.7968 39.2722 49.8124 35.9245 49.8124 32.5C49.807 27.9099 47.9813 23.5094 44.7359 20.2635C41.4904 17.0177 37.0901 15.1915 32.5 15.1856ZM32.5 47.7811C29.4771 47.7815 26.522 46.8854 24.0084 45.2063C21.4948 43.5271 19.5356 41.1402 18.3786 38.3475C17.2216 35.5548 16.9188 32.4817 17.5084 29.5169C18.0981 26.5521 19.5537 23.8287 21.6912 21.6912C23.8287 19.5537 26.5521 18.098 29.5169 17.5084C32.4817 16.9188 35.5548 17.2216 38.3475 18.3786C41.1402 19.5356 43.5271 21.4948 45.2063 24.0084C46.8855 26.522 47.7815 29.4771 47.7811 32.5C47.7763 36.5513 46.1647 40.4353 43.3 43.3C40.4353 46.1647 36.5513 47.7763 32.5 47.7811Z"
			fill="#47B8FF" />
		<path
			d="M62.983 26.3291L58.5833 25.4841C57.9757 23.2211 57.0742 21.0475 55.9021 19.0186L58.4188 15.3075C58.5524 15.1118 58.6133 14.8755 58.5911 14.6396C58.5688 14.4036 58.4648 14.1829 58.2969 14.0156L50.9844 6.70313C50.8174 6.53631 50.5974 6.43289 50.3624 6.41065C50.1274 6.3884 49.892 6.44873 49.6966 6.58125L45.9835 9.09797C43.954 7.92566 41.7796 7.02424 39.516 6.41672L38.671 2.01703C38.6266 1.78504 38.5027 1.57579 38.3207 1.42527C38.1386 1.27475 37.9098 1.19238 37.6736 1.19234H27.3264C27.0902 1.19238 26.8614 1.27475 26.6794 1.42527C26.4974 1.57579 26.3735 1.78504 26.3291 2.01703L25.4841 6.41672C23.2213 7.02498 21.0478 7.92637 19.0186 9.09797L15.3075 6.58125C15.1118 6.44766 14.8755 6.38672 14.6396 6.40897C14.4037 6.43123 14.183 6.53529 14.0157 6.70313L6.70317 14.0156C6.53635 14.1827 6.43293 14.4026 6.41069 14.6376C6.38844 14.8726 6.44877 15.1081 6.58129 15.3034L9.09801 19.0186C7.92641 21.0477 7.02502 23.2213 6.41676 25.4841L2.01707 26.3291C1.78508 26.3735 1.57583 26.4973 1.42531 26.6794C1.27479 26.8614 1.19242 27.0902 1.19238 27.3264V37.6716C1.19195 37.9081 1.2741 38.1374 1.42466 38.3198C1.57522 38.5023 1.78474 38.6265 2.01707 38.6709L6.41676 39.5159C7.02377 41.7785 7.92523 43.9515 9.09801 45.9794L6.58129 49.6925C6.44877 49.8879 6.38844 50.1233 6.41069 50.3583C6.43293 50.5933 6.53635 50.8133 6.70317 50.9803L14.0157 58.2928C14.1825 58.4599 14.4023 58.5637 14.6373 58.5864C14.8723 58.609 15.1079 58.549 15.3035 58.4167L19.0146 55.9C21.0434 57.0723 23.217 57.9737 25.48 58.5813L26.325 62.9809C26.3694 63.2129 26.4933 63.4222 26.6754 63.5727C26.8574 63.7232 27.0862 63.8056 27.3224 63.8056H37.6696C37.9058 63.8056 38.1346 63.7232 38.3166 63.5727C38.4986 63.4222 38.6225 63.2129 38.6669 62.9809L39.5119 58.5813C41.7756 57.9737 43.9499 57.0723 45.9794 55.9L49.6905 58.4167C49.8862 58.5511 50.1228 58.6127 50.3591 58.5908C50.5955 58.5689 50.8167 58.4649 50.9844 58.2969L58.2969 50.9844C58.4646 50.8175 58.5687 50.5973 58.5913 50.3618C58.6139 50.1263 58.5536 49.8903 58.4208 49.6945L55.9041 45.9834C57.0759 43.9551 57.9773 41.7822 58.5854 39.52L62.9871 38.675C63.219 38.6301 63.4281 38.5058 63.5782 38.3233C63.7284 38.1409 63.8102 37.9119 63.8097 37.6756V27.3264C63.8096 27.0899 63.7269 26.8609 63.576 26.6788C63.4251 26.4967 63.2154 26.3731 62.983 26.3291ZM61.7764 36.8327L57.5657 37.6452C57.374 37.6819 57.1969 37.7731 57.0557 37.9078C56.9145 38.0425 56.8151 38.2151 56.7694 38.4048C56.1619 40.9033 55.1696 43.2922 53.8282 45.4858C53.7262 45.6524 53.6745 45.8449 53.6792 46.0401C53.6839 46.2354 53.7448 46.4252 53.8546 46.5867L56.2657 50.1373L50.1394 56.2656L46.5888 53.8586C46.4289 53.7507 46.2417 53.6905 46.0488 53.6851C45.856 53.6797 45.6657 53.7293 45.5 53.8281C43.2977 55.1734 40.8991 56.1671 38.3907 56.7734C38.2016 56.8193 38.0296 56.9186 37.8953 57.0594C37.761 57.2002 37.6699 57.3766 37.633 57.5677L36.8205 61.7764H28.1654L27.3529 57.5677C27.3158 57.3763 27.2244 57.1997 27.0897 57.0589C26.955 56.9181 26.7826 56.819 26.5932 56.7734C24.0945 56.1645 21.7057 55.1708 19.5122 53.8281C19.3458 53.7266 19.1537 53.6751 18.9589 53.6798C18.764 53.6845 18.5746 53.7451 18.4133 53.8545L14.8627 56.2656L8.73442 50.1373L11.1414 46.5847C11.2504 46.4236 11.3108 46.2346 11.3155 46.0401C11.3202 45.8457 11.2689 45.654 11.1679 45.4878C9.82746 43.2915 8.83529 40.9008 8.2266 38.4008C8.18106 38.2113 8.08196 38.0389 7.94113 37.9042C7.80031 37.7695 7.6237 37.6782 7.43238 37.6411L3.22363 36.8286V28.1653L7.43238 27.3528C7.62164 27.317 7.7968 27.228 7.93743 27.0964C8.07805 26.9648 8.17835 26.7959 8.2266 26.6094C8.83481 24.1054 9.82844 21.7111 11.1719 19.5122C11.2734 19.3458 11.3249 19.1537 11.3202 18.9589C11.3155 18.764 11.2549 18.5746 11.1455 18.4133L8.73442 14.8627L14.8627 8.73438L18.4133 11.1394C18.5746 11.2488 18.764 11.3094 18.9589 11.3141C19.1537 11.3188 19.3458 11.2673 19.5122 11.1658C21.7115 9.82443 24.1058 8.83287 26.6094 8.22656C26.7989 8.18102 26.9713 8.08192 27.106 7.94109C27.2407 7.80027 27.332 7.62366 27.3691 7.43234L28.1816 3.22359H36.851L37.6635 7.43234C37.7004 7.6234 37.7915 7.79982 37.9258 7.94062C38.0601 8.08142 38.232 8.18067 38.4211 8.22656C40.9189 8.83622 43.307 9.82981 45.5 11.1719C45.6664 11.2734 45.8585 11.3249 46.0534 11.3202C46.2482 11.3155 46.4376 11.2549 46.5989 11.1455L50.1394 8.73438L56.2657 14.8627L53.8586 18.4133C53.7492 18.5746 53.6886 18.764 53.6839 18.9589C53.6792 19.1537 53.7307 19.3458 53.8322 19.5122C55.174 21.711 56.1649 24.1054 56.7694 26.6094C56.8153 26.7994 56.915 26.9721 57.0566 27.1069C57.1982 27.2417 57.3756 27.3327 57.5677 27.3691L61.7764 28.1816V36.8327Z"
			fill="#47B8FF" />
		<path
			d="M32.5004 10.6804C28.1848 10.6804 23.9662 11.9601 20.378 14.3577C16.7898 16.7552 13.9931 20.163 12.3416 24.15C10.6901 28.1371 10.258 32.5243 11.0999 36.7569C11.9419 40.9895 14.02 44.8774 17.0715 47.9289C20.123 50.9805 24.0109 53.0586 28.2435 53.9005C32.4762 54.7424 36.8634 54.3103 40.8504 52.6588C44.8374 51.0074 48.2452 48.2107 50.6428 44.6224C53.0403 41.0342 54.32 36.8156 54.32 32.5001C54.3136 26.7151 52.0127 21.1689 47.9221 17.0783C43.8315 12.9878 38.2853 10.6868 32.5004 10.6804ZM32.5004 52.2885C28.5866 52.2885 24.7607 51.1279 21.5065 48.9536C18.2523 46.7792 15.716 43.6886 14.2182 40.0728C12.7205 36.4569 12.3286 32.4781 13.0922 28.6395C13.8557 24.801 15.7404 21.275 18.5078 18.5075C21.2753 15.7401 24.8012 13.8554 28.6398 13.0919C32.4784 12.3283 36.4572 12.7202 40.0731 14.2179C43.6889 15.7157 46.7795 18.252 48.9538 21.5062C51.1282 24.7604 52.2888 28.5863 52.2888 32.5001C52.2829 37.7465 50.1961 42.7763 46.4864 46.4861C42.7766 50.1958 37.7468 52.2826 32.5004 52.2885Z"
			fill="#47B8FF" />
		<path
			d="M28.1901 33.3226L26.1893 28.3501C26.1138 28.1629 25.9842 28.0024 25.8171 27.8891C25.6499 27.7759 25.4528 27.715 25.2509 27.7143C25.0496 27.714 24.8527 27.7734 24.6852 27.8852C24.5178 27.9969 24.3873 28.1559 24.3104 28.342L22.2487 33.3125L20.9061 36.5625C20.8551 36.6858 20.829 36.818 20.8291 36.9515C20.8292 37.085 20.8557 37.2171 20.9069 37.3404C20.9581 37.4637 21.0331 37.5756 21.1276 37.6699C21.222 37.7642 21.3342 37.8389 21.4575 37.8899C21.5809 37.9408 21.7131 37.967 21.8466 37.9668C21.9801 37.9667 22.1122 37.9403 22.2355 37.8891C22.3587 37.8379 22.4707 37.7629 22.565 37.6684C22.6593 37.5739 22.734 37.4618 22.785 37.3384L23.8656 34.7221H26.5692L27.6214 37.3303C27.6686 37.4576 27.7409 37.5741 27.8339 37.673C27.927 37.7719 28.0389 37.8511 28.1631 37.906C28.2873 37.9609 28.4213 37.9903 28.557 37.9925C28.6928 37.9947 28.8276 37.9697 28.9536 37.9188C29.0795 37.868 29.1939 37.7925 29.2902 37.6967C29.3864 37.6009 29.4624 37.4868 29.5138 37.3611C29.5651 37.2354 29.5907 37.1006 29.5891 36.9649C29.5875 36.8291 29.5587 36.695 29.5043 36.5706L28.1901 33.3226ZM24.7025 32.7031L25.2326 31.4173L25.7506 32.7031H24.7025ZM41.247 27.0156C40.9776 27.0156 40.7193 27.1226 40.5288 27.3131C40.3384 27.5035 40.2314 27.7619 40.2314 28.0312V36.9687C40.2314 37.2381 40.3384 37.4964 40.5288 37.6869C40.7193 37.8773 40.9776 37.9843 41.247 37.9843C41.5164 37.9843 41.7747 37.8773 41.9652 37.6869C42.1556 37.4964 42.2626 37.2381 42.2626 36.9687V28.0312C42.2626 27.7619 42.1556 27.5035 41.9652 27.3131C41.7747 27.1226 41.5164 27.0156 41.247 27.0156ZM34.8465 27.0156H32.2607C31.9914 27.0156 31.7331 27.1226 31.5426 27.3131C31.3521 27.5035 31.2451 27.7619 31.2451 28.0312V36.9687C31.2451 37.2381 31.3521 37.4964 31.5426 37.6869C31.7331 37.8773 31.9914 37.9843 32.2607 37.9843C32.5301 37.9843 32.7884 37.8773 32.9789 37.6869C33.1694 37.4964 33.2764 37.2381 33.2764 36.9687V33.5156H34.8465C35.7085 33.5156 36.5351 33.1732 37.1446 32.5637C37.7541 31.9542 38.0965 31.1275 38.0965 30.2656C38.0965 29.4036 37.7541 28.577 37.1446 27.9675C36.5351 27.358 35.7085 27.0156 34.8465 27.0156ZM34.8465 31.4843H33.2764V29.0468H34.8465C35.1698 29.0468 35.4798 29.1752 35.7083 29.4038C35.9369 29.6324 36.0653 29.9424 36.0653 30.2656C36.0653 30.5888 35.9369 30.8988 35.7083 31.1274C35.4798 31.3559 35.1698 31.4843 34.8465 31.4843Z"
			fill="#47B8FF" />
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82 60" fill="none" id="icon-6">
		<path
			d="M14.2705 49.846C14.219 49.8481 14.1676 49.8533 14.1167 49.8616C14.0771 49.8694 14.0405 49.8838 14.0023 49.8952C13.9606 49.9058 13.9194 49.9186 13.879 49.9334C13.8414 49.9489 13.8074 49.9702 13.7717 49.9891C13.7345 50.0087 13.6961 50.026 13.661 50.0492C13.6302 50.0697 13.6034 50.0948 13.5745 50.1177C13.5381 50.1446 13.5031 50.1735 13.4698 50.2041C13.4445 50.229 13.4239 50.2578 13.4008 50.2847C13.3374 50.3486 13.2858 50.4234 13.2486 50.5054C13.2301 50.5395 13.2087 50.5714 13.1932 50.6074C13.1687 50.6675 13.1488 50.7294 13.1336 50.7925C13.1289 50.8107 13.1205 50.827 13.1166 50.8455L13.1162 50.8486C13.108 50.8969 13.1026 50.9457 13.0999 50.9946C13.0963 51.0328 13.0886 51.0712 13.0884 51.1089L13.0879 51.1137C13.0879 51.1407 13.0942 51.1659 13.0958 51.1924C13.0977 51.2494 13.1034 51.3061 13.1129 51.3623C13.1204 51.4002 13.1344 51.4353 13.1451 51.4719C13.1561 51.515 13.1693 51.5574 13.1846 51.5991C13.2006 51.6379 13.2225 51.6732 13.2421 51.71C13.2612 51.7458 13.2777 51.7829 13.3001 51.8167C13.3219 51.8497 13.3486 51.8785 13.3733 51.9092C13.3988 51.9436 13.426 51.9766 13.4549 52.0081C13.4814 52.0352 13.5121 52.0574 13.541 52.0819C13.5735 52.1118 13.6076 52.1399 13.6431 52.1662C13.6808 52.1901 13.7198 52.212 13.7598 52.2318C13.7928 52.2497 13.8237 52.2704 13.8586 52.2854C13.919 52.3102 13.9812 52.3302 14.0447 52.3453C14.0626 52.35 14.0787 52.3582 14.0969 52.3622L14.1026 52.3633L14.1132 52.3655C18.422 53.3221 22.8199 53.8204 27.2335 53.852C38.9108 53.852 46.5146 49.8708 51.163 45.962C54.4818 43.1412 57.1404 39.6259 58.951 35.6645C60.7616 31.7031 61.6799 27.3924 61.6411 23.0371H66.0788C66.548 23.0361 67.0081 22.9069 67.4093 22.6636C67.8105 22.4202 68.1376 22.0719 68.3553 21.6562C68.573 21.2404 68.6729 20.7732 68.6444 20.3048C68.6159 19.8364 68.46 19.3847 68.1935 18.9985L57.093 2.55927C56.8565 2.2233 56.543 1.94886 56.1786 1.75888C55.8143 1.5689 55.4098 1.46892 54.9989 1.46729H54.9921C54.5839 1.46732 54.1815 1.56463 53.8185 1.75117C53.4554 1.93771 53.142 2.20809 52.9042 2.53991L41.0336 18.9667C40.7591 19.3515 40.5958 19.8044 40.5616 20.2758C40.5275 20.7472 40.6237 21.2189 40.8397 21.6392C41.0558 22.0596 41.3834 22.4124 41.7866 22.6589C42.1899 22.9055 42.6532 23.0363 43.1258 23.037H47.5471C46.9092 39.3624 34.0318 49.8365 14.3651 49.8365C14.3327 49.8365 14.3023 49.8437 14.2705 49.846ZM50.1322 21.7599C50.1322 21.4212 49.9976 21.0963 49.7581 20.8568C49.5186 20.6173 49.1937 20.4827 48.855 20.4827L43.109 20.4559L54.9896 4.00854L66.0788 20.4827H60.3496C60.3405 20.4827 60.332 20.4852 60.323 20.4854C60.315 20.4855 60.3076 20.4836 60.2997 20.4839C60.2667 20.4852 60.236 20.4937 60.2038 20.4974C60.1576 20.5014 60.1117 20.5078 60.0663 20.5167C60.0275 20.5255 59.9912 20.5394 59.9538 20.5516C59.9116 20.5641 59.8701 20.5788 59.8294 20.5956C59.7926 20.612 59.7589 20.633 59.7242 20.6527C59.6874 20.6735 59.6501 20.693 59.6157 20.7172C59.5828 20.7405 59.5536 20.7675 59.5231 20.7937C59.4914 20.8207 59.4591 20.8465 59.4302 20.8766C59.4024 20.9056 59.3787 20.9378 59.3537 20.9693C59.3279 21.0018 59.3011 21.0331 59.2785 21.068C59.2565 21.102 59.2394 21.1387 59.2206 21.1748C59.2013 21.2118 59.1809 21.2478 59.1653 21.2869C59.15 21.325 59.1402 21.3652 59.1286 21.405C59.1157 21.4452 59.1047 21.4861 59.0959 21.5274C59.0883 21.5683 59.0867 21.6108 59.0832 21.6529C59.0801 21.6888 59.0724 21.7232 59.0724 21.7599C59.0724 21.769 59.0749 21.7774 59.0751 21.7864C59.0752 21.7944 59.0733 21.8018 59.0736 21.8098C59.291 25.9948 58.5422 30.1737 56.8852 34.0229C55.2283 37.8721 52.7077 41.2882 49.5186 44.0069C44.9692 47.8332 37.3239 51.7189 25.2766 51.2548C40.6739 47.8579 50.1322 37.0287 50.1322 21.7599Z"
			fill="#47B8FF" />
		<path
			d="M63.3424 30.9714C62.1213 38.7355 56.9958 46.0169 49.6321 50.449C49.4883 50.5355 49.363 50.6494 49.2634 50.7843C49.1637 50.9192 49.0915 51.0724 49.0511 51.2352C49.0106 51.398 49.0025 51.5671 49.0274 51.733C49.0523 51.8989 49.1097 52.0583 49.1961 52.202C49.2826 52.3457 49.3966 52.471 49.5315 52.5707C49.6664 52.6704 49.8196 52.7425 49.9824 52.783C50.1451 52.8235 50.3143 52.8315 50.4802 52.8066C50.6461 52.7817 50.8054 52.7244 50.9491 52.6379C58.9527 47.821 64.5285 39.8693 65.8655 31.3681C65.9181 31.0335 65.8356 30.6917 65.6362 30.4179C65.4368 30.1441 65.1368 29.9608 64.8022 29.9082C64.4677 29.8556 64.1259 29.9381 63.8521 30.1375C63.5783 30.3369 63.3949 30.6368 63.3424 30.9714ZM23.7213 46.5407C23.8249 46.5408 23.9281 46.5283 24.0287 46.5033C33.5077 44.1623 40.0264 38.8122 43.404 30.6016C43.4682 30.4464 43.5011 30.2801 43.501 30.1122C43.5008 29.9442 43.4676 29.7779 43.4031 29.6229C43.3386 29.4678 43.2441 29.327 43.1251 29.2085C43.0061 29.09 42.865 28.9961 42.7096 28.9322C42.5543 28.8683 42.3879 28.8357 42.22 28.8362C42.0521 28.8367 41.8859 28.8703 41.7309 28.9351C41.576 29 41.4354 29.0947 41.3171 29.2139C41.1988 29.3332 41.1052 29.4746 41.0417 29.63C37.9909 37.0455 32.0609 41.8885 23.4163 44.0238C23.1135 44.0986 22.8486 44.2816 22.6715 44.5382C22.4943 44.7949 22.4173 45.1076 22.4548 45.4172C22.4923 45.7268 22.6418 46.012 22.8751 46.219C23.1084 46.4259 23.4094 46.5404 23.7213 46.5407ZM70.0272 55.1087H35.1223C34.7836 55.1087 34.4587 55.2432 34.2192 55.4827C33.9797 55.7222 33.8451 56.0471 33.8451 56.3858C33.8451 56.7246 33.9797 57.0494 34.2192 57.2889C34.4587 57.5284 34.7836 57.663 35.1223 57.663H70.0272C70.3659 57.663 70.6908 57.5284 70.9303 57.2889C71.1698 57.0494 71.3044 56.7246 71.3044 56.3858C71.3044 56.0471 71.1698 55.7222 70.9303 55.4827C70.6908 55.2432 70.3659 55.1087 70.0272 55.1087ZM1.27717 57.663H1.91576C2.25449 57.663 2.57934 57.5284 2.81886 57.2889C3.05838 57.0494 3.19294 56.7246 3.19294 56.3858C3.19294 56.0471 3.05838 55.7222 2.81886 55.4827C2.57934 55.2432 2.25449 55.1087 1.91576 55.1087H1.27717C0.938446 55.1087 0.613592 55.2432 0.374076 55.4827C0.134559 55.7222 0 56.0471 0 56.3858C0 56.7246 0.134559 57.0494 0.374076 57.2889C0.613592 57.5284 0.938446 57.663 1.27717 57.663ZM25.6545 55.1087C25.3158 55.1087 24.9909 55.2432 24.7514 55.4827C24.5119 55.7222 24.3773 56.0471 24.3773 56.3858C24.3773 56.7246 24.5119 57.0494 24.7514 57.2889C24.9909 57.5284 25.3158 57.663 25.6545 57.663H26.9036C27.2423 57.663 27.5672 57.5284 27.8067 57.2889C28.0462 57.0494 28.1808 56.7246 28.1808 56.3858C28.1808 56.0471 28.0462 55.7222 27.8067 55.4827C27.5672 55.2432 27.2423 55.1087 26.9036 55.1087H25.6545ZM11.9105 55.1087H10.6614C10.3227 55.1087 9.99783 55.2432 9.75831 55.4827C9.51879 55.7222 9.38423 56.0471 9.38423 56.3858C9.38423 56.7246 9.51879 57.0494 9.75831 57.2889C9.99783 57.5284 10.3227 57.663 10.6614 57.663H11.9105C12.2492 57.663 12.5741 57.5284 12.8136 57.2889C13.0531 57.0494 13.1877 56.7246 13.1877 56.3858C13.1877 56.0471 13.0531 55.7222 12.8136 55.4827C12.5741 55.2432 12.2493 55.1087 11.9105 55.1087ZM20.6568 55.1087C20.3181 55.1087 19.9932 55.2432 19.7537 55.4827C19.5142 55.7222 19.3796 56.0471 19.3796 56.3858C19.3796 56.7246 19.5142 57.0494 19.7537 57.2889C19.9932 57.5284 20.3181 57.663 20.6568 57.663H21.9059C22.2446 57.663 22.5695 57.5284 22.809 57.2889C23.0485 57.0494 23.1831 56.7246 23.1831 56.3858C23.1831 56.0471 23.0485 55.7222 22.809 55.4827C22.5695 55.2432 22.2446 55.1087 21.9059 55.1087H20.6568ZM15.6591 55.1087C15.3204 55.1087 14.9955 55.2432 14.756 55.4827C14.5165 55.7222 14.3819 56.0471 14.3819 56.3858C14.3819 56.7246 14.5165 57.0494 14.756 57.2889C14.9955 57.5284 15.3204 57.663 15.6591 57.663H16.9082C17.2469 57.663 17.5718 57.5284 17.8113 57.2889C18.0508 57.0494 18.1854 56.7246 18.1854 56.3858C18.1854 56.0471 18.0508 55.7222 17.8113 55.4827C17.5718 55.2432 17.2469 55.1087 16.9082 55.1087H15.6591ZM6.91283 57.663C7.25156 57.663 7.57641 57.5284 7.81593 57.2889C8.05545 57.0494 8.19001 56.7246 8.19001 56.3858C8.19001 56.0471 8.05545 55.7222 7.81593 55.4827C7.57641 55.2432 7.25156 55.1087 6.91283 55.1087H5.66372C5.32499 55.1087 5.00014 55.2432 4.76062 55.4827C4.5211 55.7222 4.38654 56.0471 4.38654 56.3858C4.38654 56.7246 4.5211 57.0494 4.76062 57.2889C5.00014 57.5284 5.32499 57.663 5.66372 57.663H6.91283ZM30.6522 55.1087C30.3135 55.1087 29.9886 55.2432 29.7491 55.4827C29.5096 55.7222 29.375 56.0471 29.375 56.3858C29.375 56.7246 29.5096 57.0494 29.7491 57.2889C29.9886 57.5284 30.3135 57.663 30.6522 57.663H31.2908C31.6295 57.663 31.9543 57.5284 32.1939 57.2889C32.4334 57.0494 32.5679 56.7246 32.5679 56.3858C32.5679 56.0471 32.4334 55.7222 32.1939 55.4827C31.9543 55.2432 31.6295 55.1087 31.2908 55.1087H30.6522Z"
			fill="#47B8FF" />
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" fill="none" id="close">
		<path fill-rule="evenodd" clip-rule="evenodd"
			d="M12.0015 13.0622L1.06097 24.0027L0.000314713 22.942L10.9408 12.0015L0 1.06072L1.06066 5.66244e-05L12.0015 10.9409L22.9423 0L24.003 1.06066L13.0621 12.0015L24.0027 22.9421L22.942 24.0027L12.0015 13.0622Z"
			fill="#B5B5B5" />
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 48" fill="none" id="check-email">
		<g id="check-email 1" clip-path="url(#clip0_1217_50419)">
			<g id="Layer 2">
				<path id="Vector"
					d="M47.6999 23.6001C45.3661 23.6001 43.0847 24.2922 41.1442 25.5888C39.2037 26.8854 37.6912 28.7283 36.7981 30.8844C35.905 33.0406 35.6713 35.4132 36.1266 37.7022C36.5819 39.9911 37.7058 42.0937 39.356 43.744C41.0063 45.3942 43.1089 46.5181 45.3978 46.9734C47.6868 47.4287 50.0594 47.195 52.2156 46.3019C54.3717 45.4088 56.2146 43.8963 57.5112 41.9558C58.8078 40.0153 59.4999 37.7339 59.4999 35.4001C59.4963 32.2717 58.2519 29.2724 56.0397 27.0603C53.8276 24.8481 50.8283 23.6037 47.6999 23.6001ZM47.6999 43.2668C46.144 43.2668 44.6231 42.8054 43.3294 41.941C42.0358 41.0766 41.0275 39.848 40.4321 38.4105C39.8366 36.9731 39.6809 35.3914 39.9844 33.8654C40.2879 32.3394 41.0372 30.9377 42.1373 29.8375C43.2375 28.7374 44.6392 27.9881 46.1652 27.6846C47.6912 27.381 49.2729 27.5368 50.7104 28.1322C52.1478 28.7277 53.3764 29.7359 54.2408 31.0296C55.1052 32.3233 55.5666 33.8442 55.5666 35.4001C55.5645 37.4858 54.735 39.4855 53.2602 40.9604C51.7853 42.4352 49.7856 43.2647 47.6999 43.2668Z"
					fill="#47B8FF" />
				<path id="Vector_2"
					d="M49.6271 31.6513L46.6771 34.9003L45.7724 33.9051C45.4176 33.5362 44.933 33.3201 44.4214 33.3028C43.9098 33.2855 43.4116 33.4683 43.0327 33.8124C42.6538 34.1565 42.4239 34.6348 42.392 35.1457C42.3601 35.6565 42.5286 36.1597 42.8618 36.5483L45.2218 39.1483C45.4059 39.3513 45.6305 39.5136 45.8812 39.6247C46.1318 39.7357 46.4029 39.7931 46.6771 39.7931C46.9512 39.7931 47.2223 39.7357 47.473 39.6247C47.7236 39.5136 47.9482 39.3513 48.1324 39.1483L52.5377 34.2945C52.8709 33.9059 53.0394 33.4027 53.0075 32.8919C52.9756 32.381 52.7457 31.9027 52.3668 31.5586C51.9879 31.2145 51.4897 31.0317 50.9781 31.049C50.4665 31.0663 49.9819 31.2824 49.6271 31.6513Z"
					fill="#47B8FF" />
				<path id="Vector_3"
					d="M57.9306 3.45155L33.4554 21.5803C32.4467 22.3052 31.2363 22.6959 29.9941 22.6973C28.7662 22.6981 27.5688 22.3144 26.5701 21.5999L2.0694 3.45548C1.9229 3.34674 1.74903 3.2809 1.56724 3.26533C1.38545 3.24976 1.20292 3.28508 1.04006 3.36732C0.877194 3.44957 0.740426 3.57551 0.64505 3.73105C0.549675 3.88659 0.499454 4.06559 0.500004 4.24805V35.4C0.500004 36.4432 0.914408 37.4437 1.65205 38.1813C2.38969 38.919 3.39015 39.3334 4.43334 39.3334H33.4987C32.55 36.019 32.8373 32.473 34.307 29.3545C35.2617 27.2006 36.7218 25.3087 38.5635 23.8392C40.4051 22.3697 42.5739 21.366 44.8861 20.9132C47.1982 20.4605 49.5854 20.572 51.8453 21.2383C54.1052 21.9045 56.171 23.106 57.8677 24.7407C58.0089 24.8677 58.184 24.9509 58.3716 24.9802C58.5593 25.0095 58.7514 24.9836 58.9246 24.9056C59.0977 24.8277 59.2445 24.7011 59.347 24.5412C59.4496 24.3813 59.5034 24.1951 59.502 24.0052V4.24215C59.5022 4.05986 59.4517 3.88111 59.3561 3.72586C59.2606 3.57061 59.1238 3.44496 58.961 3.36295C58.7982 3.28094 58.6159 3.2458 58.4342 3.26144C58.2526 3.27709 58.077 3.3429 57.9306 3.45155Z"
					fill="#F9D75C" />
				<path id="Vector_4"
					d="M28.8849 18.4198C29.2167 18.6505 29.6119 18.7726 30.016 18.7691C30.42 18.7655 30.813 18.6366 31.1407 18.4001L53.5902 1.77393C53.7567 1.65081 53.8801 1.47827 53.9427 1.28092C54.0054 1.08357 54.0041 0.871472 53.9392 0.674861C53.8742 0.478251 53.7489 0.307163 53.581 0.185983C53.4131 0.0648034 53.2112 -0.000283158 53.0041 9.26015e-07H6.99004C6.78315 0.000131068 6.58156 0.0655153 6.41398 0.186848C6.2464 0.308181 6.12136 0.479281 6.05665 0.675796C5.99195 0.872311 5.99087 1.08423 6.05358 1.28139C6.1163 1.47855 6.2396 1.65091 6.40594 1.77393L28.8849 18.4198Z"
					fill="#F9D75C" />
			</g>
		</g>
		<defs>
			<clipPath id="clip0_1217_50419">
				<rect width="59" height="47.2" fill="white" transform="translate(0.5)" />
			</clipPath>
		</defs>
	</symbol>
</svg>