<?php

class EnqueueCustomCss
{
	public function __construct()
	{
		add_action('wp_enqueue_scripts', [$this, '__wp_enqueue_scripts'], 5);
	}

	function __wp_enqueue_scripts()
	{
		wp_enqueue_style('myobject-style', get_stylesheet_uri(), array(), _S_VERSION);
		wp_style_add_data('myobject-style', 'rtl', 'replace');

		wp_enqueue_script('myobject-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
		wp_enqueue_style('myobject-custom', get_template_directory_uri() . '/css/custom.css', array(), _S_VERSION);
	}
}
$enqueue_custom_css = new EnqueueCustomCss();
