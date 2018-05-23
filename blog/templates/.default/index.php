<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<link href="https://fonts.googleapis.com/css?family=Oranienbaum" rel="stylesheet">
<style>
	h2{
	font-family: Oranienbaum;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 22px;
    color: #703f0e;
	}
	h2:first-letter{
    font-size: 24px;
	}
    a{text-decoration:none}
    a:hover {
        color: #0e5196 !important;
    }
</style>
<div class="body-blog">
<div class="blog-mainpage">
	<?/*$APPLICATION->IncludeComponent(
	"bitrix:blog.menu",
	"",
	Array(
			"BLOG_VAR"				=> $arResult["ALIASES"]["blog"],
			"POST_VAR"				=> $arResult["ALIASES"]["post_id"],
			"USER_VAR"				=> $arResult["ALIASES"]["user_id"],
			"PAGE_VAR"				=> $arResult["ALIASES"]["page"],
			"PATH_TO_BLOG"			=> $arResult["PATH_TO_BLOG"],
			"PATH_TO_USER"			=> $arResult["PATH_TO_USER"],
			"PATH_TO_BLOG_EDIT"		=> $arResult["PATH_TO_BLOG_EDIT"],
			"PATH_TO_BLOG_INDEX"	=> $arResult["PATH_TO_BLOG_INDEX"],
			"PATH_TO_DRAFT"			=> $arResult["PATH_TO_DRAFT"],
			"PATH_TO_POST_EDIT"		=> $arResult["PATH_TO_POST_EDIT"],
			"PATH_TO_USER_FRIENDS"	=> $arResult["PATH_TO_USER_FRIENDS"],
			"PATH_TO_USER_SETTINGS"	=> $arResult["PATH_TO_USER_SETTINGS"],
			"PATH_TO_GROUP_EDIT"	=> $arResult["PATH_TO_GROUP_EDIT"],
			"PATH_TO_CATEGORY_EDIT"	=> $arResult["PATH_TO_CATEGORY_EDIT"],
			"BLOG_URL"				=> $arResult["VARIABLES"]["blog"],
			"SET_NAV_CHAIN"			=> $arResult["SET_NAV_CHAIN"],
			"GROUP_ID" 			=> $arParams["GROUP_ID"],
		),
	$component
);*/?>
	<div class="arc_body" style="height:auto">
<img src="http://dev2.i-igrushki.ru/otdykh-dosug/img/igrushkaped.jpg" width=100%>
	</div>
<div class="arc_body col-md-3">
    <div class="arc_body">
<h2>Рубрикация</h2>
    <br><a href="#">Авторские игрушки</a>
    <br><a href="#">Все для праздников</a>
    <br><a href="#">Головоломки и пазлы</a>
    <br><a href="#">Деревянные игрушки</a>
    <br><a href="#">Детская литература</a>
    <br><a href="#">Детская электроника</a>
    <br><a href="#">Детские аксессуары</a>
    <br><a href="#">Детские машины и транспорт</a>
    <br><a href="#">Детские музыкальные инструменты</a>
    <br><a href="#">Детское оружие и доспехи</a>
    <br><a href="#">Дидактические игры и пособия</a>
    <br><a href="#">Игрушечные машинки и транспорт</a>
    <br><a href="#">Интерактивные игрушки</a>
    <br><a href="#">Конструкторы</a>
    <br><a href="#">Куклы и пупсы</a>
    <br><a href="#">Мягкие игрушки</a>
    <br><a href="#">Настольные игры</a>
    <br><a href="#">Необычные игрушки</a>
    <br><a href="#">Подвижные игры и спорт</a>
    <br><a href="#">Радиоуправляемые игрушки</a>
    <br><a href="#">Развивающие игрушки</a>
    <br><a href="#">Сюжетно-ролевые игры и игрушки</a>
    <br><a href="#">Фигурки и персонажи</a>
    <br><a href="#">Хобби и творчество</a>
    <br><a href="#">Школьные принадлежности</a>
    </div>
</div>
<div class="arc_body col-md-9">
       <?$APPLICATION->IncludeComponent(
            "bitrix:blog.search",
            "form2",
            Array(
                "PAGE_RESULT_COUNT"	=> 0,
                "SEARCH_PAGE"		=> $arResult["PATH_TO_SEARCH"],
                "BLOG_VAR"			=> $arResult["ALIASES"]["blog"],
                "POST_VAR"			=> $arResult["ALIASES"]["post_id"],
                "USER_VAR"			=> $arResult["ALIASES"]["user_id"],
                "PAGE_VAR"			=> $arResult["ALIASES"]["page"],
                "PATH_TO_BLOG"		=> $arResult["PATH_TO_BLOG"],
                "PATH_TO_POST"		=> $arResult["PATH_TO_POST"],
                "PATH_TO_USER"		=> $arResult["PATH_TO_USER"],
                "SET_TITLE"			=> "N",
            ),
            $component);?>
