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
$this->setFrameMode(true);?>
<div class="header__search-block">
    <div class="container">
        <form action="<?=$arResult["FORM_ACTION"]?>">
            <div class="header__search-wrapper">
                <?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
                    "bitrix:search.suggest.input",
                    "",
                    array(
                        "NAME" => "q",
                        "VALUE" => "",
                        "CLASS" => "header__search-field",
                        "PLACEHOLDER" => "Поиск",
                        "INPUT_SIZE" => 15,
                        "DROPDOWN_SIZE" => 10,
                    ),
                    $component, array("HIDE_ICONS" => "Y")
                );?><?else:?><input type="text" name="q" class="header__search-field" placeholder="Поиск" value="" size="15" maxlength="50" /><?endif;?>
                <!--<input type="text" class="header__search-field" placeholder="Поиск">-->
                <button type="submit" class="header__search-btn">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.42 14.573L12.98 11.136C12.9224 11.0927 12.884 11.0288 12.8728 10.9577C12.8616 10.8865 12.8786 10.8139 12.92 10.755C13.6381 9.63526 14.0134 8.33014 14 7C14 5.61553 13.5895 4.26215 12.8203 3.11101C12.0511 1.95986 10.9579 1.06266 9.67882 0.532851C8.39974 0.00303721 6.99226 -0.135592 5.63439 0.134505C4.27652 0.404601 3.02925 1.07129 2.05028 2.05026C1.07132 3.02923 0.404609 4.2765 0.134513 5.63437C-0.135584 6.99223 0.00301462 8.3997 0.532828 9.67879C1.06264 10.9579 1.95993 12.0511 3.11108 12.8203C4.26222 13.5895 5.61552 14 6.99999 14C8.32863 14.0128 9.63205 13.6371 10.75 12.919C10.8103 12.8818 10.8819 12.8677 10.9518 12.8793C11.0216 12.8909 11.085 12.9274 11.13 12.982L14.5701 16.418C14.6273 16.4785 14.6963 16.5266 14.7728 16.5595C14.8493 16.5924 14.9317 16.6094 15.015 16.6094C15.0983 16.6094 15.1807 16.5924 15.2572 16.5595C15.3337 16.5266 15.4027 16.4785 15.46 16.418L16.35 15.528C16.4696 15.4011 16.5418 15.2369 16.5546 15.0629C16.5673 14.889 16.5199 14.716 16.42 14.573ZM6.99999 11.519C6.11866 11.52 5.25683 11.2595 4.52355 10.7706C3.79027 10.2817 3.21856 9.58628 2.88061 8.77232C2.54265 7.95836 2.45366 7.06247 2.62499 6.19795C2.79632 5.33344 3.22029 4.53916 3.84313 3.91562C4.46597 3.29207 5.25969 2.86728 6.12401 2.69498C6.98834 2.52267 7.88439 2.6106 8.69872 2.94765C9.51306 3.28469 10.2091 3.85569 10.6988 4.58842C11.1886 5.32115 11.4501 6.18268 11.4501 7.06401C11.4487 8.24428 10.9796 9.37589 10.1455 10.2109C9.31139 11.046 8.18026 11.5164 6.99999 11.519Z" fill="#7F5C93"/>
                    </svg> Найти</button>
                <div class="header__search-close">
                    <span></span><span></span>
                </div>
                <!-- <button class="header__search-close"></button> -->
            </div>
        </form>
    </div>
</div>
