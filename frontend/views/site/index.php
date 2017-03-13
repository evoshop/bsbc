<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';



$this->registerCss(<<<CSS

CSS
);
?>

<script type="text/html" id="tpl_home">
<div class="page">
    <div class="page__hd">
	    <h1 class="page__title center">
            <img src="./images/logo.png" alt="WeUI" width="50%" />
        </h1>
        <p class="page__desc">百事百查 是一套同微信原生视觉体验一致的基础样式库，由微信官方设计团队为微信内网页和微信小程序量身设计，令用户的使用感知更加统一。</p>
    </div>
    <div class="weui-grids">
        <a href="javascript:;" class="weui-grid">
            <div class="weui-grid__icon">
                <img src="./images/icon_tabbar.png" alt="">
            </div>
            <p class="weui-grid__label">Grid</p>
        </a>
        <a href="javascript:;" class="weui-grid">
            <div class="weui-grid__icon">
                <img src="./images/icon_tabbar.png" alt="">
            </div>
            <p class="weui-grid__label">Grid</p>
        </a>
        <a href="javascript:;" class="weui-grid">
            <div class="weui-grid__icon">
                <img src="./images/icon_tabbar.png" alt="">
            </div>
            <p class="weui-grid__label">Grid</p>
        </a>
        <a href="javascript:;" class="weui-grid">
            <div class="weui-grid__icon">
                <img src="./images/icon_tabbar.png" alt="">
            </div>
            <p class="weui-grid__label">Grid</p>
        </a>
        <a href="javascript:;" class="weui-grid">
            <div class="weui-grid__icon">
                <img src="./images/icon_tabbar.png" alt="">
            </div>
            <p class="weui-grid__label">Grid</p>
        </a>
        <a href="javascript:;" class="weui-grid">
            <div class="weui-grid__icon">
                <img src="./images/icon_tabbar.png" alt="">
            </div>
            <p class="weui-grid__label">Grid</p>
        </a>
        <a href="javascript:;" class="weui-grid">
            <div class="weui-grid__icon">
                <img src="./images/icon_tabbar.png" alt="">
            </div>
            <p class="weui-grid__label">Grid</p>
        </a>
        <a href="javascript:;" class="weui-grid">
            <div class="weui-grid__icon">
                <img src="./images/icon_tabbar.png" alt="">
            </div>
            <p class="weui-grid__label">Grid</p>
        </a>
        <a href="javascript:;" class="weui-grid">
            <div class="weui-grid__icon">
                <img src="./images/icon_tabbar.png" alt="">
            </div>
            <p class="weui-grid__label">Grid</p>
        </a>
    </div>
    <div class="weui-tabbar">
        <a href="javascript:;" class="weui-tabbar__item weui-bar__item_on">
            <span style="display: inline-block;position: relative;">
                <img src="./images/icon_tabbar.png" alt="" class="weui-tabbar__icon">
                <span class="weui-badge" style="position: absolute;top: -2px;right: -13px;">8</span>
            </span>
            <p class="weui-tabbar__label">微信</p>
        </a>
        <a href="javascript:;" class="weui-tabbar__item">
            <img src="./images/icon_tabbar.png" alt="" class="weui-tabbar__icon">
            <p class="weui-tabbar__label">通讯录</p>
        </a>
        <a href="javascript:;" class="weui-tabbar__item">
            <span style="display: inline-block;position: relative;">
                <img src="./images/icon_tabbar.png" alt="" class="weui-tabbar__icon">
                <span class="weui-badge weui-badge_dot" style="position: absolute;top: 0;right: -6px;"></span>
            </span>
            <p class="weui-tabbar__label">发现</p>
        </a>
        <a href="javascript:;" class="weui-tabbar__item">
            <img src="./images/icon_tabbar.png" alt="" class="weui-tabbar__icon">
            <p class="weui-tabbar__label">我</p>
        </a>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $('.weui-tabbar__item').on('click', function () {
            $(this).addClass('weui-bar__item_on').siblings('.weui-bar__item_on').removeClass('weui-bar__item_on');
        });
    });
</script>
</script>












