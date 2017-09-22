<?php

use SteelyWing\Chinese\Chinese;

require_once '../Chinese.php';

$chinese = new Chinese();

// 转成简体中文
echo $chinese->to(Chinese::CHS, "轉成簡體中文\n");

// 轉成繁體中文
echo $chinese->to(Chinese::CHT, "转成繁体中文\n");
