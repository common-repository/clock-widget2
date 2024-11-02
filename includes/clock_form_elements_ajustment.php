<?php


// Init all checkboxes in form
    function Init_CheckBoxes($instance){

// Set variable if not defined (alway will have value on:false )
     $instance['faceflare']=Init_Checked_Field($instance['faceflare']);
     $instance['bodyflare']=Init_Checked_Field($instance['bodyflare']);

     return($instance);

    }







































// Set clock face flare
function  Set_Clock_Face_Flare($obj_var,$instance){

 global $Clock_faceflare;

 Print_CheckBox_Form_Element('Clock face flare:','faceflare',$Clock_faceflare,$obj_var,$instance);

}






































// Set clock body flare
function  Set_Clock_Body_Flare($obj_var,$instance){
 global $Clock_bodyflare;

// Output select element
 Print_CheckBox_Form_Element('Clock body flare:','bodyflare',$Clock_bodyflare,$obj_var,$instance);

}






































// Set Clock hours style 12/24
function  Set_Clock_Hours_Style($obj_var,$instance){

 global $Clock_Hours_Style;

// Output select element
 Print_Select_Form_Element('Clock hours style:','time_style',$Clock_Hours_Style,$obj_var,$instance);

}













































// Set clock type
function  Set_Clock_Type($obj_var,$instance){

 global $‘lock_Type;

// Output select element
 Print_Select_Form_Element('Clock type:','clock_type',$‘lock_Type,$obj_var,$instance);

}






























// Set clock time zones
function  Set_Clock_Time_Property($obj_var,$instance){

 global $Time_Zones;

// Output select element
 Print_Select_Form_Element('Clock Time Property:','gmt',$Time_Zones,$obj_var,$instance,' style="width:330px;"');

}




















     












// Set Flash Clock Background image
function  Set_Clock_Background_image_Style($obj_var,$instance){

 global $‘lock_background_Image;

// Output select element
 Print_Select_Form_Element('Country flag catalog:','imagearray',$‘lock_background_Image,$obj_var,$instance,' style="width:330px;"');

}


?>