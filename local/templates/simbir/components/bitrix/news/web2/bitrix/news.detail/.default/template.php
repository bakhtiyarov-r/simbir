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
<div class="blog">			
	<div class="blog__img">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
			<img
				class="detail_picture"
				border="0"
				src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
				width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
				height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
				alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
				title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
				/>
		<?endif?>
	</div>
	<div class="blog__content">
		<article class="blog__text">
			<?if(strlen($arResult["DETAIL_TEXT"])>0):?>
				<?echo $arResult["DETAIL_TEXT"];?>
			<?endif;?>
		</article>
		<aside class="blog__author">
			<div class="man man_column">
					<div class="man__photo"><img src="/local/templates/simbir/img/3c16d322f249ec931301f98e93bc3928.jpg" alt=""></div>
					<div class="man__bio man__bio_ml0">
						<div class="man__name man__name_black">Вагиз Исхаков</div>
						<a href="mailto:ishakov.vagiz@simbirsoft.com" class="man__email">ishakov.vagiz@simbirsoft.com</a>
					</div>
				</div>
		</aside>
	</div>
	<div class="container">
		<div class="blog__tags tags">
			<div class="tags__title">Теги:</div>
			<div class="tags__list">
				<div class="tags__item">
					тег
				</div>
			</div>
		</div>
		<div class="blog__soc soc">
			<span class="soc__title">Поделиться:</span>
			<a class="soc__icon soc__icon_fb" href="https://www.facebook.com/sharer/sharer.php?u=http://mobile.simbirsoft.ru/blog/kak-za-mesyats-vernut-k-zhizni-prilozhenie-posle-neudachnoy-razrabotki/" target="_blank">
	        	<svg width="24px" height="24px" viewBox="0 0 24 24">
	            	<path d="M0,12 C0,5.37258267 5.37258267,0 12,0 C18.6274173,0 24,5.37258267 24,12 C24,18.6274173 18.6274173,24 12,24 C5.37258267,24 0,18.6274173 0,12 Z M12.8507775,18.6557384 L12.8507775,12.1271048 L14.6529659,12.1271048 L14.8917948,9.87730153 L12.8507775,9.87730153 L12.8538395,8.75125333 C12.8538395,8.16446999 12.9095917,7.85005807 13.7523821,7.85005807 L14.8790369,7.85005807 L14.8790369,5.6 L13.0765933,5.6 C10.9115687,5.6 10.1495362,6.69139664 10.1495362,8.52678259 L10.1495362,9.87755632 L8.8,9.87755632 L8.8,12.1273596 L10.1495362,12.1273596 L10.1495362,18.6557384 L12.8507775,18.6557384 Z"></path>
	        	</svg>
	        </a>
		</div>
	</div>
	


	
</div>