<div class="arc_body">
    <div class="blog-mainpage-side-left">
        <div class="blog-tab-container">
            <div class="blog-tab-left"></div>
            <div class="blog-tab-right"></div>
            <div class="blog-tab">
                <div class="blog-tab-title">
                    <span id="new-posts-title"><?=GetMessage("BC_NEW_POSTS_MES")?></span>
                    <span id="commented-posts-title" style="display:none;"><?=GetMessage("BC_COMMENTED_POSTS_MES")?></span>
                    <span id="popular-posts-title" style="display:none;"><?=GetMessage("BC_POPULAR_POSTS_MES")?></span>
                </div>
                <div class="blog-tab-items">
                    <span id="new-posts" style="display:none;"><a href="javascript:BXBlogTabShow('new-posts', 'post');"><?=GetMessage("BC_NEW_POSTS")?></a></span>
                    <span id="commented-posts"><a href="javascript:BXBlogTabShow('commented-posts', 'post');"><?=GetMessage("BC_COMMENTED_POSTS")?></a></span>
                    <span id="popular-posts"><a href="javascript:BXBlogTabShow('popular-posts', 'post');"><?=GetMessage("BC_POPULAR_POSTS")?></a></span>
                </div>
            </div>
        </div>
        <div class="blog-clear-float"></div>
        <div class="blog-tab-content">
            <div id="new-posts-content" style="display:block;">
                <?
                $APPLICATION->IncludeComponent("bitrix:blog.new_posts", ".default", Array(
                    "MESSAGE_COUNT"		=> $arParams["MESSAGE_COUNT_MAIN"],
                    "MESSAGE_LENGTH"	=>	$arParams["MESSAGE_LENGTH"],
                    "PATH_TO_BLOG"		=>	$arParams["PATH_TO_BLOG"],
                    "PATH_TO_POST"		=>	$arParams["PATH_TO_POST"],
                    "PATH_TO_GROUP_BLOG_POST"		=>	$arParams["PATH_TO_GROUP_BLOG_POST"],
                    "PATH_TO_USER"		=>	$arParams["PATH_TO_USER"],
                    "PATH_TO_SMILE"		=>	$arParams["PATH_TO_SMILE"],
                    "CACHE_TYPE"		=>	$arParams["CACHE_TYPE"],
                    "CACHE_TIME"		=>	$arParams["CACHE_TIME"],
                    "BLOG_VAR"			=>	$arParams["VARIABLE_ALIASES"]["blog"],
                    "POST_VAR"			=>	$arParams["VARIABLE_ALIASES"]["post_id"],
                    "USER_VAR"			=>	$arParams["VARIABLE_ALIASES"]["user_id"],
                    "PAGE_VAR"			=>	$arParams["VARIABLE_ALIASES"]["page"],
                    "DATE_TIME_FORMAT"	=> $arParams["DATE_TIME_FORMAT"],
                    "GROUP_ID" 			=> $arParams["GROUP_ID"],
                    "USE_SOCNET" => $arParams["USE_SOCNET"],
                    "SEO_USER"			=> $arParams["SEO_USER"],
                    "NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
                    "SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
                    "PATH_TO_CONPANY_DEPARTMENT" => $arParams["PATH_TO_CONPANY_DEPARTMENT"],
                    "PATH_TO_SONET_USER_PROFILE" => $arParams["PATH_TO_SONET_USER_PROFILE"],
                    "PATH_TO_MESSAGES_CHAT" => $arParams["PATH_TO_MESSAGES_CHAT"],
                    "PATH_TO_VIDEO_CALL" => $arParams["PATH_TO_VIDEO_CALL"],
                    "ALLOW_POST_CODE" => $arParams["ALLOW_POST_CODE"],
                    "SHOW_RATING" => $arParams["SHOW_RATING"],
                    "RATING_TYPE" => $arParams["RATING_TYPE"],
                ),
                    $component
                );
                ?>
            </div>
            <div id="commented-posts-content" style="display:none;">
                <?
                $APPLICATION->IncludeComponent("bitrix:blog.commented_posts", ".default", Array(
                    "MESSAGE_COUNT"		=> $arParams["MESSAGE_COUNT_MAIN"],
                    "MESSAGE_LENGTH"	=>	$arParams["MESSAGE_LENGTH"],
                    "PERIOD_DAYS"		=>	$arParams["PERIOD_DAYS"],
                    "PATH_TO_BLOG"		=>	$arParams["PATH_TO_BLOG"],
                    "PATH_TO_POST"		=>	$arParams["PATH_TO_POST"],
                    "PATH_TO_USER"		=>	$arParams["PATH_TO_USER"],
                    "PATH_TO_GROUP_BLOG_POST"		=>	$arParams["PATH_TO_GROUP_BLOG_POST"],
                    "PATH_TO_SMILE"		=>	$arParams["PATH_TO_SMILE"],
                    "CACHE_TYPE"		=>	$arParams["CACHE_TYPE"],
                    "CACHE_TIME"		=>	$arParams["CACHE_TIME"],
                    "BLOG_VAR"			=>	$arParams["VARIABLE_ALIASES"]["blog"],
                    "POST_VAR"			=>	$arParams["VARIABLE_ALIASES"]["post_id"],
                    "USER_VAR"			=>	$arParams["VARIABLE_ALIASES"]["user_id"],
                    "PAGE_VAR"			=>	$arParams["VARIABLE_ALIASES"]["page"],
                    "DATE_TIME_FORMAT"	=> $arParams["DATE_TIME_FORMAT"],
                    "GROUP_ID" 			=> $arParams["GROUP_ID"],
                    "USE_SOCNET" => $arParams["USE_SOCNET"],
                    "SEO_USER"			=> $arParams["SEO_USER"],
                    "NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
                    "SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
                    "PATH_TO_CONPANY_DEPARTMENT" => $arParams["PATH_TO_CONPANY_DEPARTMENT"],
                    "PATH_TO_SONET_USER_PROFILE" => $arParams["PATH_TO_SONET_USER_PROFILE"],
                    "PATH_TO_MESSAGES_CHAT" => $arParams["PATH_TO_MESSAGES_CHAT"],
                    "PATH_TO_VIDEO_CALL" => $arParams["PATH_TO_VIDEO_CALL"],
                    "ALLOW_POST_CODE" => $arParams["ALLOW_POST_CODE"],
                    "SHOW_RATING" => $arParams["SHOW_RATING"],
                    "RATING_TYPE" => $arParams["RATING_TYPE"],
                ),
                    $component
                );
                ?>
            </div>
            <div id="popular-posts-content" style="display:none;">
                <?
                $APPLICATION->IncludeComponent("bitrix:blog.popular_posts", ".default", Array(
                    "MESSAGE_COUNT"		=> $arParams["MESSAGE_COUNT_MAIN"],
                    "MESSAGE_LENGTH"	=>	$arParams["MESSAGE_LENGTH"],
                    "PERIOD_DAYS"		=>	$arParams["PERIOD_DAYS"],
                    "PATH_TO_BLOG"		=>	$arParams["PATH_TO_BLOG"],
                    "PATH_TO_POST"		=>	$arParams["PATH_TO_POST"],
                    "PATH_TO_USER"		=>	$arParams["PATH_TO_USER"],
                    "PATH_TO_GROUP_BLOG_POST"		=>	$arParams["PATH_TO_GROUP_BLOG_POST"],
                    "PATH_TO_SMILE"		=>	$arParams["PATH_TO_SMILE"],
                    "CACHE_TYPE"		=>	$arParams["CACHE_TYPE"],
                    "CACHE_TIME"		=>	$arParams["CACHE_TIME"],
                    "BLOG_VAR"			=>	$arParams["VARIABLE_ALIASES"]["blog"],
                    "POST_VAR"			=>	$arParams["VARIABLE_ALIASES"]["post_id"],
                    "USER_VAR"			=>	$arParams["VARIABLE_ALIASES"]["user_id"],
                    "PAGE_VAR"			=>	$arParams["VARIABLE_ALIASES"]["page"],
                    "DATE_TIME_FORMAT"	=> $arParams["DATE_TIME_FORMAT"],
                    "GROUP_ID" 			=> $arParams["GROUP_ID"],
                    "USE_SOCNET" => $arParams["USE_SOCNET"],
                    "SEO_USER"			=> $arParams["SEO_USER"],
                    "NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
                    "SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
                    "PATH_TO_CONPANY_DEPARTMENT" => $arParams["PATH_TO_CONPANY_DEPARTMENT"],
                    "PATH_TO_SONET_USER_PROFILE" => $arParams["PATH_TO_SONET_USER_PROFILE"],
                    "PATH_TO_MESSAGES_CHAT" => $arParams["PATH_TO_MESSAGES_CHAT"],
                    "PATH_TO_VIDEO_CALL" => $arParams["PATH_TO_VIDEO_CALL"],
                    "ALLOW_POST_CODE" => $arParams["ALLOW_POST_CODE"],
                    "SHOW_RATING" => $arParams["SHOW_RATING"],
                    "RATING_TYPE" => $arParams["RATING_TYPE"],
                ),
                    $component
                );
                ?>
            </div>
            <?
            if(strlen($arResult["PATH_TO_HISTORY"]) <= 0)
                $arResult["PATH_TO_HISTORY"] = htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arResult["ALIASES"]["page"]."=history");
            ?>
            <noindex>
                <div style="text-align:right;"><a href="<?=$arResult["PATH_TO_HISTORY"]?>" rel="nofollow"><?=GetMessage("BC_ALL_POSTS")?></a></div>
            </noindex>
        </div>

    </div>
    <h2>СЛУЧАЙНАЯ СТАТЬЯ  </h2>
	<div class="blog-author">
			<a class="blog-author-icon" href="/igrushkapedia-wiki/?page=user&amp;user_id=848" title="Просмотреть блог пользователя"></a>
			<a href="/igrushkapedia-wiki/?page=blog&amp;blog=igrushkapedia-wiki" id="anchor_O28b2nkd">Селиванова Дарья</a>	
	</div>

	<div class="blog-mainpage-title"><a href="/igrushkapedia-wiki/?page=post&amp;blog=igrushkapedia-wiki&amp;post_id=speedway">Автотрек</a></div>
	<div class="blog-mainpage-content">
	Автотрек – это своеобразная гоночная трасса с несколькими машинками для соревнований. Маленьким гонщ...	</div>
	<div class="blog-mainpage-meta">
		<a href="/igrushkapedia-wiki/?page=post&amp;blog=igrushkapedia-wiki&amp;post_id=speedway" title="Время публикации">22.04.2018 12:05:01</a>
					<span class="blog-vert-separator"></span> <a href="/igrushkapedia-wiki/?page=post&amp;blog=igrushkapedia-wiki&amp;post_id=speedway" title="Просмотров">Просмотров:&nbsp;8</a>
								<span class="rating_vote_text">
		<span class="blog-vert-separator"></span>
		<span class="ilike-light"><span class="bx-ilike-button " id="bx-ilike-button-BLOG_POST-2-1525247735"><span class="bx-ilike-right-wrap "><span class="bx-ilike-right">0</span></span><span class="bx-ilike-left-wrap"><a href="#like" class="bx-ilike-text">Нравится</a></span></span><span class="bx-ilike-wrap-block" id="bx-ilike-popup-cont-BLOG_POST-2-1525247735" style="display:none;"><span class="bx-ilike-popup"><span class="bx-ilike-wait"></span></span></span></span>
