<?php
use yii\helpers\Url;
?>

<div class="footer">
	<div class="footer__container-outer">
		<div class="footer__section">
			<div class="footer__item">
				<a href="<?= Url::to(['/page/rank-tracker/index']); ?>" class="footer__title">
					<svg class="icon rt">
						<use xlink:href="#rt"></use>
					</svg>
					<span class="footer__top-text">Rank Tracker</span>
				</a>
				<ul class="footer__links">
					<li>
						<a href="<?= Url::to(['/page/rank-tracker/page', 'view' => 'local-rankings']); ?>"
							class="footer__link"><?= $item['localRankChecker'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/rank-tracker/page', 'view' => 'serp-analysis']); ?>"
							class="footer__link"><?= $item['serpAnalyser'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/rank-tracker/page', 'view' => 'youtube-rank-checker']); ?>"
							class="footer__link"><?= $item['youTubeRankChecker'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/rank-tracker/page', 'view' => 'competitor-tracking']); ?>"
							class="footer__link"><?= $item['competitorRankTracker'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/rank-tracker/page', 'view' => 'google-rank-checker']); ?>"
							class="footer__link"><?= $item['googleRankTracker'] ?></a>
					</li>
				</ul>
			</div>

			<div class="footer__item">
				<a href="<?= Url::to(['/page/linkassistant/index']); ?>" class="footer__title">
					<svg class="icon la">
						<use xlink:href="#la"></use>
					</svg>
					<span class="footer__top-text">LinkAssistant</span>
				</a>
				<ul class="footer__links">
					<li>
						<a href="<?= Url::to(['/page/linkassistant/page', 'view' => 'email-scraper-tool']); ?>"
							class="footer__link"><?= $item['emailScraperSoftware'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/linkassistant/page', 'view' => 'link-prospecting-tool']); ?>"
							class="footer__link"><?= $item['outreachSoftware'] ?></a>
					</li>
				</ul>
			</div>

			<div class="footer__item">
				<a href="<?= Url::to(['/page/rank-tracker/page', 'view' => 'keyword-research-tool']); ?>"
					class="footer__title">
					<svg class="icon kr">
						<use xlink:href="#key-r"></use>
					</svg>
					<span class="footer__top-text"><?= Yii::t('app/layout', 'Keyword Research') ?></span>
				</a>
				<ul class="footer__links">
					<li>
						<a href="<?= Url::to(['/page/rank-tracker/page', 'view' => 'competitor-tool']); ?>"
							class="footer__link"><?= $item['competitorKeywordChecker'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/keyword-research', 'view' => 'long-tail-keyword-research-tool']); ?>"
							class="footer__link"><?= $item['longTailSeoTool'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/keyword-research', 'view' => 'keyword-grouper']); ?>"
							class="footer__link"><?= $item['keywordGroupingTool'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/rank-tracker/page', 'view' => 'keyword-difficulty-tool']); ?>"
							class="footer__link"><?= $item['seoDifficultyChecker'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/rank-tracker/page', 'view' => 'keyword-gap']); ?>"
							class="footer__link"><?= $item['keywordGapTool'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/keyword-research', 'view' => 'youtube-keyword-tool']); ?>"
							class="footer__link"><?= $item['youTubeKeywordTool'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/keyword-research', 'view' => 'bing-keyword-tool']); ?>"
							class="footer__link"><?= $item['bingKeywordTool'] ?></a>
					</li>
				</ul>
			</div>

			<div class="footer__item">
				<a href="<?= Url::to(['/page/website-auditor/index']); ?>" class="footer__title">
					<svg class="icon wa">
						<use xlink:href="#wa"></use>
					</svg>
					<span class="footer__top-text">Website Auditor</span>
				</a>
				<ul class="footer__links">
					<li>
						<a href="<?= Url::to(['/page/website-auditor/page', 'view' => 'seo-spider']); ?>"
							class="footer__link"><?= $item['seoSpider'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/website-auditor/page', 'view' => 'seo-content-editor']); ?>"
							class="footer__link"><?= $item['seoContentEditor'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/website-auditor/page', 'view' => 'xml-sitemap-generator']); ?>"
							class="footer__link"><?= $item['sitemapGenerator'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/website-auditor/page', 'view' => 'robots-txt-generator']); ?>"
							class="footer__link"><?= $item['robotsTxtGenerator'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/website-auditor/page', 'view' => 'core-web-vitals-audit']); ?>"
							class="footer__link"><?= $item['coreWebVitalsAudit'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/website-auditor/page', 'view' => 'tf-idf-tool']); ?>"
							class="footer__link"><?= $item['tfidfTool'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/website-auditor/page', 'view' => 'site-visualizations']); ?>"
							class="footer__link"><?= $item['websiteVisualisation'] ?></a>
					</li>
				</ul>
			</div>

			<div class="footer__item">
				<a href="<?= Url::to(['/page/seo-spyglass/index']) ?>" class="footer__title">
					<svg class="icon seo-s">
						<use xlink:href="#seo-s"></use>
					</svg>
					<span class="footer__top-text">SEO SpyGlass</span>
				</a>
				<ul class="footer__links">
					<li>
						<a href="<?= Url::to(['/page/seo-spyglass/page', 'view' => 'free-backlink-checker-tool']); ?>"
							class="footer__link"><?= $item['freeBacklinkChecker'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/seo-spyglass/page', 'view' => 'bad-backlink-checker']); ?>"
							class="footer__link"><?= $item['badBacklinksChecker'] ?></a>
					</li>
				</ul>
			</div>

			<div class="footer__item">
				<a href="<?= Url::to(['/page/default/page', 'view' => 'seo-reports']); ?>" class="footer__title">
					<svg class="icon report">
						<use xlink:href="#report"></use>
					</svg>
					<span class="footer__top-text"><?= Yii::t('app/layout', 'SEO Reports') ?></span>
				</a>
				<ul class="footer__links">
					<li>
						<a href="<?= Url::to(['/page/default/seo-reports', 'view' => 'ranking-report']); ?>"
							class="footer__link"><?= $item['seoRankingReports'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'white-label-seo-software-reports']); ?>"
							class="footer__link"><?= $item['whiteLabelSeo'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/website-auditor/page', 'view' => 'audit-report']); ?>"
							class="footer__link"><?= $item['seoAuditReport'] ?></a>
					</li>
				</ul>
			</div>

			<div class="footer__item">
				<div class="footer__title">
					<span class="footer__top-text"><?= Yii::t('app/layout', 'Learn SEO') ?></span>
				</div>
				<ul class="footer__links">
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'seo-workflow']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'SEO Workflow') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'video']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Video Tutorials') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/learning-hub', 'view' => 'seo-academy']); ?>"
							class="footer__link"><?= Yii::t('app/layout', '30 Days SEO Course') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'webinars']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'SEO Webinars') ?></a>
					</li>
					<li>
						<a href="https://www.seoinpractice.com/" target="_blank"
							class="footer__link"><?= Yii::t('app/layout', 'SEO Book') ?></a>
					</li>
					<?php if ($this->additionalLink == 'WordPressBlog') { ?>

					<?php  } ?>
				</ul>
			</div>

			<div class="footer__item">
				<div class="footer__title">
					<span class="footer__top-text"><?= Yii::t('app/layout', 'SEO PowerSuite Pack') ?></span>
				</div>
				<ul class="footer__links">
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'google-penalty-checker']); ?>"
							class="footer__link"><?= $item['googlePenaltyChecker'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'quick-domain-analysis-tool']); ?>"
							class="footer__link"><?= $item['quickDomainAuthorityChecker'] ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'seo-competitor-analysis-tool']); ?>"
							class="footer__link"><?= $item['seoCompetitorAnalysis'] ?></a>
					</li>
				</ul>
			</div>

			<div class="footer__item">
				<div class="footer__title">
					<span class="footer__top-text"><?= Yii::t('app/layout', 'Resources') ?></span>
				</div>
				<ul class="footer__links">
					<li>
						<a href="<?= Url::to(['/news/category/index']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'SEO Blog') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/seo-software', 'view' => 'compare-seo-tools']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'SEO Software Reviews') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/news/category/view', 'uri' => 'seo-case-study']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Case Studies') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/seo-wiki/category/index']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'SEO Wiki') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'seo-agencies']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Best SEO Agencies') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/free-tools', 'view' => 'domain-authority-checker-tool']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Free Domain Authority Checker') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/keyword-research', 'view' => 'keyword-gap']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Free Keyword Gap Finder') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/free-tools', 'view' => 'case-converter']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Free Case Converter') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/free-tools', 'view' => 'word-counter']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Free Word Counter') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/articles/']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Articles') ?></a>
					</li>
				</ul>
			</div>

			<div class="footer__item">
				<div class="footer__title">
					<span class="footer__top-text"><?= Yii::t('app/layout', 'API Access') ?></span>
				</div>
				<ul class="footer__links">
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'backlink-api']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Backlink API') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'backlink-api-comparison']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Backlink API Comparison') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/news/post/view', 'uri' => 'backlink-api-guide']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Backlink API Guide') ?></a>
					</li>
				</ul>
			</div>

			<div class="footer__item">
				<div class="footer__title">
					<span class="footer__top-text"><?= Yii::t('app/layout', 'Company') ?></span>
				</div>
				<ul class="footer__links">
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'about-us']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'About Us') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/affiliate/page', 'view' => 'affiliates']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Affiliate Program') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'partners']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Partner Programs') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'perks']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'User Perks') ?></a>
					</li>
					<li>
						<a href="<?= Url::to(['/page/default/page', 'view' => 'press']); ?>"
							class="footer__link"><?= Yii::t('app/layout', 'Press Room') ?></a>
					</li>
				</ul>
			</div>

			<div class="footer__item">
				<div class="footer__title">
					<span class="footer__top-text"><?= Yii::t('app/layout', 'Get in Touch') ?></span>
				</div>
				<ul class="footer__links footer__links_social">
					<li>
						<a target="_blank" href="https://help.link-assistant.com/hc/en-us"
							class="footer__link footer__link_social">
							<svg class="icon cc">
								<use xlink:href="#customer"></use>
							</svg>
							<span class="footer__social-text"><?= Yii::t('app/layout', 'Help & Training') ?></span>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.facebook.com/linkassistant"
							class="footer__link footer__link_social">
							<svg class="icon fb">
								<use xlink:href="#fb"></use>
							</svg>
							<span class="footer__social-text">Facebook</span>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.youtube.com/user/linkassistantvideos/"
							class="footer__link footer__link_social">
							<svg class="icon youtube">
								<use xlink:href="#youtube"></use>
							</svg>
							<span class="footer__social-text">YouTube</span>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://twitter.com/seopowersuite"
							class="footer__link footer__link_social">
							<svg class="icon twitter">
								<use xlink:href="#twitter"></use>
							</svg>
							<span class="footer__social-text">Twitter</span>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.LinkedIn.com/company/seopowersuite"
							class="footer__link footer__link_social">
							<svg class="icon LinkedIn">
								<use xlink:href="#LinkedIn"></use>
							</svg>
							<span class="footer__social-text">LinkedIn</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="footer__bottom">
		<div class="footer__copyright">
			<div>Copyright &copy; <?= date('Y') ?>,</div>
			<svg class="brand-logo">
				<use xlink:href="#brand-logo"></use>
			</svg>
			<span class="footer__sitename">Link-Assistant.Com</span>
			<div class="footer__text"> &mdash; <?= Yii::t('app/layout', 'Home of the best Internet Marketing tools') ?>
			</div>
		</div>
		<div class="footer__policy-links">
			<a href="<?= Url::to(['/page/default/page', 'view' => 'privacy-policy']); ?>"
				class="footer__link"><?= Yii::t('app/layout', 'Privacy Policy') ?></a>
			<a href="<?= Url::to(['/page/default/page', 'view' => 'copyright-policy']); ?>"
				class="footer__link"><?= Yii::t('app/layout', 'Copyright Policy') ?></a>
			<a href="<?= Url::to(['/page/default/page', 'view' => 'return-policy']); ?>"
				class="footer__link"><?= Yii::t('app/layout', 'Return Policy') ?></a>
			<a href="<?= Url::to(['/page/default/page', 'view' => 'terms-of-services']); ?>"
				class="footer__link"><?= Yii::t('app/layout', 'Terms of Services') ?></a>
			<a href="<?= Url::to(['/page/default/page', 'view' => 'sitemap']); ?>"
				class="footer__link"><?= Yii::t('app/layout', 'Sitemap') ?></a>
		</div>
	</div>
