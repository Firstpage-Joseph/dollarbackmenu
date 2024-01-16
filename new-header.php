<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class NewHeader extends Widget_Base{

  public function get_name(){
    return 'newheader';
  }

  public function get_title(){
    return 'New Header';
  }

  public function get_icon(){
    return 'dbcon db-Asset-80';
  }

  public function get_categories(){
    return ['custom'];
  }

  protected function _register_controls(){

    $this->start_controls_section( //add control section
      'section_content',
      [
        'label' => 'New Header',
      ]
    );

    $this->add_control(
      'btn_text',
      [
        'label' => __( 'Button Text', 'elementor' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __( 'Contact', 'elementor' ),
        'label_block' => true,
      ]
    );

    $this->add_control(
      'btn_link',
      [
        'label' => __( 'Link', 'plugin-domain' ),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
        'show_external' => true,
        'default' => [
          'url' => '#',
          'is_external' => false,
          'nofollow' => true,
        ],
        'show_label' => false,
        // 'separator' => 'after',
      ]
    );

    $this->add_control(
      'whatsapp',
      [
        'label' => __( 'Whatsapp Number ', 'elementor' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __( '', 'elementor' ),
        'label_block' => true,
        'placeholder' => 'eg: 6598765432',
      ]
    );

    $this->end_controls_section();

  }
  

  protected function render() {
    $settings = $this->get_settings_for_display();


if (get_the_ID() == 9){ // home
    $clas = '<div class="breadcrumb-nav grey">'; 
} elseif(get_the_ID() == 13){ // about us
    $clas = '<div class="breadcrumb-nav grey">';
} elseif(get_the_ID() == 15){ // rewards
    $clas = '<div class="breadcrumb-nav grey">';
} elseif(get_the_ID() == 17){ // New HDB Loan
    $clas = '<div class="breadcrumb-nav grey">';
} elseif(get_the_ID() == 19){ // New Private Property Loan
    $clas = '<div class="breadcrumb-nav grey">';
} elseif(get_the_ID() == 21){ // Refinance HDB Loan
    $clas = '<div class="breadcrumb-nav grey">';
} elseif(get_the_ID() == 24){ // Refinance Private Property Loan
    $clas = '<div class="breadcrumb-nav grey">';
} elseif(get_the_ID() == 26){ // Equity / Cashout Housing Loan
    $clas = '<div class="breadcrumb-nav grey">';
} elseif(get_the_ID() == 28){ // In Principle Approval Housing Loan
    $clas = '<div class="breadcrumb-nav grey">';
} elseif(get_the_ID() == 32){ // Property Conveyancing 
    $clas = '<div class="breadcrumb-nav grey">';
} elseif(get_the_ID() == 40){ // Privacy Policy
    $clas = '<div class="breadcrumb-nav">';
} elseif(get_the_ID() == 38){ // Terms & Conditions
    $clas = '<div class="breadcrumb-nav">';
} elseif(get_the_ID() == 34){ // Blog
    $clas = '<div class="breadcrumb-nav">';
} elseif(get_the_ID() == 36){ // Contact Us
    $clas = '<div class="breadcrumb-nav grey">';
}
else {
    $clas = '<div class="breadcrumb-nav">';
}

?>
<!-- START OF SECTION -->
<a href="https://wa.me/6592986367" target="_blank" class="whatsapp-fixed w-inline-block"><img src="https://staging4.dollarbackmortgage.com/wp-content/webp-express/webp-images/themes/dollarback/assets/images/WhatsApp_Logo_2.png.webp" width="50" height="50" alt=""></a>
<div class="nav-new-wrapper">
<div class="menu-row">
    <div class="menu-box">
      <a href="<?php echo site_url(); ?>" aria-current="page" class="nav-logo-2 w-inline-block w--current"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dollarback-logo.png" width="180" height="68" sizes="(max-width: 479px) 150px, 180px" alt="" class="image-16"></a>
        <?php
                $args = array(
                    'menu' => 'Main Menu',
                    'menu_class' => 'menu',
                    'container' => 'div',
                    'container_class' => '',
                    'container_id' => 'mainmenu',
                    'walker'            => new \FpdMenuWalker,
                );
                wp_nav_menu( $args );
        ?>
    </div>
  </div>
</div>
<!-- END OF SECTION -->

<style>
.breadcrumb-nav {
  margin-top: 0;
}

.nav-new-wrapper {
  background-color: #163651;
}
.menu-row {
  padding: 0;
  margin: 0 auto;
  max-width: 1230px;
  font-family: "Inter", sans-serif;
}

#mainmenu ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
#mainmenu ul li {
  font-size: 18px;
  margin-bottom: 0;
}
#mainmenu ul li a {
  text-decoration: none;
  color: #ffffff;
  font-size: 15px;
  padding: 6px 12px;
  text-transform: uppercase;
  display: inline-block;
  transition: 350ms all;
  width: 100%;
}
#mainmenu ul li a:hover {
  color: #20bf55;
}

.menu-box {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  background: #163651;
  position: relative;
}
.menu-box .logo {
  max-width: 140px;
}
.menu-box .logo img {
  width: 100%;
}

.menu {
  display: flex;
  flex-wrap: wrap;
  padding: 0;
}

.menu li {
  margin-right: 22px;
}

@media only screen and (min-width: 1024px) {

  #menu-item-6598 a {
  border-style: solid;
  border-color: #20bf55;
  border-radius: 4px;
  background-color: #20bf55;
  color: #fff;
}

#menu-item-6598 a:hover {
  border-style: solid;
  border-color: #f2fcff;
  background-color: #163651;
}

  .menu {
    display: flex !important;
  }
  .menu .megamenu > a:after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 100%;
    height: 28px;
    display: none;
  }
  .menu .megamenu > a:hover:after {
    display: block;
  }
  .menu li .sub-menu {
    transition: 350ms all;
  }
  .menu li:hover > .sub-menu {
    transform: translateY(0);
    opacity: 1;
    visibility: visible;
  }
  .menu li.megamenu > a {
    padding-right: 20px;
    position: relative;
  }
  .menu li.megamenu > a:before {
    content: "";
    position: absolute;
    right: 0;
    top: 13px;
    height: 5px;
    width: 5px;
    border-right: 2px solid #ffffff;
    border-bottom: 2px solid #ffffff;
    transform: rotate(45deg);
  }
  .menu li .sub-menu {
    position: absolute;
    top: 100%;
    transform: translateY(50px);
    opacity: 0;
    visibility: hidden;
    background: #f2fcff;
  }
  .menu li .sub-menu li {
    margin-right: 0;
    font-size: 16px;
    position: relative;
  }
  .menu li .sub-menu li a {
    color: #163651 !important;
    padding: 15px 20px !important;
    display: block;
  }
  .menu li .sub-menu li a:before {
    right: 15px;
    transform: rotate(-45deg);
  }
  .menu li .sub-menu li a:hover {
    background: #20bf55;
    color: #ffffff !important;
  }
  .menu li .sub-menu .sub-menu {
    position: absolute;
    left: 100%;
    top: 0;
    min-width: 230px;
  }
}
@media only screen and (max-width: 1023px) {
  #menu_trigger {
    height: 22px;
    width: 30px;
    display: inline-block;
  }
  #menu_trigger .menulines {
    margin-top: 9px;
    position: relative;
    display: block;
  }
  #menu_trigger .menulines, #menu_trigger .menulines:before, #menu_trigger .menulines:after {
    content: "";
    height: 2px;
    width: 30px;
    border-radius: 5px;
    background: #ffffff;
  }
  #menu_trigger .menulines:before, #menu_trigger .menulines:after {
    position: absolute;
    left: 0;
  }
  #menu_trigger .menulines:before {
    top: -9px;
  }
  #menu_trigger .menulines:after {
    top: 9px;
  }
  .mobile-menu {
    display: none;
    position: absolute;
    min-height: 300px;
    left: 0;
    right: 0;
    top: 100%;
    background: #163651;
    overflow: hidden;
  }
  .mobile-menu ul {
    transition: 350ms all;
    display: inline;
  }
  .mobile-menu li {
    margin: 0;
    border-bottom: 1px solid #1b4365;
    font-size: 16px;
  }
  .mobile-menu li a {
    color: #ffffff;
    display: block;
    position: relative;
    padding: 15px 20px;
  }
  .mobile-menu li a:hover {
    color: #20bf55;
  }
  .mobile-menu li a .navtrigger {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    width: 30px;
    background: #1a4161;
    border: 1px solid #1b4365;
  }
  .mobile-menu li a .navtrigger:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    height: 8px;
    width: 8px;
    border-right: 2px solid #ffffff;
    border-bottom: 2px solid #ffffff;
    transform: translate(-50%, -50%) rotate(-45deg);
  }
  .mobile-menu li .sub-menu {
    position: absolute;
    top: 0;
    left: 100%;
    width: 100%;
    background: #163651;
    height: 100%;
    transition: 350ms all;
    z-index: 1;
    min-height: 300px;
  }
  .mobile-menu li .sub-menu li {
    font-size: 14px;
  }
  .mobile-menu li .sub-menu .backmenu-row {
    position: relative;
    padding: 20px;
    padding-left: 50px;
    background: #163651;
    font-size: 16px;
  }
  .mobile-menu li .sub-menu .backmenu-row .back-trigger {
    padding: 0;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 30px;
    display: block;
    background: #1a4161;
    border: 1px solid #1b4365;
  }
  .mobile-menu li .sub-menu .backmenu-row .back-trigger:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    height: 8px;
    width: 8px;
    border-right: 2px solid #ffffff;
    border-bottom: 2px solid #ffffff;
    transform: translate(-50%, -50%) rotate(135deg);
  }
  .mobile-menu li .sub-menu .backmenu-row em {
    font-style: normal;
    color: #ffffff;
  }
  .mobile-menu li.sub-open > .sub-menu {
    left: 0;
  }
}
.page-hero {
    margin-top: 0 !important;
}
#mainmenu {
  display: none;
}
</style>
<script>
jQuery(document).ready(function(){
  // Add class on parent which 'li' children has submenu
  jQuery('ul.sub-menu').parents('li').addClass('megamenu');
  jQuery('#mainmenu').show();
  //Menu ICon Append prepend for responsive
  jQuery(window).on('resize', function(){
    if (jQuery(window).width() < 1024) {
      if(!jQuery('#menu_trigger').length){
        jQuery('#mainmenu').prepend('<a href="#" id="menu_trigger" class="menulines-button"><span class="menulines"></span></a>');
      }
      if(!jQuery('.navtrigger').length){
        jQuery('.megamenu > a').append('<span class="navtrigger"></span>')
      }
      if(!jQuery('.mobile-menu').length){
        jQuery('.menu').wrap('<div class="mobile-menu"></div>')
      }
      if(!$('.sub-menu > .backmenu-row').length){
        jQuery('.sub-menu').each(function(){
          var subvalue = jQuery(this).prev('a').text();
          //$(this).prepend('<a href="#" class="back-trigger">'+subvalue+'</a>');
          jQuery(this).prepend('<div class="backmenu-row"><a href="#" class="back-trigger"></a><em>'+subvalue+'</em></div>');
        });
      }
    } else {
      jQuery("#menu_trigger").remove();
      jQuery('.navtrigger').remove();
      jQuery('.menu').unwrap('.mobile-menu');
      jQuery('.back-trigger').remove();
      jQuery('.back-trigger').remove();
    }
  }).resize();
  
  // Mobile menu on click open
  jQuery(document).on('click',"#menu_trigger", function(){
    if(jQuery('.megamenu').hasClass("sub-open")){
      jQuery('.megamenu ').removeClass('sub-open');
      jQuery('.mobile-menu').delay(350).slideToggle();
      jQuery(this).toggleClass('menuopen');
    } else {
      jQuery(this).toggleClass('menuopen');
      jQuery(this).next('.mobile-menu').slideToggle();
    }
    return false;
  });
  
  // While open submenu add class
  jQuery(document).on('click', '.navtrigger', function(){
    jQuery(this).parents('li').addClass('sub-open');
    return false;
  })
  
  // Back to menu in mobile
  jQuery(document).on('click', '.back-trigger', function(){
    jQuery(this).closest('li').removeClass('sub-open');
    return false;
  })

});
</script>

<?php

    if ( get_the_ID() == 42 ) {

    } else if ( (!is_front_page() && !is_home()) ) {
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( $clas . '<div class="wrapper breadcrumb"><div class="row breadcrumb">','</div></div></div>' );
      }
    }

 }

}

?>
