<?php

if (!defined('ABSPATH')) exit;

final class sn_defaults {
    public $settings = array(
        '__version__'=>'1.3.13',
        '__date__'=>'2013.10.14.',
        '__build__'=>'1367',
        '__status__'=>'stable',
        'Enable'=>'1',
        'FacebookPageURL'=>'http://www.facebook.com/facebook',
        'Width'=>'350',
        'Height'=>'450',
        'ShowFaces'=>'1',
        'ShowStream'=>'0',
        'ForceWall'=>'',
        'ShowHeader'=>'1',
        'Position'=>'Right',
        'TabPosition'=>'Fixed',
        'TabPositionPx'=>'155',
        'TabDesign'=>'2',
        'Border'=>'5',
        'BorderColor'=>'#3b5998',
        'BackgroundColor'=>'#ffffff',
        'Locale'=>'en_US',
        'ColorScheme'=>'light',
        'VPosition'=>'Fixed',
        'VPositionPx'=>'30',
        'DeveloperCopy'=>'1',
        'ZIndex'=>'1000',
        'TW_Enable'=>'1',
        'TW_Username'=>'__ENTER_VALUE__',
        'TW_Width'=>'300',
        'TW_Height'=>'450',
        'TW_ShowFollowButton'=>'1',
        'TW_Position'=>'Right',
        'TW_TabPosition'=>'Fixed',
        'TW_TabPositionPx'=>'215',
        'TW_TabDesign'=>'2',
        'TW_Border'=>'5',
        'TW_BorderColor'=>'#33ccff',
        'TW_ShellBackground'=>'#33ccff',
        'TW_ShellText'=>'#ffffff',
        'TW_TweetBackground'=>'#ffffff',
        'TW_TweetText'=>'#000000',
        'TW_Links'=>'#47a61e',
        'TW_VPosition'=>'Fixed',
        'TW_VPositionPx'=>'130',
        'TW_ZIndex'=>'1000',
        'TW_live'=>'',
        'TW_behavior'=>'all',
        'TW_loop'=>'',
        'TW_interval'=>'30',
        'TW_rpp'=>'7',
        'TW_Language'=>'en',
        'GP_Enable'=>'1',
        'GP_PageID'=>'__ENTER_VALUE__',
        'GP_ShowFeed'=>'1',
        'GP_Width'=>'440',
        'GP_Height'=>'600',
        'GP_Position'=>'Right',
        'GP_TabPosition'=>'Fixed',
        'GP_TabPositionPx'=>'5',
        'GP_TabDesign'=>'2',
        'GP_Border'=>'5',
        'GP_BorderColor'=>'#da4a38',
        'GP_BackgroundColor'=>'#ffffff',
        'GP_VPosition'=>'Fixed',
        'GP_VPositionPx'=>'20',
        'GP_ZIndex'=>'1000',
        'GP_Language'=>'en-US',
        'YT_Enable'=>'1',
        'YT_Channel'=>'__ENTER_VALUE__',
        'YT_Position'=>'Right',
        'YT_TabPosition'=>'Fixed',
        'YT_TabPositionPx'=>'205',
        'YT_TabDesign'=>'1',
        'YT_Width'=>'300',
        'YT_Height'=>'450',
        'YT_Border'=>'5',
        'YT_BorderColor'=>'#9b9b9b',
        'YT_BackgroundColor'=>'#ffffff',
        'YT_VPosition'=>'Fixed',
        'YT_VPositionPx'=>'300',
        'YT_ZIndex'=>'1000',
        'LI_Enable'=>'1',
        'LI_ShowPublicProfile'=>'1',
        'LI_ShowCompanyProfile'=>'1',
        'LI_PublicProfile'=>'__ENTER_VALUE__',
        'LI_CompanyID'=>'589883',
        'LI_Order'=>'1',
        'LI_Position'=>'Right',
        'LI_TabPosition'=>'Bottom',
        'LI_TabPositionPx'=>'',
        'LI_TabDesign'=>'1',
        'LI_Width'=>'300',
        'LI_Height'=>'370',
        'LI_Border'=>'5',
        'LI_BorderColor'=>'#007fb1',
        'LI_BackgroundColor'=>'#ffffff',
        'LI_VPosition'=>'Fixed',
        'LI_VPositionPx'=>'446',
        'LI_ZIndex'=>'1000',

    );

    function __construct() { }

    public function upgrade($old, $scope = 'settings') {
        $work = $scope == 'styler' ? $this->styler : $this->settings;

        foreach ($work as $key => $value) {
            if (!isset($old[$key])) {
                $old[$key] = $value;
            }
        }

        $unset = array();
        foreach ($old as $key => $value) {
            if (!isset($work[$key])) {
                $unset[] = $key;
            }
        }

        if (!empty($unset)) {
            foreach ($unset as $key) {
                unset($old[$key]);
            }
        }

        foreach ($work as $key => $value) {
            if (substr($key, 0, 2) == '__') {
                $old[$key] = $value;
            }
        }

        return $old;
    }
}

?>