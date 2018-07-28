<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_eventat
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HTML View class for the Eventat Component
 *
 * @since  0.0.2
 */
class EventatViewEventat extends JViewLegacy
{
	/**
	 * Display the Eventat view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = 'Welcome to Eventat! :)';

		// Display the view
		parent::display($tpl);
	}
}
