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
<div class="main-uslugi">
    <div class="container">
        <div class="main-uslugi-wrapper" style="display:flex; flex">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="main-uslugi-block">
                <div class="main-uslugi-block__content" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
                    <div class="main-uslugi-block__content__bottom">
                        <p class="main-uslugi-block__content__name"><?=$arItem["NAME"]?></p>
                        <p class="main-uslugi-block__content__desc">
                            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                <?echo $arItem["PREVIEW_TEXT"];?>
                            <?endif;?>
                        </p>
                        <div class="main-uslugi-block__content__bottom__text">
                            <div class="main-uslugi-block__content__bottom__links">
                                <a href="#">Статьи<span>29</span></a>
                                <a href="#">Сервисы<span>29</span></a>
                                <a href="#">Вопросы<span>29</span></a>
                                <a href="#">Проверь себя<span>29</span></a>
                            </div>
                            <a href="/prover-sebya/<?=$arItem["DETAIL_PAGE_URL"]?>" class="btn-uslugi">Проверь себя</a>
                        </div>
                    </div>
                    <a href="/stati/<?=$arItem["DETAIL_PAGE_URL"]?>" class="btn-more">Подробнее <img src="/img/btn-arrow.svg" alt=""></a>
                </div>
            </div>
        <?endforeach;?>
        </div>
    </div>
</div>
