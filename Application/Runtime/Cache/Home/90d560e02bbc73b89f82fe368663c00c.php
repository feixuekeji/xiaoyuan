<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello MUI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!--标准mui.css-->
    <link rel="stylesheet" href="/wx/Public/mui/css/mui.min.css">
    <!--App自定义的css-->
    <link rel="stylesheet" type="text/css" href="/wx/Public/mui/css/app.css" />
    <style>
        h5 {
            margin: 5px 7px;
        }
    </style>
</head>

<body>
<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">add</h1>
</header>
<div class="mui-content">
    <div class="mui-content-padded" style="margin: 5px;">
        <form class="mui-input-group" action="/wx/Find/addFind">
            <div class="mui-input-row">
                <label>卡号</label>
                <input type="number" class="mui-input-clear" name="card_num" placeholder="带清除按钮的输入框">
            </div>
            <div class="mui-input-row">
                <label>姓名</label>
                <input type="text" class="mui-input-clear" name="find_name" placeholder="带清除按钮的输入框">
            </div>
            <div class="mui-input-row">
                <label>Input</label>
                <input type="text" class="mui-input-clear" placeholder="带清除按钮的输入框">
            </div>
            <div class="mui-input-row" style="margin: 10px 5px;">
                <textarea id="textarea" rows="5" placeholder="多行文本框"></textarea>
            </div>

            <div class="mui-button-row">
                <button type="submit" class="mui-btn mui-btn-primary">确认</button>&nbsp;&nbsp;
                <button type="button" class="mui-btn mui-btn-danger" onclick="return false;">取消</button>
            </div>
        </form>

    </div>
</div>
<script src="../js/mui.min.js"></script>
<script>
    mui.init({
        swipeBack: true //启用右滑关闭功能
    });
    //语音识别完成事件
    document.getElementById("search").addEventListener('recognized', function(e) {
        console.log(e.detail.value);
    });
</script>
</body>

</html>