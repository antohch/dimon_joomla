<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// The menu class is deprecated. Use nav instead
?>
<?php/*  print_r($list)*/?>
<?php foreach ($list as $i => &$item)
{
	if($i == 0)
	{
		echo '
		<a data-scroll="" href="'.$item->link.'" class="active">
			<span>'.$item->title.'</span>
		</a>';
	}
	else
	{
		echo '
		<a data-scroll="" href="'.$item->link.'">
			<span>'.$item->title.'</span>
		</a>';
	}
}
?>