<script type="text/javascript">
BX.ready(function() {
		if (!window.RatingLike && top.RatingLike)
			RatingLike = top.RatingLike;

		if (typeof(RatingLike) == 'undefined')
			return false;

		RatingLike.Set(
			'BLOG_POST-2-1525247735',
			'BLOG_POST',
			'2',
			'Y',
			'848',
			{'LIKE_Y' : 'Не нравится', 'LIKE_N' : 'Нравится', 'LIKE_D' : 'Это нравится'},
			'light',
			''
		);

		if (typeof(RatingLikePullInit) == 'undefined')
		{
			RatingLikePullInit = true;
			BX.addCustomEvent("onPullEvent-main", function(command,params) {
				if (command == 'rating_vote')
				{
					RatingLike.LiveUpdate(params);
				}
			});
		}


});
</script>		</span>
			</div>


	</div>

	<?/*if($USER->IsAuthorized() && CBlog::CanUserCreateBlog($USER->GetID()))
	{
		if(!CBlog::GetByOwnerID($USER->GetID(), $arParams["GROUP_ID"]))
		{
			?>
		<div class="blog-mainpage-create-blog">
		<a href="<?=$arResult["PATH_TO_NEW_BLOG"]?>" class="blog-author-icon"></a>&nbsp;<a href="<?=$arResult["PATH_TO_NEW_BLOG"]?>"><?=GetMessage("BLOG_CREATE_BLOG")?></a>
		</div>
			<?
		}
}*/

