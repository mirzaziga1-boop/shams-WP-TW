<?php
if(!defined('ABSPATH'))exit;
function shams_theme_options_menu(){
  add_menu_page('Shams Theme Options','Shams Options','manage_options','shams-theme-options','shams_theme_options_page','dashicons-admin-customizer',30);
}
add_action('admin_menu','shams_theme_options_menu');
function shams_register_settings(){
  foreach(array('shams_home_title','shams_home_subtitle','shams_hero_car_image','shams_hero_hotel_image','shams_hero_apartment_image','shams_luxury_car_image','shams_phone_number','shams_email_address','shams_address','shams_working_hours') as $o)register_setting('shams_options_group',$o);
}
add_action('admin_init','shams_register_settings');
function shams_theme_options_page(){
  if(!current_user_can('manage_options'))return;
  ?>
  <div class="wrap"><h1>Shams Al Bosnia - Theme Options</h1><p>Edit your homepage content, contact info, and other settings here.</p>
  <form method="post" action="options.php"><?php settings_fields('shams_options_group'); ?>
  <h2>Homepage</h2><table class="form-table">
  <tr><th>Hero Title</th><td><input type="text" name="shams_home_title" value="<?php echo esc_attr(get_option('shams_home_title','Explore Bosnia and Herzegovina')); ?>" class="regular-text"/></td></tr>
  <tr><th>Hero Subtitle</th><td><input type="text" name="shams_home_subtitle" value="<?php echo esc_attr(get_option('shams_home_subtitle','Your refined gateway to the beauty of Bosnia and Herzegovina')); ?>" class="regular-text"/></td></tr>
  <tr><th>Hero: Rent a Car Image URL</th><td><input type="url" name="shams_hero_car_image" value="<?php echo esc_attr(get_option('shams_hero_car_image','')); ?>" class="regular-text"/></td></tr>
  <tr><th>Hero: Book Hotel Image URL</th><td><input type="url" name="shams_hero_hotel_image" value="<?php echo esc_attr(get_option('shams_hero_hotel_image','')); ?>" class="regular-text"/></td></tr>
  <tr><th>Hero: Rent Apartment Image URL</th><td><input type="url" name="shams_hero_apartment_image" value="<?php echo esc_attr(get_option('shams_hero_apartment_image','')); ?>" class="regular-text"/></td></tr>
  <tr><th>Luxury Car Image URL</th><td><input type="url" name="shams_luxury_car_image" value="<?php echo esc_attr(get_option('shams_luxury_car_image','')); ?>" class="regular-text"/></td></tr>
  </table>
  <h2>Contact Info</h2><table class="form-table">
  <tr><th>Phone</th><td><input type="text" name="shams_phone_number" value="<?php echo esc_attr(get_option('shams_phone_number','+387 61 228 100')); ?>" class="regular-text"/></td></tr>
  <tr><th>Email</th><td><input type="email" name="shams_email_address" value="<?php echo esc_attr(get_option('shams_email_address','info@shamsalbosnia.com')); ?>" class="regular-text"/></td></tr>
  <tr><th>Address</th><td><input type="text" name="shams_address" value="<?php echo esc_attr(get_option('shams_address','Milana Perloga 14a, Sarajevo 71000, Bosnia & Herzegovina')); ?>" class="regular-text"/></td></tr>
  <tr><th>Hours</th><td><input type="text" name="shams_working_hours" value="<?php echo esc_attr(get_option('shams_working_hours','Monday – Sunday: 08:00 – 20:00')); ?>" class="regular-text"/></td></tr>
  </table>
  <?php submit_button('Save Changes'); ?>
  </form>
  <h2>Adding Cars & Apartments</h2>
  <ol><li>Go to <strong>Cars</strong> or <strong>Apartments</strong> in left menu</li>
  <li>Click <strong>Add New</strong></li>
  <li>Fill in details (title, description, image, price, specs)</li>
  <li>Click <strong>Publish</strong></li></ol>
  <h2>Language Switching</h2>
  <p>Use ?lang=en|bs|ar in URL. Click globe icon in header to switch.</p>
  </div><?php
}
