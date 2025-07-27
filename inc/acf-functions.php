<?php
/**
 * Custom ACF Functions
 * This file contains custom functions for Advanced Custom Fields (ACF) integration.
 *
 * @package Wealth_Elite_Advisors
 */

/**
 * Custom ACF JSON save point
 */
function wealthelite_acf_json_save_point( $path ) {
	return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'wealthelite_acf_json_save_point' );

/**
 * Custom ACF Post Type save point
 */
function wealthelite_acf_cpt_save_folder( $path ) {
	return get_stylesheet_directory() . '/acf-json/post-types';
}
add_filter( 'acf/settings/save_json/type=acf-post-type', 'wealthelite_acf_cpt_save_folder' );

/**
 * Populate the choices for the member_provinces ACF select field.
 *
 * @param array $field The field array.
 * @return array Modified field array with province choices and settings.
 */
function wealthelite_acf_load_member_provinces_field( $field ) {
    $canada_provinces = array(
        'Alberta'                    => 'Alberta',
        'British Columbia'           => 'British Columbia',
        'Manitoba'                   => 'Manitoba',
        'New Brunswick'              => 'New Brunswick',
        'Newfoundland and Labrador'  => 'Newfoundland and Labrador',
        'Northwest Territories'      => 'Northwest Territories',
        'Nova Scotia'                => 'Nova Scotia',
        'Nunavut'                    => 'Nunavut',
        'Ontario'                    => 'Ontario',
        'Prince Edward Island'       => 'Prince Edward Island',
        'Quebec'                     => 'Quebec',
        'Saskatchewan'               => 'Saskatchewan',
        'Yukon'                      => 'Yukon',
    );

    $field['choices'] = $canada_provinces;
    $field['multiple'] = 1;
    return $field;
}
add_filter( 'acf/load_field/name=member_provinces', 'wealthelite_acf_load_member_provinces_field' );
