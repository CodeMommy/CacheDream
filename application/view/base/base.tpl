{assign var="baseKeyword" value="Mirrors,CacheDream"}
{assign var="baseDescription" value="CacheDream is an open source project that provide mirrors service for developers."}
<!DOCTYPE html>
<html>
<head>
    <title>{$title}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeMommy.com">
    <meta name="keywords" content="{$keywords}{$baseKeyword}">
    <meta name="description" content="{$description}{$baseDescription}">
    {block name="head"}{/block}
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$static}/style/theme.css">
    {block name="style"}{/block}
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="{$static}/icon/favicon.ico">
</head>
<body>
{include file="./nav.tpl"}
{block name="body"}{/block}
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
{block name="script"}{/block}
{include file="./statistics.tpl"}
</body>
</html>