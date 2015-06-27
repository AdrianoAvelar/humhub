<?php

use humhub\widgets\TopMenuRightStack;
use humhub\core\search\Events;
use humhub\components\console\Application;

Yii::$app->moduleManager->register(array(
    'isCoreModule' => true,
    'id' => 'search',
    'class' => \humhub\core\search\Module::className(),
    'events' => array(
        array('class' => TopMenuRightStack::className(), 'event' => TopMenuRightStack::EVENT_INIT, 'callback' => array(Events::className(), 'onTopMenuRightInit')),
        array('class' => Application::className(), 'event' => Application::EVENT_ON_INIT, 'callback' => array(Events::className(), 'onConsoleApplicationInit')),
        //array('class' => 'Comment', 'event' => 'onAfterSave', 'callback' => array('SearchModuleEvents', 'onAfterSaveComment')),
    ),
));
?>