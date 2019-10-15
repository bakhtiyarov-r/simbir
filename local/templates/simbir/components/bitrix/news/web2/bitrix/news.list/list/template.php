<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(count($arResult["ITEMS"])>0):?>
	<div class="news">
		<div class="container">
			<div class="news__list">
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
					<div class="news__item novelty">
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="novelty__img"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
						<div class="novelty__descr">
							<a href="" class="novelty__tag">UX</a>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="novelty__title"><?=$arItem["NAME"]?></a>
						</div>
					</div>
				<?endforeach;?>
			</div>
		</div>
	</div>
<?endif?>
