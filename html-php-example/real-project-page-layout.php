<?php

$this->beginPage();
?>
<!DOCTYPE html>
<?php if ($this->faqLayout): ?>
<html lang="<?= Yii::$app->language ?>" itemscope itemtype="https://schema.org/FAQPage">
<?php else: ?>
<html lang="<?= Yii::$app->language ?>">
<?php endif; ?>

<head>
	<?= $this->render('_head'); ?>
	<?php $this->head(); ?>
</head>

<body>
	<?php $this->beginBody(); ?>

	<div class="top-wrapper">
		<?= $this->render('//layouts/common-theme/_header_menu_main'); ?>
	</div>
	<div class="global-wrapper">
		<?= $content; ?>
	</div>

	<?= $this->getBlock('content_footer'); ?>

	<?= $this->render('//layouts/common-theme/_footer'); ?>

	<?php $this->endBody(); ?>
</body>

</html>
<?php $this->endPage(); ?>