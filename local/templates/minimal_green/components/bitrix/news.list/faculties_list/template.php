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

<?php if (!empty($arResult["ITEMS"])) : ?>
    <table>
        <tr>
            <th>Факультеты</th>
            <th>Преподаватели</th>
        </tr>
        <?php foreach($arResult["ITEMS"] as $arItem): ?>
            <tr>
                <td><?php echo $arItem["NAME"]; ?></td>
                <td><?php echo implode('</br> ',$arItem["DISPLAY_PROPERTIES"]["teachers"]["DISPLAY_VALUE"]); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

