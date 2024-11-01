jQuery(document).ready(function()
{	
		jQuery('.socialCenterOuter').each(function(index) {
			if (!jQuery(this).hasClass('socialFixed'))
			{
				var mt=(((jQuery('body').height()/2)-(jQuery(this).height()/2)))*-1;
				jQuery(this).css('margin-top',mt);
			}
		});
});