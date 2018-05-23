<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!$this->__component->__parent || empty($this->__component->__parent->__name) || $this->__component->__parent->__name != "bitrix:blog"):
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/style.css');
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/themes/blue/style.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/boot-for-poisk-game.css");
endif;
?>
<div class="arc_body" style="height:">
    <div class="col-md-2"><h2>Поиск</h2></div>
    <div class="col-md-10">
<form method="get" action="<?=$arParams["SEARCH_PAGE"]?>">
		<input type="hidden" name="<?=$arParams["PAGE_VAR"]?>" value="search">
			<div class="blog-search-text">

                <input type="text" name="q" size="15" value="<?=$arResult["q"]?>" 	style="padding: 2px;border: 1px solid #ccc;width: 500px;margin-top: 3px;float: left;margin-right:3px;"></div>
			        <div class="blog-search-select">
				        <!--select name="where" style="border: 1px solid #ccc;padding: 3px;margin-top: 3px;float:left;margin-right:3px;">
				            <?foreach($arResult["WHERE"] as $k => $v)
				                {
				            	?><option value="<?=$k?>"<?=$k==$arResult["where"]?" selected":""?> ><?=$v?></option><?
				                }
				                ?>
                        </select-->
			            </div>
                    <div class="blog-search-submit"><input type="submit" value="<?=GetMessage("BLOG_SEARCH_BUTTON")?>" style="background: #843e1b;
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


