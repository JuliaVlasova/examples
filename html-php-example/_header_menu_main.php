<?php
use frontend\assets\components\menu\TopMenuAsset;
use frontend\widgets\microdata\Svg;

TopMenuAsset::register($this);
$tool = $this->context->tool;
$cssToolId = strtolower($tool->getId());
?>
<div class="top-menu <?=$cssToolId?>">
    <div class="top-menu__blur"></div>
    <a href="<?php echo \yii\helpers\Url::to(['/']); ?>" class="top-menu__logo-link">
        <?=Svg::widget(['attrs' => ['class' => 'h-logo'], 'id' => 'h-logo'])?>
    </a>

    <div class="top-menu__inner">
        <div class="top-menu__menu">
            <a href="<?php echo \yii\helpers\Url::to(['/']); ?>"
                class="top-menu__item <?php if ($this->activeClass == 'home'): ?>top-menu__item_active<?php endif; ?>">
                <?=Yii::t('app/layout', 'Home')?>
            </a>
            <div
                class="top-dropdown <?php if ($this->activeClass == 'tools'): ?>top-dropdown_active-desktop<?php endif; ?>">
                <div class="top-dropdown__content">
                    <div class="top-dropdown__inner-content top-dropdown__inner-content_sm">
                        <a href="<?php echo \yii\helpers\Url::to(['/page/rank-tracker/index']); ?>"
                            class="top-dropdown__item top-dropdown__item_lg">
                            <div class="h-inner-logo">
                                <?=Svg::widget(['attrs' => ['class' => 'h-inner-logo__rt'], 'id' => 'h-rt'])?>
                                <span class="h-inner-logo__text">Rank <strong>Tracker</strong></span>
                            </div>
                            <span class="top-dropdown__text">
                                <?=Yii::t('app/layout', 'Rank tracking and keyword research')?>
                            </span>
                        </a>
                        <a href="<?php echo \yii\helpers\Url::to(['/page/website-auditor/index']); ?>"
                            class="top-dropdown__item top-dropdown__item_lg">
                            <div class="h-inner-logo">
                                <?=Svg::widget(['attrs' => ['class' => 'h-inner-logo__wa'], 'id' => 'h-wa'])?>
                                <span class="h-inner-logo__text">WebSite <strong>Auditor</strong></span>
                            </div>
                            <span class="top-dropdown__text">
                                <?=Yii::t('app/layout', 'Technical and on-page SEO audit')?>
                            </span>
                        </a>
                        <a href="<?php echo \yii\helpers\Url::to(['/page/seo-spyglass/index']); ?>"
                            class="top-dropdown__item top-dropdown__item_lg">
                            <div class="h-inner-logo">
                                <?=Svg::widget(['attrs' => ['class' => 'h-inner-logo__sg'], 'id' => 'h-sg'])?>
                                <span class="h-inner-logo__text">SEO <strong>SpyGlass</strong></span>
                            </div>
                            <span class="top-dropdown__text">
                                <?=Yii::t('app/layout', 'Backlink profile analysis')?>
                            </span>
                        </a>
                        <a href="<?php echo \yii\helpers\Url::to(['/page/linkassistant/index']); ?>"
                            class="top-dropdown__item top-dropdown__item_lg">
                            <div class="h-inner-logo">
                                <?=Svg::widget(['attrs' => ['class' => 'h-inner-logo__la'], 'id' => 'h-la'])?>
                                <span class="h-inner-logo__text">Link<strong>Assistant</strong></span>
                            </div>
                            <span class="top-dropdown__text">
                                <?=Yii::t('app/layout', 'Link building and management')?>
                            </span>
                        </a>
                    </div>
                </div>
                <span class="top-dropdown__inner"><span><?=Yii::t('app/layout', 'Tools')?></span>
                    <?=Svg::widget(['attrs' => ['class' => 'top-dropdown__arrow'], 'id' => 'h-menu-arrow'])?>
                    <?=Svg::widget(['attrs' => ['class' => 'top-dropdown__arrow_mobile'], 'id' => 'h-menu-arrow-mobile'])?>
                </span>
            </div>
            <div
                class="top-dropdown <?php if ($this->activeClass == 'features'): ?>top-dropdown_active-desktop<?php endif; ?>">
                <div class="top-dropdown__content top-dropdown__content_lg">
                    <div class="top-dropdown__inner-content top-dropdown__inner-content_lg">
                        <div class="top-dropdown__section">
                            <div class="top-dropdown__block">
                                <div class="top-dropdown__title">
                                    <?=Svg::widget(['attrs' => ['class' => 'h-inner-icon'], 'id' => 'h-rankings'])?>
                                    <span><?=Yii::t('app/layout', 'Rankings')?></span>
                                </div>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/rank-tracker/page', 'view' => 'serp-analysis']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'SERP tracking/analysis')?>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/rank-tracker/page', 'view' => 'local-rankings']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'Local rank tracker')?>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/rank-tracker/page', 'view' => 'youtube-rank-checker']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <span><?=Yii::t('app/layout', 'YouTube rank tracker')?></span>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/rank-tracker/page', 'view' => 'google-rank-checker']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <span><?=Yii::t('app/layout', 'Google rank tracker')?></span>
                                </a>
                            </div>

                            <div class="top-dropdown__block">
                                <div class="top-dropdown__title">
                                    <?=Svg::widget(['attrs' => ['class' => 'h-inner-icon'], 'id' => 'h-keywords'])?>
                                    <span><?=Yii::t('app/layout', 'Keywords')?></span>
                                </div>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/rank-tracker/page', 'view' => 'keyword-research-tool']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <span><?=Yii::t('app/layout', 'Keyword research tools')?></span>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/rank-tracker/page', 'view' => 'keyword-difficulty-tool']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'Keyword difficulty checker')?>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/default/keyword-research', 'view' => 'keyword-grouper']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'Keyword grouping tool')?>
                                </a>
                            </div>
                        </div>

                        <div class="top-dropdown__section">
                            <div class="top-dropdown__block">
                                <div class="top-dropdown__title">
                                    <?=Svg::widget(['attrs' => ['class' => 'h-inner-icon'], 'id' => 'h-backlinks'])?>
                                    <span><?=Yii::t('app/layout', 'Backlinks')?></span>
                                </div>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/default/offers', 'view' => 'extensive-backlink-analysis-tool']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'Backlink analysis')?>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/seo-spyglass/page', 'view' => 'backlink-history']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <span><?=Yii::t('app/layout', 'Backlink history')?></span>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/seo-spyglass/page', 'view' => 'bad-backlink-checker']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'Toxic backlink removal')?>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/linkassistant/page', 'view' => 'link-prospecting-tool']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'Link prospecting')?>
                                </a>
                            </div>

                            <div class="top-dropdown__block">
                                <div class="top-dropdown__title">
                                    <?=Svg::widget(['attrs' => ['class' => 'h-inner-icon'], 'id' => 'h-technical-seo'])?>
                                    <span><?=Yii::t('app/layout', 'Technical SEO')?></span>
                                </div>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/website-auditor/page', 'view' => 'seo-spider']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <span><?=Yii::t('app/layout', 'Site audit')?></span>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/website-auditor/page', 'view' => 'core-web-vitals-audit']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'Page speed checker')?>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/website-auditor/page', 'view' => 'site-visualizations']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'Site structure visualizator')?>
                                </a>
                            </div>
                        </div>

                        <div class="top-dropdown__section">
                            <div class="top-dropdown__block">
                                <div class="top-dropdown__title">
                                    <?=Svg::widget(['attrs' => ['class' => 'h-inner-icon'], 'id' => 'h-content'])?>
                                    <span><?=Yii::t('app/layout', 'Content')?></span>
                                </div>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/website-auditor/page', 'view' => 'seo-content-editor']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'SEO content optimizer')?>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/website-auditor/page', 'view' => 'tf-idf-tool']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'TF-IDF checker')?>
                                </a>
                            </div>

                            <div class="top-dropdown__block">
                                <div class="top-dropdown__title">
                                    <?=Svg::widget(['attrs' => ['class' => 'h-inner-icon'], 'id' => 'h-more'])?>
                                    <span><?=Yii::t('app/layout', 'MORE')?></span>
                                </div>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/rank-tracker/page', 'view' => 'domain-analysis']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm top-dropdown__item_new">
                                    <?=Yii::t('app/layout', 'Quick domain analysis')?>
                                    <?=Svg::widget(['attrs' => ['class' => 'new-icon'], 'id' => 'new-icon'])?>
                                </a>
                                <a href="<?php echo \yii\helpers\Url::to(['/page/default/page', 'view' => 'seo-reports']); ?>"
                                    class="top-dropdown__item top-dropdown__item_sm">
                                    <?=Yii::t('app/layout', 'SEO reports')?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="top-dropdown__inner"><span><?=Yii::t('app/layout', 'Features')?></span>
                    <?=Svg::widget(['attrs' => ['class' => 'top-dropdown__arrow'], 'id' => 'h-menu-arrow'])?>
                    <?=Svg::widget(['attrs' => ['class' => 'top-dropdown__arrow_mobile'], 'id' => 'h-menu-arrow-mobile'])?>
                </span>
            </div>
            <a href="<?php echo \yii\helpers\Url::to(['/page/default/page', 'view' => 'pricing']); ?>"
                class="top-menu__item <?php if ($this->activeClass == 'pricing'): ?>top-menu__item_active<?php endif; ?>">
                <?=Yii::t('app/layout', 'Pricing')?>
            </a>
            <div
                class="top-dropdown <?php if ($this->activeClass == 'resources'): ?>top-dropdown_active-desktop<?php endif; ?>">
                <div class="top-dropdown__content">
                    <div class="top-dropdown__inner-content top-dropdown__inner-content_xs">
                        <div class="top-dropdown__block_sm">
                            <div class="top-dropdown__title top-dropdown__title_indent">
                                <?=Yii::t('app/layout', 'Learn SEO')?>
                            </div>
                            <a href="https://app.livestorm.co/link-assistant-com/introducing-seo-powersuite"
                                class="top-dropdown__item top-dropdown__item_sm">
                                <?=Yii::t('app/layout', 'Live webinars')?>
                            </a>
                            <a href="<?php echo \yii\helpers\Url::to(['/page/default/learning-hub', 'view' => 'seo-academy']); ?>"
                                class="top-dropdown__item top-dropdown__item_sm">
                                <?=Yii::t('app/layout', '30-day SEO Plan for beginners')?>
                            </a>
                            <a href="<?php echo \yii\helpers\Url::to(['/page/default/page', 'view' => 'seo-workflow']); ?>"
                                class="top-dropdown__item top-dropdown__item_sm">
                                <?=Yii::t('app/layout', 'A to Z SEO workflow')?>
                            </a>
                            <a href="<?php echo \yii\helpers\Url::to(['/help/post/view', 'uri' => '/installation/seo-powersuite-windows-installation-instructions']); ?>"
                                class="top-dropdown__item top-dropdown__item_sm">
                                <?=Yii::t('app/layout', 'SEO PowerSuite user manual')?>
                            </a>
                            <a href="<?php echo \yii\helpers\Url::to(['/seo-wiki/category/index']); ?>"
                                class="top-dropdown__item top-dropdown__item_sm">
                                <?=Yii::t('app/layout', 'SEO Wiki')?>
                            </a>
                        </div>

                        <div class="top-dropdown__block_sm">
                            <div class="top-dropdown__title top-dropdown__title_indent">
                                <?=Yii::t('app/layout', 'API ACCESS')?>
                            </div>
                            <a href="<?php echo \yii\helpers\Url::to(['/page/default/page', 'view' => 'backlink-api']); ?>"
                                class="top-dropdown__item top-dropdown__item_sm">
                                <?=Yii::t('app/layout', 'Backlink API')?>
                            </a>
                            <a href="<?php echo \yii\helpers\Url::to(['/page/seo-spyglass/page', 'view' => 'free-backlink-checker-tool']); ?>"
                                class="top-dropdown__item top-dropdown__item_sm">
                                <?=Yii::t('app/layout', 'Free backlink checker')?>
                            </a>
                        </div>

                        <div class="top-dropdown__block_sm">
                            <div class="top-dropdown__title top-dropdown__title_indent">
                                <?=Yii::t('app/layout', 'SOCIAL MEDIA')?>
                            </div>
                            <a href="https://www.youtube.com/c/Link-assistant"
                                class="top-dropdown__item top-dropdown__item_sm">
                                <?=Yii::t('app/layout', 'YouTube channel')?>
                            </a>
                            <a href="https://www.facebook.com/groups/seopowersuite.users"
                                class="top-dropdown__item top-dropdown__item_sm">
                                <?=Yii::t('app/layout', 'Facebook group')?>
                            </a>
                        </div>

                        <div class="top-dropdown__block_sm">
                            <div class="top-dropdown__title top-dropdown__title_indent">
                                <?=Yii::t('app/layout', 'Get in touch')?>
                            </div>
                            <a href="https://help.link-assistant.com/hc/en-us"
                                class="top-dropdown__item top-dropdown__item_sm">
                                <?=Yii::t('app/layout', 'Help & training')?>
                            </a>
                            <a href="<?php echo \yii\helpers\Url::to(['/page/default/page', 'view' => 'partners']); ?>"
                                class="top-dropdown__item top-dropdown__item_sm">
                                <?=Yii::t('app/layout', 'Partner with us')?>
                            </a>
                        </div>
                    </div>
                </div>
                <span class="top-dropdown__inner"><span><?=Yii::t('app/layout', 'Resources')?></span>
                    <?=Svg::widget(['attrs' => ['class' => 'top-dropdown__arrow'], 'id' => 'h-menu-arrow'])?>
                    <?=Svg::widget(['attrs' => ['class' => 'top-dropdown__arrow_mobile'], 'id' => 'h-menu-arrow-mobile'])?>
                </span>
            </div>
            <a href="<?php echo \yii\helpers\Url::to(['/news/category/index']); ?>" class="top-menu__item">
                <?=Yii::t('app/layout', 'Blog')?>
            </a>

            <div class="top-menu__form-mobile">
                <?php if ($this->theme->tool->id == \belprime\sps\software\base\enums\Tool::RT) {
                    echo belprime\sps\download\widgets\Product::widget([
                    'submitText' => Yii::t('app/layout', 'Download'),
                    'btnBackground' => 'main-form__button main-form__button_pink main-form__button_lg',
                    'viewFile' => '/default/widgets/common-theme/download_product'
                ]);
            } else { echo belprime\sps\download\widgets\Product::widget([
                    'submitText' => Yii::t('app/layout', 'Download for FREE'),
                    'btnBackground' => 'main-form__button main-form__button_light main-form__button_lg',
                    'viewFile' => '/default/widgets/common-theme/download_product'
                ]);
            } ?>
            </div>
        </div>
    </div>

    <div class="top-menu__flex-block"></div>

    <div class="top-menu__search top-menu__search_desktop">
        <form action="<?=\yii\helpers\Url::to(['/page/default/page', 'view' => 'search'])?>" method="GET">
            <?=Svg::widget(['attrs' => ['class' => 'top-menu__search-icon', 'id' => 'search-icon'], 'id' => 'h-search'])?>
            <?=Svg::widget(['attrs' => ['class' => 'top-menu__close-icon', 'id' => 'close-icon'], 'id' => 'h-close-icon'])?>
            <input class="top-menu__search-field" id="search-field" name="q" type="text"
                placeholder="<?=Yii::t('app/layout', 'Search')?>">
        </form>
    </div>

    <div class="top-menu__lang-menu">
        <?= \frontend\widgets\LanguageSelector::widget([
			'menuClass' => 'top-menu__hidden-list',
			'activeItemClass' => 'top-menu__lang-item_active',
		]); ?>

        <div class="top-menu__lang-current">
            <span>
                <?= \frontend\widgets\LanguageSelector::label(Yii::$app->language) ?>
            </span>
            <?=Svg::widget(['attrs' => ['class' => 'top-dropdown__arrow'], 'id' => 'h-menu-arrow'])?>
        </div>

        <div class="top-menu__lang-mobile">
            <?=Svg::widget(['attrs' => ['class' => 'h-lang-mobile'], 'id' => 'h-lang-mobile'])?>
        </div>
    </div>

    <a class="top-menu__search top-menu__search_mobile top-menu__search-icon"
        href="<?=\yii\helpers\Url::to(['/page/default/page', 'view' => 'search'])?>">
        <?=Svg::widget(['attrs' => ['class' => 'top-menu__search-icon', 'id' => 'search-icon'], 'id' => 'h-search'])?>
    </a>
    <div class="top-menu-box">
        <div class="top-menu-box__inner"></div>
    </div>
    <a class="top-menu__download" id="top-menu__download"
        href="<?php echo \yii\helpers\Url::to(['/page' . $this->theme->tool->path . 'page', 'view' => 'download']); ?>">
        <?=Yii::t('app/layout', 'Download')?>
    </a>
