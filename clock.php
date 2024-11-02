<?php
/*
Plugin Name: Clock
Description: This is easy widget that displays your analog or digital clock in your sidebar.
Author: Andrew Kovalev
Version: 1.3.1.1
Author URI: http://www.opensourceinitiative.net
Plugin URI: http://www.opensourceinitiative.net
*/





// form function script
include('includes/Clock_Data.php');
include('includes/form_framework.php');
include('includes/clock_form_elements_ajustment.php');
include('includes/Utility.php');
include('colorpicker.php');








function my_init_method() {

// Include color picker farbtastic script
  wp_enqueue_script('jquery');
  wp_enqueue_style( 'farbtastic' );
  wp_enqueue_script( 'farbtastic' );
}    






























class Clock extends WP_Widget
{
 /**
  * Declares the Clock class.
  *
  */
    function Clock(){
    $widget_ops = array('classname' => 'widget_clock', 'description' => __( "This is advanced digital/analog clock") );
    $control_ops = array('width' => 300, 'height' => 300);
    $this->WP_Widget('Clock', __('Clock'), $widget_ops, $control_ops);
    }






























/**
  * Displays the Widget
  *
  */
function widget($args, $instance) {
extract( $args );

global $Form_Elements_Array;



// Output title of widget
echo $before_title
. $instance['title']
. $after_title;

















//  Show clock
Output_Clock($instance);
}
























  /**
    * Saves the widgets settings.
    *
    */
/*
    function update($new_instance, $old_instance){

     return $new_instance;
  }
  */



  function update( $new_instance, $old_instance ) {

//    $instance = $old_instance;


    $instance['title'] =$new_instance['title'];
    $instance['clock_type'] =$new_instance['clock_type'];
    $instance['width'] =$new_instance['width'];
    $instance['height'] =$new_instance['height'];
    $instance['time_style'] =$new_instance['time_style'];
    $instance['bodyflare'] =$new_instance['bodyflare'];
    $instance['faceflare'] =$new_instance['faceflare'];
    $instance['gmt'] =$new_instance['gmt'];
    $instance['bodycolor'] =$new_instance['bodycolor'];
    $instance['facecolor'] =$new_instance['facecolor'];
    $instance['numeralcolor'] =$new_instance['numeralcolor'];
    $instance['scolor'] =$new_instance['scolor'];
    $instance['imagearray'] =$new_instance['imagearray'];


   return $instance;
  }






















  /**
    * Creates the edit form for the widget.
    *
    */
    function form($instance){

// Output farbtastic color picker script
     ColorPickerScript($this);

     global $Form_Elements_Array;

      //Defaults
     $instance = wp_parse_args( (array) $instance, $Form_Elements_Array );

     //  Output form element 
     Print_Text_Form_Element($this, $instance, 'title', 'Title:');
     Print_Text_Form_Element($this, $instance, 'width', 'Width:');
     Print_Text_Form_Element($this, $instance, 'height', 'Hidth:');

     // Set Clock type (analog,digital)
     Set_Clock_Type($this,$instance);

        // Set clock face & body flare
     Set_Clock_Body_Flare($this,$instance);
     Set_Clock_Face_Flare($this,$instance);

     // Set Clock hours style 12/24
     Set_Clock_Hours_Style($this,$instance);

     // Set Flash Time 
     Set_Clock_Time_Property($this,$instance);

     // Set Flash Clock Background image
     Set_Clock_Background_image_Style($this,$instance);


     // Output color picker line
     Output_color_picker_line($this,$instance);








  }

}// END class





















/**
  * Register Clock widget.
  *
  * Calls 'widgets_init' action after the Clock widget has been registered.
  */
  function ClockInit() {
  register_widget('Clock');
  }




  add_action('widgets_init', 'ClockInit');
  add_action('init',         'my_init_method');
?>