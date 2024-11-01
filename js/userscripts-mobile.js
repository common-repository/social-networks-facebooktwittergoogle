jQuery(document).ready(function(){	
	var socialFbOrgRight=jQuery('.socialCenterOuterFb').css('right');
	var socialFbOrgLeft=jQuery('.socialCenterOuterFb').css('left');
	var socialFbOrgzIndex=jQuery('.socialCenterOuterFb').css('z-index');
	jQuery('.socialRight.socialCenterOuterFb').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterFb').stop(true,false).animate({
				right: -3
			},function (){});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterFb').stop(true,false).animate({
				right: socialFbOrgRight
			},function (){ jQuery(this).css('z-index',socialFbOrgzIndex);});
	});
	jQuery('.socialLeft.socialCenterOuterFb').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterFb').stop(true,false).animate({
				left: -3
			},function (){});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterFb').stop(true,false).animate({
				left: socialFbOrgLeft
			},function (){ jQuery(this).css('z-index',socialFbOrgzIndex);});
	});	
	var socialTwOrgRight=jQuery('.socialCenterOuterTw').css('right');
	var socialTwOrgLeft=jQuery('.socialCenterOuterTw').css('left');
	var socialTwOrgzIndex=jQuery('.socialCenterOuterTw').css('z-index');
	jQuery('.socialRight.socialCenterOuterTw').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterTw').stop(true,false).animate({
				right: -3
			},function (){});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterTw').stop(true,false).animate({
				right: socialTwOrgRight
			},function (){ jQuery(this).css('z-index',socialTwOrgzIndex);});
	});
	jQuery('.socialLeft.socialCenterOuterTw').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterTw').stop(true,false).animate({
				left: -3
			},function (){});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterTw').stop(true,false).animate({
				left: socialTwOrgLeft
			},function (){ jQuery(this).css('z-index',socialTwOrgzIndex);});
	});	
	var socialGpOrgRight=jQuery('.socialCenterOuterGp').css('right');
	var socialGpOrgLeft=jQuery('.socialCenterOuterGp').css('left');
	var socialGpOrgzIndex=jQuery('.socialCenterOuterGp').css('z-index');
	jQuery('.socialRight.socialCenterOuterGp').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterGp').stop(true,false).animate({
				right: -3
			},function (){});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterGp').stop(true,false).animate({
				right: socialGpOrgRight
			},function (){ jQuery(this).css('z-index',socialGpOrgzIndex);});
	});
	jQuery('.socialLeft.socialCenterOuterGp').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterGp').stop(true,false).animate({
				left: -3
			},function (){});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterGp').stop(true,false).animate({
				left: socialGpOrgLeft
			},function (){ jQuery(this).css('z-index',socialGpOrgzIndex);});
	});	
	var socialYtOrgRight=jQuery('.socialCenterOuterYt').css('right');
	var socialYtOrgLeft=jQuery('.socialCenterOuterYt').css('left');
	var socialYtOrgzIndex=jQuery('.socialCenterOuterYt').css('z-index');
	jQuery('.socialRight.socialCenterOuterYt').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterYt').stop(true,false).animate({
				right: -3
			});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterYt').stop(true,false).animate({
				right: socialYtOrgRight
			},function (){ jQuery(this).css('z-index',socialYtOrgzIndex);});
	});
	jQuery('.socialLeft.socialCenterOuterYt').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterYt').stop(true,false).animate({
				left: -3
			});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterYt').stop(true,false).animate({
				left: socialYtOrgLeft
			},function (){ jQuery(this).css('z-index',socialYtOrgzIndex);});
	});
	var socialViOrgRight=jQuery('.socialCenterOuterVi').css('right');
	var socialViOrgLeft=jQuery('.socialCenterOuterVi').css('left');
	var socialViOrgzIndex=jQuery('.socialCenterOuterVi').css('z-index');
	jQuery('.socialRight.socialCenterOuterVi').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterVi').stop(true,false).animate({
				right: -3
			});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterVi').stop(true,false).animate({
				right: socialViOrgRight
			},function (){ jQuery(this).css('z-index',socialViOrgzIndex);});
	});
	jQuery('.socialLeft.socialCenterOuterVi').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterVi').stop(true,false).animate({
				left: -3
			});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterVi').stop(true,false).animate({
				left: socialViOrgLeft
			},function (){ jQuery(this).css('z-index',socialViOrgzIndex);});
	});
	var socialLiOrgRight=jQuery('.socialCenterOuterLi').css('right');
	var socialLiOrgLeft=jQuery('.socialCenterOuterLi').css('left');
	var socialLiOrgzIndex=jQuery('.socialCenterOuterLi').css('z-index');
	jQuery('.socialRight.socialCenterOuterLi').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterLi').stop(true,false).animate({
				right: -3
			},function (){ jQuery('#socialInnerLi').removeClass('socialInnerLoading');});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterLi').stop(true,false).animate({
				right: socialLiOrgRight
			},function (){ jQuery(this).css('z-index',socialLiOrgzIndex);});
	});
	jQuery('.socialLeft.socialCenterOuterLi').find('.socialHead').toggle(
		function(){
			jQuery(this).parents('.socialCenterOuter').css('z-index',9999999);
			jQuery(this).parents('.socialCenterOuterLi').stop(true,false).animate({
				left: -3
			},function (){ jQuery('#socialInnerLi').removeClass('socialInnerLoading');});
		},
		function(){
			jQuery(this).parents('.socialCenterOuterLi').stop(true,false).animate({
				left: socialLiOrgLeft
			},function (){ jQuery(this).css('z-index',socialLiOrgzIndex);});
	});
	
	jQuery('.socialCenterOuter').find('.socialHead').toggle(
		function(){
			jQuery(this).addClass('socialHeadClose');
		},
		function(){
			jQuery(this).removeClass('socialHeadClose');
	});
});