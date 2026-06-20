<?php
/**
 * Breezi Blog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Breezi Blog
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @return void
 */
if (!function_exists('breezi_blog_setup')) {
	function breezi_blog_setup(): void
	{

		// Make theme available for translation.
		load_theme_textdomain('breezi-blog', get_template_directory() . '/languages');

		// Core theme supports.
		add_theme_support('title-tag');
		add_theme_support('wp-block-styles');
		add_theme_support('responsive-embeds');
		add_theme_support('editor-styles');

		// Use front-end styles in the editor as well.
		add_editor_style('style.css');

		// Add support for HTML5 features.
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
}
add_action('after_setup_theme', 'breezi_blog_setup');

/**
 * Register custom block patterns.
 *
 * @return void
 */
if (!function_exists('breezi_blog_register_block_patterns')) {
	function breezi_blog_register_block_patterns(): void
	{
		$pattern_files = glob(get_template_directory() . '/patterns/*.php');

		if (!$pattern_files) {
			return;
		}

		foreach ($pattern_files as $pattern_file) {
			$pattern_data = get_file_data(
				$pattern_file,
				array(
					'title' => 'Title',
					'slug' => 'Slug',
					'categories' => 'Categories',
					'keywords' => 'Keywords',
					'description' => 'Description',
				)
			);

			if (empty($pattern_data['slug'])) {
				continue;
			}

			// Load pattern content.
			ob_start();
			include $pattern_file;
			$pattern_content = ob_get_clean();

			// Parse categories and keywords.
			$categories = !empty($pattern_data['categories'])
				? array_filter(array_map('trim', explode(',', $pattern_data['categories'])))
				: array();

			$keywords = !empty($pattern_data['keywords'])
				? array_filter(array_map('trim', explode(',', $pattern_data['keywords'])))
				: array();

			// Register the block pattern.
			register_block_pattern(
				$pattern_data['slug'],
				array(
					'title' => !empty($pattern_data['title']) ? $pattern_data['title'] : '',
					'content' => $pattern_content,
					'categories' => $categories,
					'keywords' => $keywords,
					'description' => !empty($pattern_data['description']) ? $pattern_data['description'] : '',
				)
			);
		}
	}
}
add_action('init', 'breezi_blog_register_block_patterns');

/**
 * Register custom block styles.
 *
 * @return void
 */
if (!function_exists('breezi_blog_register_block_styles')) {
	function breezi_blog_register_block_styles(): void
	{

		// Button Block: Rounded style.
		register_block_style(
			'core/button',
			array(
				'name' => 'rounded-button',
				'label' => __('Rounded', 'breezi-blog'),
			)
		);

		// Button Block: Square style.
		register_block_style(
			'core/button',
			array(
				'name' => 'square-button',
				'label' => __('Square', 'breezi-blog'),
			)
		);

		// Image Block: Shadow style.
		register_block_style(
			'core/image',
			array(
				'name' => 'image-shadow',
				'label' => __('With Shadow', 'breezi-blog'),
			)
		);

		// Quote Block: Minimal style.
		register_block_style(
			'core/quote',
			array(
				'name' => 'minimal-quote',
				'label' => __('Minimal', 'breezi-blog'),
			)
		);

		// List Block: Checkmark style.
		register_block_style(
			'core/list',
			array(
				'name' => 'checkmark-list',
				'label' => __('Checkmark', 'breezi-blog'),
			)
		);
	}
}
add_action('init', 'breezi_blog_register_block_styles');