?>
<script>
<!--
function BXBlogTabShow(id, type)
{
	if(type == 'post')
	{

		document.getElementById('new-posts').style.display = 'inline';
		document.getElementById('popular-posts').style.display = 'inline';
		document.getElementById('commented-posts').style.display = 'inline';

		document.getElementById('new-posts-title').style.display = 'none';
		document.getElementById('popular-posts-title').style.display = 'none';
		document.getElementById('commented-posts-title').style.display = 'none';

		document.getElementById('new-posts-content').style.display = 'none';
		document.getElementById('popular-posts-content').style.display = 'none';
		document.getElementById('commented-posts-content').style.display = 'none';

		document.getElementById(id).style.display = 'none';
		document.getElementById(id+'-title').style.display = 'inline';
		document.getElementById(id+'-content').style.display = 'block';
	}
	else if(type == 'blog')
	{
		document.getElementById('new-blogs').style.display = 'inline-block';
		document.getElementById('popular-blogs').style.display = 'inline-block';

		document.getElementById('new-blogs-title').style.display = 'none';
		document.getElementById('popular-blogs-title').style.display = 'none';

		document.getElementById('new-blogs-content').style.display = 'none';
		document.getElementById('popular-blogs-content').style.display = 'none';

		document.getElementById(id).style.display = 'none';
		document.getElementById(id+'-title').style.display = 'inline-block';
		document.getElementById(id+'-content').style.display = 'block';
	}

}
//-->
</script>
<div class="arc_body">
<h2>Интересные факты</h2>
	<div class="blog-mainpage-content arc_body">
Автотрек – это своеобразная гоночная трасса с несколькими машинками для соревнований. Маленьким гонщикам всегда интересно проходить захватывающие виражи сложных трасс, выполнять крутые скачки и преодолевать пропасти, управляя крутыми гоночными машинами! Но трасса полна неожиданностей, так что готовьтесь к серьезным гонкам. 
<br><a href="http://dev2.i-igrushki.ru/igrushkapedia-wiki/?page=post&blog=igrushkapedia-wiki&post_id=speedway">Читать далее...</a>
<br>
</div>
	<div class="blog-mainpage-content arc_body">
Автотрек – это своеобразная гоночная трасса с несколькими машинками для соревнований. Маленьким гонщикам всегда интересно проходить захватывающие виражи сложных трасс, выполнять крутые скачки и преодолевать пропасти, управляя крутыми гоночными машинами! Но трасса полна неожиданностей, так что готовьтесь к серьезным гонкам. 
<br><a href="http://dev2.i-igrushki.ru/igrushkapedia-wiki/?page=post&blog=igrushkapedia-wiki&post_id=speedway">Читать далее...</a>
<br>
</div>
	<div class="blog-mainpage-content arc_body">
