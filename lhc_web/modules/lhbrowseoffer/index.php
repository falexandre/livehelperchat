<?php

$tpl = erLhcoreClassTemplate::getInstance( 'lhbrowseoffer/index.tpl.php');

$Result['content'] = $tpl->fetch();
$Result['path'] = array(array('title' => erTranslationClassLhTranslation::getInstance()->getTranslation('browseoffer/index','Browse offers')));

?>