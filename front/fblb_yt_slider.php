<?php
global $wpdb;
if($options['YT_TabPosition']=='Middle' && in_array($options['YT_TabDesign'],array(3,6)))
{
	$socialHead_YT_position='top: 50%; margin-top: -30px;';
}
if($options['YT_TabPosition']=='Middle' && in_array($options['YT_TabDesign'],array(1,2,4,5)))
{
	$socialHead_YT_position='top: 50%; margin-top: -78px;';
}
if($options['YT_TabPosition']=='Middle' && in_array($options['YT_TabDesign'],array(7,8)))
{
	$socialHead_YT_position='top: 50%; margin-top: -45px;';
}
if($options['YT_TabPosition']=='Middle' && in_array($options['YT_TabDesign'],array(9)))
{
	$socialHead_YT_position='top: 50%; margin-top: -18px;';
}
if($options['YT_TabPosition']=='Top')
{
	$socialHead_YT_position='top: 5px;';
}
if($options['YT_TabPosition']=='Bottom')
{	
	$socialHead_YT_position='bottom: 5px;';
}
if($options['YT_TabPosition']=='Fixed')
{	
	$socialHead_YT_position='top: '.$options['YT_TabPositionPx'].'px;';
}
?>
<div class="socialCenterOuter socialCenterOuterYt <?php echo ($options['YT_VPosition'] == 'Fixed' ? 'socialFixed' : '') ?> social<?php echo $options['YT_Position'] ?>" style="<?php echo ($options['YT_VPosition'] == 'Fixed' ? 'margin-top: ' . ($options['YT_VPositionPx'] ? $options['YT_VPositionPx'] : '0') . 'px; ' : '') ?> <?php echo ($options['YT_Position'] == 'Left' ? 'left: -' . ($options['YT_Width'] + $options['YT_Border']) . 'px;' : 'right: -' . ($options['YT_Width'] + $options['YT_Border']) . 'px;') ?><?php echo ($options['YT_ZIndex'] ? 'z-index: ' . $options['YT_ZIndex'] . ';' : '') ?>;">
	<div class="socialCenterInner">
		<div class="socialWrap socialTheme0 socialTab<?php echo $options['YT_TabDesign'] ?>">
			<div class="socialForm" style="background: <?php echo $options['YT_BorderColor'] ?>; height: <?php echo $options['YT_Height']+$options['YT_Border']+$options['YT_Border'] ?>px; width: <?php echo $options['YT_Width']+$options['YT_Border'] ?>px; padding: <?php echo ($options['YT_Position'] == 'Left' ? $options['YT_Border'] . 'px ' . $options['YT_Border'] . 'px ' . $options['YT_Border'] . 'px 0' : $options['YT_Border'] . 'px 0 ' . $options['YT_Border'] . 'px ' . $options['YT_Border'] . 'px') ?>;">
				<h2 class="socialHead" style="<?php echo $socialHead_YT_position; ?> <?php echo ($options['YT_Position'] == 'Left' ? 'left: ' . ($options['YT_Width'] + $options['YT_Border']) . 'px;' : 'right: ' . ($options['YT_Width'] + $options['YT_Border']) . 'px;') ?>">YouTube</h2>
				<div class="socialInner" style="background: <?php echo $options['YT_BackgroundColor'] ?>; height: <?php echo $options['YT_Height'] ?>px;">
					<div style="overflow: hidden; height: 98px;">
						<iframe id="socialYTS" src="http://www.youtube.com/subscribe_widget?p=<?php echo $options['YT_Channel']; ?>" style="overflow: hidden; height: 98px; width:100%; border: 0;" scrolling="no" frameBorder="0"></iframe>
					</div>
					<div id="socialInnerYt" class="socialInnerLoading" style="overflow-y: scroll; overflow-x: hidden; height: <?php echo $options['YT_Height']-98?>px;">
						<ul id="socialYtList" class="socialList" style="height: <?php echo $options['YT_Height']-98 ?>px">
						</ul>
						<script type="text/javascript">
						function __social_YTGet(data)
						{
							var MonthNames=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
							if(!data.feed.entry)
							{
							}
							else
							{
								jQuery.each(data.feed.entry, function(i,e) {
									added=new Date(e.published.$t);
									jQuery('#socialYtList').append('<li>' +
									'<a href="' + e.link[0].href +'" class="socialthumb-link"><img src="' + e.media$group.media$thumbnail[1].url + '" alt="" width="61" height="45" class="socialthumb" /></a>' +
									'<div class="socialbd">' +
									'<a href="' + e.link[0].href +'" class="socialtitle">' + e.title.$t + '</a>' +
									'<span class="socialinfo">' + (!e.yt$statistics ? '' : 'views: ' + e.yt$statistics.viewCount + ' |' ) + ' added: ' + (added.getDate()) + ' ' + MonthNames[added.getMonth()] + ' ' + added.getFullYear() + '</span>' +
									'</div>' +
									'</li>');
								});
							}
							jQuery('#socialInnerYt').removeClass('socialInnerLoading');
						}
						jQuery(document).ready(function(){
							jQuery.getScript("http://gdata.youtube.com/feeds/users/<?php echo $options['YT_Channel']; ?>/uploads?alt=json-in-script&max-results=10&format=5&callback=__social_YTGet");
						});
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>