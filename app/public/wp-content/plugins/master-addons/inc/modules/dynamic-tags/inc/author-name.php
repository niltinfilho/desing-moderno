<?php

namespace MasterAddons\Modules\DynamicTags\Tags;

use Elementor\Core\DynamicTags\Tag;
use Elementor\Modules\DynamicTags\Module as TagsModule;

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

class JLTMA_Author_Name extends Tag
{

	public function get_name()
	{
		return 'jltma-author-name';
	}

	public function get_title()
	{
		return esc_html__('Author Name', 'master-addons' );
	}

	public function get_group()
	{
		return 'author';
	}

	public function get_categories()
	{
		return [TagsModule::TEXT_CATEGORY];
	}

	public function render()
	{
		echo wp_kses_post(get_the_author());
	}
}
