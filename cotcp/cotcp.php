<?php

defined('COT_CODE') or die('Wrong URL');

// redefine resource strings before loading the theme
$R['input_textarea_field_html'] = '<textarea class="form-control exfldhtml" name="{$name}" rows="3" cols="{$cols}"{$attrs}>{$value}</textarea>{$error}';
// DATES
$R['input_date'] = '<div class="row g-2">
    <div class="col-2">{$day}</div>
    <div class="col-3">{$month}</div>
    <div class="col-2">{$year}</div>
    <div class="col-2">{$hour}</div>
    <div class="col-1 text-center">:</div>
    <div class="col-2">{$minute}</div>
</div>';
$R['input_date_short'] = '<div class="row g-2">
    <div class="col-4">{$day}</div>
    <div class="col-4">{$month}</div>
    <div class="col-4">{$year}</div>
</div>';
// connect and load the necessary files
require_once Cot::$cfg['themes_dir'] . '/admin/' . Cot::$cfg['admintheme'] . '/' . Cot::$cfg['admintheme'] . '.rc.php';
require_once Cot::$cfg['themes_dir'] . '/admin/' . Cot::$cfg['admintheme'] . '/' . Cot::$cfg['admintheme'] . '.resources.php';

