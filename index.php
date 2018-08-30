<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Add template js
JHtml::_('script', 'bootstrap.min.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'classie.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'html5shiv.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'html5shiv.min.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'jquery-1.9.1.min.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'jquery.appear.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'jquery.magnific-popup.min.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'main.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'masonry.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'masonry.pkgd.min.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'owl.carousel.min.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'smooth-scroll.min.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'typed.js', array('version' => 'auto', 'relative' => true));

// Add Stylesheets
JHtml::_('stylesheet', 'bootstrap.min.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'magnifi-popup.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'normalize.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'owl.carousel.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'responsive.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'style.css', array('version' => 'auto', 'relative' => true));
/*$doc = JFactory::getDocument();
$doc->addScript('templates/'.$this->template. '/js/typed.js');
$doc->addStyleSheet('templates/'.$this->template.'/css/style.css');*/

?>
<!DOCTYPE html>
<html>
<head>
	<jdoc:include type="head" />
</head>
<body>
</body>
</html>
