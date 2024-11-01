<?php
if($options['TabPosition']=='Middle' && in_array($options['TabDesign'],array(3,6)))
{
	$socialHead_position='top: 50%; margin-top: -30px;';
}
if($options['TabPosition']=='Middle' && in_array($options['TabDesign'],array(1,2,4,5)))
{
	$socialHead_position='top: 50%; margin-top: -78px;';
}
if($options['TabPosition']=='Middle' && in_array($options['TabDesign'],array(7,8)))
{
	$socialHead_position='top: 50%; margin-top: -45px;';
}
if($options['TabPosition']=='Middle' && in_array($options['TabDesign'],array(9)))
{
	$socialHead_position='top: 50%; margin-top: -18px;';
}
if($options['TabPosition']=='Top')
{
	$socialHead_position='top: 5px;';
}
if($options['TabPosition']=='Bottom')
{	
	$socialHead_position='bottom: 5px;';
}
if($options['TabPosition']=='Fixed')
{	
	$socialHead_position='top: '.$options['TabPositionPx'].'px;';
//    var_dump($options['Width']);
//    var_dump($options['Border']);
//    exit();
}
?>
<div class="socialCenterOuter socialCenterOuterFb <?php echo ($options['VPosition']=='Fixed' ? 'socialFixed': '')?> social<?php echo $options['Position']?>" style="<?php echo ($options['VPosition']=='Fixed' ? 'margin-top: '.($options['VPositionPx'] ? $options['VPositionPx'] : '0').'px; ': '')?> <?php echo ($options['Position']=='Left' ? 'left: -'.($options['Width']+$options['Border']).'px;' : 'right: -'.($options['Width']+$options['Border']).'px;')?><?php echo ($options['ZIndex'] ? 'z-index: '.$options['ZIndex'].';': '')?>">
	<div class="socialCenterInner">
		<div class="socialWrap socialTheme0 socialTab<?php echo $options['TabDesign']?>">
			<div class="socialForm" style="background: <?php echo $options['BorderColor']?>; height: <?php echo $options['Height']+$options['Border']+$options['Border']+$options['Border']?>px; width: <?php echo $options['Width']+$options['Border']?>px; padding: <?php echo ($options['Position']=='Left' ? $options['Border'].'px '.$options['Border'].'px '.$options['Border'].'px 0' : $options['Border'].'px 0 '.$options['Border'].'px '.$options['Border'].'px')?>;">
				<h2 class="socialHead" style="<?php echo $socialHead_position; ?> <?php echo ($options['Position']=='Left' ? 'left: '.($options['Width']+$options['Border']).'px;' : 'right: '.($options['Width']+$options['Border']).'px;')?>">Facebook</h2>
				<div id="socialInnerFb" class="socialInner socialInnerLoading" style="height: <?php echo $options['Height']?>px; background-color: <?php echo $options['BackgroundColor']?>;">
					<div class="fb-root" id="fb-root"></div>
					<script>
					jQuery(document).ready(function(){	
					if ( jQuery.browser.msie ) 
					{jQuery('#socialInnerFb').removeClass('socialInnerLoading');}
					else{jQuery('.fb-like-box').bind('DOMNodeInserted', function(event) { 
					if(event.target.nodeName=='IFRAME'){
					jQuery('.fb-like-box iframe').load(function() 
					{jQuery('#socialInnerFb').removeClass('socialInnerLoading');
					jQuery('.fb-like-box').unbind('DOMNodeInserted');});
					}});}
					(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) {return;}
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/<?php echo $options['Locale']?>/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));});</script>
					<div class="fb-like-box" <?php if($options['ForceWall']==1) { echo 'force_wall="true"'; }?> data-colorscheme="<?php echo $options['ColorScheme']?>"  data-border-color="<?php echo $options['BorderColor']?>" data-href="<?php echo  $options['FacebookPageURL'] ?>" data-width="<?php echo $options['Width']?>" data-height="<?php echo $options['Height']?>" data-show-faces="<?php echo ($options['ShowFaces'] ? 'true' : 'false')?>" data-stream="<?php echo ($options['ShowStream'] ? 'true' : 'false')?>" data-header="<?php echo ($options['ShowHeader'] ? 'true' : 'false')?>"></div>
                </div><?php if($options['DeveloperCopy']) {?><div class="developer-copyright">
                    <a href="http://www.kidzarella.com/ru/boys.html">одежда для мальчиков</a>магазин

                </div><?php };?>
			</div>
		</div>
	</div>
</div>