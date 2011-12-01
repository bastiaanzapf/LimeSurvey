<div id="translationloading" style="width: 100%; font-weight: bold; color: #000; text-align: center;"><br /><?php echo $clang->gT("Loading translations");?><br /><br /></div>

<form name='translateform' method='post' action='<?php echo $this->createUrl("admin/translate/surveyid/$surveyid/lang/$tolang");?>' id='translateform' >
<input type='hidden' name='sid' value='<?php echo $surveyid;?>' />
<input type='hidden' name='action' value='translate' />
<input type='hidden' name='actionvalue' value='translateSave' />
<input type='hidden' name='tolang' value='<?php echo $tolang;?>' />
<input type='hidden' name='baselang' value='<?php echo $baselang;?>' />
<input type='hidden' name='checksessionbypost' value='<?php echo Yii::app()->session['checksessionpost'];?>' />

<script type="text/javascript">
    sGoogleApiError = "<?php echo $clang->gT("There was an error using the Google API.");?>";
    sDetailedError  = "<?php echo $clang->gT("Detailed Error");?>";
</script>

<div id="translationtabs" style="display: none;" >
<ul>
<?php foreach($tab_names as $type) {
	$amTypeOptions = translate::setupTranslateFields($surveyid, $type, $tolang, $baselang); ?>
    <li><a href="#tab-<?php echo $type;?>"><span><?php echo $amTypeOptions["description"];?></span></a></li>
<?php } ?>
</ul>