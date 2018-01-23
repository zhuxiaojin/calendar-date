<?php
require __DIR__ . '/../vendor/autoload.php';
/**
 * ${NAME}
 * @author 朱晓进
 * @email qhj1989@qq.com
 * 2018-1-23
 */
$formatDate = new \Calendar\FormatDate();
$date=$formatDate->convertSolarToLunar(date('Y'),date('m'),date('d'));
var_dump($date);