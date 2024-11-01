<?php
global $wpdb;
if($options['GP_TabPosition']=='Middle' && in_array($options['GP_TabDesign'],array(3,6)))
{
	$socialHead_GP_position='top: 50%; margin-top: -30px;';
}
if($options['GP_TabPosition']=='Middle' && in_array($options['GP_TabDesign'],array(1,2,4,5)))
{
	$socialHead_GP_position='top: 50%; margin-top: -78px;';
}
if($options['GP_TabPosition']=='Middle' && in_array($options['GP_TabDesign'],array(7,8)))
{
	$socialHead_GP_position='top: 50%; margin-top: -45px;';
}
if($options['GP_TabPosition']=='Middle' && in_array($options['GP_TabDesign'],array(9)))
{
	$socialHead_GP_position='top: 50%; margin-top: -18px;';
}
if($options['GP_TabPosition']=='Top')
{
	$socialHead_GP_position='top: 5px;';
}
if($options['GP_TabPosition']=='Bottom')
{	
	$socialHead_GP_position='bottom: 5px;';
}
if($options['GP_TabPosition']=='Fixed')
{	
	$socialHead_GP_position='top: '.$options['GP_TabPositionPx'].'px;';
}
?>
<div class="socialCenterOuter socialCenterOuterGp <?php echo ($options['GP_VPosition'] == 'Fixed' ? 'socialFixed' : '') ?> social<?php echo $options['GP_Position'] ?>" style="<?php echo  ($options['GP_VPosition'] == 'Fixed' ? 'margin-top: ' . ($options['GP_VPositionPx'] ? $options['GP_VPositionPx'] : '0') . 'px; ' : '') ?> <?php echo  ($options['GP_Position'] == 'Left' ? 'left: -' . ($options['GP_Width'] + $options['GP_Border']) . 'px;' : 'right: -' . ($options['GP_Width'] + $options['GP_Border']) . 'px;') ?><?php echo  ($options['GP_ZIndex'] ? 'z-index: ' . $options['GP_ZIndex'] . ';' : '') ?>">
	<div class="socialCenterInner">
		<div class="socialWrap socialTheme0 socialTab<?php echo $options['GP_TabDesign'] ?>">
			<div class="socialForm" style="background: <?php echo $options['GP_BorderColor'] ?>; height: <?php echo  $options['GP_Height']+$options['GP_Border']+$options['GP_Border'] ?>px; width: <?php echo  $options['GP_Width']+$options['GP_Border'] ?>px; padding: <?php echo  ($options['GP_Position'] == 'Left' ? $options['GP_Border'] . 'px ' . $options['GP_Border'] . 'px ' . $options['GP_Border'] . 'px 0' : $options['GP_Border'] . 'px 0 ' . $options['GP_Border'] . 'px ' . $options['GP_Border'] . 'px') ?>;">
				<h2 class="socialHead" style="<?php echo $socialHead_GP_position; ?> <?php echo  ($options['GP_Position'] == 'Left' ? 'left: ' . ($options['GP_Width'] + $options['GP_Border']) . 'px;' : 'right: ' . ($options['GP_Width'] + $options['GP_Border']) . 'px;') ?>">Google Plus</h2>
				<div class="googleScroll socialInner" style="background: <?php echo $options['GP_BackgroundColor']?>; height: <?php echo  $options['GP_Height'] ?>px;">
                    <!-- Place this tag in your head or just before your close body tag. -->
                    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

                    <!-- Place this tag where you want the widget to render. -->
                    <div class="g-post" data-href="https://plus.google.com/<?php echo $options['GP_PageID']; ?>/posts/1z4qBQKtacW"></div>

				</div>
			</div>
		</div>
	</div>
</div>
