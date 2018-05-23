<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!$this->__component->__parent || empty($this->__component->__parent->__name) || $this->__component->__parent->__name != "bitrix:blog"):
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/style.css');
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/themes/blue/style.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/boot-for-poisk-game.css");
endif;
?>

<div class="row" style="margin-left:0;">
<div class="col-md-2">
	<div class="dropdown" style="display:block;">

			<a href="/igrushkapoisk/catalog.php" style="text-decoration:none;">
<i class="fa fa-bars burger" style="background: transparent;color: #703f0e;font-style: normal;font-size: 22px !important;margin-bottom: 5px;"></i>
			</a>
			<a id="dLabel" role="button" data-toggle="dropdown"  data-target="#" href="/igrushkapoisk/catalog.php" style="    font-family: Oranienbaum;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 22px;
    color: #703f0e;">

                		<span class="poisk-head">Рубрики<span class="caret"></span></span> 
            </a>

    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">


				<li class="dropdown-submenu" style="text-align:left;">
				  <a tabindex="-1" href="#">Деревянные игрушки</a>
<a tabindex="-1" href="#">Интерактивные игрушки</a>
<a tabindex="-1" href="#">Радиоуправляемые игрушки</a>
<a tabindex="-1" href="#">Фигурки и персонажи</a>
<a tabindex="-1" href="#">Мягкие игрушки</a>
<a tabindex="-1" href="#">Конструкторы</a>
<a tabindex="-1" href="#">Детские музыкальные инструменты</a>
<a tabindex="-1" href="#">Куклы и пупсы</a>
<a tabindex="-1" href="#">Игрушечные машинки и транспорт</a>
<a tabindex="-1" href="#">Детские машины и транспорт</a>
<a tabindex="-1" href="#">Детское оружие и доспехи</a>
<a tabindex="-1" href="#">Настольные игры</a>
<a tabindex="-1" href="#">Хобби и творчество</a>
<a tabindex="-1" href="#">Все для праздников</a>
<a tabindex="-1" href="#">Развивающие игрушки</a>
<a tabindex="-1" href="#">Детские аксессуары</a>
<a tabindex="-1" href="#">Детская литература</a>
<a tabindex="-1" href="#">Школьные принадлежности</a>
<a tabindex="-1" href="#">Детская электроника</a>
<a tabindex="-1" href="#">Сюжетно-ролевые игры и игрушки</a>
<a tabindex="-1" href="#">Подвижные игры и спорт</a>
<a tabindex="-1" href="#">Дидактические игры и пособия</a>
<a tabindex="-1" href="#">Головоломки и пазлы</a>
<a tabindex="-1" href="#">Необычные игрушки</a>
<a tabindex="-1" href="#">Авторские игрушки</a>
              </li>

            </ul>
        </div>

	</div>
<div class="col-md-9">
		<form method="get" action="<?=$arParams["SEARCH_PAGE"]?>">
		<input type="hidden" name="<?=$arParams["PAGE_VAR"]?>" value="search">
			<div class="blog-search-text">
<input type="text" name="q" size="15" value="<?=$arResult["q"]?>" 
				style="padding: 2px;border: 1px solid #ccc;width: 500px;margin-top: 3px;float: left;margin-right:3px;"
></div>
			<div class="blog-search-select">
				<select name="where" style="border: 1px solid #ccc;padding: 3px;margin-top: 3px;float:left;margin-right:3px;">
				<?foreach($arResult["WHERE"] as $k => $v)
				{
					?><option value="<?=$k?>"<?=$k==$arResult["where"]?" selected":""?> ><?=$v?></option><?
				}
				?>
				</select>
			</div>
			<div class="blog-search-submit"><input type="submit" value="<?=GetMessage("BLOG_SEARCH_BUTTON")?>" style="background: #993300;
    background: -webkit-gradient(linear, left top, left bottom, from(#fec190), to(#993300));
    background: -moz-linear-gradient(top, #fec190, #993300);
    background: -ms-linear-gradient(top, #fec190, #993300);
    background-image: -o-linear-gradient(top, #fec190, #993300);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fec190', endColorstr='#993300');border-radius:2px;padding: 3px 20px;margin-top:2px;color:#fff;
border:1px solid #fff;"></div>

		<?if($arResult["how"]=="d"):?>
			<input type="hidden" name="how" value="d">
		<?endif;?>
		</form>
</div>
</div>
<script src="http://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="http://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>