<?php

if(!class_exists('HaddowG\MetaMaterial\Metamaterial')) {
    require_once 'vendor/metamaterial/MM_Loop.php';
    require_once 'vendor/metamaterial/MetaMaterial.php';
}

if(!class_exists('HaddowG\MetaMaterial\MM_Metabox')) {
    require_once 'vendor/metamaterial/MM_Metabox.php';
}

if(!class_exists('HaddowG\MetaMaterial\MM_MediaAccess')){
    require_once 'vendor/metamaterial/MM_MediaAccess.php';
}

use HaddowG\MetaMaterial\MM_Metabox;
use HaddowG\MetaMaterial\MM_MediaAccess;


MM_Metabox::getInstance('study_results', array(
    'title'=> 'Study Results',
    'include_template'=>'template-study-results.php',
    'context'=> 'after_editor',
    'hide_title' => true,
    'hide_screen_option' => true,
    'lock' =>true,
    'view' => MM_Metabox::VIEW_ALWAYS_OPEN,
    'mode' => HaddowG\MetaMaterial\Metamaterial::STORAGE_MODE_EXTRACT,
    'template'=> locate_template('metaboxes/study_results.php',false,false)
));
