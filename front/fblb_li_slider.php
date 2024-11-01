<?php
global $wpdb;
if($options['LI_TabPosition']=='Middle' && in_array($options['LI_TabDesign'],array(3,6)))
{
	$socialHead_LI_position='top: 50%; margin-top: -30px;';
}
if($options['LI_TabPosition']=='Middle' && in_array($options['LI_TabDesign'],array(1,2,4,5)))
{
	$socialHead_LI_position='top: 50%; margin-top: -78px;';
}
if($options['LI_TabPosition']=='Middle' && in_array($options['LI_TabDesign'],array(7,8)))
{
	$socialHead_LI_position='top: 50%; margin-top: -45px;';
}
if($options['LI_TabPosition']=='Middle' && in_array($options['LI_TabDesign'],array(9,10)))
{
	$socialHead_LI_position='top: 50%; margin-top: -18px;';
}
if($options['LI_TabPosition']=='Middle' && in_array($options['LI_TabDesign'],array(11,13)))
{
	$socialHead_LI_position='top: 50%; margin-top: -54px;';
}
if($options['LI_TabPosition']=='Middle' && in_array($options['LI_TabDesign'],array(12,14)))
{
	$socialHead_LI_position='top: 50%; margin-top: -39px;';
}
if($options['LI_TabPosition']=='Top')
{
	$socialHead_LI_position='top: 5px;';
}
if($options['LI_TabPosition']=='Bottom')
{	
	$socialHead_LI_position='bottom: 5px;';
}
if($options['LI_TabPosition']=='Fixed')
{	
	$socialHead_LI_position='top: '.$options['LI_TabPositionPx'].'px;';
}
?>
<div class="socialCenterOuter socialCenterOuterLi <?php echo ($options['LI_VPosition'] == 'Fixed' ? 'socialFixed' : '') ?> social<?php echo $options['LI_Position'] ?>" style="<?php echo ($options['LI_VPosition'] == 'Fixed' ? 'margin-top: ' . ($options['LI_VPositionPx'] ? $options['LI_VPositionPx'] : '0') . 'px; ' : '') ?> <?php echo ($options['LI_Position'] == 'Left' ? 'left: -' . ($options['LI_Width'] + $options['LI_Border']) . 'px;' : 'right: -' . ($options['LI_Width'] + $options['LI_Border']) . 'px;') ?><?php echo ($options['LI_ZIndex'] ? 'z-index: ' . $options['LI_ZIndex'] . ';' : '') ?>;">
	<div class="socialCenterInner">
		<div class="socialWrap socialTheme0 socialTab<?php echo $options['LI_TabDesign'] ?>">
			<div class="socialForm" style="background: <?php echo $options['LI_BorderColor'] ?>; height: <?php echo $options['LI_Height']+$options['LI_Border']+$options['LI_Border'] ?>px; width: <?php echo $options['LI_Width']+$options['LI_Border'] ?>px; padding: <?php echo ($options['LI_Position'] == 'Left' ? $options['LI_Border'] . 'px ' . $options['LI_Border'] . 'px ' . $options['LI_Border'] . 'px 0' : $options['LI_Border'] . 'px 0 ' . $options['LI_Border'] . 'px ' . $options['LI_Border'] . 'px') ?>;">
				<h2 class="socialHead" style="<?php echo $socialHead_LI_position; ?> <?php echo ($options['LI_Position'] == 'Left' ? 'left: ' . ($options['LI_Width'] + $options['LI_Border']) . 'px;' : 'right: ' . ($options['LI_Width'] + $options['LI_Border']) . 'px;') ?>">LinkedId</h2>
				<div class="socialInner" style="overflow: hidden; background: <?php echo $options['LI_BackgroundColor'] ?>; height: <?php echo $options['LI_Height'] ?>px;">
						<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
						<?php if($options['LI_ShowCompanyProfile']==1 && $options['LI_Order']==2){
						?>
						<script type="IN/CompanyProfile" data-related="false" data-width="<?php echo $options['LI_Width'] ?>" data-id="<?php echo $options['LI_CompanyID'] ?>" data-format="inline" ></script>
						<?php 
						}
						if($options['LI_ShowPublicProfile']==1){
						?>
						<script type="IN/MemberProfile" data-related="false" data-width="<?php echo $options['LI_Width'] ?>" data-id="<?php echo $options['LI_PublicProfile'] ?>" data-format="inline"></script>
						<?php } ?>
						<?php if($options['LI_ShowCompanyProfile']==1 && $options['LI_Order']==1){
						?>
						<script type="IN/CompanyProfile" data-related="false" data-width="<?php echo $options['LI_Width'] ?>" data-id="<?php echo $options['LI_CompanyID'] ?>" data-format="inline" ></script>
						<?php 
						}
						?>
				</div>
			</div>
		</div>
	</div>
</div>
					