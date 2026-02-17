<?php
/**
 * ACF Fields - Program Single Page (e.g. Wash Club)
 *
 * @package RainTunnelWash
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('acf_add_local_field_group')) {
    return;
}

acf_add_local_field_group(array(
    'key' => 'group_program_single',
    'title' => 'Program Single Page Content',
    'fields' => array(
        // Hero (same as service single)
        array(
            'key' => 'field_ps_hero_tab',
            'label' => 'Hero Section',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ps_hero_badge',
            'label' => 'Badge / Pill (above tagline)',
            'name' => 'program_hero_badge',
            'type' => 'text',
            'placeholder' => 'e.g. Now Open',
        ),
        array(
            'key' => 'field_ps_hero_tagline',
            'label' => 'Tagline',
            'name' => 'program_hero_tagline',
            'type' => 'text',
            'default_value' => 'CLEAN. FAST. FRIENDLY.',
        ),
        array(
            'key' => 'field_ps_hero_title',
            'label' => 'Hero Title',
            'name' => 'program_hero_title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_ps_hero_subtitle',
            'label' => 'Hero Subtitle',
            'name' => 'program_hero_subtitle',
            'type' => 'text',
        ),
        array(
            'key' => 'field_ps_hero_description',
            'label' => 'Hero Description',
            'name' => 'program_hero_description',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_ps_hero_image',
            'label' => 'Hero Background Image',
            'name' => 'program_hero_image',
            'type' => 'image',
            'return_format' => 'array',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_ps_hero_cta1_text',
            'label' => 'Button 1 Text',
            'name' => 'program_hero_cta1_text',
            'type' => 'text',
            'default_value' => 'Join Now',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_ps_hero_cta1_link',
            'label' => 'Button 1 Link',
            'name' => 'program_hero_cta1_link',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_ps_hero_cta2_text',
            'label' => 'Button 2 Text',
            'name' => 'program_hero_cta2_text',
            'type' => 'text',
            'default_value' => 'Learn More',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_ps_hero_cta2_link',
            'label' => 'Button 2 Link',
            'name' => 'program_hero_cta2_link',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),

        // Two-column section
        array(
            'key' => 'field_ps_twocol_tab',
            'label' => 'Two-Column Section',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ps_twocol_heading',
            'label' => 'Heading',
            'name' => 'program_twocol_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'field_ps_twocol_paragraph',
            'label' => 'Paragraph',
            'name' => 'program_twocol_paragraph',
            'type' => 'textarea',
            'rows' => 4,
        ),
        array(
            'key' => 'field_ps_twocol_button_text',
            'label' => 'Button Text',
            'name' => 'program_twocol_button_text',
            'type' => 'text',
            'default_value' => 'Join the Wash Club',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_ps_twocol_button_link',
            'label' => 'Button Link',
            'name' => 'program_twocol_button_link',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_ps_twocol_image',
            'label' => 'Right Column Image',
            'name' => 'program_twocol_image',
            'type' => 'image',
            'return_format' => 'array',
            'preview_size' => 'medium',
        ),

        // Value propositions (4)
        array(
            'key' => 'field_ps_value_tab',
            'label' => 'Value Propositions',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ps_value_boxes',
            'label' => 'Value Proposition Boxes (4)',
            'name' => 'program_value_boxes',
            'type' => 'repeater',
            'layout' => 'block',
            'min' => 4,
            'max' => 4,
            'button_label' => 'Add Box',
            'sub_fields' => array(
                array(
                    'key' => 'field_ps_value_text',
                    'label' => 'Line 1',
                    'name' => 'text',
                    'type' => 'text',
                    'placeholder' => '24/7 Convenience',
                ),
                array(
                    'key' => 'field_ps_value_text_line2',
                    'label' => 'Line 2',
                    'name' => 'text_line_2',
                    'type' => 'text',
                    'placeholder' => '',
                    'instructions' => 'Optional second line for this value proposition.',
                ),
            ),
        ),

        // How it works (4 cards: step number banner + heading + paragraph) – hidden on Program Single Gives
        array(
            'key' => 'field_ps_how_tab',
            'label' => 'How It Works',
            'name' => '',
            'type' => 'tab',
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '!=',
                        'value' => 'page-program-single-gives.php',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_ps_how_steps',
            'label' => 'Steps (4 cards, 2x2 grid)',
            'name' => 'program_how_steps',
            'type' => 'repeater',
            'layout' => 'block',
            'min' => 4,
            'max' => 4,
            'button_label' => 'Add Step',
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '!=',
                        'value' => 'page-program-single-gives.php',
                    ),
                ),
            ),
            'sub_fields' => array(
                array(
                    'key' => 'field_ps_how_step_number',
                    'label' => 'Step Number',
                    'name' => 'step_number',
                    'type' => 'text',
                    'placeholder' => '1',
                ),
                array(
                    'key' => 'field_ps_how_heading',
                    'label' => 'Heading',
                    'name' => 'heading',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_ps_how_paragraph',
                    'label' => 'Paragraph',
                    'name' => 'paragraph',
                    'type' => 'textarea',
                    'rows' => 3,
                ),
            ),
        ),

        // Intro (same as programs landing) – hidden on Program Single Gives
        array(
            'key' => 'field_ps_intro_tab',
            'label' => 'Intro Section',
            'name' => '',
            'type' => 'tab',
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '!=',
                        'value' => 'page-program-single-gives.php',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_ps_intro_heading',
            'label' => 'Heading',
            'name' => 'program_intro_heading',
            'type' => 'text',
            'placeholder' => 'Why Join?',
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '!=',
                        'value' => 'page-program-single-gives.php',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_ps_intro_paragraph',
            'label' => 'Paragraph',
            'name' => 'program_intro_paragraph',
            'type' => 'textarea',
            'rows' => 4,
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '!=',
                        'value' => 'page-program-single-gives.php',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_ps_intro_use_form',
            'label' => 'Use form section instead of intro',
            'name' => 'program_intro_use_form',
            'type' => 'true_false',
            'message' => 'Replace the intro block with a form section (heading + paragraph + Fluent Form).',
            'ui' => 1,
            'default_value' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '!=',
                        'value' => 'page-program-single-gives.php',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_ps_intro_form_shortcode',
            'label' => 'Fluent Form shortcode',
            'name' => 'program_intro_form_shortcode',
            'type' => 'text',
            'placeholder' => 'e.g. [fluentform id="1"]',
            'instructions' => 'Shown when "Use form section" is on. Paste your Fluent Form shortcode.',
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_ps_intro_use_form',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
        ),

        // Form Section tab (only when using "Program Single Form" template)
        array(
            'key' => 'field_ps_form_tab',
            'label' => 'Form Section (Program Single Form template)',
            'name' => '',
            'type' => 'tab',
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-program-single-form.php',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_ps_form_heading',
            'label' => 'Heading',
            'name' => 'program_form_heading',
            'type' => 'text',
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-program-single-form.php',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_ps_form_paragraph',
            'label' => 'Paragraph',
            'name' => 'program_form_paragraph',
            'type' => 'textarea',
            'rows' => 4,
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-program-single-form.php',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_ps_form_shortcode',
            'label' => 'Fluent Form shortcode',
            'name' => 'program_form_shortcode',
            'type' => 'text',
            'placeholder' => 'e.g. [fluentform id="1"]',
            'instructions' => 'Paste the shortcode for your Fluent Form.',
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-program-single-form.php',
                    ),
                ),
            ),
        ),

        // Wash Club FAQs (accordion) – hidden on Program Single Gives
        array(
            'key' => 'field_ps_facts_tab',
            'label' => 'Wash Club FAQs',
            'name' => '',
            'type' => 'tab',
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '!=',
                        'value' => 'page-program-single-gives.php',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_ps_facts_heading',
            'label' => 'Section Heading',
            'name' => 'program_facts_heading',
            'type' => 'text',
            'default_value' => 'Wash Club FAQs',
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '!=',
                        'value' => 'page-program-single-gives.php',
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_ps_facts',
            'label' => 'Facts (Q&A accordion)',
            'name' => 'program_facts',
            'type' => 'repeater',
            'layout' => 'block',
            'button_label' => 'Add Fact',
            'conditional_logic' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '!=',
                        'value' => 'page-program-single-gives.php',
                    ),
                ),
            ),
            'sub_fields' => array(
                array(
                    'key' => 'field_ps_fact_question',
                    'label' => 'Question',
                    'name' => 'question',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_ps_fact_answer',
                    'label' => 'Answer',
                    'name' => 'answer',
                    'type' => 'textarea',
                    'rows' => 3,
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-program-single.php',
            ),
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-program-single-form.php',
            ),
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-program-single-gives.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
));
