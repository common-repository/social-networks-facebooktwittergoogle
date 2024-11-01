<?php
$options = $sn_core_loader->settings;
//foreach ($options as $k => $v) {
//    echo "'".$k."'=>'".$v."',<br/>";
//}
//exit();
//var_dump($options);
//exit();
?>


<div class="sn-wrapper wrap sct-wordpress-<?php echo SCS_WP_VERSION; ?>">
<div class="sn-header">
<h2>
    <?php _e("Social Networks", "social-networks"); ?>
    <span class="sct-version"> | <?php echo $sn_core_loader->get('__version__'); ?></span></h2>
    <p class="promo-txt">Most popular social plugins in one extenision. Facebook, Twitter, LinkedIn, YouTube, Google+</p>
</div>
<form id="SSForm" method="post">

<?php settings_fields('social-networks'); ?>

<input type="hidden" name="Config" value="1" />
<div id="STabs">
<ul>
    <li><a href="#STabsFb"><strong>Facebook</strong></a></li>
    <li><a href="#STabsTw"><strong>Twitter</strong></a></li>
    <li><a href="#STabsGp"><strong>Google Plus</strong></a></li>
    <li><a href="#STabsYt"><strong>YouTube</strong></a></li>
    <li><a href="#STabsLi"><strong>LinkedIn</strong></a></li>

</ul>