Автотрек – это своеобразная гоночная трасса с несколькими машинками для соревнований. Маленьким гонщикам всегда интересно проходить захватывающие виражи сложных трасс, выполнять крутые скачки и преодолевать пропасти, управляя крутыми гоночными машинами! Но трасса полна неожиданностей, так что готовьтесь к серьезным гонкам. 
<br><a href="http://dev2.i-igrushki.ru/igrushkapedia-wiki/?page=post&blog=igrushkapedia-wiki&post_id=speedway">Читать далее...</a>
<br>
</div>
</div></div>
<!--div class="blog-mainpage-side-left">
<div class="blog-tab-container">
	<div class="blog-tab-left"></div>
	<div class="blog-tab-right"></div>
	<div class="blog-tab">
		<div class="blog-tab-title">
			<span id="new-posts-title"><?=GetMessage("BC_NEW_POSTS_MES")?></span>
			<span id="commented-posts-title" style="display:none;"><?=GetMessage("BC_COMMENTED_POSTS_MES")?></span>
			<span id="popular-posts-title" style="display:none;"><?=GetMessage("BC_POPULAR_POSTS_MES")?></span>
		</div>		
		<div class="blog-tab-items">
			<span id="new-posts" style="display:none;"><a href="javascript:BXBlogTabShow('new-posts', 'post');"><?=GetMessage("BC_NEW_POSTS")?></a></span>
			<span id="commented-posts"><a href="javascript:BXBlogTabShow('commented-posts', 'post');"><?=GetMessage("BC_COMMENTED_POSTS")?></a></span>
			<span id="popular-posts"><a href="javascript:BXBlogTabShow('popular-posts', 'post');"><?=GetMessage("BC_POPULAR_POSTS")?></a></span>
		</div>
	</div>	
