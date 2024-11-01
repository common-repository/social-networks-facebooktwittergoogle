<?php

function social_slider()
{

    // HERE

    global $sn_core_loader;
    $options = $sn_core_loader->settings;


    if ($options['Enable'] == 1 && $options['FacebookPageURL'])
    {
        require_once(dirname(__FILE__) . '/fblb_slider.php');
    }
    if ($options['TW_Enable'] == 1 && $options['TW_Username'])
    {
        require_once(dirname(__FILE__) . '/fblb_tw_slider.php');
    }
    if ($options['GP_Enable'] == 1 && $options['GP_PageID'])
    {
        require_once(dirname(__FILE__) . '/fblb_gp_slider.php');
    }
    if ($options['YT_Enable'] == 1 && $options['YT_Channel'])
    {
        require_once(dirname(__FILE__) . '/fblb_yt_slider.php');
    }
    if ($options['LI_Enable'])
    {
        require_once(dirname(__FILE__) . '/fblb_li_slider.php');
    }
}
social_slider();
?>