<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<nav class="nx-up-menu-outer" itemscope itemtype="https://www.schema.org/SiteNavigationElement">
<ul class="nx-up-menu" itemscope itemtype="http://schema.org/ItemList">
<?$previousLevel = 0;
foreach($arResult as $arItem):?>

    <?if ($arItem['PERMISSION'] > 'D'):?>
        <li temprop="itemListElement"
            itemscope itemtype="http://schema.org/ItemList"
            class="root <?if($arItem['SELECTED']):?> selected<?endif?><?if($arItem['PARAMS']['class']):?> <?=$arItem['PARAMS']['class']?><?endif?>"
        >
            <a itemprop="url" href="<?=$arItem['LINK']?>"
               <?if($arItem['PARAMS']['target']):?>target="<?=$arItem['PARAMS']['target']?>"<?endif?>
               <?if($arItem['PARAMS']['nofollow']):?>rel="nofollow"<?endif?>
            >
                <?if($arItem['PARAMS']['noindex']):?><!--noindex--><?endif?>
                    <?=$arItem['TEXT']?>
                <?if($arItem['PARAMS']['noindex']):?><!--/noindex--><?endif?>
            </a>
        </li>
    <?endif?>

<?endforeach?>
</ul>
</nav>
<?endif?>