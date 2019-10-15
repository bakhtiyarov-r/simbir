<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");
?>

<main class="content">
    <header class="container">
        <div class="title ">
            Блог
        </div>
    </header>
    

<?$APPLICATION->IncludeComponent("bitrix:news.list","slider",Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "Y",
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "2",
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => Array("ID"),
        "PROPERTY_CODE" => Array("DESCRIPTION"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "Y",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "Y",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    )
);?>
    
<?$APPLICATION->IncludeComponent("bitrix:news","web2",Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "SEF_MODE" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "2",
        "NEWS_COUNT" => "20",
        "USE_SEARCH" => "N",
        "USE_RSS" => "N",
        "USE_RATING" => "N",
        "USE_CATEGORIES" => "Y",
        "USE_REVIEW" => "N",
        "USE_FILTER" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "CHECK_DATES" => "Y",
        "PREVIEW_TRUNCATE_LEN" => "",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "LIST_FIELD_CODE" => Array(),
        "LIST_PROPERTY_CODE" => Array(),
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "DISPLAY_NAME" => "Y",
        "META_KEYWORDS" => "-",
        "META_DESCRIPTION" => "-",
        "BROWSER_TITLE" => "-",
        "DETAIL_SET_CANONICAL_URL" => "Y",
        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_FIELD_CODE" => Array(),
        "DETAIL_PROPERTY_CODE" => Array(),
        "DETAIL_DISPLAY_TOP_PAGER" => "Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
        "DETAIL_PAGER_TITLE" => "Страница",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_SHOW_ALL" => "Y",
        "STRICT_SECTION_CHECK" => "Y",
        "SET_TITLE" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "SET_LAST_MODIFIED" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "USE_PERMISSIONS" => "N",
        "GROUP_PERMISSIONS" => Array("1"),
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "FILTER_NAME" => "",
        "FILTER_FIELD_CODE" => Array(),
        "FILTER_PROPERTY_CODE" => Array(),
        "NUM_NEWS" => "20",
        "NUM_DAYS" => "30",
        "YANDEX" => "Y",
        "MAX_VOTE" => "5",
        "VOTE_NAMES" => Array("0", "1", "2", "3", "4"),
        "CATEGORY_IBLOCK" => Array(),
        "CATEGORY_CODE" => "CATEGORY",
        "CATEGORY_ITEMS_COUNT" => "5",
        "MESSAGES_PER_PAGE" => "10",
        "USE_CAPTCHA" => "Y",
        "REVIEW_AJAX_POST" => "Y",
        "PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
        "FORUM_ID" => "1",
        "URL_TEMPLATES_READ" => "",
        "SHOW_LINK_TO_FORUM" => "Y",
        "POST_FIRST_MESSAGE" => "Y",
        "SEF_FOLDER" => "/",
        "SEF_URL_TEMPLATES" => Array(
            "detail" => "blog/#ELEMENT_CODE#/",
            "news" => "blog/",
            "section" => "blog/",
        ),
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "VARIABLE_ALIASES" => Array(
            "detail" => Array(),
            "news" => Array(),
            "section" => Array(),
        ),
        "USE_SHARE" => "Y",
        "SHARE_HIDE" => "N",
        "SHARE_TEMPLATE" => "",
        "SHARE_HANDLERS" => array("delicious", "facebook", "lj", "twitter"),
        "SHARE_SHORTEN_URL_LOGIN" => "",
        "SHARE_SHORTEN_URL_KEY" => "",
        )
);?>

    <div id="callback" class="callback">
        <div class="container">
            <div class="callback__form ">
                <div class="title title_center">РАССКАЖИТЕ НАМ ВАШУ ИДЕЮ</div>
            
                <form action="" method="post" autocomplete="off" class="c-form">
                    
                    <input name="name" type="text" placeholder="Имя" class="c-form__input" maxlength="255">
                    <input name="company" type="text" placeholder="Название компании" class="c-form__input" maxlength="255">
                    <input name="phone" id="phone" type="tel" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="Телефон" class="c-form__input" maxlength="16">
                    <input name="email" type="email" placeholder="E-mail" class="c-form__input" maxlength="64">
                    <textarea name="comments" placeholder="Расскажите немного о проекте" class="c-form__textarea" maxlength="2000"></textarea>

                    <input type="checkbox" id="" name="" class="c-form__checkbox">
                    При отправке данной формы Вы подтверждаете, что ознакомились с нашей <a href="/confidentiality/" target="_blank" class="contacts__link">политикой конфиденциальности</a>.

                    <button type="submit" class="btn btn_red c-form__submit" disabled="">
                        Отправить сообщение
                    </button>
                </form>
            
                
                <div class="callback__men">
                    <div class="title title_center title_white">
                        НАПИШИТЕ НАМ
                    </div>
                    <div class="man">
                        <div class="man__photo"><img src="local/templates/simbir/img/3c16d322f249ec931301f98e93bc3928.jpg" alt=""></div>
                        <div class="man__bio">
                            <div class="man__name">Вагиз Исхаков</div>
                            <a href="mailto:ishakov.vagiz@simbirsoft.com" class="man__email">ishakov.vagiz@simbirsoft.com</a>
                        </div>
                    </div>
                    <div class="man">
                        <div class="man__photo"><img src="local/templates/simbir/img/5b56b74ea00517e6ab334188c4931ecb.jpg" alt=""></div>
                        <div class="man__bio">
                            <div class="man__name">Иван Игонин</div>
                            <a href="mailto:igonin.ivan@simbirsoft.com" class="man__email">igonin.ivan@simbirsoft.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>