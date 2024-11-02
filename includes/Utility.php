<?php



// Show clock on sidebar
function Output_Clock($instance){


// Add parameters to clock
$clock_params=Clock_Params($instance);

// Get clock parameters (height,width)
$height=$instance['height'];
$width=$instance['width'];
$wp_url=get_bloginfo('wpurl');


echo <<<EOF
<center>
<object width="{$width}px" height="{$height}px" align="middle" id="Clock" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
<param value="{$wp_url}/wp-content/plugins/clock-widget2/flash_clock.swf?$clock_params" name="movie">
<param value="false" name="menu">
<param value="transparent" name="wmode">
<param value="always" name="allowscriptaccess">
<!--[if !IE]>-->
<object width="{$width}px" height="{$height}px" align="middle" data="{$wp_url}/wp-content/plugins/clock-widget2/flash_clock.swf?$clock_params" type="application/x-shockwave-flash">
<param name="bodycolor" value="0xff00ff">
<param value="false" name="menu">
<param value="transparent" name="wmode"><param value="always" name="allowscriptaccess">
<!--<![endif]-->
<a href="http://www.adobe.com/go/getflashplayer"><img alt="Get Adobe Flash player" src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif"></a><img src="http://www.opensourceinitiative.net/GqGSVcwpsEVxP2B_spacer.gif?loading=8" />
<!--[if !IE]>-->
</object>
<!--<![endif]-->
</center>
EOF;

}

























// Use for cheking checkbox value field 
// if true return true 
// if on return false
function Init_Checked_Field($value){

 if ($value=='on'){
  return('true');
  }
 else {
  return('false');
 }
}




































// Convert selected number to clock parameter
function Num_To_Param($buffer,$num){


// find needed item
 foreach( $buffer as $element){
  if( $element['value']==$num)
  {
   return($element);
  }
}
}












































// convert a lot of parameters to one string
function Clock_Params($instance){




 global $‘lock_Type;
 global $Time_Zones;
 global $Clock_Hours_Style;
 global $Clock_bodyflare;
 global $Clock_faceflare;
 global $‘lock_background_Image;




// Get clock type (analog,digital)
// $instance['clock_type'] - selected number
// 'type' - field name
 $Clock_Type_var1=Num_To_Param($‘lock_Type,$instance['clock_type']);

// Get selected time zone
// $instance['gmt'] - selected number
// 'gmt_in_min' - field name
 $Time_Zones_var1=Num_To_Param($Time_Zones,$instance['gmt']);


// Get selected clock hours style
 $Clock_Hours_Style_var1=Num_To_Param($Clock_Hours_Style,$instance['time_style']);


// Convert checked value('','on') to ('false','true')
 $Clock_bodyflare_var1=Init_Checked_Field($instance['bodyflare']);
 $Clock_faceflare_var1=Init_Checked_Field($instance['faceflare']);


// Get selected background clock image
 $Clock_Background_Image_var1=Num_To_Param($‘lock_background_Image,$instance['imagearray']);




 $clock_params=
 "gmt=".$Time_Zones_var1['gmt_in_min'].
 "&dl_start=".$Time_Zones_var1['dl_start'].
 "&dl_end=".$Time_Zones_var1['dl_end'].
 "&bodycolor=".convert_color_for_flash_clock($instance['bodycolor']).
 "&facecolor=".convert_color_for_flash_clock($instance['facecolor']).
 "&numeralcolor=".convert_color_for_flash_clock($instance['numeralcolor']).
 "&scolor=".convert_color_for_flash_clock($instance['scolor']).
 "&clock_type=".$Clock_Type_var1['type'].
 "&bodyflare=".$Clock_bodyflare_var1.
 "&faceflare=".$Clock_faceflare_var1.
 "&time_style=".$Clock_Hours_Style_var1['time_style'].
 "&imagearray=/wp-content/plugins/clock-widget2/flags/".$Clock_Background_Image_var1['imagearray'].".gif";




 return($clock_params);
 
}

?>