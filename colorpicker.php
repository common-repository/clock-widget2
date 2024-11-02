<?php 

// Convert #5e19e6 to 0x0066ff format
function convert_color_for_flash_clock($color){

 $var1=str_replace("#", "0x", $color);

 return($var1);

}












































// Translate color
// function 



// Output AJAX color picker script 
function ColorPickerScript($obj_var){
$color_id=$obj_var->get_field_id('color');


echo <<<EOF

<!-- This is styles for color picker -->
<style type="text/css" media="screen"> 
   .colorwell {
     border: 2px solid #fff;
     width: 6em;
     text-align: center;
     cursor: pointer;
   }
   body .colorwell-selected {
     border: 2px solid #000;
     font-weight: bold;
   }
 </style> 






<script>
var j = jQuery.noConflict(); 

 


   j(document).ready(function() {
    j('#demo').hide();
    var f = j.farbtastic('#picker');
    var p = j('#picker').css('opacity', 0.25);
    var selected;
    j('.colorwell')
      .each(function () { f.linkTo(this); j(this).css('opacity', 0.75); })
      .focus(function() {
        if (selected) {
          j(selected).css('opacity', 0.75).removeClass('colorwell-selected');
        }
        f.linkTo(this);
        p.css('opacity', 1);
        j(selected = this).css('opacity', 1).addClass('colorwell-selected');
      });
  });

</script>
EOF;
}






































// Show color picker div for select color
function Output_Color_Picker_Div($obj_var,$instance,$element_name,$Text_Prompt){

// Get parameters of item - id,name,value
$id=$obj_var->get_field_id($element_name);
$name=$obj_var->get_field_name($element_name);
$value=$instance[$element_name];

// Output color picker div
echo <<<EOF
<div class="form-item">
 <label for="$id">$Text_Prompt</label>
 <input type="text" id="$id" name="$name" class="colorwell" value="$value" />
</div>
EOF;


}






































// this function output color picker line
function Output_color_picker_line($obj_var,$instance){


//    <label for="{$obj_var->get_field_id('color')}"><input type="text" id="{$obj_var->get_field_id('color')}" name="{$obj_var->get_field_name('color')}" value="{$instance['color']}" /> Pick link color</label>

echo <<<EOF
</table>
<tr valign="top">
  <th scope="row">
    <h3>Colors</h3>
    <small>Click on each field to display the color picker.</small>
  </th>
  <td>
<!-- Show pack of color setters -->
 <div id="picker" style="float: right;"></div> 
EOF;

// Output some colorpickers input fields
 Output_Color_Picker_Div($obj_var,$instance,'bodycolor','Body color:');
 Output_Color_Picker_Div($obj_var,$instance,'facecolor','Face background color:');
 Output_Color_Picker_Div($obj_var,$instance,'numeralcolor','Clock-face color:');
 Output_Color_Picker_Div($obj_var,$instance,'scolor','Second hand color:');

echo <<<EOF
  </td>
</tr>
</table>
EOF;
}

?>