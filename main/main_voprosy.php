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
<div class="question">
    <div class="container">
        <div class="contacts__ttl-block">
            <div class="contacts__ttl-item">
                <div class="contacts__ttl-title">
                    <h2 class="news__title">Найди ответ
                        <span>H</span>
                        <span class="news__title-sub">на свой вопрос</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="question-wrapper">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="question-block">
                <div class="question-block-content">
                    <input type="checkbox" id="hd-1" class="hide"/>
                    <label for="hd-1"><?=$arItem["NAME"]?></label>
                    <div>
                        <p class="question-block-content__name">Ответ</p>
                        <p class="question-block-content__desc"><?=$arItem["PROPERTIES"]["ANSWER"]["VALUE"]["TEXT"]?></p>
                    </div>
                </div>
            </div><!--
		  -->
            <?endforeach;?>
        </div>
    </div>
</div>