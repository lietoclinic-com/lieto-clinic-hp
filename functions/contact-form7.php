<?php
//----------------------------------------------------
// Contact Form 7の設定
//----------------------------------------------------
// 無駄なp,brタグを削除
function wpcf7_autop_return_false() {
  return false;
} 
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');


// CF7で<input type=time>を使用
function custom_add_form_tag_time() {
  wpcf7_add_form_tag('timestart', 'custom_timestart_form_tag_handler');
  wpcf7_add_form_tag('timeend', 'custom_timeend_form_tag_handler');
  wpcf7_add_form_tag('birthdate', 'custom_birthdate_form_tag_handler');
}
add_action( 'wpcf7_init', 'custom_add_form_tag_time');

function custom_timestart_form_tag_handler( $tag ) {
  $name = $tag->options[0];
  return "<input type='time' list='data-list' name=$name step='1800'><datalist id='data-list'><option value='10:00'></option><option value='10:30'></option><option value='11:00'></option><option value='11:30'></option><option value='12:00'></option><option value='12:30'></option><option value='13:00'></option><option value='13:30'></option><option value='14:00'></option><option value='14:30'></option><option value='15:00'></option><option value='15:30'></option><option value='16:00'></option><option value='16:30'></option><option value='17:00'></option><option value='17:30'></option><option value='18:00'></option><option value='18:30'></option><option value='19:00'></option><option value='19:30'><option value='20:00'></option></datalist>";
}

function custom_timeend_form_tag_handler( $tag ) {
  $name = $tag->options[0];
  return "<input type='time' list='data-list' name=$name step='1800'><datalist id='data-list'><option value='10:00'><option value='10:30'></option><option value='11:00'></option><option value='11:30'></option><option value='12:00'></option><option value='12:30'></option><option value='13:00'></option><option value='13:30'></option><option value='14:00'></option><option value='14:30'></option><option value='15:00'></option><option value='15:30'></option><option value='16:00'></option><option value='16:30'></option><option value='17:00'></option><option value='17:30'></option><option value='18:00'></option><option value='18:30'></option><option value='19:00'></option><option value='19:30'></option><option value='20:00'></datalist>";
}

function custom_birthdate_form_tag_handler( $tag ) {
  $name = $tag->options[0];
  return '<input type="time" name="'.$name.'" step="1800">';
}
