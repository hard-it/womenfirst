<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="main-banner-slider__one">
    <div class="banner-slider__holder owl-carousel owl-theme" id="main-banner-carousel">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="banner-slider__item banner-slider__item--expert" style="background-image: url('/img/banner-main-2.png')">
            <div class="container">
                <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                    <?echo $arItem["PREVIEW_TEXT"];?>
                <?endif;?>
            </div>
        </div>
    <? endforeach; ?>
    </div>
</div>
