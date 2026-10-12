<?php
if(!defined('ABSPATH'))exit;
function shams_register_cars_cpt(){
  register_post_type('shams_car',array('labels'=>array('name'=>'Cars','singular_name'=>'Car','menu_name'=>'Cars','add_new'=>'Add New Car','add_new_item'=>'Add New Car','edit_item'=>'Edit Car'),'public'=>true,'has_archive'=>true,'menu_icon'=>'dashicons-car','supports'=>array('title','editor','thumbnail','excerpt'),'rewrite'=>array('slug'=>'cars'),'show_in_rest'=>true));
}
add_action('init','shams_register_cars_cpt');
function shams_register_apartments_cpt(){
  register_post_type('shams_apartment',array('labels'=>array('name'=>'Apartments','singular_name'=>'Apartment','menu_name'=>'Apartments','add_new'=>'Add New Apartment'),'public'=>true,'has_archive'=>true,'menu_icon'=>'dashicons-building','supports'=>array('title','editor','thumbnail','excerpt'),'rewrite'=>array('slug'=>'apartments'),'show_in_rest'=>true));
}
add_action('init','shams_register_apartments_cpt');
function shams_register_bundles_cpt(){
  register_post_type('shams_bundle',array('labels'=>array('name'=>'Bundles','singular_name'=>'Bundle','menu_name'=>'Bundles','add_new'=>'Add New Bundle'),'public'=>true,'has_archive'=>true,'menu_icon'=>'dashicons-archive','supports'=>array('title','editor','thumbnail','excerpt'),'rewrite'=>array('slug'=>'bundles'),'show_in_rest'=>true));
}
add_action('init','shams_register_bundles_cpt');
function shams_car_meta_boxes(){add_meta_box('shams_car_details','Car Details','shams_car_details_callback','shams_car','normal','high');}
add_action('add_meta_boxes','shams_car_meta_boxes');
function shams_car_details_callback($post){
  wp_nonce_field('shams_car_details','shams_car_details_nonce');
  $price=get_post_meta($post->ID,'_shams_car_price',true);$seats=get_post_meta($post->ID,'_shams_car_seats',true);
  $trans=get_post_meta($post->ID,'_shams_car_transmission',true);$fuel=get_post_meta($post->ID,'_shams_car_fuel_type',true);
  $type=get_post_meta($post->ID,'_shams_car_type',true);
  echo '<table class="form-table">';
  echo '<tr><th><label>Price/day (€)</label></th><td><input type="number" name="shams_car_price" value="'.esc_attr($price).'" class="regular-text"/></td></tr>';
  echo '<tr><th><label>Seats</label></th><td><input type="number" name="shams_car_seats" value="'.esc_attr($seats).'" class="regular-text"/></td></tr>';
  echo '<tr><th><label>Transmission</label></th><td><select name="shams_car_transmission"><option value="automatic"'.selected($trans,'automatic',false).'>Automatic</option><option value="manual"'.selected($trans,'manual',false).'>Manual</option></select></td></tr>';
  echo '<tr><th><label>Fuel</label></th><td><select name="shams_car_fuel_type">';
  foreach(array('petrol','diesel','hybrid','electric') as $f)echo '<option value="'.$f.'"'.selected($fuel,$f,false).'>'.ucfirst($f).'</option>';
  echo '</select></td></tr>';
  echo '<tr><th><label>Type</label></th><td><select name="shams_car_type">';
  foreach(array('Sedan','SUV','Sports Car','Luxury','Electric') as $t)echo '<option value="'.$t.'"'.selected($type,$t,false).'>'.$t.'</option>';
  echo '</select></td></tr></table>';
}
function shams_save_car_meta($post_id){
  if(!isset($_POST['shams_car_details_nonce'])||!wp_verify_nonce($_POST['shams_car_details_nonce'],'shams_car_details'))return;
  if(defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE)return;if(!current_user_can('edit_post',$post_id))return;
  foreach(array('shams_car_price','shams_car_seats','shams_car_transmission','shams_car_fuel_type','shams_car_type') as $f)
    if(isset($_POST[$f]))update_post_meta($post_id,'_'.$f,sanitize_text_field($_POST[$f]));
}
add_action('save_post_shams_car','shams_save_car_meta');
function shams_apartment_meta_boxes(){add_meta_box('shams_apt_details','Apartment Details','shams_apt_details_callback','shams_apartment','normal','high');}
add_action('add_meta_boxes','shams_apartment_meta_boxes');
function shams_apt_details_callback($post){
  wp_nonce_field('shams_apt_details','shams_apt_details_nonce');
  $price=get_post_meta($post->ID,'_shams_apt_price',true);$beds=get_post_meta($post->ID,'_shams_apt_beds',true);
  $baths=get_post_meta($post->ID,'_shams_apt_bathrooms',true);$guests=get_post_meta($post->ID,'_shams_apt_guests',true);
  $loc=get_post_meta($post->ID,'_shams_apt_location',true);$type=get_post_meta($post->ID,'_shams_apt_type',true);
  echo '<table class="form-table">';
  echo '<tr><th><label>Price/night (€)</label></th><td><input type="number" name="shams_apt_price" value="'.esc_attr($price).'" class="regular-text"/></td></tr>';
  echo '<tr><th><label>Beds</label></th><td><input type="number" name="shams_apt_beds" value="'.esc_attr($beds).'" class="regular-text"/></td></tr>';
  echo '<tr><th><label>Bathrooms</label></th><td><input type="number" name="shams_apt_bathrooms" value="'.esc_attr($baths).'" class="regular-text"/></td></tr>';
  echo '<tr><th><label>Max guests</label></th><td><input type="number" name="shams_apt_guests" value="'.esc_attr($guests).'" class="regular-text"/></td></tr>';
  echo '<tr><th><label>Location</label></th><td><input type="text" name="shams_apt_location" value="'.esc_attr($loc).'" class="regular-text"/></td></tr>';
  echo '<tr><th><label>Type</label></th><td><select name="shams_apt_type">';
  foreach(array('Apartment','Hotel','Villa') as $t)echo '<option value="'.$t.'"'.selected($type,$t,false).'>'.$t.'</option>';
  echo '</select></td></tr></table>';
}
function shams_save_apt_meta($post_id){
  if(!isset($_POST['shams_apt_details_nonce'])||!wp_verify_nonce($_POST['shams_apt_details_nonce'],'shams_apt_details'))return;
  if(defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE)return;if(!current_user_can('edit_post',$post_id))return;
  foreach(array('shams_apt_price','shams_apt_beds','shams_apt_bathrooms','shams_apt_guests','shams_apt_location','shams_apt_type') as $f)
    if(isset($_POST[$f]))update_post_meta($post_id,'_'.$f,sanitize_text_field($_POST[$f]));
}
add_action('save_post_shams_apartment','shams_save_apt_meta');
add_action('after_switch_theme',function(){shams_register_cars_cpt();shams_register_apartments_cpt();shams_register_bundles_cpt();flush_rewrite_rules();});
