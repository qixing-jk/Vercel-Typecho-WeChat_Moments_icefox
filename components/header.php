<?php

if (!defined('__TYPECHO_ROOT_DIR__'))
    exit;

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/usr/themes/icefox/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/usr/themes/icefox/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/usr/themes/icefox/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/usr/themes/icefox/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/usr/themes/icefox/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title><?php echo $this->options->title ?></title>
    <title>
        <?php echo $this->options->title ?>
    </title>
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/viewer.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('uno.css'); ?>">
    <style>
        <?php echo $this->options->css; ?>
    </style>
    <script type="text/javascript" src="https://cdn.staticfile.org/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/axios.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/viewer.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/scrollload.min.js'); ?>"></script>
    <script defer src="<?php $this->options->themeUrl('assets/alpine.3.13.3.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/icefox.js'); ?>"></script>
    <script type="text/javascript">
        <?php echo $this->options->script; ?>
    </script>
</head>

<body :class="{'dark':darkMode}" x-data="{darkMode:false}">
    <div class="bg-[#f0f0f0] dark:bg-[#262626]">