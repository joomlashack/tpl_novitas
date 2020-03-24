<?php
/**
 * @package   tpl_novitas
 * @contact   www.joomlashack.com, help@joomlashack.com
 * @copyright Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

use Alledia\Installer;

defined('_JEXEC') or die();

require_once 'library/Installer/include.php';

jimport('joomla.filesystem.folder');


/**
 * Custom installer script
 */
if (!class_exists('JS_NovitasInstallerScript')) {
    class JS_NovitasInstallerScript extends Installer\AbstractScript
    {
        /**
         * @param string                     $type
         * @param JInstallerAdapterComponent $parent
         *
         * @return bool
         */
        public function preFlight($type, $parent)
        {
            if (!parent::preFlight($type, $parent)) {
                return false;
            }
            
            return true;
        }
    }
}
