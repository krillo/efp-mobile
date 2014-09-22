<?php

//define("DONOTCACHEPAGE", true);

// SIMPLE FIELDS: Adds a new Field Group (Startsidan)
simple_fields_register_field_group('bildspelsrubrik',
	array (
		'name' => 'Bildspelsrubrik',
		'description' => "Här anges den rubrik som ska ligga över bildspelet.",
		'repeatable' => 0,
		'fields' => array(
			array('name' => 'Rubrik för hela bilspelet',
			      'description' => '',
			      'slug' => 'bildspelsrubrik_rubrik',
				  'type' => 'text'
			),
		)
	)
);
simple_fields_register_field_group('bildspel',
	array (
		'name' => 'Bildspel',
		'description' => "",
		'repeatable' => 1,
		'fields' => array(
			array('name' => 'Bild',
				  'description' => 'Bilderna ska vara 580x275px stora.',
				  'slug' => 'bildspel_bild',
				  'type' => 'file'
			),
			array('name' => 'Bildtext',
			      'description' => '',
			      'slug' => 'bildspel_text',
				  'type' => 'text'
			),
		)
	)
);
simple_fields_register_field_group('antal_fonster',
	array (
		'name' => 'Antal putsade fönster',
		'description' => "Här anges hur många fönster som putsats sen 1997.",
		'repeatable' => 0,
		'fields' => array(
			array('name' => 'Antal',
			      'description' => '',
			      'slug' => 'fonster_antal',
				  'type' => 'text'
			),
		)
	)
);
// SIMPLE FIELDS: Adds a new Post Connector (Startsidan)
simple_fields_register_post_connector('startsidan',
	array (
		'name' => "Startsidan",
		'field_groups' => array(
			array('name' => 'Bildspelsrubrik',
				  'key' => 'bildspelsrubrik',
				  'context' => 'normal',
				  'priority' => 'high'),
			array('name' => 'Bildspel',
				  'key' => 'bildspel',
				  'context' => 'normal',
				  'priority' => 'high'),
			array('name' => 'Antal putsade fönster',
				  'key' => 'antal_fonster',
				  'context' => 'side',
				  'priority' => 'high')
			),
	'post_types' => array('page')
	)
);

// SIMPLE FIELDS: Adds a new Field Group (Undersida)
simple_fields_register_field_group('info_i_blatt_falt',
	array (
		'name' => 'Information i blått fält',
		'description' => "Här anges den sidetikett och text som ska visas i det blåa fältet under sidhuvudet.",
		'repeatable' => 0,
		'fields' => array(
			array('name' => 'Sidetikett',
			      'description' => '',
			      'slug' => 'info_sidetikett',
				  'type' => 'text'
			),
			array('name' => 'Text',
			      'description' => '',
			      'slug' => 'info_text',
				  'type' => 'textarea',
				  'type_textarea_options' => array('use_html_editor' => 1)
			),
		)
	)
);
// SIMPLE FIELDS: Adds a new Post Connector (Undersida)
simple_fields_register_post_connector('undersida',
	array (
		'name' => "Undersida",
		'field_groups' => array(
			array('name' => 'Information i blått fält',
				  'key' => 'info_i_blatt_falt',
				  'context' => 'normal',
				  'priority' => 'high')
			),
	'post_types' => array('page')
	)
);

// SIMPLE FIELDS: Adds a new Field Group (Personal - Putsare)
simple_fields_register_field_group('anstallda',
	array (
		'name' => 'Anställda',
		'description' => "",
		'repeatable' => 1,
		'fields' => array(
			array('name' => 'Bild',
				  'description' => 'Bilderna ska vara 120x140px stora.',
				  'slug' => 'anstallda_bild',
				  'type' => 'file'
			),
			array('name' => 'Namn',
			      'description' => '',
			      'slug' => 'anstallda_namn',
				  'type' => 'text'
			),
			array('name' => 'Bilnummer',
			      'description' => '',
			      'slug' => 'anstallda_bilnr',
				  'type' => 'text'
			),
		)
	)
);
// SIMPLE FIELDS: Adds a new Post Connector (Personal - Putsare)
simple_fields_register_post_connector('personal',
	array (
		'name' => "Personal",
		'field_groups' => array(
			array('name' => 'Anställda',
				  'key' => 'anstallda',
				  'context' => 'normal',
				  'priority' => 'high'),
			array('name' => 'Information i blått fält',
				  'key' => 'info_i_blatt_falt',
				  'context' => 'normal',
				  'priority' => 'high')
			),
	'post_types' => array('page')
	)
);