</div>

<svg width="0" height="0" class="hidden">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 27" id="h-logo">
        <path
            d="M46.7016 16.9118C46.7016 18.1674 46.2441 19.1464 45.3289 19.849C44.4138 20.5515 43.1718 20.9028 41.603 20.9028C39.9034 20.9028 38.5961 20.6849 37.6809 20.2491V18.6487C38.2692 18.8959 38.9098 19.0911 39.6027 19.2342C40.2956 19.3773 40.982 19.4489 41.6618 19.4489C42.7731 19.4489 43.6098 19.2407 44.1719 18.8244C44.7341 18.4015 45.0152 17.8161 45.0152 17.068C45.0152 16.5736 44.9138 16.1702 44.7112 15.858C44.5151 15.5392 44.1817 15.2465 43.7111 14.9798C43.247 14.713 42.5377 14.4105 41.5834 14.0723C40.2499 13.5974 39.2955 13.0347 38.7203 12.3841C38.1516 11.7336 37.8672 10.8847 37.8672 9.83731C37.8672 8.73791 38.2823 7.86295 39.1125 7.21242C39.9426 6.56189 41.0408 6.23662 42.407 6.23662C43.832 6.23662 45.1426 6.49684 46.3388 7.01726L45.8192 8.46144C44.636 7.96703 43.4856 7.71983 42.3678 7.71983C41.4853 7.71983 40.7957 7.90849 40.2989 8.28579C39.8021 8.6631 39.5537 9.18678 39.5537 9.85683C39.5537 10.3512 39.6452 10.7578 39.8283 11.0766C40.0113 11.3888 40.3185 11.6783 40.7499 11.945C41.1879 12.2052 41.8546 12.4947 42.7502 12.8135C44.2536 13.3469 45.2864 13.9194 45.8486 14.5309C46.4173 15.1424 46.7016 15.936 46.7016 16.9118Z"
            fill="" />
        <path
            d="M56.6205 20.7077H48.6293V6.44154H56.6205V7.91499H50.2962V12.511H56.2381V13.9747H50.2962V19.2245H56.6205V20.7077Z"
            fill="" />
        <path
            d="M71.2458 13.5551C71.2458 15.8385 70.664 17.6339 69.5005 18.9415C68.3434 20.2491 66.7321 20.9028 64.6665 20.9028C62.5552 20.9028 60.9243 20.2621 59.7738 18.9805C58.6299 17.6925 58.0579 15.8775 58.0579 13.5356C58.0579 11.2132 58.6331 9.41446 59.7836 8.13942C60.9341 6.85788 62.5682 6.21711 64.6861 6.21711C66.7452 6.21711 68.3533 6.86764 69.5103 8.1687C70.6673 9.46976 71.2458 11.2652 71.2458 13.5551ZM59.8228 13.5551C59.8228 15.4872 60.2346 16.9541 61.0583 17.9559C61.8884 18.9512 63.0912 19.4489 64.6665 19.4489C66.255 19.4489 67.4545 18.9512 68.265 17.9559C69.0756 16.9606 69.4808 15.4937 69.4808 13.5551C69.4808 11.636 69.0756 10.1821 68.265 9.19328C67.461 8.19797 66.268 7.70032 64.6861 7.70032C63.0977 7.70032 61.8884 8.20123 61.0583 9.20304C60.2346 10.1984 59.8228 11.649 59.8228 13.5551Z"
            fill="" />
        <path
            d="M80.5331 13.155H81.5333C82.468 13.155 83.1675 12.9729 83.6316 12.6086C84.0957 12.2378 84.3277 11.7011 84.3277 10.9985C84.3277 10.2894 84.1316 9.76575 83.7394 9.42748C83.3537 9.0892 82.7458 8.92006 81.9157 8.92006H80.5331V13.155ZM87.3967 10.8912C87.3967 12.4264 86.913 13.6006 85.9456 14.4138C84.9847 15.227 83.6152 15.6335 81.8372 15.6335H80.5331V20.7077H77.4936V6.44154H82.0725C83.8113 6.44154 85.1317 6.8156 86.0338 7.56371C86.9424 8.30531 87.3967 9.41446 87.3967 10.8912Z"
            fill="" />
        <path
            d="M91.2462 15.2335C91.2462 16.3133 91.4227 17.1298 91.7757 17.6827C92.1352 18.2357 92.717 18.5121 93.521 18.5121C94.3185 18.5121 94.8904 18.2389 95.2369 17.6925C95.5899 17.1395 95.7664 16.3198 95.7664 15.2335C95.7664 14.1536 95.5899 13.3437 95.2369 12.8037C94.8839 12.2638 94.3054 11.9938 93.5014 11.9938C92.7039 11.9938 92.1287 12.2638 91.7757 12.8037C91.4227 13.3372 91.2462 14.1471 91.2462 15.2335ZM98.8255 15.2335C98.8255 17.0094 98.3549 18.3983 97.4136 19.4001C96.4723 20.4019 95.1617 20.9028 93.4818 20.9028C92.4294 20.9028 91.5011 20.6751 90.6971 20.2198C89.8931 19.7579 89.2754 19.0976 88.844 18.2389C88.4125 17.3802 88.1968 16.3784 88.1968 15.2335C88.1968 13.451 88.6642 12.0654 89.5989 11.0766C90.5337 10.0878 91.8476 9.59336 93.5406 9.59336C94.593 9.59336 95.5212 9.82105 96.3252 10.2764C97.1293 10.7318 97.747 11.3856 98.1784 12.2378C98.6098 13.09 98.8255 14.0885 98.8255 15.2335Z"
            fill="" />
        <path
            d="M109.303 20.7077L108.46 16.8923L107.323 12.0719H107.254L105.254 20.7077H102.038L98.9197 9.79828H101.9L103.165 14.6285C103.368 15.4937 103.574 16.6874 103.783 18.2096H103.842C103.868 17.7152 103.982 16.9313 104.185 15.858L104.342 15.0285L105.695 9.79828H108.99L110.274 15.0285C110.3 15.1717 110.339 15.3831 110.392 15.6628C110.45 15.9425 110.506 16.2418 110.558 16.5605C110.611 16.8728 110.656 17.1818 110.696 17.4875C110.741 17.7868 110.768 18.0275 110.774 18.2096H110.833C110.892 17.7413 110.996 17.1005 111.147 16.2873C111.297 15.4677 111.405 14.9147 111.47 14.6285L112.784 9.79828H115.716L112.559 20.7077H109.303Z"
            fill="" />
        <path
            d="M121.026 11.7108C120.392 11.7108 119.895 11.9125 119.536 12.3158C119.176 12.7127 118.97 13.2786 118.918 14.0137H123.115C123.102 13.2786 122.909 12.7127 122.536 12.3158C122.164 11.9125 121.66 11.7108 121.026 11.7108ZM121.448 20.9028C119.683 20.9028 118.304 20.4182 117.31 19.4489C116.317 18.4796 115.82 17.107 115.82 15.331C115.82 13.503 116.277 12.0914 117.192 11.0961C118.114 10.0943 119.386 9.59336 121.007 9.59336C122.556 9.59336 123.762 10.0325 124.625 10.9107C125.488 11.7889 125.919 13.0021 125.919 14.5504V15.9946H118.85C118.882 16.8403 119.134 17.5006 119.605 17.9754C120.075 18.4503 120.735 18.6878 121.585 18.6878C122.245 18.6878 122.87 18.6195 123.458 18.4829C124.046 18.3462 124.661 18.1283 125.301 17.8291V20.132C124.778 20.3922 124.219 20.5841 123.625 20.7077C123.03 20.8378 122.304 20.9028 121.448 20.9028Z"
            fill="" />
        <path
            d="M133.465 9.59336C133.87 9.59336 134.207 9.62263 134.475 9.68118L134.249 12.472C134.008 12.4069 133.713 12.3744 133.367 12.3744C132.413 12.3744 131.667 12.6183 131.131 13.1062C130.602 13.5941 130.337 14.2772 130.337 15.1554V20.7077H127.347V9.79828H129.612L130.053 11.6328H130.2C130.54 11.0213 130.997 10.5301 131.573 10.1593C132.154 9.78201 132.785 9.59336 133.465 9.59336Z"
            fill="" />
        <path
            d="M144.158 16.7459C144.158 18.034 143.691 19.0488 142.756 19.7904C141.828 20.532 140.534 20.9028 138.873 20.9028C137.344 20.9028 135.991 20.6166 134.814 20.0441V17.2338C135.782 17.6632 136.599 17.9657 137.265 18.1413C137.939 18.317 138.553 18.4048 139.109 18.4048C139.776 18.4048 140.285 18.2779 140.638 18.0242C140.998 17.7705 141.178 17.3932 141.178 16.8923C141.178 16.6126 141.099 16.3654 140.942 16.1507C140.785 15.9295 140.553 15.7181 140.246 15.5164C139.946 15.3148 139.328 14.9928 138.393 14.5504C137.517 14.1406 136.86 13.747 136.422 13.3697C135.984 12.9924 135.635 12.5533 135.373 12.0524C135.112 11.5515 134.981 10.966 134.981 10.2959C134.981 9.0339 135.409 8.04185 136.265 7.31976C137.128 6.59767 138.318 6.23662 139.834 6.23662C140.58 6.23662 141.289 6.32444 141.962 6.50009C142.642 6.67573 143.351 6.92293 144.09 7.24169L143.109 9.59336C142.344 9.28111 141.71 9.06318 141.207 8.93958C140.71 8.81598 140.22 8.75418 139.736 8.75418C139.161 8.75418 138.72 8.88754 138.413 9.15425C138.105 9.42097 137.952 9.769 137.952 10.1984C137.952 10.4651 138.014 10.6993 138.138 10.9009C138.262 11.0961 138.458 11.288 138.726 11.4766C139.001 11.6588 139.645 11.9906 140.658 12.472C141.998 13.1095 142.916 13.7503 143.413 14.3943C143.91 15.0318 144.158 15.8157 144.158 16.7459Z"
            fill="" />
        <path
            d="M153.283 20.7077L152.881 19.3123H152.724C152.404 19.8197 151.95 20.2133 151.361 20.493C150.773 20.7662 150.103 20.9028 149.351 20.9028C148.063 20.9028 147.093 20.5613 146.439 19.8782C145.785 19.1887 145.459 18.1999 145.459 16.9118V9.79828H148.449V16.1702C148.449 16.9574 148.59 17.5493 148.871 17.9462C149.152 18.3365 149.6 18.5317 150.214 18.5317C151.051 18.5317 151.655 18.2552 152.028 17.7022C152.401 17.1428 152.587 16.219 152.587 14.931V9.79828H155.577V20.7077H153.283Z"
            fill="" />
        <path
            d="M157.584 6.97823C157.584 6.00894 158.126 5.52429 159.211 5.52429C160.296 5.52429 160.839 6.00894 160.839 6.97823C160.839 7.4401 160.702 7.80115 160.427 8.06136C160.159 8.31507 159.754 8.44192 159.211 8.44192C158.126 8.44192 157.584 7.95402 157.584 6.97823ZM160.702 20.7077H157.711V9.79828H160.702V20.7077Z"
            fill="" />
        <path
            d="M167.463 18.5317C167.986 18.5317 168.614 18.4178 169.346 18.1901V20.4052C168.601 20.7369 167.685 20.9028 166.6 20.9028C165.404 20.9028 164.531 20.6036 163.982 20.0051C163.44 19.4001 163.169 18.4959 163.169 17.2924V12.0329H161.737V10.7741L163.384 9.77876L164.247 7.47588H166.159V9.79828H169.228V12.0329H166.159V17.2924C166.159 17.7152 166.277 18.0275 166.512 18.2292C166.754 18.4308 167.071 18.5317 167.463 18.5317Z"
            fill="" />
        <path
            d="M175.107 11.7108C174.473 11.7108 173.976 11.9125 173.617 12.3158C173.257 12.7127 173.051 13.2786 172.999 14.0137H177.196C177.183 13.2786 176.99 12.7127 176.617 12.3158C176.245 11.9125 175.741 11.7108 175.107 11.7108ZM175.529 20.9028C173.764 20.9028 172.385 20.4182 171.391 19.4489C170.398 18.4796 169.901 17.107 169.901 15.331C169.901 13.503 170.358 12.0914 171.273 11.0961C172.195 10.0943 173.467 9.59336 175.088 9.59336C176.637 9.59336 177.843 10.0325 178.706 10.9107C179.569 11.7889 180 13.0021 180 14.5504V15.9946H172.931C172.963 16.8403 173.215 17.5006 173.686 17.9754C174.156 18.4503 174.816 18.6878 175.666 18.6878C176.326 18.6878 176.951 18.6195 177.539 18.4829C178.127 18.3462 178.742 18.1283 179.382 17.8291V20.132C178.859 20.3922 178.3 20.5841 177.706 20.7077C177.111 20.8378 176.385 20.9028 175.529 20.9028Z"
            fill="" />
        <g clip-path="url(#clip0_649_2631)">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0 10.2638V1.94882C0 0.909451 0.918731 0 1.96871 0H10.3029C11.4185 0 12.2716 0.84449 12.2716 1.94882V12.2126H1.96871C0.918731 12.2126 0 11.3032 0 10.2638Z"
                fill="#FC4304" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M26.7745 10.2638V1.94882C26.7745 0.909451 25.8557 0 24.8058 0H16.4715C15.3559 0 14.5028 0.84449 14.5028 1.94882V12.2126H24.8058C25.8557 12.2126 26.7745 11.3032 26.7745 10.2638Z"
                fill="#FF8800" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.52361 14.4331C4.36265 14.4331 3.3468 15.3795 3.3468 16.5444V21.2037C3.3468 22.3686 4.29009 23.315 5.52361 23.315H10.0949C11.2559 23.315 12.2717 22.3686 12.2717 21.2037V14.4331H5.52361Z"
                fill="#2C86D5" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0.816294 23.3149C0.380937 23.3149 0 23.6699 0 24.1067V25.8539C0 26.2907 0.353728 26.6457 0.816294 26.6457H2.53051C2.96587 26.6457 3.34681 26.2907 3.34681 25.8539V23.3149H0.816294Z"
                fill="#2C86D5" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M26.7745 16.3819V24.6969C26.7745 25.7363 25.8557 26.6457 24.8058 26.6457H16.4715C15.3559 26.6457 14.5028 25.8012 14.5028 24.6969V14.4331H24.8058C25.8557 14.4331 26.7745 15.2776 26.7745 16.3819Z"
                fill="#6DBC00" />
        </g>
        <defs>
            <clipPath id="clip0_649_2631">
                <rect width="26.7745" height="26.6457" fill="white" />
            </clipPath>
        </defs>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 23" id="h-rt">
        <g clip-path="url(#clip0_9447_83981)">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M20.4191 23H2.91702C2.14338 23 1.40142 22.6971 0.854375 22.1579C0.307328 21.6188 0 20.8875 0 20.125V2.875C0 2.1125 0.307328 1.38124 0.854375 0.842069C1.40142 0.302901 2.14338 0 2.91702 0H20.4191C21.1928 0 21.9347 0.302901 22.4818 0.842069C23.0288 1.38124 23.3361 2.1125 23.3361 2.875V23H20.4191Z"
                fill="#FC4304" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4.23315 20.125L2.91064 19.5179L7.00085 11.6661C7.19248 11.262 7.53694 10.9479 7.96055 10.7909V10.7781C8.17523 10.7036 8.40295 10.6726 8.63008 10.6869C8.85721 10.7013 9.07908 10.7606 9.28239 10.8614C9.48571 10.9622 9.6663 11.1024 9.81335 11.2736C9.9604 11.4448 10.0709 11.6435 10.1382 11.8578L10.832 13.9085C10.8544 13.9723 10.8998 14.0258 10.9595 14.0588C11.0192 14.0918 11.0892 14.102 11.1561 14.0876V14.0748C11.1906 14.0635 11.2224 14.0451 11.2492 14.0208C11.2761 13.9966 11.2974 13.967 11.3118 13.9341L11.3378 13.8833L13.6259 9.10415C13.8159 8.69913 14.1607 8.38458 14.5851 8.22907L14.5787 8.21623C14.8872 8.10732 15.2214 8.09043 15.5396 8.16767C15.8578 8.24492 16.1458 8.41286 16.3677 8.65053L16.7045 8.98295L18.7207 10.9636C18.7398 10.9839 18.7647 10.998 18.7922 11.0041C18.8196 11.0101 18.8483 11.0078 18.8744 10.9973C18.9004 10.9869 18.9226 10.9689 18.938 10.9457C18.9535 10.9225 18.9613 10.8952 18.9606 10.8675V5.2327C18.9607 5.02083 18.8865 4.81545 18.7506 4.65129C18.6147 4.48712 18.4255 4.37424 18.2149 4.33174C18.153 4.31929 18.09 4.31282 18.0268 4.31243H12.303C12.2757 4.31188 12.2489 4.31947 12.226 4.33419C12.2031 4.34892 12.1853 4.37009 12.1749 4.39495C12.1644 4.41981 12.1618 4.4472 12.1674 4.47354C12.173 4.49988 12.1865 4.52395 12.2062 4.54261L14.2154 6.5295L13.1847 7.54518L10.9297 5.31571C10.8508 5.24414 10.7848 5.15979 10.7347 5.0663C10.6232 4.89696 10.5524 4.70475 10.5277 4.50433C10.5166 4.43905 10.5121 4.37283 10.5145 4.30668C10.5136 4.2576 10.5157 4.20852 10.5208 4.15969C10.5404 3.94895 10.6094 3.74556 10.7221 3.56546C10.8523 3.35373 11.0359 3.17884 11.255 3.05783C11.4742 2.93683 11.7214 2.87385 11.9725 2.87502H18.0268C18.6611 2.87566 19.2692 3.12426 19.7177 3.56626C20.1662 4.00827 20.4184 4.60758 20.4191 5.2327V11.1998C20.4183 11.4469 20.3529 11.6896 20.2291 11.9045C20.1053 12.1193 19.9274 12.2991 19.7126 12.4265C19.5323 12.5375 19.328 12.6052 19.1163 12.6241C19.0647 12.6315 19.0127 12.6358 18.9606 12.637C18.896 12.637 18.8308 12.6304 18.7663 12.6241C18.5619 12.5949 18.3655 12.5254 18.1889 12.4198C18.0969 12.3666 18.012 12.3022 17.9364 12.228L16.1215 10.4392L15.3375 9.66657H15.3308C15.2982 9.63428 15.258 9.61038 15.2139 9.59699C15.1697 9.58359 15.1229 9.58111 15.0775 9.58976C15.0046 9.62042 14.9466 9.67765 14.9154 9.7495L12.6081 14.5727C12.4184 14.9797 12.0736 15.2965 11.6484 15.4546L11.6548 15.4609C10.7602 15.7803 9.78159 15.2948 9.47074 14.381L9.43784 14.2725H9.43155L8.77695 12.3304C8.75514 12.2662 8.70988 12.2123 8.64998 12.1792C8.59008 12.1461 8.51982 12.1361 8.45289 12.1513L8.45936 12.1649C8.42398 12.1761 8.39132 12.1943 8.36344 12.2186C8.33555 12.2428 8.31303 12.2724 8.29728 12.3056L4.23315 20.125Z"
                fill="white" />
        </g>
        <defs>
            <clipPath id="clip0_9447_83981">
                <rect width="23.3361" height="23" fill="white" />
            </clipPath>
        </defs>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 23" id="h-wa">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M19.5968 23H2.79954C2.05705 23 1.34498 22.6971 0.819966 22.1579C0.294951 21.6188 0 20.8875 0 20.125V2.875C0 2.1125 0.294951 1.38123 0.819966 0.842066C1.34498 0.302899 2.05705 0 2.79954 0H19.5968C20.3392 0 21.0513 0.302899 21.5763 0.842066C22.1013 1.38123 22.3963 2.1125 22.3963 2.875V23H19.5968Z"
            fill="#FF8800" />
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M5.09844 20.125C4.48933 20.1248 3.90518 19.8765 3.47415 19.4345C3.04313 18.9925 2.80043 18.393 2.79932 17.7675V5.23897C2.80006 4.61274 3.04243 4.01231 3.47336 3.56923C3.90429 3.12614 4.48864 2.87652 5.09844 2.875L14.6973 2.88145V4.31895L5.09844 4.3125C4.85971 4.31345 4.63107 4.41144 4.46253 4.58506C4.29399 4.75868 4.19927 4.99381 4.19908 5.23897V17.7675C4.19927 17.8885 4.22268 18.0084 4.26799 18.1202C4.31329 18.232 4.3796 18.3335 4.46312 18.4189C4.54664 18.5043 4.64574 18.572 4.75475 18.6181C4.86376 18.6642 4.98055 18.6878 5.09844 18.6875H17.2974C17.4155 18.6885 17.5326 18.6653 17.6419 18.6195C17.7512 18.5736 17.8505 18.506 17.9342 18.4204C18.0178 18.3348 18.0841 18.233 18.1292 18.121C18.1743 18.0089 18.1972 17.8887 18.1968 17.7675V7.90625H19.5965V17.7675C19.5967 18.0771 19.5375 18.3838 19.4222 18.6699C19.3069 18.956 19.1378 19.216 18.9246 19.4349C18.7114 19.6539 18.4582 19.8275 18.1796 19.9459C17.901 20.0643 17.6024 20.1252 17.3009 20.125H5.09844ZM10.7535 15.6651C10.652 15.659 10.5516 15.64 10.4546 15.6084C10.4067 15.595 10.3599 15.5776 10.3147 15.5566C10.0705 15.4576 9.86034 15.2865 9.71067 15.065C9.65043 14.9823 9.60036 14.8922 9.5616 14.7969L7.06021 8.59912L8.3543 8.05001L10.7248 13.9215C10.7341 13.9476 10.751 13.9702 10.7732 13.9861C10.7955 14.0021 10.8219 14.0107 10.849 14.0107C10.8761 14.0107 10.9026 14.0021 10.9248 13.9861C10.947 13.9702 10.964 13.9476 10.9733 13.9215L17.4969 2.875L18.6727 3.62898L12.14 14.7775C12.0421 15.0026 11.8924 15.1999 11.7037 15.3524C11.5151 15.5049 11.2933 15.608 11.0573 15.6529C10.9567 15.6676 10.855 15.6729 10.7535 15.6687V15.6651Z"
            fill="white" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 23" id="h-sg">
        <g clip-path="url(#clip0_9447_12512)">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M19.6676 23H2.80965C2.06449 23 1.34984 22.6971 0.822926 22.1579C0.296014 21.6188 0 20.8875 0 20.125V2.875C0 2.1125 0.296014 1.38123 0.822926 0.842066C1.34984 0.302899 2.06449 0 2.80965 0H19.6676C20.4127 0 21.1274 0.302899 21.6543 0.842066C22.1812 1.38123 22.4772 2.1125 22.4772 2.875V23H19.6676Z"
                fill="#6DBC00" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M3.62451 19.2844C3.13325 18.7813 2.84163 18.1099 2.80595 17.3997C2.77028 16.6895 2.9931 15.9909 3.43137 15.439L3.48054 15.3815C3.52971 15.324 3.57534 15.2737 3.62451 15.2216L8.13754 11.6196C8.32796 11.4249 8.55404 11.2706 8.80287 11.1655C9.0517 11.0604 9.31836 11.0066 9.58756 11.0072C9.85675 11.0078 10.1232 11.0628 10.3716 11.169C10.6199 11.2752 10.8454 11.4305 11.035 11.6261L11.0771 11.6642L11.2352 11.8176C11.9706 12.4969 12.9163 12.8897 13.9064 12.9272C14.8965 12.9647 15.8679 12.6444 16.6504 12.0225C17.433 11.4007 17.9766 10.5169 18.1862 9.52598C18.3958 8.53509 18.258 7.50033 17.7968 6.60302C17.3357 5.7057 16.5806 5.00307 15.664 4.61823C14.7474 4.23338 13.7276 4.19089 12.7834 4.49818C11.8393 4.80548 11.0309 5.44296 10.4999 6.29893C9.96897 7.1549 9.74935 8.17476 9.87951 9.1798L9.91111 9.37135L8.52386 9.63297L8.51332 9.57583C8.2899 8.23545 8.5377 6.85743 9.21273 5.6862C9.88775 4.51497 10.9464 3.62626 12.2008 3.17773C13.4553 2.72919 14.8244 2.74982 16.0654 3.23595C17.3064 3.72209 18.339 4.64231 18.9801 5.83336C19.6211 7.02441 19.8291 8.40931 19.5672 9.74237C19.3053 11.0754 18.5905 12.2705 17.5495 13.1155C16.5084 13.9606 15.2085 14.401 13.8803 14.3587C12.5521 14.3163 11.2816 13.794 10.294 12.8842L10.0867 12.6797L10.0411 12.6413C9.98187 12.5792 9.91115 12.5299 9.83304 12.4962C9.75493 12.4625 9.67104 12.4451 9.58627 12.4451C9.5015 12.4451 9.41757 12.4625 9.33946 12.4962C9.26135 12.5299 9.19063 12.5792 9.13144 12.6413L4.61845 16.2376C4.37282 16.4895 4.22719 16.8256 4.20979 17.181C4.19239 17.5364 4.30446 17.8858 4.52426 18.1615C4.74405 18.4372 5.05598 18.6198 5.3997 18.6738C5.74342 18.7278 6.09451 18.6494 6.38503 18.4538L6.60277 18.2684L9.64771 14.2704L10.6486 15.2856L7.60019 19.284C7.54399 19.3354 7.4948 19.3864 7.44563 19.4306L7.38244 19.482C6.84327 19.9309 6.16052 20.1592 5.46632 20.1227C4.77213 20.0862 4.11585 19.7875 3.62451 19.2844ZM10.7856 11.965L10.8664 11.9455L10.8559 11.8945L10.7856 11.965Z"
                fill="white" />
        </g>
        <defs>
            <clipPath id="clip0_9447_12512">
                <rect width="22.4772" height="23" fill="white" />
            </clipPath>
        </defs>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 22" id="h-la">
        <g clip-path="url(#clip0_9447_28418)">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M19.6491 22H2.80702C2.06255 22 1.34857 21.7103 0.822154 21.1945C0.295736 20.6788 0 19.9793 0 19.25V2.75C0 2.02065 0.295736 1.32118 0.822154 0.805454C1.34857 0.289729 2.06255 0 2.80702 0H19.6491C20.3936 0 21.1076 0.289729 21.634 0.805454C22.1604 1.32118 22.4561 2.02065 22.4561 2.75V22H19.6491Z"
                fill="#2C86D5" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.1089 19.25C4.80656 19.2503 4.50712 19.1921 4.22773 19.0789C3.94834 18.9657 3.69449 18.7996 3.4807 18.5901C3.26691 18.3807 3.09737 18.132 2.9818 17.8583C2.86622 17.5846 2.80685 17.2912 2.80713 16.995V9.625H4.21064V16.995C4.21022 17.1107 4.23319 17.2253 4.27818 17.3322C4.32318 17.4392 4.38932 17.5364 4.47281 17.6182C4.5563 17.7 4.6555 17.7648 4.76467 17.8088C4.87384 17.8529 4.99083 17.8754 5.1089 17.875H16.9264C16.9528 17.8757 16.9788 17.8687 17.001 17.8547C17.0232 17.8407 17.0406 17.8204 17.0508 17.7966C17.0611 17.7728 17.0637 17.7465 17.0584 17.7211C17.0531 17.6958 17.0401 17.6726 17.0212 17.6547L12.6317 13.3464V16.5H11.2282V13.255C11.2277 12.9593 11.2866 12.6664 11.4017 12.393C11.5167 12.1197 11.6857 11.8712 11.8988 11.6618C12.1118 11.4524 12.365 11.2862 12.6436 11.1726C12.9223 11.0591 13.2211 11.0004 13.5229 11H16.8422V12.375H13.6211L18.2492 16.9156C18.3242 16.9853 18.3881 17.0656 18.4387 17.1538C18.5451 17.3162 18.6123 17.5002 18.6352 17.6918C18.6471 17.7541 18.6518 17.8175 18.6492 17.8809C18.6504 17.9279 18.6481 17.975 18.6422 18.0218C18.6189 18.2222 18.5532 18.4156 18.4492 18.5896C18.3242 18.7925 18.1476 18.96 17.9366 19.0758C17.7256 19.1915 17.4876 19.2516 17.2457 19.25H5.1089ZM5.61415 11V9.625H8.82468L4.19659 5.0906C4.12473 5.01895 4.0623 4.9388 4.01066 4.85203C3.90317 4.69003 3.83475 4.50618 3.81063 4.31441C3.80363 4.25151 3.8001 4.18828 3.8001 4.125C3.8001 4.07584 3.8001 4.03322 3.80361 3.98441C3.82817 3.78359 3.8951 3.58998 4.00012 3.41585C4.12555 3.21302 4.30212 3.04522 4.5129 2.92861C4.72368 2.812 4.96154 2.75049 5.20361 2.75H17.3405C17.952 2.75118 18.538 2.98987 18.9702 3.41375C19.4023 3.83763 19.6453 4.4121 19.6457 5.01119L19.6492 12.375H18.2457V5.01119C18.2453 4.77618 18.1497 4.55094 17.98 4.38483C17.8104 4.21871 17.5804 4.12527 17.3405 4.125H5.5194C5.49292 4.1256 5.46721 4.13384 5.44548 4.14869C5.42375 4.16353 5.40698 4.18432 5.39725 4.20846C5.38751 4.2326 5.38523 4.25901 5.39074 4.28439C5.39624 4.30978 5.40926 4.33302 5.42817 4.35119L9.82467 8.65357V5.5H11.2282V8.75083C11.2264 9.34783 10.9831 9.9198 10.5517 10.3414C10.1202 10.763 9.53578 10.9998 8.92641 11H5.61415Z"
                fill="white" />
        </g>
        <defs>
            <clipPath id="clip0_9447_28418">
                <rect width="22.4561" height="22" fill="white" />
            </clipPath>
        </defs>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="h-rankings">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M2 0C0.895431 0 0 0.89543 0 2V22C0 23.1046 0.89543 24 2 24H22C23.1046 24 24 23.1046 24 22V2C24 0.895431 23.1046 0 22 0H2ZM10.7692 5C10.4294 5 10.1538 5.29102 10.1538 5.65V16.7H8.92308V9.55C8.92308 9.19102 8.64756 8.9 8.30769 8.9H5.84615C5.50629 8.9 5.23077 9.19102 5.23077 9.55V16.7H4.61538C4.27552 16.7 4 16.991 4 17.35C4 17.709 4.27552 18 4.61539 18H19.3846C19.7245 18 20 17.709 20 17.35C20 16.991 19.7245 16.7 19.3846 16.7H18.7692V8.25C18.7692 7.89102 18.4937 7.6 18.1538 7.6H15.6923C15.3524 7.6 15.0769 7.89102 15.0769 8.25V16.7H13.8462V5.65C13.8462 5.29102 13.5706 5 13.2308 5H10.7692Z"
            fill="#495365" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="h-keywords">
        <path
            d="M6.53202 6.54325C6.25582 6.81241 6.09567 7.17881 6.08572 7.56434C6.08572 8.38051 6.74812 9.04291 7.56429 9.04291C7.95631 9.04252 8.33216 8.88662 8.60936 8.60942C8.88656 8.33221 9.04247 7.95636 9.04286 7.56434C9.0329 7.17881 8.87276 6.81241 8.59656 6.54325C8.32036 6.27409 7.94995 6.12345 7.56429 6.12345C7.17863 6.12345 6.80822 6.27409 6.53202 6.54325Z"
            fill="#495365" />
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M24 1.92C24 0.859613 23.1404 0 22.08 0H1.92C0.859613 0 0 0.859613 0 1.92V22.08C0 23.1404 0.859613 24 1.92 24H22.08C23.1404 24 24 23.1404 24 22.08V1.92ZM19.8857 17.4215V19.3929C19.8857 19.5236 19.8338 19.649 19.7414 19.7414C19.6489 19.8338 19.5236 19.8858 19.3929 19.8858H17.4214C17.3092 19.8857 17.2004 19.8474 17.113 19.7772C17.0255 19.7069 16.9646 19.6089 16.9404 19.4994L16.9364 19.4814C16.7462 18.6244 15.9991 18.0056 15.1218 17.9783L14.3667 17.9548C14.2447 17.9509 14.1284 17.9019 14.0404 17.8172C13.9525 17.7325 13.8991 17.6182 13.8906 17.4964L13.8867 17.4403C13.8155 16.4178 12.9536 15.6315 11.9289 15.6542L11.8886 15.6551C11.7837 15.6575 11.6808 15.6264 11.5948 15.5663C11.5089 15.5062 11.4443 15.4203 11.4105 15.3209C11.0999 14.4062 10.0762 13.9607 9.11025 13.9711C9.08799 13.9714 9.06553 13.9715 9.04286 13.9715C6.32524 13.9715 4.11429 11.7605 4.11429 9.04291C4.11429 6.3253 6.32524 4.11434 9.04286 4.11434C11.7605 4.11434 13.9714 6.3253 13.9714 9.04291C13.9714 9.13368 13.9649 9.23697 13.9541 9.34632C13.8942 9.94739 14.0332 10.5601 14.4314 11.0143L19.7635 17.0962C19.8423 17.1869 19.8857 17.3022 19.8857 17.4215Z"
            fill="#495365" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="h-backlinks">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M2 0C0.895431 0 0 0.89543 0 2V22C0 23.1046 0.89543 24 2 24H22C23.1046 24 24 23.1046 24 22V2C24 0.895431 23.1046 0 22 0H2ZM8.85375 17.4718L11.4318 14.8938C11.5569 14.7686 11.7266 14.6984 11.9036 14.6984C12.0805 14.6984 12.2502 14.7686 12.3753 14.8938C12.5004 15.0189 12.5707 15.1886 12.5707 15.3655C12.5707 15.5425 12.5004 15.7122 12.3753 15.8373L9.79062 18.4153C9.22531 18.9347 8.48121 19.2156 7.71372 19.1993C6.94623 19.1831 6.21468 18.871 5.67186 18.3281C5.12904 17.7853 4.81692 17.0538 4.80067 16.2863C4.78442 15.5188 5.0653 14.7747 5.58467 14.2094L8.16272 11.6247C8.28784 11.4996 8.45753 11.4293 8.63448 11.4293C8.81142 11.4293 8.98112 11.4996 9.10624 11.6247C9.23135 11.7498 9.30164 11.9195 9.30164 12.0964C9.30164 12.2734 9.23135 12.4431 9.10624 12.5682L6.52818 15.1463C6.3751 15.2987 6.25363 15.4799 6.17074 15.6795C6.08786 15.879 6.04519 16.093 6.04519 16.309C6.04519 16.5251 6.08786 16.739 6.17074 16.9386C6.25363 17.1381 6.3751 17.3193 6.52818 17.4718C6.84031 17.7731 7.25717 17.9414 7.69096 17.9414C8.12475 17.9414 8.54161 17.7731 8.85375 17.4718ZM15.0298 6C15.8178 6 16.5738 6.31177 17.1328 6.86724C17.6882 7.42619 18 8.1822 18 8.97022C18 9.75824 17.6882 10.5142 17.1328 11.0732L14.5547 13.6579C14.4929 13.7202 14.4194 13.7696 14.3385 13.8033C14.2575 13.8371 14.1707 13.8544 14.0829 13.8544C13.9952 13.8544 13.9084 13.8371 13.8274 13.8033C13.7464 13.7696 13.673 13.7202 13.6112 13.6579C13.5489 13.5961 13.4995 13.5226 13.4657 13.4417C13.432 13.3607 13.4146 13.2739 13.4146 13.1861C13.4146 13.0984 13.432 13.0116 13.4657 12.9306C13.4995 12.8496 13.5489 12.7761 13.6112 12.7144L16.1892 10.1363C16.3423 9.98384 16.4638 9.80263 16.5467 9.60309C16.6296 9.40355 16.6722 9.18961 16.6722 8.97354C16.6722 8.75747 16.6296 8.54353 16.5467 8.34399C16.4638 8.14445 16.3423 7.96324 16.1892 7.81076C15.8771 7.50952 15.4602 7.34117 15.0265 7.34117C14.5927 7.34117 14.1758 7.50952 13.8637 7.81076L11.2856 10.3888C11.2237 10.4508 11.1501 10.4999 11.0692 10.5334C10.9882 10.567 10.9015 10.5842 10.8139 10.5842C10.7263 10.5842 10.6395 10.567 10.5586 10.5334C10.4776 10.4999 10.4041 10.4508 10.3421 10.3888C10.2802 10.3269 10.231 10.2533 10.1975 10.1724C10.164 10.0914 10.1467 10.0047 10.1467 9.91706C10.1467 9.82944 10.164 9.74269 10.1975 9.66174C10.231 9.5808 10.2802 9.50725 10.3421 9.4453L12.9268 6.86724C13.4858 6.31177 14.2418 6 15.0298 6ZM9.46909 14.891C9.38813 14.8579 9.3145 14.8092 9.25241 14.7476C9.19014 14.6858 9.14071 14.6123 9.10697 14.5314C9.07324 14.4504 9.05587 14.3635 9.05587 14.2758C9.05587 14.1881 9.07324 14.1013 9.10697 14.0203C9.14071 13.9393 9.19014 13.8658 9.25241 13.8041L12.5215 10.535C12.6466 10.4099 12.8163 10.3396 12.9933 10.3396C13.1702 10.3396 13.3399 10.4099 13.465 10.535C13.5901 10.6601 13.6604 10.8298 13.6604 11.0068C13.6604 11.1837 13.5901 11.3534 13.465 11.4785L10.1959 14.7476C10.1338 14.8092 10.0602 14.8579 9.97926 14.891C9.8983 14.924 9.81162 14.9408 9.72417 14.9403C9.63673 14.9408 9.55004 14.924 9.46909 14.891Z"
            fill="#495365" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="h-technical-seo">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M2 0C0.895431 0 0 0.89543 0 2V22C0 23.1046 0.89543 24 2 24H22C23.1046 24 24 23.1046 24 22V2C24 0.895431 23.1046 0 22 0H2ZM15.7625 5.53796C15.1151 5.13909 14.4082 4.84602 13.6684 4.66982L13.134 3.28125H10.866L10.3315 4.66978C9.5918 4.84602 8.88491 5.13908 8.23747 5.53793L6.87675 4.93359L5.27306 6.53739L5.87729 7.89797C5.47838 8.54542 5.18531 9.25237 5.00914 9.99216L3.62068 10.5266V12.7946L5.00893 13.3289C5.18514 14.0688 5.47824 14.7759 5.87719 15.4235L5.27303 16.7838L6.87679 18.3875L8.23751 17.7832C8.63925 18.0306 9.06444 18.2377 9.5069 18.4015V16.1377C7.93755 15.262 6.87619 13.5855 6.87619 11.6606C6.87619 8.83052 9.16992 6.53679 12 6.53679C14.8301 6.53679 17.1238 8.83052 17.1238 11.6606C17.1238 13.5855 16.0624 15.262 14.4931 16.1377V18.4019C14.9357 18.2381 15.3611 18.0309 15.7629 17.7834L17.1232 18.3875L18.7269 16.7838L18.1226 15.4231C18.5215 14.7756 18.8145 14.0688 18.9907 13.329L20.3793 12.7945V10.5265L18.9911 9.99219C18.8148 9.25227 18.5217 8.5452 18.1228 7.89762L18.7269 6.53732L17.1232 4.93363L15.7625 5.53796ZM13.5118 8.67327C14.601 9.22554 15.3475 10.3558 15.3475 11.6606C15.3475 13.0499 14.501 14.2416 13.2957 14.748V20.3672C13.2957 20.5608 13.1378 20.7188 12.9441 20.7188H11.0559C10.8622 20.7188 10.7043 20.5608 10.7043 20.3672V14.748C9.49898 14.2415 8.65249 13.0499 8.65249 11.6606C8.65249 10.3558 9.39904 9.22554 10.4882 8.67327V12.0389L11.2441 12.4753L12 12.9118L12.7559 12.4753L13.5118 12.0389V8.67327Z"
            fill="#495365" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="h-content">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M2 0C0.895431 0 0 0.89543 0 2V22C0 23.1046 0.89543 24 2 24H22C23.1046 24 24 23.1046 24 22V2C24 0.895431 23.1046 0 22 0H2ZM9.66667 4.00005H18.2222C18.4285 4.00005 18.6263 4.082 18.7722 4.22786C18.9181 4.37372 19 4.57155 19 4.77783V18.7778C19 18.9841 18.9181 19.1819 18.7722 19.3278C18.6263 19.4737 18.4285 19.5556 18.2222 19.5556H9.66667V4.00005ZM5.22781 4.22786C5.37367 4.082 5.5715 4.00005 5.77778 4.00005H8.11111V19.5556H5.77778C5.5715 19.5556 5.37367 19.4737 5.22781 19.3278C5.08194 19.1819 5 18.9841 5 18.7778V4.77783C5 4.57155 5.08194 4.37372 5.22781 4.22786Z"
            fill="#495365" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="h-more">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M2 0C0.895431 0 0 0.89543 0 2V22C0 23.1046 0.89543 24 2 24H22C23.1046 24 24 23.1046 24 22V2C24 0.895431 23.1046 0 22 0H2ZM12 19.5C16.1421 19.5 19.5 16.1421 19.5 12C19.5 7.85786 16.1421 4.5 12 4.5C7.85786 4.5 4.5 7.85786 4.5 12C4.5 16.1421 7.85786 19.5 12 19.5ZM12 16.875C11.5858 16.875 11.25 16.5392 11.25 16.125V10.875C11.25 10.4608 11.5858 10.125 12 10.125C12.4142 10.125 12.75 10.4608 12.75 10.875V16.125C12.75 16.5392 12.4142 16.875 12 16.875ZM11.25 7.875C11.25 8.28922 11.5858 8.625 12 8.625C12.4142 8.625 12.75 8.28922 12.75 7.875C12.75 7.46077 12.4142 7.125 12 7.125C11.5858 7.125 11.25 7.46077 11.25 7.875Z"
            fill="#495365" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="h-search">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M11.4351 10.0629H10.7124L10.4563 9.81589C11.3528 8.77301 11.8925 7.4191 11.8925 5.94625C11.8925 2.66209 9.23042 0 5.94625 0C2.66209 0 0 2.66209 0 5.94625C0 9.23042 2.66209 11.8925 5.94625 11.8925C7.4191 11.8925 8.77301 11.3528 9.81589 10.4563L10.0629 10.7124V11.4351L14.6369 16L16 14.6369L11.4351 10.0629ZM5.94608 10.0631C3.66821 10.0631 1.82944 8.22429 1.82944 5.94642C1.82944 3.66855 3.66821 1.82978 5.94608 1.82978C8.22395 1.82978 10.0627 3.66855 10.0627 5.94642C10.0627 8.22429 8.22395 10.0631 5.94608 10.0631Z"
            fill="" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 5" id="h-menu-arrow">
        <path
            d="M3.38573 4.53233C3.18574 4.77481 2.81426 4.77481 2.61427 4.53233L0.210692 1.61814C-0.0582878 1.29202 0.173684 0.8 0.596418 0.8L5.40358 0.8C5.82632 0.8 6.05829 1.29202 5.78931 1.61814L3.38573 4.53233Z"
            fill="" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 12" id="h-menu-arrow-mobile">
        <path d="M1.92432 11L6.99973 6L1.92432 1" stroke="" stroke-width="2" stroke-linecap="round" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" id="h-lang-mobile">
        <path
            d="M0.182888 7.1861C0.152942 7.3326 0.126487 7.48035 0.103744 7.62933C0.0810321 7.77834 0.061875 7.92848 0.0464928 8.07982C0.0157597 8.38233 0 8.68929 0 8.99992C0 9.31062 0.0157597 9.61757 0.0464928 9.92003C0.061875 10.0713 0.0809377 10.2215 0.103744 10.3705C0.126455 10.5194 0.152942 10.6672 0.182888 10.8137C0.212835 10.9601 0.246431 11.1053 0.283361 11.2491C0.357409 11.5366 0.445173 11.8187 0.546149 12.0943C0.596605 12.2322 0.650395 12.3685 0.7073 12.503C0.764174 12.6376 0.82435 12.7705 0.887483 12.9017C0.91894 12.9673 0.951498 13.0324 0.984621 13.0971C1.05084 13.2265 1.12014 13.354 1.19242 13.4797C1.40919 13.8566 1.65244 14.2163 1.9197 14.5564C2.05333 14.7264 2.19287 14.8915 2.33813 15.0514C2.43499 15.158 2.5343 15.2621 2.63615 15.3639C2.73791 15.4658 2.84216 15.5651 2.9487 15.662C3.42817 16.0978 3.95487 16.4823 4.52027 16.8076C4.64591 16.8798 4.7735 16.9492 4.90282 17.0154C5.16155 17.148 5.42751 17.2684 5.70002 17.3758C5.83623 17.4295 5.97416 17.48 6.11355 17.5272C7.01962 17.8338 7.99046 18 9 18C9.68833 18 10.3586 17.9224 11.0025 17.7761C11.3032 17.7078 11.5982 17.6248 11.8865 17.5272C12.0259 17.4801 12.1636 17.4295 12.3 17.3758C12.5725 17.2684 12.8385 17.148 13.0972 17.0154C13.2265 16.9492 13.3541 16.8799 13.4797 16.8076C14.0451 16.4826 14.5718 16.0977 15.0513 15.662C15.1579 15.5651 15.2621 15.4657 15.3638 15.3639C15.4656 15.2622 15.565 15.1579 15.6619 15.0514C15.8071 14.8916 15.9469 14.7265 16.0803 14.5564C16.2917 14.2875 16.4875 14.006 16.6677 13.7136C16.7153 13.6363 16.7621 13.5585 16.8075 13.4797C16.8798 13.3541 16.9491 13.2264 17.0153 13.0971C17.0485 13.0324 17.0808 12.9673 17.1124 12.9018C17.1757 12.7707 17.2357 12.6377 17.2926 12.5031C17.3495 12.3685 17.4034 12.2322 17.4538 12.0943C17.5547 11.8187 17.6425 11.5366 17.7166 11.2491C17.7536 11.1053 17.7872 10.9602 17.8171 10.8138C17.847 10.6672 17.8735 10.5195 17.8962 10.3705C17.9189 10.2216 17.9381 10.0714 17.9535 9.92009C17.9842 9.61757 18 9.31062 18 8.99998C18 8.68929 17.9842 8.3823 17.9535 8.07988C17.9381 7.92854 17.919 7.7784 17.8962 7.62939C17.8735 7.48047 17.847 7.33263 17.8171 7.18617C17.7871 7.03977 17.7535 6.8945 17.7166 6.75081C17.6425 6.46329 17.5547 6.18113 17.4538 5.90557C17.4286 5.83665 17.4025 5.7681 17.3757 5.69994C17.2951 5.49559 17.2072 5.2949 17.1124 5.09817C17.0809 5.03262 17.0484 4.96747 17.0153 4.90276C16.949 4.77341 16.8797 4.64586 16.8074 4.52025C16.5907 4.14331 16.3474 3.7836 16.0801 3.44349C15.9465 3.2735 15.807 3.10842 15.6617 2.94855C15.5649 2.84201 15.4655 2.73776 15.3637 2.636C15.262 2.53414 15.1577 2.4348 15.0511 2.33798C14.8448 2.15037 14.6294 1.97249 14.4062 1.80454C14.1109 1.58246 13.8015 1.37755 13.4795 1.19236C13.3539 1.12017 13.2263 1.05078 13.097 0.98456C13.0382 0.954425 12.9789 0.925076 12.9194 0.896293C12.8479 0.861722 12.776 0.827749 12.7035 0.795034C12.6732 0.78135 12.6425 0.768359 12.6121 0.75499C12.5089 0.709661 12.4051 0.665779 12.2998 0.624288C12.2984 0.62369 12.2969 0.623218 12.2954 0.622558C12.1833 0.578487 12.0698 0.536996 11.9555 0.497234C11.9324 0.489244 11.9095 0.480688 11.8863 0.472887C11.6197 0.382701 11.3477 0.305003 11.0705 0.239857C10.984 0.219441 10.897 0.200001 10.8095 0.182102C10.7466 0.169205 10.6831 0.157252 10.6195 0.145707C10.1461 0.0596417 9.65986 0.0109469 9.16373 0.00207614C9.109 0.00106952 9.05445 0 8.99946 0C8.9062 0 8.8133 0.00191885 8.7207 0.00471849C7.81107 0.0324318 6.93522 0.194716 6.11295 0.472919C5.97357 0.520103 5.83566 0.570623 5.69942 0.624319C5.65727 0.64096 5.61568 0.658387 5.57382 0.675625C5.48033 0.714128 5.38747 0.753606 5.29561 0.795066C5.16268 0.855242 5.03157 0.918375 4.90222 0.984749C4.77284 1.05097 4.64531 1.1203 4.51968 1.19255C4.01417 1.48324 3.5398 1.82159 3.10224 2.20136C3.05037 2.24641 2.99897 2.29183 2.94814 2.33807C2.84156 2.4349 2.73732 2.53433 2.63559 2.63609C2.53386 2.73786 2.43439 2.84207 2.33757 2.94865C2.1923 3.10845 2.05289 3.27353 1.91913 3.44359C1.65191 3.78357 1.40866 4.1434 1.19186 4.52035C1.11957 4.64595 1.05027 4.77357 0.984055 4.90286C0.950931 4.96756 0.918594 5.03271 0.886949 5.09827C0.792265 5.29503 0.704343 5.49572 0.623689 5.70003C0.596825 5.7682 0.570748 5.83671 0.545519 5.90563C0.444544 6.18132 0.35678 6.46333 0.282731 6.75087C0.246116 6.89441 0.212552 7.03967 0.182605 7.18607L0.182888 7.1861ZM7.47455 0.618248C7.49216 0.6481 7.50688 0.682545 7.54992 0.695631C7.63416 0.652001 7.71818 0.698525 7.81097 0.695631C7.90138 0.692454 7.98213 0.651057 8.08175 0.66666C8.25781 0.694184 8.50374 0.866315 8.64246 0.77292C8.67738 0.749328 8.66911 0.708623 8.7006 0.647408C8.7257 0.598493 8.76489 0.544325 8.78896 0.484054C8.85904 0.482324 8.92919 0.481349 8.99965 0.481349C9.58169 0.481349 10.1503 0.540173 10.6999 0.651907C10.6769 0.712555 10.6012 0.685502 10.5378 0.71482C10.4782 0.742439 10.456 0.799438 10.3927 0.81136C10.2169 0.844484 10.0711 0.767289 9.91897 0.772857C9.91183 0.838696 9.99418 0.87701 10.035 0.89818C10.1729 0.970468 10.2852 0.960559 10.4798 0.956218C10.5794 0.954016 10.694 0.985976 10.7796 0.927152C10.8339 0.890096 10.831 0.808466 10.8764 0.763137C10.8957 0.74398 10.9241 0.724729 10.9562 0.708371C11.0516 0.730894 11.1465 0.755336 11.2408 0.781036C11.2249 0.84612 11.1196 0.830423 11.1182 0.91762C11.1855 0.957948 11.3419 0.895569 11.4023 0.826742C11.4256 0.833663 11.4491 0.840615 11.4724 0.847629C11.6092 0.889215 11.7445 0.934072 11.8783 0.982201C12.069 1.05093 12.2564 1.1263 12.4408 1.20793C12.4054 1.22882 12.3677 1.25559 12.3366 1.2554C12.2567 1.2549 12.2225 1.14817 12.1334 1.18764C12.1256 1.29101 12.2429 1.33288 12.3171 1.38063C12.3975 1.43231 12.4819 1.48381 12.5104 1.57371C12.4318 1.74043 12.3063 1.56497 12.1817 1.56418C12.0445 1.5632 11.8442 1.82495 11.7273 1.6124C11.7564 1.49976 11.8806 1.48227 11.911 1.37107C11.8843 1.3756 11.8585 1.38425 11.8329 1.39457C11.7869 1.41275 11.7416 1.43728 11.6947 1.46251C11.6331 1.49564 11.5685 1.52854 11.4952 1.5449C11.4278 1.55974 11.362 1.55616 11.3018 1.57368C11.1861 1.60756 11.1052 1.69287 10.9828 1.73801C10.935 1.75553 10.8778 1.75012 10.8281 1.76679C10.7113 1.80577 10.5714 1.87547 10.451 1.94062C10.3279 2.00712 10.1891 2.07702 10.1126 2.14333C10.0713 2.17894 9.96386 2.30561 9.96757 2.34584C9.97248 2.40332 10.0809 2.42238 10.0836 2.48108C10.0811 2.51669 10.0208 2.5935 10.0643 2.64519C10.1039 2.69228 10.1832 2.65415 10.2672 2.66444C10.415 2.68274 10.5116 2.80461 10.625 2.86714C10.7107 2.91442 10.8379 2.97073 10.9347 2.98297C11.0675 2.99961 11.2162 2.94427 11.2343 3.05054C11.2519 3.15267 11.1093 3.18913 11.099 3.25324C11.1706 3.34758 11.0504 3.39263 11.0507 3.47533C11.0508 3.5423 11.1333 3.6428 11.2053 3.64887C11.3028 3.65714 11.4454 3.55309 11.4859 3.45588C11.534 3.34009 11.5136 3.18309 11.6019 3.09876C12.0525 3.11118 12.4337 2.89448 12.4046 2.43282C12.4017 2.38721 12.3758 2.32848 12.3854 2.27834C12.3995 2.20372 12.528 2.14109 12.5109 2.04676C12.5595 2.03181 12.5886 1.99256 12.6134 1.94839C12.6505 1.88255 12.6793 1.80737 12.7482 1.78255C12.753 1.78073 12.757 1.77764 12.7624 1.77648C12.8018 1.76764 12.843 1.77544 12.8864 1.78824C12.9636 1.81105 13.0473 1.85034 13.1396 1.84408C13.1865 1.8409 13.2473 1.79894 13.2944 1.80558C13.3888 1.81876 13.4458 1.93505 13.5168 1.98897C13.5796 2.03688 13.6458 2.02159 13.6619 2.08542C13.6433 2.19256 13.5687 2.19658 13.5747 2.29498C13.5749 2.29605 13.5747 2.29671 13.5747 2.29778C13.5818 2.38623 13.6738 2.45333 13.7197 2.46208C13.7902 2.47526 13.8911 2.43745 13.9615 2.40404C14.0375 2.36815 14.1068 2.29058 14.1732 2.23666C14.2679 2.30935 14.3613 2.38384 14.4529 2.46025C14.4634 2.50319 14.4707 2.54188 14.4741 2.56805C14.4876 2.6724 14.4599 2.75211 14.4645 2.84817C14.477 3.01093 14.6824 2.99439 14.7835 3.07966C14.814 3.10555 14.8259 3.17158 14.8513 3.20518C14.9004 3.27054 14.9597 3.27054 14.9673 3.34022C14.9854 3.50694 14.8159 3.521 14.8318 3.70707C14.7968 3.77916 14.7086 3.77482 14.7157 3.87108C14.727 4.02346 14.9463 3.90669 15.0059 4.02556C15.0381 4.08948 15.0005 4.13701 14.9768 4.22808C15.0518 4.31729 15.0513 4.45967 14.919 4.45985C14.8386 4.45985 14.8164 4.3736 14.7351 4.35359C14.6899 4.34233 14.6284 4.34453 14.5708 4.33434C14.5215 4.3256 14.4629 4.31097 14.4162 4.30537C14.2968 4.29122 14.1676 4.32588 14.097 4.25715C14.2121 4.10458 14.3649 3.95422 14.5129 3.82283C14.5569 3.78354 14.6513 3.7567 14.6289 3.67806C14.5466 3.60587 14.4455 3.6825 14.3678 3.72629C14.2863 3.77212 14.189 3.83815 14.097 3.8518C13.9371 3.87548 13.725 3.80502 13.5943 3.8903C13.5762 3.96315 13.743 3.93487 13.7198 4.04482C13.6559 4.05529 13.5953 4.06042 13.546 4.01575C13.501 3.97533 13.5268 3.91459 13.4977 3.89024C13.4481 3.84922 13.2617 3.83805 13.1785 3.85173C13.0769 3.86828 12.9871 3.92902 12.9753 4.01575C13.0973 4.07281 13.2986 3.95702 13.3429 4.10276C13.276 4.22289 13.1185 4.28901 13.1396 4.45004C13.1479 4.51223 13.2219 4.59531 13.2752 4.60455C13.3287 4.61377 13.3587 4.56083 13.4104 4.56577C13.4651 4.57086 13.4527 4.63324 13.5169 4.62381C13.61 4.58414 13.6615 4.45372 13.7681 4.45979C13.8961 4.61487 13.6526 4.69043 13.5169 4.73963C13.3621 4.79565 13.1609 4.82541 13.0428 4.87496C12.981 4.90075 12.7471 5.12648 12.7141 4.95196C12.6904 4.82614 12.8298 4.86253 12.8591 4.75898C12.7094 4.72991 12.57 4.82327 12.4338 4.87505C12.2395 4.94841 11.91 4.9949 11.8632 5.21283C11.854 5.25643 11.8822 5.33806 11.8536 5.36713C11.8304 5.3905 11.6918 5.39474 11.6312 5.41535C11.538 5.44731 11.4566 5.51557 11.399 5.53114C11.3555 5.54309 11.2913 5.5397 11.2637 5.55071C11.1869 5.58043 11.1585 5.68421 11.0704 5.75322C11.0343 5.78141 10.9541 5.80192 10.9253 5.83042C10.8752 5.88018 10.8686 6.00475 10.7803 6.0234C10.7241 6.02831 10.6784 5.98125 10.6255 6.01368C10.6191 6.13681 10.669 6.30428 10.6159 6.42875C10.5014 6.52193 10.3757 6.58786 10.2292 6.67006C10.1481 6.7157 10.0756 6.72734 9.9777 6.77632C9.90828 6.81089 9.8448 6.89327 9.76493 6.94033C9.58031 7.04879 9.35741 7.1772 9.35882 7.45194C9.35886 7.51143 9.38984 7.57554 9.39742 7.64502C9.40208 7.68595 9.39251 7.7259 9.39742 7.77054C9.4089 7.87142 9.48213 7.99992 9.39742 8.06962C9.26729 8.01631 9.10173 7.99819 9.0107 7.90561C8.98575 7.8103 9.06106 7.73178 9.04951 7.64502C9.04023 7.57535 8.94206 7.45116 8.8849 7.44222C8.82608 7.43297 8.77181 7.49535 8.71107 7.49045C8.63878 7.48475 8.57159 7.38544 8.4788 7.37465C8.34278 7.35877 8.24268 7.40564 8.09204 7.38447C7.94621 7.46223 7.90355 7.60067 7.72481 7.58699C7.6619 7.58239 7.60421 7.53433 7.53145 7.51942C7.45262 7.50315 7.33296 7.47535 7.25086 7.48101C7.08625 7.49199 6.96681 7.6102 6.8255 7.68353C6.70075 7.74839 6.52412 7.82908 6.48706 7.96352C6.46674 8.0359 6.48389 8.13785 6.458 8.20483C6.44088 8.24893 6.40351 8.28819 6.38061 8.33005C6.27221 8.52776 6.18231 8.7891 6.2646 9.07347C6.27684 9.11562 6.38455 9.35356 6.42893 9.40162C6.47879 9.455 6.6255 9.53519 6.70924 9.53667C6.78008 9.53808 6.86306 9.50071 6.93164 9.48844C7.01122 9.47432 7.11088 9.47303 7.18316 9.44991C7.39222 9.38313 7.35092 9.10074 7.5602 9.00574C7.65155 8.96453 7.75725 8.95626 7.9179 8.94799C7.96892 8.99083 7.99289 9.06598 7.98575 9.13125C7.98037 9.18052 7.93347 9.22518 7.90836 9.29543C7.88641 9.35699 7.88178 9.42918 7.86005 9.47888C7.83126 9.54393 7.76706 9.59149 7.74403 9.65268C7.72894 9.69244 7.73721 9.74195 7.72478 9.77794C7.70254 9.84148 7.61736 9.88637 7.65693 9.95174C7.86398 10.0339 8.11453 9.92833 8.29522 9.96155C8.37147 9.97536 8.52862 10.0662 8.52721 10.1836C8.52626 10.2714 8.45936 10.3289 8.44983 10.425C8.43806 10.5458 8.38754 10.6938 8.38216 10.7916C8.37361 10.9518 8.61752 11.2282 8.78827 11.2259C8.9721 11.2236 9.07933 11.0434 9.30082 11.1392C9.37436 11.171 9.45197 11.2898 9.53313 11.284C9.60003 11.2792 9.7011 11.1621 9.74583 11.0812C9.80032 10.9825 9.80419 10.8994 9.90041 10.8496C10.0042 10.796 10.0868 10.8218 10.2196 10.7723C10.2789 10.7504 10.3305 10.7126 10.3839 10.6757C10.4308 10.6436 10.4802 10.5593 10.5387 10.6177C10.6159 10.6947 10.4443 10.7382 10.5096 10.8205C10.6438 10.8914 10.7124 10.6886 10.8095 10.6856C10.8405 10.6846 10.9477 10.7457 11.0028 10.782C11.0783 10.8315 11.1039 10.9009 11.1865 10.917C11.2395 10.9276 11.3247 10.8968 11.3993 10.9073C11.4979 10.9214 11.5569 11.006 11.6315 11.0038C11.7226 11.0014 11.7663 10.9024 11.8443 10.8879C12.015 10.8567 12.0785 10.907 12.1536 11.0135C12.2379 11.028 12.2408 10.9163 12.318 10.9557C12.2757 11.0398 12.3324 11.0785 12.3663 11.1487C12.3882 11.1937 12.3846 11.2257 12.4051 11.2453C12.4512 11.2891 12.5403 11.2891 12.6079 11.332C12.6793 11.3768 12.7195 11.4602 12.8013 11.554C12.8856 11.6501 13.0273 11.7495 13.1397 11.7566C13.246 11.7634 13.3325 11.7265 13.4203 11.7373C13.6204 11.7618 13.7447 11.8616 13.8846 11.9691C13.9628 12.029 14.0333 12.0707 14.0584 12.1427C14.0761 12.1928 14.0675 12.2601 14.0875 12.3164C14.1302 12.4366 14.3058 12.4947 14.2423 12.7025C14.2714 12.7634 14.3365 12.7853 14.4066 12.828C14.4627 12.8621 14.5102 12.9341 14.5709 12.9438C14.6102 12.9501 14.6529 12.9319 14.6869 12.9341C14.7968 12.9416 14.8722 12.9842 14.9675 13.0211C15.0266 13.0438 15.1023 13.0525 15.1416 13.0792C15.1907 13.1123 15.1971 13.2234 15.2577 13.2527C15.2972 13.2719 15.3851 13.2454 15.451 13.2527C15.5548 13.2647 15.6957 13.3282 15.7895 13.33C15.8464 13.3312 15.8935 13.3068 15.9441 13.3107C16.0615 13.3197 16.1537 13.3938 16.2448 13.4766C15.08 15.3545 13.2058 16.7484 10.9994 17.281C10.9913 17.1964 10.968 17.1113 10.9641 17.0268C10.9565 16.8433 10.9845 16.7137 10.9546 16.5442C10.9322 16.416 10.9043 16.2195 10.8579 16.1388C10.8061 16.0491 10.6027 15.8966 10.5002 15.8395C10.4325 15.802 10.3515 15.7889 10.2778 15.7527C10.1202 15.6755 9.81513 15.5127 9.74602 15.3569C9.72598 15.3121 9.72869 15.2527 9.70721 15.2026C9.66524 15.1037 9.5766 15.0179 9.51387 14.9225C9.39443 14.7405 9.29799 14.512 9.1754 14.3242C9.1134 14.2287 9.0597 14.1204 8.99176 14.0444C8.9519 13.9995 8.82447 13.9574 8.80812 13.8899C8.78635 13.8006 8.72023 13.6781 8.73073 13.6098C8.7447 13.5177 8.92441 13.4431 8.92413 13.359C8.9241 13.2876 8.82815 13.2459 8.80812 13.1853C8.75929 13.0378 8.83671 12.951 8.89503 12.8282C8.91428 12.7878 8.93312 12.7229 8.95316 12.6931C8.98858 12.64 9.06059 12.6251 9.10777 12.5676C9.13413 12.5355 9.15077 12.4684 9.18518 12.4228C9.25867 12.3253 9.37735 12.2887 9.40758 12.2007C9.43221 12.129 9.44665 11.7705 9.41711 11.6506C9.40028 11.5811 9.33558 11.5234 9.31089 11.4576C9.26713 11.3411 9.25687 11.2138 9.13671 11.2163C9.06257 11.2178 9.01025 11.2997 8.9626 11.3513C8.95115 11.4201 8.95722 11.4944 8.88521 11.5154C8.77531 11.5478 8.73315 11.3999 8.60491 11.3611C8.55388 11.3455 8.47254 11.3464 8.44061 11.3321C8.34702 11.2902 8.31683 11.1534 8.21821 11.1003C8.1357 11.0563 8.06505 11.0716 8.01503 11.0038C7.99424 10.9572 8.0106 10.8732 8.0055 10.8108C7.89952 10.7489 7.80972 10.518 7.68631 10.4635C7.60449 10.4272 7.47926 10.4305 7.37694 10.3959C7.32881 10.3796 7.29175 10.3585 7.24142 10.3477C7.17942 10.3338 7.1156 10.3331 7.06759 10.309C6.87615 10.2143 6.77285 9.90682 6.53576 9.91339C6.43469 9.91597 6.33727 10.0104 6.24563 10.0098C6.15457 10.0093 6.00191 9.93727 5.88766 9.88433C5.76897 9.82928 5.63758 9.79924 5.53975 9.74928C5.4606 9.70886 5.40565 9.63487 5.33654 9.60424C5.2836 9.58083 5.20612 9.57671 5.16271 9.5562C5.10093 9.52695 5.03657 9.46454 4.95953 9.41115C4.88655 9.3607 4.80763 9.28366 4.80477 9.21836C4.80159 9.1428 4.87435 9.07847 4.88215 9.0058C4.90706 8.77595 4.73739 8.61077 4.63062 8.47497C4.55151 8.37409 4.45871 8.28853 4.37938 8.19514C4.38381 8.13314 4.38381 8.12197 4.37938 8.06009C4.31933 8.00187 4.26878 7.91552 4.20527 7.82832C4.14789 7.74968 4.03603 7.66575 4.02159 7.57755C4.00379 7.46909 4.0629 7.37377 4.02159 7.26849C3.95277 7.09378 3.70973 7.1727 3.741 7.40372C3.74978 7.46736 3.83968 7.55292 3.86683 7.61605C3.89463 7.68044 3.88926 7.76063 3.91514 7.83814C3.94006 7.91244 4.01505 7.97654 4.04097 8.06022C4.08199 8.19237 4.08073 8.33474 4.11835 8.41735C4.15157 8.4907 4.27391 8.5601 4.2053 8.64893C4.11376 8.6679 4.07853 8.57655 4.02162 8.52342C3.98985 8.49388 3.87482 8.43786 3.85733 8.36912C3.8427 8.31234 3.89341 8.23581 3.87658 8.16632C3.84336 8.03012 3.5679 8.02666 3.56692 7.88648C3.56642 7.7985 3.68215 7.78803 3.68318 7.70294C3.68394 7.60986 3.55594 7.53103 3.52842 7.45207C3.50328 7.37969 3.49916 7.26437 3.48982 7.16254C3.48076 7.06695 3.49249 6.95625 3.47029 6.88252C3.45047 6.81621 3.35063 6.72492 3.28661 6.68944C3.20193 6.64238 3.13471 6.66191 3.09325 6.59299C3.05717 6.53281 3.03339 6.40702 3.02558 6.34212C3.01162 6.22605 3.02241 6.09915 3.01586 5.97528C3.00951 5.85121 2.9968 5.73221 3.01586 5.5989C3.06371 5.50553 3.15091 5.45951 3.1997 5.36703C3.2337 5.30273 3.23848 5.22321 3.27689 5.15476C3.34773 5.02862 3.50206 4.9122 3.6058 4.78791C3.71766 4.65404 3.82065 4.52579 3.88611 4.37275C3.90961 4.31846 3.97255 4.19804 3.96349 4.13145C3.95078 4.03865 3.77551 3.96212 3.78935 3.85161C3.79813 3.78316 3.8958 3.78413 3.9249 3.71657C3.93981 3.68171 3.95318 3.58438 3.95396 3.54274C3.95541 3.44966 3.90612 3.35274 3.9249 3.25318C3.94078 3.16837 4.06727 3.13399 4.00228 3.04085C3.93779 2.94862 3.82206 3.09061 3.75075 3.03113C3.68529 2.97627 3.76393 2.91002 3.77 2.80904C3.77239 2.7689 3.74651 2.72298 3.75075 2.69322C3.75663 2.65009 3.84084 2.57743 3.81842 2.54846C3.78347 2.50426 3.74525 2.41505 3.69058 2.34383C4.76922 1.4811 6.06177 0.874588 7.47511 0.618059"
            fill="" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="h-close-icon">
        <circle cx="8" cy="8" r="8" fill="" />
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M9.91523 10.5439C10.0888 10.7175 10.3702 10.7175 10.5438 10.5439C10.7173 10.3703 10.7173 10.0889 10.5438 9.91536L8.63582 8.0074L10.5438 6.09945C10.7173 5.92588 10.7173 5.64448 10.5438 5.47091C10.3702 5.29734 10.0888 5.29734 9.91523 5.47091L8.00728 7.37886L6.09197 5.46355C5.9184 5.28998 5.63699 5.28998 5.46343 5.46355C5.28986 5.63712 5.28986 5.91852 5.46343 6.09209L7.37874 8.0074L5.46343 9.92272C5.28986 10.0963 5.28986 10.3777 5.46343 10.5513C5.63699 10.7248 5.9184 10.7248 6.09197 10.5513L8.00728 8.63594L9.91523 10.5439Z"
            fill="" />
    </symbol>

    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 20" fill="none" id="new-icon">
        <rect width="40" height="20" rx="3" fill="#FC4304" />
        <path
            d="M13.4893 5.04688V15H11.4385L7.43945 8.32812V15H5.38867V5.04688H7.43945L11.4453 11.7256V5.04688H13.4893ZM21.9521 13.4004V15H16.6543V13.4004H21.9521ZM17.3242 5.04688V15H15.2734V5.04688H17.3242ZM21.2617 9.10059V10.6592H16.6543V9.10059H21.2617ZM21.9453 5.04688V6.65332H16.6543V5.04688H21.9453ZM25.5479 13.4209L27.5303 5.04688H28.6377L28.8906 6.44141L26.7783 15H25.5889L25.5479 13.4209ZM24.5293 5.04688L26.1699 13.4209L26.0332 15H24.707L22.499 5.04688H24.5293ZM30.6338 13.3867L32.2539 5.04688H34.2842L32.083 15H30.7568L30.6338 13.3867ZM29.2598 5.04688L31.2559 13.4551L31.2012 15H30.0117L27.8857 6.43457L28.1592 5.04688H29.2598Z"
            fill="white" />
    </symbol>
</svg>