<?php

/**
 * @file
 * Theme settings form for petrea theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function petrea_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['petrea'] = [
    '#type' => 'details',
    '#title' => t('petrea'),
    '#open' => TRUE,
  ];

  $form['petrea']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