</div>

<svg width="0" height="0" class="hidden">
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="rt">
		<path fill-rule="evenodd" clip-rule="evenodd"
			d="M2.51406 25C1.125 25 0 23.8906 0 22.5281V2.46562C0 1.10312 1.125 0 2.51406 0H22.4797C23.8687 0 25 1.10312 25 2.46562V25H2.51406ZM21.875 5.68906C21.875 4.27031 20.7219 3.12344 19.3125 3.12344H12.8266C12.2578 3.12344 11.7562 3.42344 11.4859 3.875C11.3687 4.07031 11.2906 4.28437 11.2703 4.52031C11.2641 4.57656 11.2641 4.63125 11.2641 4.68125C11.2641 4.75625 11.2641 4.82656 11.2781 4.89531C11.3062 5.11875 11.3813 5.32656 11.5 5.50625C11.5625 5.61875 11.6172 5.69531 11.7078 5.77812L14.125 8.20156L15.2297 7.09687L13.0766 4.9375C12.9781 4.85469 13.0484 4.68125 13.1797 4.6875H19.3125C19.375 4.6875 19.4438 4.69531 19.5141 4.70781C19.9656 4.79844 20.3125 5.20156 20.3125 5.68906V11.8141C20.3188 11.9516 20.1453 12.0141 20.0547 11.9156L17.8953 9.76406L17.5344 9.40156C17.0547 8.88906 16.3125 8.68125 15.6188 8.93125L15.625 8.94375C15.1875 9.10469 14.8125 9.4375 14.5969 9.89688L12.1453 15.0906L12.1187 15.1453C12.0844 15.2234 12.0203 15.2781 11.9516 15.2984V15.3125C11.8047 15.3484 11.6594 15.2641 11.6031 15.1187L10.8609 12.8891C10.5344 11.8969 9.48594 11.3672 8.52813 11.7156V11.7297C8.09688 11.8875 7.72188 12.2156 7.5 12.6813L3.11875 21.2156L4.53437 21.875L8.88906 13.3766C8.92344 13.2984 8.99375 13.2437 9.0625 13.2219L9.05625 13.2078C9.20156 13.1734 9.35313 13.2578 9.40312 13.4031L10.1047 15.5141H10.1109L10.1453 15.6312C10.4797 16.625 11.5281 17.1531 12.4859 16.8047L12.4781 16.7984C12.9156 16.6328 13.2906 16.3062 13.5063 15.8406L15.9781 10.5984C16.0203 10.5141 16.0766 10.4516 16.1531 10.4234C16.25 10.4031 16.3547 10.4375 16.4234 10.5063H16.4312L17.2703 11.3469L19.2156 13.2922C19.3047 13.3828 19.375 13.4297 19.4859 13.5C19.6672 13.6109 19.875 13.6891 20.1047 13.7219C20.1734 13.7297 20.2437 13.7359 20.3125 13.7359C20.3687 13.7359 20.4234 13.7297 20.4797 13.7219C20.7078 13.7016 20.9297 13.625 21.1172 13.5078C21.5688 13.2359 21.875 12.7359 21.875 12.1734V5.68906Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="report">
		<path fill-rule="evenodd" clip-rule="evenodd"
			d="M25 2C25 0.895431 24.1046 0 23 0H2C0.895431 0 0 0.89543 0 2V23C0 24.1046 0.89543 25 2 25H23C24.1046 25 25 24.1046 25 23V2ZM11.3462 7C11.0275 7 10.7692 7.26863 10.7692 7.6V17.2231C10.7692 17.5417 10.5109 17.8 10.1923 17.8C9.87368 17.8 9.61539 17.5417 9.61539 17.2231V11.2C9.61539 10.8686 9.35709 10.6 9.03846 10.6H6.73077C6.41214 10.6 6.15385 10.8686 6.15385 11.2V17.2231C6.15385 17.5417 5.89555 17.8 5.57692 17.8C5.2583 17.8 5 18.0686 5 18.4C5 18.7314 5.2583 19 5.57692 19H19.4231C19.7417 19 20 18.7314 20 18.4C20 18.0686 19.7417 17.8 19.4231 17.8C19.1045 17.8 18.8462 17.5417 18.8462 17.2231V10C18.8462 9.66863 18.5879 9.4 18.2692 9.4H15.9615C15.6429 9.4 15.3846 9.66863 15.3846 10V17.2231C15.3846 17.5417 15.1263 17.8 14.8077 17.8C14.4891 17.8 14.2308 17.5417 14.2308 17.2231V7.6C14.2308 7.26863 13.9725 7 13.6538 7H11.3462Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="key-r">
		<path
			d="M6.80418 6.81588C6.51648 7.09626 6.34966 7.47792 6.33929 7.87952C6.33929 8.7297 7.02929 9.4197 7.87947 9.4197C8.28782 9.41929 8.67933 9.25689 8.96808 8.96814C9.25684 8.67939 9.41924 8.28787 9.41964 7.87952C9.40927 7.47792 9.24245 7.09626 8.95475 6.81588C8.66704 6.53551 8.28119 6.3786 7.87947 6.3786C7.47774 6.3786 7.09189 6.53551 6.80418 6.81588Z">
		</path>
		<path fill-rule="evenodd" clip-rule="evenodd"
			d="M25 2C25 0.895431 24.1046 0 23 0H2C0.895431 0 0 0.89543 0 2V23C0 24.1046 0.89543 25 2 25H23C24.1046 25 25 24.1046 25 23V2ZM20.7143 18.1474V20.2009C20.7143 20.3371 20.6602 20.4677 20.5639 20.564C20.4676 20.6603 20.3371 20.7143 20.2009 20.7143H18.1473C18.0305 20.7143 17.9171 20.6744 17.826 20.6012C17.7349 20.528 17.6715 20.4259 17.6462 20.3118L17.6421 20.2931C17.444 19.4005 16.6658 18.7558 15.7519 18.7274L14.9653 18.7029C14.8382 18.6989 14.7171 18.6478 14.6255 18.5596C14.5338 18.4714 14.4782 18.3523 14.4694 18.2254L14.4653 18.167C14.3911 17.1019 13.4934 16.2828 12.4259 16.3064L12.384 16.3074C12.2747 16.3099 12.1675 16.2775 12.078 16.2149C11.9884 16.1523 11.9211 16.0628 11.886 15.9593C11.5624 15.0065 10.496 14.5424 9.48984 14.5533C9.46666 14.5535 9.44326 14.5536 9.41964 14.5536C6.5888 14.5536 4.28571 12.2505 4.28572 9.4197C4.28572 6.58885 6.5888 4.28577 9.41964 4.28577C12.2505 4.28577 14.5536 6.58885 14.5536 9.4197C14.5536 9.51425 14.5468 9.62184 14.5355 9.73575C14.4731 10.3619 14.618 11.0001 15.0328 11.4732L20.587 17.8085C20.6691 17.903 20.7143 18.0231 20.7143 18.1474Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="la">
		<path fill-rule="evenodd" clip-rule="evenodd"
			d="M2.51406 25C1.125 25 0 23.8891 0 22.5281V2.46562C0 1.10469 1.125 0 2.51406 0H22.4797C23.8687 0 25 1.10469 25 2.46562V25H2.51406ZM3.125 19.3125C3.125 20.7297 4.27031 21.875 5.6875 21.875H19.2C19.7687 21.875 20.2687 21.5766 20.5406 21.1234C20.6516 20.9297 20.7266 20.7156 20.7547 20.4797C20.7625 20.4234 20.7625 20.375 20.7625 20.3203C20.7625 20.2437 20.7625 20.1734 20.7484 20.1047C20.7203 19.8828 20.6437 19.6734 20.525 19.4937C20.4641 19.3828 20.4078 19.3125 20.3172 19.2234L15.1656 14.0625H18.2297V12.5H15.0547C13.6453 12.5 12.4984 13.6453 12.4984 15.0625L12.5 18.2297H14.0625L14.0609 15.1672L18.95 20.0625C19.0469 20.1469 18.9781 20.3203 18.8453 20.3125H5.6875C5.13125 20.3125 4.6875 19.8687 4.6875 19.3125V10.9375H3.125V19.3125ZM21.8734 5.69531C21.8734 4.27812 20.7203 3.125 19.3031 3.125H5.79063C5.22188 3.125 4.72813 3.42969 4.45156 3.88125C4.34062 4.07656 4.26406 4.29219 4.23594 4.52656C4.22813 4.58437 4.22813 4.63125 4.22813 4.6875C4.22813 4.75781 4.23594 4.83281 4.24375 4.90312C4.27031 5.125 4.34688 5.33281 4.46563 5.51406C4.53438 5.625 4.58281 5.69531 4.67344 5.78437L9.82656 10.9375H6.77031V12.5H9.93594C11.3469 12.5 12.4984 11.3547 12.4984 9.94375L12.5 6.77188H10.9375L10.9359 9.83281L6.04219 4.94531C5.94375 4.86094 6.01406 4.68125 6.14531 4.6875H19.3031C19.8594 4.6875 20.3109 5.13906 20.3109 5.69531L20.3125 14.0625H21.875L21.8734 5.69531Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="seo-s">
		<path fill-rule="evenodd" clip-rule="evenodd"
			d="M2.51406 24.9983C1.125 24.9983 0 23.8889 0 22.528V2.46548C0 1.10454 1.125 -0.00170898 2.51406 -0.00170898H22.4797C23.8687 -0.00170898 25 1.10454 25 2.46548V24.9983H2.51406ZM20.0438 4.95454C17.6094 2.52017 13.6562 2.52017 11.2156 4.95454C9.73125 6.43735 9.14844 8.48423 9.475 10.4092L9.48906 10.4717L11.0281 10.1889L10.9937 9.97954C10.8062 8.58735 11.25 7.1311 12.3187 6.0561C14.1484 4.23267 17.1172 4.23267 18.9422 6.0561C20.7734 7.88735 20.7734 10.8467 18.9422 12.678C17.1734 14.4452 14.3297 14.5014 12.4984 12.8436L12.325 12.678L12.2766 12.6374C11.3891 11.742 9.94687 11.742 9.05937 12.6295L4.04531 16.5389C3.98906 16.5952 3.94063 16.6514 3.88438 16.7124L3.82969 16.7749C2.83125 18.0014 2.90625 19.8045 4.04531 20.9499C5.18906 22.0936 6.99844 22.1624 8.21875 21.1639L8.28906 21.1077C8.34375 21.0608 8.4 21.0045 8.4625 20.9499L11.8469 16.6092L10.7375 15.5061L7.35312 19.8467L7.11094 20.0483C6.50625 20.442 5.68125 20.3811 5.14687 19.8467C4.54375 19.2374 4.54375 18.253 5.14687 17.642L10.1609 13.7389C10.4391 13.453 10.8969 13.453 11.1734 13.7389L11.2219 13.7811L11.4516 14.003C13.9 16.2139 17.6859 16.1374 20.0438 13.7811C22.4859 11.3467 22.4797 7.38735 20.0438 4.95454ZM12.075 12.9264L12.0891 12.9827L12 13.0045L12.075 12.9264Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" id="wa">
		<path fill-rule="evenodd" clip-rule="evenodd"
			d="M2.51406 25C1.125 25 0 23.8891 0 22.5281V2.46562C0 1.10469 1.125 0 2.51406 0H22.4797C23.8687 0 25 1.10469 25 2.46562V25H2.51406ZM19.5312 3.125L12.2469 15.1328C12.1969 15.2641 12.0109 15.2563 11.9688 15.1328L9.32344 8.75L7.87812 9.34688L10.6703 16.0828C10.7109 16.1953 10.7672 16.2703 10.8359 16.375C10.9625 16.5562 11.1281 16.7 11.3219 16.8203C11.3781 16.8547 11.4484 16.8812 11.5109 16.9094C11.5578 16.9297 11.6141 16.9516 11.6703 16.9641C11.775 17 11.8922 17.0203 12.0031 17.0281C12.1219 17.0359 12.2328 17.0281 12.3438 17.0141C12.8641 16.9297 13.2469 16.6172 13.5516 16.0625L20.8438 3.94531L19.5312 3.125ZM20.3156 8.59688L20.3094 19.3125C20.3094 19.8687 19.8641 20.3125 19.3094 20.3125H5.69062C5.13438 20.3125 4.68437 19.8687 4.68437 19.3125V5.69375C4.68437 5.13906 5.13438 4.6875 5.69062 4.6875L16.4062 4.69375V3.13281L5.69062 3.125C4.275 3.125 3.12188 4.27813 3.12188 5.69375V19.3125C3.12188 20.7297 4.275 21.875 5.69062 21.875H19.3094C20.725 21.875 21.8719 20.7297 21.8719 19.3125L21.8781 8.59688H20.3156Z">
		</path>
	</symbol>

	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" id="customer">
		<path fill-rule="evenodd" clip-rule="evenodd"
			d="M2.77444 10.833C3.57164 13.1539 5.62951 14.8882 8.13017 15.2186C8.29395 14.9052 8.62198 14.6913 9.00005 14.6913C9.5419 14.6913 9.98104 15.1306 9.98104 15.6725C9.98104 16.2143 9.5418 16.6537 9.00005 16.6537C8.57764 16.6537 8.21763 16.3867 8.07947 16.0122C5.16099 15.6486 2.7722 13.5792 1.94114 10.8331H0.937877C0.422031 10.8331 0 10.411 0 9.89506V7.49132C0 6.97538 0.422031 6.55337 0.937877 6.55337H1.61021C2.53705 3.34564 5.49454 1 9.00005 1C12.5056 1 15.463 3.34564 16.3899 6.55318H17.0622C17.5781 6.55318 18.0001 6.97529 18.0001 7.49114V9.89487C18.0001 10.4108 17.5781 10.8329 17.0622 10.8329H15.2257C15.4561 10.162 15.5816 9.44217 15.5816 8.69301C15.5816 5.05746 12.6349 2.11028 9.00005 2.11028C5.36518 2.11028 2.41854 5.05756 2.41854 8.6931C2.41854 9.44227 2.54397 10.1621 2.77444 10.833Z">
		</path>
		<path fill-rule="evenodd" clip-rule="evenodd"
			d="M13.6873 11.4979L14.3766 14.0708V14.0709L11.8043 13.3815L11.7975 13.3855C11.7826 13.3945 11.7675 13.4035 11.7523 13.4123C11.7307 13.4249 11.709 13.4373 11.6872 13.4497L11.6351 13.4789C11.6144 13.4903 11.5935 13.5016 11.5727 13.5128C11.5539 13.5228 11.535 13.5328 11.5161 13.5427C11.4962 13.553 11.4761 13.5632 11.4561 13.5733C11.4364 13.5833 11.4166 13.5932 11.3966 13.6029L11.3415 13.6295L11.3415 13.6295C11.3198 13.6397 11.2981 13.6499 11.2763 13.6599C11.2575 13.6685 11.2386 13.677 11.2198 13.6854C11.1967 13.6957 11.1735 13.7058 11.1503 13.7158L11.102 13.7363C11.0777 13.7464 11.0533 13.7563 11.0288 13.7662L10.9769 13.7866C10.9512 13.7967 10.9256 13.8064 10.8998 13.816C10.308 14.0358 9.66801 14.1559 8.99979 14.1559C5.98338 14.1559 3.53809 11.7102 3.53809 8.69309C3.53809 5.67612 5.98347 3.23047 8.99998 3.23047C12.0165 3.23047 14.4618 5.67612 14.4618 8.69318C14.4618 8.73968 14.4611 8.78608 14.46 8.8323L14.4599 8.83417V8.83697C14.4587 8.88141 14.4569 8.92576 14.4548 8.97001L14.4544 8.97702C14.4521 9.02109 14.4492 9.06487 14.4461 9.10865L14.4455 9.11651C14.4423 9.15879 14.4385 9.20089 14.4343 9.2429L14.4328 9.25796C14.4286 9.29894 14.4239 9.33991 14.4188 9.38061L14.417 9.39501C14.4117 9.43599 14.406 9.47687 14.3999 9.51757L14.3979 9.53057C14.3916 9.57099 14.385 9.61121 14.3779 9.65126L14.3749 9.668C14.3681 9.70561 14.3609 9.74303 14.3534 9.78045L14.3479 9.80693C14.3405 9.84285 14.3327 9.87859 14.3246 9.91423L14.3184 9.94089C14.3102 9.97523 14.3019 10.0096 14.2932 10.0436L14.2854 10.0742C14.2766 10.1077 14.2676 10.1413 14.2582 10.1746L14.2494 10.2052C14.2403 10.237 14.2309 10.2686 14.2212 10.3001L14.2092 10.3386C14.1998 10.3684 14.1902 10.3981 14.1803 10.4276L14.1671 10.4663C14.1577 10.494 14.148 10.5216 14.1381 10.549L14.1211 10.5954C14.112 10.6197 14.1029 10.6438 14.0934 10.668C14.0861 10.687 14.0788 10.7059 14.0712 10.7247L14.0447 10.7894C14.0367 10.8087 14.0285 10.828 14.0203 10.8471C14.0107 10.8692 14.0012 10.8912 13.9914 10.9132C13.983 10.9321 13.9744 10.9511 13.9658 10.9699L13.9384 11.0285C13.928 11.0503 13.9175 11.0721 13.9069 11.0937C13.8981 11.1116 13.8893 11.1293 13.8804 11.1471C13.8686 11.1705 13.8566 11.1939 13.8444 11.2172L13.8195 11.2647C13.8069 11.2882 13.7941 11.3117 13.7812 11.335L13.761 11.3711C13.7464 11.397 13.7316 11.4229 13.7166 11.4485L13.6921 11.4898L13.6873 11.4979ZM7.441 8.69321C7.441 8.17035 7.0172 7.74646 6.49443 7.74646C5.97166 7.74646 5.54785 8.17035 5.54785 8.69321C5.54785 9.21608 5.97166 9.63996 6.49443 9.63996C7.0172 9.63996 7.441 9.21608 7.441 8.69321ZM12.4522 8.69321C12.4522 8.17035 12.0284 7.74646 11.5057 7.74646C10.9829 7.74646 10.5591 8.17035 10.5591 8.69321C10.5591 9.21608 10.9829 9.63996 11.5057 9.63996C12.0284 9.63996 12.4522 9.21608 12.4522 8.69321ZM9.94653 8.69321C9.94653 8.17035 9.52272 7.74646 8.99995 7.74646C8.47719 7.74646 8.05338 8.17035 8.05338 8.69321C8.05338 9.21608 8.47719 9.63996 8.99995 9.63996C9.52272 9.63996 9.94653 9.21608 9.94653 8.69321Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" id="fb">
		<path
			d="M15.8571 0H2.14286C0.96 0 0 0.96 0 2.14286V15.8571C0 17.04 0.96 18 2.14286 18H15.8571C17.04 18 18 17.04 18 15.8571V2.14286C18 0.96 17.04 0 15.8571 0ZM14.1429 6.42857H13.2857C12.3686 6.42857 12 6.64286 12 7.28571V8.57143H14.1429L13.7143 10.7143H12V17.1429H9.85714V10.7143H8.14286V8.57143H9.85714V7.28571C9.85714 5.57143 10.7143 4.28571 12.4286 4.28571C13.6714 4.28571 14.1429 4.71429 14.1429 4.71429V6.42857Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" id="forum">
		<path
			d="M15.75 4.5H14.25V11.25H4.5V12.75C4.5 13.1625 4.8375 13.5 5.25 13.5H13.5L16.5 16.5V5.25C16.5 4.8375 16.1625 4.5 15.75 4.5ZM12.75 9V2.25C12.75 1.8375 12.4125 1.5 12 1.5H2.25C1.8375 1.5 1.5 1.8375 1.5 2.25V12.75L4.5 9.75H12C12.4125 9.75 12.75 9.4125 12.75 9Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" id="LinkedIn">
		<path
			d="M13.3374 0C17.6616 0 18 0.3384 18 4.662V13.3662C18 17.6634 17.664 18 13.3662 18H4.6338C0.336 18 0 17.6634 0 13.3662V4.6338C0 0.336 0.336 0 4.6338 0H13.3374ZM5.8626 13.95V6.6276H3.5868V13.95H5.8626ZM4.7256 5.58C5.457 5.58 6.0516 4.9854 6.0516 4.2528C6.0516 3.5214 5.457 2.9268 4.7256 2.9268C3.9924 2.9268 3.3984 3.5208 3.3984 4.2528C3.3984 4.9848 3.9918 5.58 4.7256 5.58ZM14.4 13.95V9.9342C14.4 7.9626 13.974 6.4458 11.67 6.4458C10.563 6.4458 9.8208 7.053 9.5172 7.6284H9.486V6.6276H7.3026V13.95H9.5766V10.3272C9.5766 9.372 9.7584 8.4474 10.9428 8.4474C12.1098 8.4474 12.1254 9.54 12.1254 10.389V13.95H14.4Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" id="twitter">
		<path
			d="M18 3.73103C17.3378 4.02504 16.6262 4.22287 15.8788 4.31354C16.6399 3.85468 17.2279 3.13204 17.5027 2.26927C16.7883 2.69241 15.9969 3.00015 15.1562 3.16501C14.483 2.44787 13.524 2 12.4607 2C10.4219 2 8.76782 3.6541 8.76782 5.69287C8.76782 5.98138 8.80079 6.26439 8.86399 6.53366C5.79484 6.37979 3.07465 4.90704 1.25294 2.67318C0.934209 3.21997 0.752863 3.85468 0.752863 4.53335C0.752863 5.81377 1.40406 6.94306 2.39597 7.60525C1.78873 7.58602 1.21997 7.42116 0.722638 7.14364C0.722638 7.16013 0.722638 7.17387 0.722638 7.19035C0.722638 8.97909 1.99481 10.4711 3.68463 10.8118C3.37414 10.897 3.04992 10.9409 2.71195 10.9409C2.47291 10.9409 2.2421 10.9189 2.01679 10.875C2.48664 12.3395 3.84949 13.4111 5.46512 13.4386C4.20394 14.4305 2.61029 15.0185 0.879255 15.0185C0.579759 15.0185 0.288505 15.002 0 14.969C1.63212 16.0159 3.57472 16.6259 5.6602 16.6259C12.4524 16.6259 16.1673 10.9986 16.1673 6.12151C16.1673 5.9594 16.1646 5.80003 16.1563 5.64067C16.879 5.1241 17.5054 4.47291 18 3.73103Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" id="youtube">
		<path
			d="M9 1C6.102 1 2.3406 1.72611 2.3406 1.72611L2.33113 1.73693C1.01123 1.94802 0 3.0822 0 4.46154V8.61538V8.61674V12.7692V12.7706C0.00128801 13.4293 0.237372 14.0661 0.66586 14.5664C1.09435 15.0668 1.68717 15.398 2.33789 15.5006L2.3406 15.5047C2.3406 15.5047 6.102 16.2321 9 16.2321C11.898 16.2321 15.6594 15.5047 15.6594 15.5047L15.6608 15.5033C16.3122 15.4009 16.9057 15.0694 17.3345 14.5685C17.7633 14.0675 17.9993 13.43 18 12.7706V12.7692V8.61674V8.61538V4.46154C17.999 3.80255 17.7631 3.16551 17.3346 2.66487C16.9061 2.16423 16.3131 1.83281 15.6621 1.73017L15.6594 1.72611C15.6594 1.72611 11.898 1 9 1ZM6.92308 5.42969L12.4615 8.61538L6.92308 11.8011V5.42969Z">
		</path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17" id="brand-logo">
		<g clip-path="url(#clip0_7450_186662)">
			<path fill-rule="evenodd" clip-rule="evenodd"
				d="M0 6.54832V1.24335C0 0.580231 0.583333 0 1.25 0H6.54167C7.25 0 7.79167 0.538785 7.79167 1.24335V7.79167H1.25C0.583333 7.79167 0 7.21144 0 6.54832Z"
				fill="#FC4304" />
			<path fill-rule="evenodd" clip-rule="evenodd"
				d="M17 6.54832V1.24335C17 0.580231 16.4167 0 15.75 0H10.4584C9.75004 0 9.20837 0.538785 9.20837 1.24335V7.79167H15.75C16.4167 7.79167 17 7.21144 17 6.54832Z"
				fill="#FF8800" />
			<path fill-rule="evenodd" clip-rule="evenodd"
				d="M3.50713 9.20801C2.76999 9.20801 2.125 9.81183 2.125 10.555V13.5277C2.125 14.2708 2.72392 14.8747 3.50713 14.8747H6.40961C7.14675 14.8747 7.79174 14.2708 7.79174 13.5277V9.20801H3.50713Z"
				fill="#2C86D5" />
			<path fill-rule="evenodd" clip-rule="evenodd"
				d="M0.518293 14.875C0.24187 14.875 0 15.1014 0 15.3801V16.4949C0 16.7736 0.224594 17 0.518293 17H1.60671C1.88313 17 2.125 16.7736 2.125 16.4949V14.875H0.518293Z"
				fill="#2C86D5" />
			<path fill-rule="evenodd" clip-rule="evenodd"
				d="M17 10.4514V15.7563C17 16.4194 16.4167 16.9997 15.75 16.9997H10.4584C9.75004 16.9997 9.20837 16.4609 9.20837 15.7563V9.20801H15.75C16.4167 9.20801 17 9.74679 17 10.4514Z"
				fill="#6DBC00" />
		</g>
		<defs>
			<clipPath id="clip0_7450_186662">
				<rect width="17" height="17" fill="white" />
			</clipPath>
		</defs>
	</symbol>
</svg>