</div>

	<div class="blog-tab-content">
	<div id="new-posts-content" style="display:block;"-->
		<?/*
		$APPLICATION->IncludeComponent("bitrix:blog.new_posts", ".default", Array(
			"MESSAGE_COUNT"		=> $arResult["MESSAGE_COUNT_MAIN"],
			"MESSAGE_LENGTH"	=>	$arResult["MESSAGE_LENGTH"],
			"PATH_TO_BLOG"		=>	$arResult["PATH_TO_BLOG"],
			"PATH_TO_POST"		=>	$arResult["PATH_TO_POST"],
			"PATH_TO_USER"		=>	$arResult["PATH_TO_USER"],
			"PATH_TO_SMILE"		=>	$arResult["PATH_TO_SMILE"],
			"CACHE_TYPE"		=>	$arResult["CACHE_TYPE"],
			"CACHE_TIME"		=>	$arResult["CACHE_TIME"],
			"BLOG_VAR"			=>	$arResult["ALIASES"]["blog"],
			"POST_VAR"			=>	$arResult["ALIASES"]["post_id"],
			"USER_VAR"			=>	$arResult["ALIASES"]["user_id"],
			"PAGE_VAR"			=>	$arResult["ALIASES"]["page"],
			"DATE_TIME_FORMAT"	=> $arResult["DATE_TIME_FORMAT"],
			"GROUP_ID" 			=> $arParams["GROUP_ID"],
			"SEO_USER"			=> $arParams["SEO_USER"],
			"NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
			"SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
			"PATH_TO_CONPANY_DEPARTMENT" => $arParams["PATH_TO_CONPANY_DEPARTMENT"],
			"PATH_TO_SONET_USER_PROFILE" => $arParams["PATH_TO_SONET_USER_PROFILE"],
			"PATH_TO_MESSAGES_CHAT" => $arParams["PATH_TO_MESSAGES_CHAT"],
			"PATH_TO_VIDEO_CALL" => $arParams["PATH_TO_VIDEO_CALL"],
			"ALLOW_POST_CODE" => $arParams["ALLOW_POST_CODE"],
			"SHOW_RATING" => $arParams["SHOW_RATING"],
			"RATING_TYPE" => $arParams["RATING_TYPE"],
			),
			$component 
		);
		?>
	</div>
	<div id="commented-posts-content" style="display:none;">
		<?
		$APPLICATION->IncludeComponent("bitrix:blog.commented_posts", ".default", Array(
			"MESSAGE_COUNT"		=> $arResult["MESSAGE_COUNT_MAIN"],
			"MESSAGE_LENGTH"	=>	$arResult["MESSAGE_LENGTH"],
			"PERIOD_DAYS"		=>	$arResult["PERIOD_DAYS"],
			"PATH_TO_BLOG"		=>	$arResult["PATH_TO_BLOG"],
			"PATH_TO_POST"		=>	$arResult["PATH_TO_POST"],
			"PATH_TO_USER"		=>	$arResult["PATH_TO_USER"],
			"PATH_TO_SMILE"		=>	$arResult["PATH_TO_SMILE"],
			"CACHE_TYPE"		=>	$arResult["CACHE_TYPE"],
			"CACHE_TIME"		=>	$arResult["CACHE_TIME"],
			"BLOG_VAR"			=>	$arResult["ALIASES"]["blog"],
			"POST_VAR"			=>	$arResult["ALIASES"]["post_id"],
			"USER_VAR"			=>	$arResult["ALIASES"]["user_id"],
			"PAGE_VAR"			=>	$arResult["ALIASES"]["page"],
			"DATE_TIME_FORMAT"	=> $arResult["DATE_TIME_FORMAT"],
			"GROUP_ID" 			=> $arParams["GROUP_ID"],
			"SEO_USER"			=> $arParams["SEO_USER"],
			"NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
			"SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
			"PATH_TO_CONPANY_DEPARTMENT" => $arParams["PATH_TO_CONPANY_DEPARTMENT"],
			"PATH_TO_SONET_USER_PROFILE" => $arParams["PATH_TO_SONET_USER_PROFILE"],
			"PATH_TO_MESSAGES_CHAT" => $arParams["PATH_TO_MESSAGES_CHAT"],
			"PATH_TO_VIDEO_CALL" => $arParams["PATH_TO_VIDEO_CALL"],
			"ALLOW_POST_CODE" => $arParams["ALLOW_POST_CODE"],
			"SHOW_RATING" => $arParams["SHOW_RATING"],
			"RATING_TYPE" => $arParams["RATING_TYPE"],
			),
			$component 
		);
		?>
	</div>
	<div id="popular-posts-content" style="display:none;">
		<?
		$APPLICATION->IncludeComponent("bitrix:blog.popular_posts", ".default", Array(
			"MESSAGE_COUNT"		=> $arResult["MESSAGE_COUNT_MAIN"],
			"MESSAGE_LENGTH"	=>	$arResult["MESSAGE_LENGTH"],
			"PERIOD_DAYS"		=>	$arResult["PERIOD_DAYS"],
			"PATH_TO_BLOG"		=>	$arResult["PATH_TO_BLOG"],
			"PATH_TO_POST"		=>	$arResult["PATH_TO_POST"],
			"PATH_TO_USER"		=>	$arResult["PATH_TO_USER"],
			"PATH_TO_SMILE"		=>	$arResult["PATH_TO_SMILE"],
			"CACHE_TYPE"		=>	$arResult["CACHE_TYPE"],
			"CACHE_TIME"		=>	$arResult["CACHE_TIME"],
			"BLOG_VAR"			=>	$arResult["ALIASES"]["blog"],
			"POST_VAR"			=>	$arResult["ALIASES"]["post_id"],
			"USER_VAR"			=>	$arResult["ALIASES"]["user_id"],
			"PAGE_VAR"			=>	$arResult["ALIASES"]["page"],
			"DATE_TIME_FORMAT"	=> $arResult["DATE_TIME_FORMAT"],
			"GROUP_ID" 			=> $arParams["GROUP_ID"],
			"SEO_USER"			=> $arParams["SEO_USER"],
			"NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
			"SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
			"PATH_TO_CONPANY_DEPARTMENT" => $arParams["PATH_TO_CONPANY_DEPARTMENT"],
			"PATH_TO_SONET_USER_PROFILE" => $arParams["PATH_TO_SONET_USER_PROFILE"],
			"PATH_TO_MESSAGES_CHAT" => $arParams["PATH_TO_MESSAGES_CHAT"],
			"PATH_TO_VIDEO_CALL" => $arParams["PATH_TO_VIDEO_CALL"],
			"ALLOW_POST_CODE" => $arParams["ALLOW_POST_CODE"],
			"SHOW_RATING" => $arParams["SHOW_RATING"],
			"RATING_TYPE" => $arParams["RATING_TYPE"],
			),
			$component 
		);
		?>
	</div>
	<?
	if(strlen($arResult["PATH_TO_HISTORY"]) <= 0)
		$arResult["PATH_TO_HISTORY"] = htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arResult["ALIASES"]["page"]."=history");
	?>
	<noindex>
	<div style="text-align:right;"><a href="<?=$arResult["PATH_TO_HISTORY"]?>" rel="nofollow"><?=GetMessage("BC_ALL_POSTS")?></a></div>
	</noindex>
	</div>
	
<?if(empty($arParams["GROUP_ID"]) || (is_array($arParams["GROUP_ID"]) && count($arParams["GROUP_ID"]) > 1))
{
	?>
	<div class="blog-tab-container">
		<div class="blog-tab-left"></div>
		<div class="blog-tab-right"></div>
		<div class="blog-tab">
			<span class="blog-tab-title"><?=GetMessage("BC_GROUPS")?></span>
		</div>	
	</div>
		<div class="blog-tab-content">
			<?
			$APPLICATION->IncludeComponent(
					"bitrix:blog.groups", 
					"", 
					Array(
							"GROUPS_COUNT"	=> 0,
							"COLS_COUNT"	=> 2,
							"GROUP_VAR"		=> $arResult["ALIASES"]["group_id"],
							"PAGE_VAR"		=> $arResult["ALIASES"]["page"],
							"PATH_TO_GROUP"	=> $arResult["PATH_TO_GROUP"],
							"CACHE_TYPE"	=> $arResult["CACHE_TYPE"],
							"CACHE_TIME"	=> $arResult["CACHE_TIME"],
							"GROUP_ID" 			=> $arParams["GROUP_ID"],
						),
					$component 
				);
			?>
		</div>
	<?
}
?>
</div>
<div class="blog-mainpage-side-right">
<?
if(IsModuleInstalled("search")):
?>
<div class="blog-tab-container">
	<div class="blog-tab-left"></div>
	<div class="blog-tab-right"></div>
	<div class="blog-tab">
		<span class="blog-tab-title"><?=GetMessage("BC_SEARCH_TAG")?></span>
	</div>	
</div>
	<div class="blog-tab-content">
		<div class="blog-mainpage-search-cloud">
		<?
		$APPLICATION->IncludeComponent(
			"bitrix:search.tags.cloud",
			"",
			Array(
				"FONT_MAX" => 18, 
				"FONT_MIN" => 10,
				"COLOR_NEW" => $arParams["COLOR_NEW"],
				"COLOR_OLD" => $arParams["COLOR_OLD"],
				"ANGULARITY" => $arParams["ANGULARITY"], 
				"PERIOD_NEW_TAGS" => $arResult["PERIOD_NEW_TAGS"], 
				"SHOW_CHAIN" => "N", 
				"COLOR_TYPE" => $arParams["COLOR_TYPE"], 
				"WIDTH" => $arParams["WIDTH"], 
				"SEARCH" => "", 
				"TAGS" => "", 
				"SORT" => "NAME", 
				"PAGE_ELEMENTS" => "70", 
				"PERIOD" => $arParams["PERIOD"], 
				"URL_SEARCH" => $arResult["PATH_TO_SEARCH"], 
				"TAGS_INHERIT" => "N", 
				"CHECK_DATES" => "Y", 
				"arrFILTER" => Array("blog"), 
				"CACHE_TYPE" => "A", 
				"CACHE_TIME" => "3600" 
			),
			$component
		);
		?>
		</div>
	</div>
<?endif?>
<div class="blog-tab-container">
	<div class="blog-tab-left"></div>
	<div class="blog-tab-right"></div>
	<div class="blog-tab">
		<span class="blog-tab-title"><?=GetMessage("BC_NEW_COMMENTS")?></span>
	</div>	
</div>
	<div class="blog-tab-content">
		<?
		$APPLICATION->IncludeComponent("bitrix:blog.new_comments", ".default", Array(
	"COMMENT_COUNT"		=> $arResult["MESSAGE_COUNT_MAIN"],
	"MESSAGE_LENGTH"	=>	$arResult["MESSAGE_LENGTH"],
	"PATH_TO_BLOG"		=>	$arResult["PATH_TO_BLOG"],
	"PATH_TO_POST"		=>	$arResult["PATH_TO_POST"],
	"PATH_TO_USER"		=>	$arResult["PATH_TO_USER"],
	"PATH_TO_SMILE"		=>	$arResult["PATH_TO_SMILE"],
	"CACHE_TYPE"		=>	$arResult["CACHE_TYPE"],
	"CACHE_TIME"		=>	$arResult["CACHE_TIME"],
	"BLOG_VAR"			=>	$arResult["ALIASES"]["blog"],
	"POST_VAR"			=>	$arResult["ALIASES"]["post_id"],
	"USER_VAR"			=>	$arResult["ALIASES"]["user_id"],
	"PAGE_VAR"			=>	$arResult["ALIASES"]["page"],
	"DATE_TIME_FORMAT"	=> $arResult["DATE_TIME_FORMAT"],
	"GROUP_ID" 			=> $arParams["GROUP_ID"],
	"SEO_USER"			=> $arParams["SEO_USER"],
	"NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
	"SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
	"PATH_TO_CONPANY_DEPARTMENT" => $arParams["PATH_TO_CONPANY_DEPARTMENT"],
	"PATH_TO_SONET_USER_PROFILE" => $arParams["PATH_TO_SONET_USER_PROFILE"],
	"PATH_TO_MESSAGES_CHAT" => $arParams["PATH_TO_MESSAGES_CHAT"],
	"PATH_TO_VIDEO_CALL" => $arParams["PATH_TO_VIDEO_CALL"],
	"ALLOW_POST_CODE" => $arParams["ALLOW_POST_CODE"],
	"NO_URL_IN_COMMENTS" => $arParams["NO_URL_IN_COMMENTS"],
	"NO_URL_IN_COMMENTS_AUTHORITY" => $arParams["NO_URL_IN_COMMENTS_AUTHORITY"],
	"SHOW_RATING" => $arParams["SHOW_RATING"],
	),
	$component 
);
		?>
	</div>
<div class="blog-tab-container">
	<div class="blog-tab-left"></div>
	<div class="blog-tab-right"></div>
	<div class="blog-tab">
		<span class="blog-tab-items">
			<span id="new-blogs"><a href="javascript:BXBlogTabShow('new-blogs', 'blog');"><?=GetMessage("BC_NEW_BLOGS")?></a></span>
			<span id="popular-blogs" style="display:none;"><a href="javascript:BXBlogTabShow('popular-blogs', 'blog');"><?=GetMessage("BC_POPULAR_BLOGS")?></a></span>
		</span>
		<span class="blog-tab-title">
			<span id="new-blogs-title" style="display:none;"><?=GetMessage("BC_NEW_BLOGS_MES")?></span>
			<span id="popular-blogs-title"><?=GetMessage("BC_POPULAR_BLOGS_MES")?></span>
		</span>
	</div>	
</div>
	<div class="blog-tab-content">
	<div id="new-blogs-content" style="display:none;">
	<?
		$APPLICATION->IncludeComponent(
				"bitrix:blog.new_blogs", 
				"", 
				Array(
						"BLOG_COUNT"	=> $arResult["BLOG_COUNT_MAIN"],
						"BLOG_VAR"		=> $arResult["ALIASES"]["blog"],
						"USER_VAR"		=> $arResult["ALIASES"]["user_id"],
						"PAGE_VAR"		=> $arResult["ALIASES"]["page"],
						"PATH_TO_BLOG"	=> $arResult["PATH_TO_BLOG"],
						"PATH_TO_USER"	=> $arResult["PATH_TO_USER"],
						"CACHE_TYPE"	=> $arResult["CACHE_TYPE"],
						"CACHE_TIME"	=> $arResult["CACHE_TIME"],
						"GROUP_ID" 			=> $arParams["GROUP_ID"],
						"SEO_USER"			=> $arParams["SEO_USER"],
						"NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
						"SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
						"PATH_TO_CONPANY_DEPARTMENT" => $arParams["PATH_TO_CONPANY_DEPARTMENT"],
						"PATH_TO_SONET_USER_PROFILE" => $arParams["PATH_TO_SONET_USER_PROFILE"],
						"PATH_TO_MESSAGES_CHAT" => $arParams["PATH_TO_MESSAGES_CHAT"],
						"PATH_TO_VIDEO_CALL" => $arParams["PATH_TO_VIDEO_CALL"],
					),
				$component 
			);
		?>
	</div>
	<div id="popular-blogs-content" style="display:block;">
		<?
		$APPLICATION->IncludeComponent(
				"bitrix:blog.popular_blogs", 
				"", 
				Array(
						"BLOG_COUNT"	=> $arResult["BLOG_COUNT_MAIN"],
						"PERIOD_DAYS"	=>	$arResult["PERIOD_DAYS"],
						"BLOG_VAR"		=> $arResult["ALIASES"]["blog"],
						"USER_VAR"		=> $arResult["ALIASES"]["user_id"],
						"PAGE_VAR"		=> $arResult["ALIASES"]["page"],
						"PATH_TO_BLOG"	=> $arResult["PATH_TO_BLOG"],
						"PATH_TO_USER"	=> $arResult["PATH_TO_USER"],
						"CACHE_TYPE"	=> $arResult["CACHE_TYPE"],
						"CACHE_TIME"	=> $arResult["CACHE_TIME"],
						"GROUP_ID"		=> $arParams["GROUP_ID"],
						"SEO_USER"		=> $arParams["SEO_USER"],
						"NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
						"SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
						"PATH_TO_CONPANY_DEPARTMENT" => $arParams["PATH_TO_CONPANY_DEPARTMENT"],
						"PATH_TO_SONET_USER_PROFILE" => $arParams["PATH_TO_SONET_USER_PROFILE"],
						"PATH_TO_MESSAGES_CHAT" => $arParams["PATH_TO_MESSAGES_CHAT"],
						"PATH_TO_VIDEO_CALL" => $arParams["PATH_TO_VIDEO_CALL"],
					),
				$component 
			);
		?>
	</div>
	<?
	//if((!is_array($arParams["GROUP_ID"]) && IntVal($arParams["GROUP_ID"]) > 0) || (is_array($arParams["GROUP_ID"]) && count($arParams["GROUP_ID"]) == 1))
	//{
		if(strlen($arResult["PATH_TO_GROUP"]) <= 0)
			$arResult["PATH_TO_GROUP"] = htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arResult["ALIASES"]["page"]."=group&".$arResult["ALIASES"]["group_id"]."=#group_id#");
		?>
		
		<div style="text-align:right;"><a href="<?=CComponentEngine::MakePathFromTemplate($arResult["PATH_TO_GROUP"], array("group_id" => "all"))?>"><?=GetMessage("BC_ALL_BLOGS")?></a></div>
		<?
	//}
	?>

	</div>
	<div class="blog-rss-subscribe">
	<?
	$APPLICATION->IncludeComponent(
			"bitrix:blog.rss.link",
			"mainpage",
			Array(
					"RSS1"				=> "N",
					"RSS2"				=> "Y",
					"ATOM"				=> "N",
					"BLOG_VAR"			=> $arResult["ALIASES"]["blog"],
					"POST_VAR"			=> $arResult["ALIASES"]["post_id"],
					"GROUP_VAR"			=> $arResult["ALIASES"]["group_id"],
					"PATH_TO_RSS"		=> $arResult["PATH_TO_RSS"],
					"PATH_TO_RSS_ALL"	=> $arResult["PATH_TO_RSS_ALL"],
					"BLOG_URL"			=> $arResult["VARIABLES"]["blog"],
					//"GROUP_ID" 			=> $arParams["GROUP_ID"],
					"MODE"				=> "S",
				),
			$component 
		);
	?>
	</div>
</div>
<div class="blog-clear-float"></div>

<?
if($arResult["SET_TITLE"]=="Y")
$APPLICATION->SetTitle(GetMessage("BLOG_TITLE"));*/
?>

