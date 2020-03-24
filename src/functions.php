<?php
/**
 * @package     Novitas
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

$user = JFactory::getUser();
$theme = JRequest::getVar('templateTheme',$user->getParam('theme',$this->params->get('style','red')));
