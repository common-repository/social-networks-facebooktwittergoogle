<?php
if($options['TW_TabPosition']=='Middle' && in_array($options['TW_TabDesign'],array(3,6)))
{
	$socialHead_TW_position='top: 50%; margin-top: -30px;';
}
if($options['TW_TabPosition']=='Middle' && in_array($options['TW_TabDesign'],array(1,2,4,5)))
{
	$socialHead_TW_position='top: 50%; margin-top: -78px;';
}
if($options['TW_TabPosition']=='Middle' && in_array($options['TW_TabDesign'],array(7,8)))
{
	$socialHead_TW_position='top: 50%; margin-top: -45px;';
}
if($options['TW_TabPosition']=='Middle' && in_array($options['TW_TabDesign'],array(9)))
{
	$socialHead_TW_position='top: 50%; margin-top: -18px;';
}
if($options['TW_TabPosition']=='Middle' && in_array($options['TW_TabDesign'],array(11,13)))
{
	$socialHead_TW_position='top: 50%; margin-top: -54px;';
}
if($options['TW_TabPosition']=='Middle' && in_array($options['TW_TabDesign'],array(12,14)))
{
	$socialHead_TW_position='top: 50%; margin-top: -39px;';
}
if($options['TW_TabPosition']=='Top')
{
	$socialHead_TW_position='top: 5px;';
}
if($options['TW_TabPosition']=='Bottom')
{	
	$socialHead_TW_position='bottom: 5px;';
}
if($options['TW_TabPosition']=='Fixed')
{	
	$socialHead_TW_position='top: '.$options['TW_TabPositionPx'].'px;';
}
?>
<div class="socialCenterOuter socialCenterOuterTw <?php echo  ($options['TW_VPosition'] == 'Fixed' ? 'socialFixed' : '') ?> social<?php echo  $options['TW_Position'] ?>" style="<?php echo  ($options['TW_VPosition'] == 'Fixed' ? 'margin-top: ' . ($options['TW_VPositionPx'] ? $options['TW_VPositionPx'] : '0') . 'px; ' : '') ?> <?php echo  ($options['TW_Position'] == 'Left' ? 'left: -' . ($options['TW_Width'] + $options['TW_Border']) . 'px;' : 'right: -' . ($options['TW_Width'] + $options['TW_Border']) . 'px;') ?><?php echo  ($options['TW_ZIndex'] ? 'z-index: ' . $options['TW_ZIndex'] . ';' : '') ?>">
	<div class="socialCenterInner">
		<div class="socialWrap socialTheme0 socialTab<?php echo  $options['TW_TabDesign'] ?>">
			<div class="socialForm" style="background: <?php echo  $options['TW_BorderColor'] ?>; height: <?php echo  $options['TW_Height'] + $options['TW_Border'] + $options['TW_Border'] ?>px; width: <?php echo  $options['TW_Width']+$options['TW_Border'] ?>px; padding: <?php echo  ($options['TW_Position'] == 'Left' ? $options['TW_Border'] . 'px ' . $options['TW_Border'] . 'px ' . $options['TW_Border'] . 'px 0' : $options['TW_Border'] . 'px 0 ' . $options['TW_Border'] . 'px ' . $options['TW_Border'] . 'px') ?>;">
				<h2 class="socialHead" style="<?php echo $socialHead_TW_position; ?> <?php echo  ($options['TW_Position'] == 'Left' ? 'left: ' . ($options['TW_Width'] + $options['TW_Border']) . 'px;' : 'right: ' . ($options['TW_Width'] + $options['TW_Border']) . 'px;') ?>">Twitter</h2>
				<div id="socialInnerTw" class="socialInner socialInnerLoading" style="height: <?php echo $options['TW_Height']?>px;">
					<a class="twitter-timeline" <?php echo  $options['TW_ColorScheme']=='dark' ? 'data-theme="dark"' : ''; ?> data-chrome="noborders" data-link-color="<?php echo  $options['TW_Links'] ?>"  width="<?php echo  $options['TW_Width']-5; ?>" height="<?php echo  $options['TW_Height']; ?>" href="https://twitter.com/twitter" data-widget-id="<?php echo  $options['TW_Username']; ?>">Tweets by @twitter</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>
		</div>
	</div>
</div>
