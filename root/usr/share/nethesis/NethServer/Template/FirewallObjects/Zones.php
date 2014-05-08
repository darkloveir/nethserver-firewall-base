<?php

if ($view->getModule()->getIdentifier() === 'create') {
    $headerTemplate = $T('zone_create_header');
} else {
    $headerTemplate = $T('zone_update_header');
}

echo $view->header('name')->setAttribute('template', $headerTemplate);

echo $view->panel()
    ->insert($view->textInput('name', ($view->getModule()->getIdentifier() == 'update' ? $view::STATE_READONLY : 0)))
    ->insert($view->textInput('Network')->setAttribute('placeholder', '192.168.100.0/24'))
    ->insert($view->textInput('Description'));

echo $view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_CANCEL);
