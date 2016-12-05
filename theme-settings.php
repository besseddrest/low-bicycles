<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function low_nexus_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['low_nexus_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('LOW Nexus Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['low_nexus_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs','low_nexus'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['low_nexus_settings']['slideshow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Front Page Slideshow'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['low_nexus_settings']['slideshow']['slideshow_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show slideshow'),
    '#default_value' => theme_get_setting('slideshow_display','low_nexus'),
    '#description'   => t("Check this option to show Slideshow in front page. Uncheck to hide."),
  );
  $form['low_nexus_settings']['slideshow']['slide'] = array(
    '#markup' => t('You can change the description and URL of each slide in the following Slide Setting fieldsets.'),
  );
  $form['low_nexus_settings']['slideshow']['slide1'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 1'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['low_nexus_settings']['slideshow']['slide1']['slide1_image'] = array(
    '#type' => 'textfield',
    '#title' => t('Image File Name'),
    '#default_value' => theme_get_setting('slide1_image','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slide1']['slide1_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide1_url','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slide2'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 2'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['low_nexus_settings']['slideshow']['slide2']['slide2_image'] = array(
    '#type' => 'textfield',
    '#title' => t('Image File Name'),
    '#default_value' => theme_get_setting('slide2_image','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slide2']['slide2_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide2_url','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slide3'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 3'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['low_nexus_settings']['slideshow']['slide3']['slide3_image'] = array(
    '#type' => 'textfield',
    '#title' => t('Image File Name'),
    '#default_value' => theme_get_setting('slide3_image','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slide3']['slide3_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide3_url','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slide4'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 4'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['low_nexus_settings']['slideshow']['slide4']['slide4_image'] = array(
    '#type' => 'textfield',
    '#title' => t('Image File Name'),
    '#default_value' => theme_get_setting('slide4_image','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slide4']['slide4_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide4_url','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slide5'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 5'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['low_nexus_settings']['slideshow']['slide5']['slide5_image'] = array(
    '#type' => 'textfield',
    '#title' => t('Image File Name'),
    '#default_value' => theme_get_setting('slide5_image','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slide5']['slide5_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide5_url','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slide6'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 6'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['low_nexus_settings']['slideshow']['slide6']['slide6_image'] = array(
    '#type' => 'textfield',
    '#title' => t('Image File Name'),
    '#default_value' => theme_get_setting('slide6_image','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slide6']['slide6_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide6_url','low_nexus'),
  );
  $form['low_nexus_settings']['slideshow']['slideimage'] = array(
    '#markup' => t('To change the Slide Images, Replace the slide-image-1.jpg, slide-image-2.jpg and slide-image-3.jpg in the images folder of the theme folder.'),
  );
}