<div id="STabsFb">
<h3>Facebook</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Likebox</span></legend>

            <label for="EnableFB">
                <input name="Enable" <?php echo  ($options['Enable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableFB" value="1" />
                Enabled
            </label>
            <label for="DisableFB">
                <input name="Enable" <?php echo  ($options['Enable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableFB" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="FacebookPageURL">Facebook Page URL</label></th>
    <td><input name="FacebookPageURL" type="text" id="FacebookPageURL" value="<?php echo  $options['FacebookPageURL'] ?>" class="regular-text" /></td>
</tr>

<tr valign="top">
    <th scope="row"><label for="Width">Width</label></th>
    <td><input name="Width" type="text" id="Width" value="<?php echo  $options['Width'] ?>" class="small-text" /> px</td>
</tr>
<tr valign="top">
    <th scope="row"><label for="Height">Height</label></th>
    <td><input name="Height" type="text" id="Height" value="<?php echo  $options['Height'] ?>" class="small-text" /> px</td>
</tr>
<tr valign="top">
    <th scope="row">Show faces</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Show faces</span></legend>

            <label for="ShowFacesFB">
                <input name="ShowFaces" <?php echo  ($options['ShowFaces'] == '1' ? 'checked' : '' ) ?> type="radio" id="ShowFacesFB" value="1" />
                Enabled
            </label>
            <label for="HideFacesFB">
                <input name="ShowFaces" <?php echo  ($options['ShowFaces'] == '0' ? 'checked' : '' ) ?> type="radio" id="HideFacesFB" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Show stream</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Show stream</span></legend>
            <label for="ShowStream">
                <input name="ShowStream" <?php echo  ($options['ShowStream'] == '1' ? 'checked' : '' ) ?> type="radio" id="ShowStream" value="1" />
                Enabled
            </label>
            <label for="HideStream">
                <input name="ShowStream" <?php echo  ($options['ShowStream'] == '0' ? 'checked' : '' ) ?> type="radio" id="HideStream" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Force wall</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Force wall</span></legend>
            <label for="ForceWall">
                <input name="ForceWall" <?php echo  ($options['ForceWall'] == '1' ? 'checked' : '' ) ?> type="radio" id="ForceWall" value="1" />
                Enabled
            </label>
            <label for="ForceWallDisabled">
                <input name="ForceWall" <?php echo  ($options['ForceWall'] == '0' ? 'checked' : '' ) ?> type="radio" id="ForceWallDisabled" value="0" />
                Disabled
            </label>
        </fieldset>
        (for Places, specifies whether the stream contains posts from the Place's wall or just checkins from friends)
    </td>
</tr>
<tr valign="top">
    <th scope="row">Show header</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Show header</span></legend>
            <label for="ShowHeader">
                <input name="ShowHeader" <?php echo  ($options['ShowHeader'] ? 'checked' : '' ) ?> type="checkbox" id="ShowHeader" value="1" />
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Position</th>
    <td>
        <fieldset>
            <label for="PositionLeft">
                <input name="Position" <?php echo  ($options['Position'] == 'Left' ? 'checked' : '' ) ?> type="radio" id="PositionLeft" value="Left" />
                left
            </label>
            <label for="PositionRight">
                <input name="Position" <?php echo  ($options['Position'] == 'Right' ? 'checked' : '' ) ?> type="radio" id="PositionRight" value="Right" />
                right
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Vertical position</th>
    <td>
        <fieldset>
            <label for="VPositionMiddle">
                <input name="VPosition" <?php echo  ($options['VPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="VPositionMiddle" value="Middle" />
                middle
            </label>
            <label for="VPositionFixed">
                <input name="VPosition" <?php echo  ($options['VPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="VPositionFixed" value="Fixed" />
                fixed:
            </label>
            <input name="VPositionPx" type="text" id="VPositionPx" value="<?php echo  $options['VPositionPx'] ?>" class="small-text" /> px from top
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Button position</th>
    <td>
        <fieldset>
            <label for="TabPositionTop">
                <input name="TabPosition" <?php echo  ($options['TabPosition'] == 'Top' ? 'checked' : '' ) ?> type="radio" id="TabPositionTop" value="Top" />
                top
            </label>
            <label for="TabPositionMiddle">
                <input name="TabPosition" <?php echo  ($options['TabPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="TabPositionMiddle" value="Middle" />
                middle
            </label>
            <label for="TabPositionBottom">
                <input name="TabPosition" <?php echo  ($options['TabPosition'] == 'Bottom' ? 'checked' : '' ) ?> type="radio" id="TabPositionBottom" value="Bottom" />
                bottom
            </label>
            <label for="TabPositionFixed">
                <input name="TabPosition" <?php echo  ($options['TabPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="TabPositionFixed" value="Fixed" />
                fixed:
            </label>
            <input name="TabPositionPx" type="text" id="TabPositionPx" value="<?php echo  $options['TabPositionPx'] ?>" class="small-text" /> px from top of slider
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Button design</th>
    <td>
        <fieldset>
            <label for="TabDesign1">
                <input name="TabDesign" <?php echo  ($options['TabDesign'] == 1 ? 'checked' : '' ) ?> type="radio" id="TabDesign1" value="1" />
                <img src="<?php echo  SN_URL.'img/fb1-left.png'; ?>" />
            </label>
            <label for="TabDesign2">
                <input name="TabDesign" <?php echo  ($options['TabDesign'] == 2 ? 'checked' : '' ) ?> type="radio" id="TabDesign2" value="2" />
                <img src="<?php echo  SN_URL.'img/fb2-left.png'; ?>" />
            </label>
            <label for="TabDesign3">
                <input name="TabDesign" <?php echo  ($options['TabDesign'] == 3 ? 'checked' : '' ) ?> type="radio" id="TabDesign3" value="3" />
                <img src="<?php echo  SN_URL.'img/fb3-left.png'; ?>" />
            </label>
            <label for="TabDesign4">
                <input name="TabDesign" <?php echo  ($options['TabDesign'] == 4 ? 'checked' : '' ) ?> type="radio" id="TabDesign4" value="4" />
                <img src="<?php echo  SN_URL.'img/fb4-left.png'; ?>" />
            </label>
            <label for="TabDesign5">
                <input name="TabDesign" <?php echo  ($options['TabDesign'] == 5 ? 'checked' : '' ) ?> type="radio" id="TabDesign5" value="5" />
                <img src="<?php echo  SN_URL.'img/fb5-left.png'; ?>" />
            </label>
            <label for="TabDesign6">
                <input name="TabDesign" <?php echo  ($options['TabDesign'] == 6 ? 'checked' : '' ) ?> type="radio" id="TabDesign6" value="6" />
                <img src="<?php echo  SN_URL.'img/fb6-left.png'; ?>" />
            </label>
            <br/>
            <label for="TabDesign7">
                <input name="TabDesign" <?php echo  ($options['TabDesign'] == 7 ? 'checked' : '' ) ?> type="radio" id="TabDesign7" value="7" />
                <img src="<?php echo  SN_URL.'img/fb7-left.png'; ?>" />
            </label>
            <label for="TabDesign8">
                <input name="TabDesign" <?php echo  ($options['TabDesign'] == 8 ? 'checked' : '' ) ?> type="radio" id="TabDesign8" value="8" />
                <img src="<?php echo  SN_URL.'img/fb8-left.png'; ?>" />
            </label>
            <label for="TabDesign9">
                <input name="TabDesign" <?php echo  ($options['TabDesign'] == 9 ? 'checked' : '' ) ?> type="radio" id="TabDesign9" value="9" />
                <img src="<?php echo  SN_URL.'img/fb9-left.png'; ?>" />
            </label>
            <label for="TabDesign11">
                <input name="TabDesign" <?php echo  ($options['TabDesign'] == 11 ? 'checked' : '' ) ?> type="radio" id="TabDesign11" value="11" />
                <img src="<?php echo SN_URL.'img/fb11-left.png'; ?>" />
            </label>
            <label for="TabDesign12">
                <input name="TabDesign" <?php echo  ($options['TabDesign'] == 12 ? 'checked' : '' ) ?> type="radio" id="TabDesign12" value="12" />
                <img src="<?php echo SN_URL.'img/fb12-left.png'; ?>" />
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="Border">Border width</label></th>
    <td><input name="Border" type="text" id="Border" value="<?php echo  $options['Border'] ?>" class="small-text" /> px</td>
</tr>
<tr valign="top">
    <th scope="row"><label for="BorderColor">Border color</label></th>
    <td>
        <input maxlength="7" name="BorderColor" type="text" id="BorderColor" value="<?php echo  $options['BorderColor'] ?>" style="float: left; width: 170px;" class="small-text" /> (default: #3b5998)
        <div id="BorderColorPreview" style="background-color: <?php echo  $options['BorderColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>

    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="BackgroundColor">Background color</label></th>
    <td>
        <input maxlength="7" name="BackgroundColor" type="text" id="BackgroundColor" value="<?php echo  $options['BackgroundColor'] ?>" style="float: left; width: 170px;" class="small-text" /> (default: #ffffff for light color scheme, #333333 for dark color scheme)
        <div id="BackgroundColorPreview" style="background-color: <?php echo  $options['BackgroundColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>

    </td>
</tr>
<tr valign="top">
    <th scope="row">Color Scheme</th>
    <td>
        <fieldset>
            <label for="ColorSchemelight">
                <input name="ColorScheme" <?php echo  ($options['ColorScheme'] == 'light' ? 'checked' : '' ) ?> type="radio" id="ColorSchemelight" value="light" />
                light
            </label>
            <label for="ColorSchemedark">
                <input name="ColorScheme" <?php echo  ($options['ColorScheme'] == 'dark' ? 'checked' : '' ) ?> type="radio" id="ColorSchemedark" value="dark" />
                dark
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="ZIndex">CSS z-index</label></th>
    <td><input name="ZIndex" type="text" id="ZIndex" value="<?php echo  $options['ZIndex'] ?>" class="small-text" /> (default: 1000)</td>
</tr>
<tr valign="top">
    <th scope="row">Plugin Developer</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Developer Copyright</span></legend>
            <label for="DeveloperCopy">
                <input name="ShowHeader" <?php echo ($options['DeveloperCopy'] ? 'checked' : '' ) ?> type="checkbox" id="DeveloperCopy" value="1" />
            </label>
        </fieldset>
    </td>
</tr>
</tbody>
</table>
</div>
<div id="STabsTw">
    <h3>Twitter</h3>
    <table class="form-table">
        <tbody>
        <tr valign="top">
            <th scope="row">Enable</th>
            <td>
                <fieldset>
                    <legend class="screen-reader-text"><span>Enable</span></legend>
                    <label for="TW_Enable">
                        <input name="TW_Enable" <?php echo  ($options['TW_Enable'] == '1' ? 'checked' : '' ) ?> type="radio" id="TW_Enable" value="1" />
                        Enabled
                    </label>
                    <label for="TW_Disable">
                        <input name="TW_Enable" <?php echo  ($options['TW_Enable'] == '0' ? 'checked' : '' ) ?> type="radio" id="TW_Disable" value="0" />
                        Disabled
                    </label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="TW_Username">Twitter Widget ID</label></th>
            <td><input name="TW_Username" type="text" id="TW_Username" value="<?php echo  $options['TW_Username'] ?>" class="regular-text" />
                <br />
                (ex: 0000000000000000000000 )
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="TW_Width">Width</label></th>
            <td><input name="TW_Width" type="text" id="TW_Width" value="<?php echo  $options['TW_Width'] ?>" class="small-text" /> px</td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="TW_Height">Height</label></th>
            <td><input name="TW_Height" type="text" id="TW_Height" value="<?php echo  $options['TW_Height'] ?>" class="small-text" /> px</td>
        </tr>
        <tr valign="top">
            <th scope="row">Position</th>
            <td>
                <fieldset>
                    <label for="TW_PositionLeft">
                        <input name="TW_Position" <?php echo  ($options['TW_Position'] == 'Left' ? 'checked' : '' ) ?> type="radio" id="TW_PositionLeft" value="Left" />
                        left
                    </label>
                    <label for="TW_PositionRight">
                        <input name="TW_Position" <?php echo  ($options['TW_Position'] == 'Right' ? 'checked' : '' ) ?> type="radio" id="TW_PositionRight" value="Right" />
                        right
                    </label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Vertical position</th>
            <td>
                <fieldset>
                    <label for="TW_VPositionMiddle">
                        <input name="TW_VPosition" <?php echo  ($options['TW_VPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="TW_VPositionMiddle" value="Middle" />
                        middle
                    </label>
                    <label for="TW_VPositionFixed">
                        <input name="TW_VPosition" <?php echo  ($options['TW_VPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="TW_VPositionFixed" value="Fixed" />
                        fixed:
                    </label>
                    <input name="TW_VPositionPx" type="text" id="TW_VPositionPx" value="<?php echo  $options['TW_VPositionPx'] ?>" class="small-text" /> px from top
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Button position</th>
            <td>
                <fieldset>
                    <label for="TW_TabPositionTop">
                        <input name="TW_TabPosition" <?php echo  ($options['TW_TabPosition'] == 'Top' ? 'checked' : '' ) ?> type="radio" id="TW_TabPositionTop" value="Top" />
                        top
                    </label>
                    <label for="TW_TabPositionMiddle">
                        <input name="TW_TabPosition" <?php echo  ($options['TW_TabPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="TW_TabPositionMiddle" value="Middle" />
                        middle
                    </label>
                    <label for="TW_TabPositionBottom">
                        <input name="TW_TabPosition" <?php echo  ($options['TW_TabPosition'] == 'Bottom' ? 'checked' : '' ) ?> type="radio" id="TW_TabPositionBottom" value="Bottom" />
                        bottom
                    </label>
                    <label for="TW_TabPositionFixed">
                        <input name="TW_TabPosition" <?php echo  ($options['TW_TabPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="TW_TabPositionFixed" value="Fixed" />
                        fixed:
                    </label>
                    <input name="TW_TabPositionPx" type="text" id="TW_TabPositionPx" value="<?php echo  $options['TW_TabPositionPx'] ?>" class="small-text" /> px from top of slider
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Button design</th>
            <td>
                <fieldset>
                    <label for="TW_TabDesign1">
                        <input name="TW_TabDesign" <?php echo  ($options['TW_TabDesign'] == 1 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign1" value="1" />
                        <img src="<?php echo  SN_URL.'img/tw1-left.png'; ?>" />
                    </label>
                    <label for="TW_TabDesign2">
                        <input name="TW_TabDesign" <?php echo  ($options['TW_TabDesign'] == 2 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign2" value="2" />
                        <img src="<?php echo  SN_URL.'img/tw2-left.png'; ?>" />
                    </label>
                    <label for="TW_TabDesign3">
                        <input name="TW_TabDesign" <?php echo  ($options['TW_TabDesign'] == 3 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign3" value="3" />
                        <img src="<?php echo  SN_URL.'img/tw3-left.png'; ?>" />
                    </label>

                    <label for="TW_TabDesign7">
                        <input name="TW_TabDesign" <?php echo  ($options['TW_TabDesign'] == 7 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign7" value="7" />
                        <img src="<?php echo  SN_URL.'img/tw7-left.png'; ?>" />
                    </label>
                    <label for="TW_TabDesign8">
                        <input name="TW_TabDesign" <?php echo  ($options['TW_TabDesign'] == 8 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign8" value="8" />
                        <img src="<?php echo  SN_URL.'img/tw8-left.png'; ?>" />
                    </label>
                    <label for="TW_TabDesign9">
                        <input name="TW_TabDesign" <?php echo  ($options['TW_TabDesign'] == 9 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign9" value="9" />
                        <img src="<?php echo  SN_URL.'img/tw9-left.png'; ?>" />
                    </label>
                    <label for="TW_TabDesign11">
                        <input name="TW_TabDesign" <?php echo  ($options['TW_TabDesign'] == 11 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign11" value="11" />
                        <img src="<?php echo SN_URL.'img/tw11-left.png'; ?>" />
                    </label>
                    <label for="TW_TabDesign12">
                        <input name="TW_TabDesign" <?php echo  ($options['TW_TabDesign'] == 12 ? 'checked' : '' ) ?> type="radio" id="TW_TabDesign12" value="12" />
                        <img src="<?php echo SN_URL.'img/tw12-left.png'; ?>" />
                    </label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Color Scheme</th>
            <td>
                <fieldset>
                    <label for="TW_ColorSchemelight">
                        <input name="TW_ColorScheme" <?php echo  ($options['TW_ColorScheme'] == 'light' ? 'checked' : '' ) ?> type="radio" id="TW_ColorSchemelight" value="light" />
                        light
                    </label>
                    <label for="TW_ColorSchemedark">
                        <input name="TW_ColorScheme" <?php echo  ($options['TW_ColorScheme'] == 'dark' ? 'checked' : '' ) ?> type="radio" id="TW_ColorSchemedark" value="dark" />
                        dark
                    </label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="TW_Border">Border width</label></th>
            <td><input name="TW_Border" type="text" id="TW_Border" value="<?php echo  $options['TW_Border'] ?>" class="small-text" /> px</td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="TW_BorderColor">Border color</label></th>
            <td>
                <input maxlength="7" name="TW_BorderColor" type="text" id="TW_BorderColor" value="<?php echo  $options['TW_BorderColor'] ?>" style="float: left; width: 170px;" class="small-text" /> (default: #33ccff)
                <div id="TW_BorderColorPreview" style="background-color: <?php echo  $options['TW_BorderColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>

            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="TW_Links">Links color</label></th>
            <td>
                <input maxlength="7" name="TW_Links" type="text" id="TW_Links" value="<?php echo  $options['TW_Links'] ?>" style="float: left; width: 170px;" class="small-text" /> (default: #47a61e)
                <div id="TW_LinksPreview" style="background-color: <?php echo  $options['TW_Links'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="TW_ZIndex">CSS z-index</label></th>
            <td><input name="TW_ZIndex" type="text" id="TW_ZIndex" value="<?php echo  $options['TW_ZIndex'] ?>" class="small-text" /> (default: 1000)</td>
        </tr>
        </tbody>
    </table>
</div>
<div id="STabsGp">
    <h3>Google Plus</h3>
    <table class="form-table">
        <tbody>
        <tr valign="top">
            <th scope="row">Enable</th>
            <td>
                <fieldset>
                    <legend class="screen-reader-text"><span>Enable</span></legend>

                    <label for="GP_Enable">
                        <input name="GP_Enable" <?php echo  ($options['GP_Enable'] == '1' ? 'checked' : '' ) ?> type="radio" id="GP_Enable" value="1" />
                        Enabled
                    </label>
                    <label for="GP_Disable">
                        <input name="GP_Enable" <?php echo  ($options['GP_Enable'] == '0' ? 'checked' : '' ) ?> type="radio" id="GP_Disable" value="0" />
                        Disabled
                    </label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="GP_PageID">Google+ Page ID</label></th>
            <td>
                <input name="GP_PageID" maxlength="30" type="text" id="GP_PageID" value="<?php echo  $options['GP_PageID'] ?>" class="regular-text" /> <b>ID of Google Plus Page (like Facebook fanpage) not Private Profile</b>
                <br />
                (ex: 109813896768294978296 get from https://plus.google.com/<strong>109813896768294978296</strong>/posts/1z4qBQKtacW)
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="GP_Width">Width</label></th>
            <td><input name="GP_Width" type="text" id="GP_Width" value="<?php echo  $options['GP_Width'] ?>" class="small-text" /> px</td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="GP_Height">Height</label></th>
            <td><input name="GP_Height" type="text" id="GP_Height" value="<?php echo  $options['GP_Height'] ?>" class="small-text" /> px</td>
        </tr>
        <tr valign="top">
            <th scope="row">Position</th>
            <td>
                <fieldset>
                    <label for="GP_PositionLeft">
                        <input name="GP_Position" <?php echo  ($options['GP_Position'] == 'Left' ? 'checked' : '' ) ?> type="radio" id="GP_PositionLeft" value="Left" />
                        left
                    </label>
                    <label for="GP_PositionRight">
                        <input name="GP_Position" <?php echo  ($options['GP_Position'] == 'Right' ? 'checked' : '' ) ?> type="radio" id="GP_PositionRight" value="Right" />
                        right
                    </label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Vertical position</th>
            <td>
                <fieldset>
                    <label for="GP_VPositionMiddle">
                        <input name="GP_VPosition" <?php echo  ($options['GP_VPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="GP_VPositionMiddle" value="Middle" />
                        middle
                    </label>
                    <label for="GP_VPositionFixed">
                        <input name="GP_VPosition" <?php echo  ($options['GP_VPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="GP_VPositionFixed" value="Fixed" />
                        fixed:
                    </label>
                    <input name="GP_VPositionPx" type="text" id="GP_VPositionPx" value="<?php echo  $options['GP_VPositionPx'] ?>" class="small-text" /> px from top
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Button position</th>
            <td>
                <fieldset>
                    <label for="GP_TabPositionTop">
                        <input name="GP_TabPosition" <?php echo  ($options['GP_TabPosition'] == 'Top' ? 'checked' : '' ) ?> type="radio" id="GP_TabPositionTop" value="Top" />
                        top
                    </label>
                    <label for="GP_TabPositionMiddle">
                        <input name="GP_TabPosition" <?php echo  ($options['GP_TabPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="GP_TabPositionMiddle" value="Middle" />
                        middle
                    </label>
                    <label for="GP_TabPositionBottom">
                        <input name="GP_TabPosition" <?php echo  ($options['GP_TabPosition'] == 'Bottom' ? 'checked' : '' ) ?> type="radio" id="GP_TabPositionBottom" value="Bottom" />
                        bottom
                    </label>
                    <label for="GP_TabPositionFixed">
                        <input name="GP_TabPosition" <?php echo  ($options['GP_TabPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="GP_TabPositionFixed" value="Fixed" />
                        fixed:
                    </label>
                    <input name="GP_TabPositionPx" type="text" id="GP_TabPositionPx" value="<?php echo  $options['GP_TabPositionPx'] ?>" class="small-text" /> px from top of slider
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Button design</th>
            <td>
                <fieldset>
                    <label for="GP_TabDesign1">
                        <input name="GP_TabDesign" <?php echo  ($options['GP_TabDesign'] == 1 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign1" value="1" />
                        <img src="<?php echo  SN_URL.'img/gp1-left.png'; ?>" />
                    </label>
                    <label for="GP_TabDesign2">
                        <input name="GP_TabDesign" <?php echo  ($options['GP_TabDesign'] == 2 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign2" value="2" />
                        <img src="<?php echo  SN_URL.'img/gp2-left.png'; ?>" />
                    </label>
                    <label for="GP_TabDesign3">
                        <input name="GP_TabDesign" <?php echo  ($options['GP_TabDesign'] == 3 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign3" value="3" />
                        <img src="<?php echo  SN_URL.'img/gp3-left.png'; ?>" />
                    </label>

                    <label for="GP_TabDesign7">
                        <input name="GP_TabDesign" <?php echo  ($options['GP_TabDesign'] == 7 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign7" value="7" />
                        <img src="<?php echo  SN_URL.'img/gp7-left.png'; ?>" />
                    </label>
                    <label for="GP_TabDesign8">
                        <input name="GP_TabDesign" <?php echo  ($options['GP_TabDesign'] == 8 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign8" value="8" />
                        <img src="<?php echo  SN_URL.'img/gp8-left.png'; ?>" />
                    </label>
                    <label for="GP_TabDesign9">
                        <input name="GP_TabDesign" <?php echo  ($options['GP_TabDesign'] == 9 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign9" value="9" />
                        <img src="<?php echo SN_URL.'img/gp9-left.png'; ?>" />
                    </label>
                    <label for="GP_TabDesign11">
                        <input name="GP_TabDesign" <?php echo  ($options['GP_TabDesign'] == 11 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign11" value="11" />
                        <img src="<?php echo SN_URL.'img/gp11-left.png'; ?>" />
                    </label>
                    <label for="GP_TabDesign12">
                        <input name="GP_TabDesign" <?php echo  ($options['GP_TabDesign'] == 12 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign12" value="12" />
                        <img src="<?php echo SN_URL.'img/gp12-left.png'; ?>" />
                    </label>
                    <label for="GP_TabDesign13">
                        <input name="GP_TabDesign" <?php echo  ($options['GP_TabDesign'] == 13 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign13" value="13" />
                        <img src="<?php echo SN_URL.'img/gp13-left.png'; ?>" />
                    </label>
                    <label for="GP_TabDesign14">
                        <input name="GP_TabDesign" <?php echo  ($options['GP_TabDesign'] == 14 ? 'checked' : '' ) ?> type="radio" id="GP_TabDesign14" value="14" />
                        <img src="<?php echo SN_URL.'img/gp14-left.png'; ?>" />
                    </label>

                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="GP_Border">Border width</label></th>
            <td><input name="GP_Border" type="text" id="GP_Border" value="<?php echo  $options['GP_Border'] ?>" class="small-text" /> px</td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="GP_BorderColor">Border color</label></th>
            <td>
                <input maxlength="7" name="GP_BorderColor" type="text" id="GP_BorderColor" value="<?php echo  $options['GP_BorderColor'] ?>" style="float: left; width: 170px;" class="small-text" /> (default: #000000)
                <div id="GP_BorderColorPreview" style="background-color: <?php echo  $options['GP_BorderColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="GP_BackgroundColor">Background color</label></th>
            <td>
                <input maxlength="7" name="GP_BackgroundColor" type="text" id="GP_BackgroundColor" value="<?php echo  $options['GP_BackgroundColor'] ?>" style="float: left; width: 170px;" class="small-text" /> (default: #000000)
                <div id="GP_BackgroundColorPreview" style="background-color: <?php echo  $options['GP_BackgroundColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>

            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="GP_ZIndex">CSS z-index</label></th>
            <td><input name="GP_ZIndex" type="text" id="GP_ZIndex" value="<?php echo  $options['GP_ZIndex'] ?>" class="small-text" /> (default: 1000)</td>
        </tr>
        </tbody>
    </table>
</div>


<div id="STabsYt">
    <h3>YouTube</h3>
    <table class="form-table">
        <tbody>
        <tr valign="top">
            <th scope="row">Enable</th>
            <td>
                <fieldset>
                    <legend class="screen-reader-text"><span>Enable</span></legend>

                    <label for="YT_Enable">
                        <input name="YT_Enable" <?php echo  ($options['YT_Enable'] == '1' ? 'checked' : '' ) ?> type="radio" id="YT_Enable" value="1" />
                        Enabled
                    </label>
                    <label for="YT_Disable">
                        <input name="YT_Enable" <?php echo  ($options['YT_Enable'] == '0' ? 'checked' : '' ) ?> type="radio" id="YT_Disable" value="0" />
                        Disabled
                    </label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="YT_Channel">Channel</label></th>
            <td>
                <input name="YT_Channel" type="text" id="YT_Channel" value="<?php echo  $options['YT_Channel'] ?>" class="regular-text" />
                (ex: wordpress)
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="YT_Width">Width</label></th>
            <td><input name="YT_Width" type="text" id="YT_Width" value="<?php echo  $options['YT_Width'] ?>" class="small-text" /> px</td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="YT_Height">Height</label></th>
            <td><input name="YT_Height" type="text" id="YT_Height" value="<?php echo  $options['YT_Height'] ?>" class="small-text" /> px</td>
        </tr>
        <tr valign="top">
            <th scope="row">Position</th>
            <td>
                <fieldset>
                    <label for="YT_PositionLeft">
                        <input name="YT_Position" <?php echo  ($options['YT_Position'] == 'Left' ? 'checked' : '' ) ?> type="radio" id="YT_PositionLeft" value="Left" />
                        left
                    </label>
                    <label for="YT_PositionRight">
                        <input name="YT_Position" <?php echo  ($options['YT_Position'] == 'Right' ? 'checked' : '' ) ?> type="radio" id="YT_PositionRight" value="Right" />
                        right
                    </label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Vertical position</th>
            <td>
                <fieldset>
                    <label for="YT_VPositionMiddle">
                        <input name="YT_VPosition" <?php echo  ($options['YT_VPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="YT_VPositionMiddle" value="Middle" />
                        middle
                    </label>
                    <label for="YT_VPositionFixed">
                        <input name="YT_VPosition" <?php echo  ($options['YT_VPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="YT_VPositionFixed" value="Fixed" />
                        fixed:
                    </label>
                    <input name="YT_VPositionPx" type="text" id="YT_VPositionPx" value="<?php echo  $options['YT_VPositionPx'] ?>" class="small-text" /> px from top
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Button position</th>
            <td>
                <fieldset>
                    <label for="YT_TabPositionTop">
                        <input name="YT_TabPosition" <?php echo  ($options['YT_TabPosition'] == 'Top' ? 'checked' : '' ) ?> type="radio" id="YT_TabPositionTop" value="Top" />
                        top
                    </label>
                    <label for="YT_TabPositionMiddle">
                        <input name="YT_TabPosition" <?php echo  ($options['YT_TabPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="YT_TabPositionMiddle" value="Middle" />
                        middle
                    </label>
                    <label for="YT_TabPositionBottom">
                        <input name="YT_TabPosition" <?php echo  ($options['YT_TabPosition'] == 'Bottom' ? 'checked' : '' ) ?> type="radio" id="YT_TabPositionBottom" value="Bottom" />
                        bottom
                    </label>
                    <label for="YT_TabPositionFixed">
                        <input name="YT_TabPosition" <?php echo  ($options['YT_TabPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="YT_TabPositionFixed" value="Fixed" />
                        fixed:
                    </label>
                    <input name="YT_TabPositionPx" type="text" id="YT_TabPositionPx" value="<?php echo  $options['YT_TabPositionPx'] ?>" class="small-text" /> px from top of slider
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Button design</th>
            <td>
                <fieldset>
                    <label for="YT_TabDesign1">
                        <input name="YT_TabDesign" <?php echo  ($options['YT_TabDesign'] == 1 ? 'checked' : '' ) ?> type="radio" id="YT_TabDesign1" value="1" />
                        <img src="<?php echo  SN_URL.'img/yt1-left.png'; ?>" />
                    </label>
                    <?php /*
									<label for="YT_TabDesign2">
										<input name="YT_TabDesign" <?php echo  ($options['YT_TabDesign'] == 2 ? 'checked' : '' ) ?> type="radio" id="YT_TabDesign2" value="2" />
										<img src="<?php echo  SN_URL.'img/yt2-left.png'; ?>" />
									</label>*/?>
                    <label for="YT_TabDesign3">
                        <input name="YT_TabDesign" <?php echo  ($options['YT_TabDesign'] == 3 ? 'checked' : '' ) ?> type="radio" id="YT_TabDesign3" value="3" />
                        <img src="<?php echo  SN_URL.'img/yt3-left.png'; ?>" />
                    </label>

                    <label for="YT_TabDesign7">
                        <input name="YT_TabDesign" <?php echo  ($options['YT_TabDesign'] == 7 ? 'checked' : '' ) ?> type="radio" id="YT_TabDesign7" value="7" />
                        <img src="<?php echo  SN_URL.'img/yt7-left.png'; ?>" />
                    </label>
                    <?php /*
									<label for="YT_TabDesign8">
										<input name="YT_TabDesign" <?php echo  ($options['YT_TabDesign'] == 8 ? 'checked' : '' ) ?> type="radio" id="YT_TabDesign8" value="8" />
										<img src="<?php echo  SN_URL.'img/yt8-left.png'; ?>" />
									</label> */?>
                    <label for="YT_TabDesign9">
                        <input name="YT_TabDesign" <?php echo  ($options['YT_TabDesign'] == 9 ? 'checked' : '' ) ?> type="radio" id="YT_TabDesign9" value="9" />
                        <img src="<?php echo SN_URL.'img/yt9-left.png'; ?>" />
                    </label>
                    <label for="YT_TabDesign11">
                        <input name="YT_TabDesign" <?php echo  ($options['YT_TabDesign'] == 11 ? 'checked' : '' ) ?> type="radio" id="YT_TabDesign11" value="11" />
                        <img src="<?php echo SN_URL.'img/yt11-left.png'; ?>" />
                    </label>
                    <label for="YT_TabDesign12">
                        <input name="YT_TabDesign" <?php echo  ($options['YT_TabDesign'] == 12 ? 'checked' : '' ) ?> type="radio" id="YT_TabDesign12" value="12" />
                        <img src="<?php echo SN_URL.'img/yt12-left.png'; ?>" />
                    </label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="YT_Border">Border width</label></th>
            <td><input name="YT_Border" type="text" id="YT_Border" value="<?php echo  $options['YT_Border'] ?>" class="small-text" /> px</td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="YT_BorderColor">Border color</label></th>
            <td>
                <input maxlength="7" name="YT_BorderColor" type="text" id="YT_BorderColor" value="<?php echo  $options['YT_BorderColor'] ?>" style="float: left; width: 170px;" class="small-text" /> (default: #e0e0e0)
                <div id="YT_BorderColorPreview" style="background-color: <?php echo  $options['YT_BorderColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="YT_BackgroundColor">Background color</label></th>
            <td>
                <input maxlength="7" name="YT_BackgroundColor" type="text" id="YT_BackgroundColor" value="<?php echo  $options['YT_BackgroundColor'] ?>" style="float: left; width: 170px;" class="small-text" /> (default: #000000)
                <div id="YT_BackgroundColorPreview" style="background-color: <?php echo  $options['YT_BackgroundColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>

            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><label for="YT_ZIndex">CSS z-index</label></th>
            <td><input name="YT_ZIndex" type="text" id="YT_ZIndex" value="<?php echo  $options['YT_ZIndex'] ?>" class="small-text" /> (default: 1000)</td>
        </tr>
        </tbody>
    </table>
</div>

<div id="STabsLi">
<h3>LinkedIn</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable</span></legend>

            <label for="YT_Enable">
                <input name="YT_Enable" <?php echo  ($options['YT_Enable'] == '1' ? 'checked' : '' ) ?> type="radio" id="YT_Enable" value="1" />
                Enabled
            </label>
            <label for="YT_Disable">
                <input name="YT_Enable" <?php echo  ($options['YT_Enable'] == '0' ? 'checked' : '' ) ?> type="radio" id="YT_Disable" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Show Member Public Profile</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Show Member Public Profile</span></legend>

            <label for="LI_ShowPublicProfile">
                <input name="LI_ShowPublicProfile" <?php echo  ($options['LI_ShowPublicProfile'] == '1' ? 'checked' : '' ) ?> type="radio" id="LI_ShowPublicProfile" value="1" />
                Enabled
            </label>
            <label for="LI_HidePublicProfile">
                <input name="LI_ShowPublicProfile" <?php echo  ($options['LI_ShowPublicProfile'] == '0' ? 'checked' : '' ) ?> type="radio" id="LI_HidePublicProfile" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="LI_PublicProfile">Public Profile URL</label></th>
    <td>
        <input name="LI_PublicProfile" type="text" id="LI_PublicProfile" value="<?php echo  $options['LI_PublicProfile'] ?>" class="regular-text" />
        (ex: http://www.linkedin.com/in/wordpress)
    </td>
</tr>
<tr valign="top">
    <th scope="row">Show Company Profile</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Show Company Profile</span></legend>

            <label for="LI_ShowCompanyProfile">
                <input name="LI_ShowCompanyProfile" <?php echo  ($options['LI_ShowCompanyProfile'] == '1' ? 'checked' : '' ) ?> type="radio" id="LI_ShowCompanyProfile" value="1" />
                Enabled
            </label>
            <label for="LI_HideCompanyProfile">
                <input name="LI_ShowCompanyProfile" <?php echo  ($options['LI_ShowCompanyProfile'] == '0' ? 'checked' : '' ) ?> type="radio" id="LI_HideCompanyProfile" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="LI_CompanyID">Company ID</label></th>
    <td>
        <input name="LI_CompanyID" type="text" id="LI_CompanyID" value="<?php echo  $options['LI_CompanyID'] ?>" class="regular-text" />
        (ex: 589883)
        <a href="http://arscode.pro/linkedin/" target="_blank"><b>Company ID lookup</b></a>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Order</th>
    <td>
        <fieldset>
            <label style="width: 100%" for="LI_Order1">
                <input name="LI_Order" <?php echo  ($options['LI_Order'] == '1' ? 'checked' : '' ) ?> type="radio" id="LI_Order1" value="1" />
                <br />
                1. Member Public Profile<br />
                2. Company Profile

            </label>
            <br /><br />
            <label style="width: 100%" for="LI_Order2">
                <input name="LI_Order" <?php echo  ($options['LI_Order'] == '2' ? 'checked' : '' ) ?> type="radio" id="LI_Order2" value="2" />
                <br />
                1. Company Profile<br />
                2. Member Public Profile
            </label>
        </fieldset>
    </td>
</tr>


<tr valign="top">
    <th scope="row"><label for="LI_Width">Width</label></th>
    <td><input name="LI_Width" type="text" id="LI_Width" value="<?php echo  $options['LI_Width'] ?>" class="small-text" /> px</td>
</tr>
<tr valign="top">
    <th scope="row"><label for="LI_Height">Height</label></th>
    <td><input name="LI_Height" type="text" id="LI_Height" value="<?php echo  $options['LI_Height'] ?>" class="small-text" /> px</td>
</tr>
<tr valign="top">
    <th scope="row">Position</th>
    <td>
        <fieldset>
            <label for="LI_PositionLeft">
                <input name="LI_Position" <?php echo  ($options['LI_Position'] == 'Left' ? 'checked' : '' ) ?> type="radio" id="LI_PositionLeft" value="Left" />
                left
            </label>
            <label for="LI_PositionRight">
                <input name="LI_Position" <?php echo  ($options['LI_Position'] == 'Right' ? 'checked' : '' ) ?> type="radio" id="LI_PositionRight" value="Right" />
                right
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Vertical position</th>
    <td>
        <fieldset>
            <label for="LI_VPositionMiddle">
                <input name="LI_VPosition" <?php echo  ($options['LI_VPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="LI_VPositionMiddle" value="Middle" />
                middle
            </label>
            <label for="LI_VPositionFixed">
                <input name="LI_VPosition" <?php echo  ($options['LI_VPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="LI_VPositionFixed" value="Fixed" />
                fixed:
            </label>
            <input name="LI_VPositionPx" type="text" id="LI_VPositionPx" value="<?php echo  $options['LI_VPositionPx'] ?>" class="small-text" /> px from top
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Button position</th>
    <td>
        <fieldset>
            <label for="LI_TabPositionTop">
                <input name="LI_TabPosition" <?php echo  ($options['LI_TabPosition'] == 'Top' ? 'checked' : '' ) ?> type="radio" id="LI_TabPositionTop" value="Top" />
                top
            </label>
            <label for="LI_TabPositionMiddle">
                <input name="LI_TabPosition" <?php echo  ($options['LI_TabPosition'] == 'Middle' ? 'checked' : '' ) ?> type="radio" id="LI_TabPositionMiddle" value="Middle" />
                middle
            </label>
            <label for="LI_TabPositionBottom">
                <input name="LI_TabPosition" <?php echo  ($options['LI_TabPosition'] == 'Bottom' ? 'checked' : '' ) ?> type="radio" id="LI_TabPositionBottom" value="Bottom" />
                bottom
            </label>
            <label for="LI_TabPositionFixed">
                <input name="LI_TabPosition" <?php echo  ($options['LI_TabPosition'] == 'Fixed' ? 'checked' : '' ) ?> type="radio" id="LI_TabPositionFixed" value="Fixed" />
                fixed:
            </label>
            <input name="LI_TabPositionPx" type="text" id="LI_TabPositionPx" value="<?php echo  $options['LI_TabPositionPx'] ?>" class="small-text" /> px from top of slider
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Button design</th>
    <td>
        <fieldset>
            <label for="LI_TabDesign1">
                <input name="LI_TabDesign" <?php echo  ($options['LI_TabDesign'] == 1 ? 'checked' : '' ) ?> type="radio" id="LI_TabDesign1" value="1" />
                <img src="<?php echo SN_URL.'img/li1-left.png'; ?>" />
            </label>
            <label for="LI_TabDesign2">
                <input name="LI_TabDesign" <?php echo  ($options['LI_TabDesign'] == 2 ? 'checked' : '' ) ?> type="radio" id="LI_TabDesign2" value="2" />
                <img src="<?php echo SN_URL.'img/li2-left.png'; ?>" />
            </label>
            <label for="LI_TabDesign3">
                <input name="LI_TabDesign" <?php echo  ($options['LI_TabDesign'] == 3 ? 'checked' : '' ) ?> type="radio" id="LI_TabDesign3" value="3" />
                <img src="<?php echo SN_URL.'img/li3-left.png'; ?>" />
            </label>
            <label for="LI_TabDesign6">
                <input name="LI_TabDesign" <?php echo  ($options['LI_TabDesign'] == 6 ? 'checked' : '' ) ?> type="radio" id="LI_TabDesign6" value="6" />
                <img src="<?php echo SN_URL.'img/li6-left.png'; ?>" />
            </label>
            <label for="LI_TabDesign7">
                <input name="LI_TabDesign" <?php echo  ($options['LI_TabDesign'] == 7 ? 'checked' : '' ) ?> type="radio" id="LI_TabDesign7" value="7" />
                <img src="<?php echo SN_URL.'img/li7-left.png'; ?>" />
            </label>
            <label for="LI_TabDesign8">
                <input name="LI_TabDesign" <?php echo  ($options['LI_TabDesign'] == 8 ? 'checked' : '' ) ?> type="radio" id="LI_TabDesign8" value="8" />
                <img src="<?php echo SN_URL.'img/li8-left.png'; ?>" />
            </label>
            <label for="LI_TabDesign9">
                <input name="LI_TabDesign" <?php echo  ($options['LI_TabDesign'] == 9 ? 'checked' : '' ) ?> type="radio" id="LI_TabDesign9" value="9" />
                <img src="<?php echo SN_URL.'img/li9-left.png'; ?>" />
            </label>
            <label for="LI_TabDesign10">
                <input name="LI_TabDesign" <?php echo  ($options['LI_TabDesign'] == 10 ? 'checked' : '' ) ?> type="radio" id="LI_TabDesign10" value="10" />
                <img src="<?php echo SN_URL.'img/li10-left.png'; ?>" />
            </label>
            <label for="LI_TabDesign11">
                <input name="LI_TabDesign" <?php echo  ($options['LI_TabDesign'] == 11 ? 'checked' : '' ) ?> type="radio" id="LI_TabDesign11" value="11" />
                <img src="<?php echo SN_URL.'img/li11-left.png'; ?>" />
            </label>
            <label for="LI_TabDesign12">
                <input name="LI_TabDesign" <?php echo  ($options['LI_TabDesign'] == 12 ? 'checked' : '' ) ?> type="radio" id="LI_TabDesign12" value="12" />
                <img src="<?php echo SN_URL.'img/li12-left.png'; ?>" />
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="LI_Border">Border width</label></th>
    <td><input name="LI_Border" type="text" id="LI_Border" value="<?php echo  $options['LI_Border'] ?>" class="small-text" /> px</td>
</tr>
<tr valign="top">
    <th scope="row"><label for="LI_BorderColor">Border color</label></th>
    <td>
        <input maxlength="7" name="LI_BorderColor" type="text" id="LI_BorderColor" value="<?php echo  $options['LI_BorderColor'] ?>" style="float: left; width: 170px;" class="small-text" /> (default: #e0e0e0)
        <div id="LI_BorderColorPreview" style="background-color: <?php echo  $options['LI_BorderColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="LI_BackgroundColor">Background color</label></th>
    <td>
        <input maxlength="7" name="LI_BackgroundColor" type="text" id="LI_BackgroundColor" value="<?php echo  $options['LI_BackgroundColor'] ?>" style="float: left; width: 170px;" class="small-text" /> (default: #000000)
        <div id="LI_BackgroundColorPreview" style="background-color: <?php echo  $options['LI_BackgroundColor'] ?>;float: left; margin-top: 3px; margin-left: 5px; margin-right: 5px; width: 17px; height: 17px;"></div>

    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="LI_ZIndex">CSS z-index</label></th>
    <td><input name="LI_ZIndex" type="text" id="LI_ZIndex" value="<?php echo  $options['LI_ZIndex'] ?>" class="small-text" /> (default: 1000)</td>
</tr>
</tbody>
</table>
</div>

</div>
<p class="submit">
    <input type="submit" name="submit" id="submit" class="button-primary" value="Save settings" />
</p>
</form>

<script type="text/javascript">
jQuery(function(){

    jQuery('#STabs').tabs();
    jQuery('#BorderColor').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            jQuery(el).ColorPickerHide();
        },
        onBeforeShow: function () {
            jQuery(this).ColorPickerSetColor(this.value);
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#BorderColor').val('#' + hex);
            jQuery('#BorderColorPreview').css('background-color', '#' + hex);
        }
    })
        .bind('keyup', function(){
            jQuery(this).ColorPickerSetColor(this.value);
        });
    jQuery('#BackgroundColor').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            jQuery(el).ColorPickerHide();
        },
        onBeforeShow: function () {
            jQuery(this).ColorPickerSetColor(this.value);
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#BackgroundColor').val('#' + hex);
            jQuery('#BackgroundColorPreview').css('background-color', '#' + hex);
        }
    })
        .bind('keyup', function(){
            jQuery(this).ColorPickerSetColor(this.value);
        });

    jQuery('#TW_Links').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            jQuery(el).ColorPickerHide();
        },
        onBeforeShow: function () {
            jQuery(this).ColorPickerSetColor(this.value);
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#TW_Links').val('#' + hex);
            jQuery('#TW_LinksPreview').css('background-color', '#' + hex);
        }
    })
        .bind('keyup', function(){
            jQuery(this).ColorPickerSetColor(this.value);
        });

    jQuery('#GP_BorderColor').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            jQuery(el).ColorPickerHide();
        },
        onBeforeShow: function () {
            jQuery(this).ColorPickerSetColor(this.value);
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#GP_BorderColor').val('#' + hex);
            jQuery('#GP_BorderColorPreview').css('background-color', '#' + hex);
        }
    })
        .bind('keyup', function(){
            jQuery(this).ColorPickerSetColor(this.value);
        });
    jQuery('#GP_BackgroundColor').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            jQuery(el).ColorPickerHide();
        },
        onBeforeShow: function () {
            jQuery(this).ColorPickerSetColor(this.value);
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#GP_BackgroundColor').val('#' + hex);
            jQuery('#GP_BackgroundColorPreview').css('background-color', '#' + hex);
        }
    })
        .bind('keyup', function(){
            jQuery(this).ColorPickerSetColor(this.value);
        });



    jQuery('#YT_BorderColor').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            jQuery(el).ColorPickerHide();
        },
        onBeforeShow: function () {
            jQuery(this).ColorPickerSetColor(this.value);
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#YT_BorderColor').val('#' + hex);
            jQuery('#YT_BorderColorPreview').css('background-color', '#' + hex);
        }
    })
        .bind('keyup', function(){
            jQuery(this).ColorPickerSetColor(this.value);
        });
    jQuery('#YT_BackgroundColor').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            jQuery(el).ColorPickerHide();
        },
        onBeforeShow: function () {
            jQuery(this).ColorPickerSetColor(this.value);
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#YT_BackgroundColor').val('#' + hex);
            jQuery('#YT_BackgroundColorPreview').css('background-color', '#' + hex);
        }
    })
        .bind('keyup', function(){
            jQuery(this).ColorPickerSetColor(this.value);
        });
    jQuery('#LI_BorderColor').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            jQuery(el).ColorPickerHide();
        },
        onBeforeShow: function () {
            jQuery(this).ColorPickerSetColor(this.value);
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#LI_BorderColor').val('#' + hex);
            jQuery('#LI_BorderColorPreview').css('background-color', '#' + hex);
        }
    })
        .bind('keyup', function(){
            jQuery(this).ColorPickerSetColor(this.value);
        });
    jQuery('#LI_BackgroundColor').ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            jQuery(el).ColorPickerHide();
        },
        onBeforeShow: function () {
            jQuery(this).ColorPickerSetColor(this.value);
        },
        onChange: function (hsb, hex, rgb) {
            jQuery('#LI_BackgroundColor').val('#' + hex);
            jQuery('#LI_BackgroundColorPreview').css('background-color', '#' + hex);
        }
    })
        .bind('keyup', function(){
            jQuery(this).ColorPickerSetColor(this.value);
        });
});
</script></div>