// SIMPLE FIELDS: Adds a new Field Group (Personal - Kontor)
simple_fields_register_field_group('anstallda_kontor',
	array (
		'name' => 'Anställda kontor',
		'description' => "",
		'repeatable' => 1,
		'fields' => array(
			array('name' => 'Bild',
				  'description' => 'Bilderna ska vara 120x140px stora.',
				  'slug' => 'kontor_bild',
				  'type' => 'file'
			),
			array('name' => 'Namn',
			      'description' => '',
			      'slug' => 'kontor_namn',
				  'type' => 'text'
			),
			array('name' => 'Avdelning',
			      'description' => '',
			      'slug' => 'kontor_avd',
				  'type' => 'text'
			),
			array('name' => 'Telefon',
			      'description' => '',
			      'slug' => 'kontor_tel',
				  'type' => 'text'
			),
			array('name' => 'E-post',
			      'description' => '',
			      'slug' => 'kontor_epost',
				  'type' => 'text'
			),
		)
	)
);
// SIMPLE FIELDS: Adds a new Post Connector (Personal - Kontor)
simple_fields_register_post_connector('personal_kontor',
	array (
		'name' => "Personal kontor",
		'field_groups' => array(
			array('name' => 'Anställda kontor',
				  'key' => 'anstallda_kontor',
				  'context' => 'normal',
				  'priority' => 'high'),
			array('name' => 'Information i blått fält',
				  'key' => 'info_i_blatt_falt',
				  'context' => 'normal',
				  'priority' => 'high')
			),
	'post_types' => array('page')
	)
);

// SIMPLE FIELDS: Adds a new Field Group (Mallinnehåll)
simple_fields_register_field_group('genvagar_i_sidfoten',
	array (
		'name' => 'Genvägar i sidfoten',
		'description' => "Här redigerar man innehållet i de fyra genvägarna i sidfoten",
		'repeatable' => 1,
		'fields' => array(
			array('name' => 'Rubrik',
			      'description' => '',
			      'slug' => 'genvag_rubrik',
				  'type' => 'text'
			),
			array('name' => 'Text',
			      'description' => '',
			      'slug' => 'genvag_text',
				  'type' => 'textarea',
				  'type_textarea_options' => array('use_html_editor' => 1)
			),
			array('name' => 'Länktext',
			      'description' => '',
			      'slug' => 'genvag_lanktext',
				  'type' => 'text'
			),
			array('name' => 'Länkadress',
			      'description' => '',
			      'slug' => 'genvag_lankadress',
				  'type' => 'text'
			),
		)
	)
);
// SIMPLE FIELDS: Adds a new Post Connector (mallinnehåll)
simple_fields_register_post_connector('mallinnehall',
	array (
		'name' => "Mallinnehåll",
		'field_groups' => array(
			array('name' => 'Genvägar i sidfoten',
				  'key' => 'genvagar_i_sidfoten',
				  'context' => 'normal',
				  'priority' => 'high')
			),
	'post_types' => array('template-content')
	)
);

// SIMPLE FIELDS: Sets the default post connector for a post type
simple_fields_register_post_type_default('undersida', 'page');

function top_level_parent(){
	global $post;
	if($post->ancestors){
		return end($post->ancestors);
	}
	else {
		return false;
	}
}

// LOAD BX SLIDER
// *********************************************************
function loadbxslider()
{
    wp_enqueue_style('bxstyle', ''.get_bloginfo("url").'/wp-content/themes/eriksfonsterputsmobile/css/jquery.bxslider.css');
    wp_enqueue_script('bxscript', ''.get_bloginfo("url").'/wp-content/themes/eriksfonsterputsmobile/js/jquery.bxslider.min.js', array('jquery'));
}
add_action('init', 'loadbxslider');

include get_theme_root().'/eriksfonsterputs/functions-efp.php';