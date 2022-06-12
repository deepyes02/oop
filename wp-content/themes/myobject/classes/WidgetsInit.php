<?php

namespace MyObjects;

class WidgetsInit
{
	protected $name = '';
	protected $id = '';

	public function __construct($name, $id)
	{
		$this->name = $name;
		$this->id = $id;
		add_action('widgets_init', [$this, 'myobject_widgets_init'], 10, 1);
	}

	/**
	 * Register widget area.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	 */
	public function myobject_widgets_init() : void
	{
		register_sidebar(
			array(
				'name'          => esc_html__($this->name, 'myobject'),
				'id'            => 'sidebar-1',
				'description'   => esc_html__('Add widgets here.', 'myobject'),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
}
