<?php if (stripos(Yii::$app->request->getUrl(), '/sample-seo-reports') === 0 || stripos(Yii::$app->request->getUrl(), '/seo-workflow.html') === 0 ) { ?>
    <?= $this->render('_footer3'); ?>
<?php } elseif (stripos(Yii::$app->request->getUrl(), '/linkassistant') === 0 || 
stripos(Yii::$app->request->getUrl(), '/partners') === 0 || 
stripos(Yii::$app->request->getUrl(), '/seo-workflow') === 0 || 
stripos(Yii::$app->request->getUrl(), '/user-reviews') === 0 || 
stripos(Yii::$app->request->getUrl(), '/buzzbundle') === 0 ||
stripos(Yii::$app->request->getUrl(), '/learning-hub') === 0 || 
stripos(Yii::$app->request->getUrl(), '/press') === 0 || 
stripos(Yii::$app->request->getUrl(), '/translation') === 0 || 
stripos(Yii::$app->request->getUrl(), '/extras') === 0 || 
stripos(Yii::$app->request->getUrl(), '/seo-reports') === 0) { ?>
    <?= $this->render('_footer2'); ?>
<?php } elseif (stripos(Yii::$app->request->getUrl(), '/help') === 0) { ?>
    <?= $this->render('_footer4'); ?>
<?php  } else { ?>
    <?= $this->render('_footer1'); ?>
<?php } ?>

