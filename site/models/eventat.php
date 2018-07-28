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
 * Eventat Model
 *
 * @since  0.0.4
 */
class EventatModelEventat extends JModelItem
{
	/**
	 * @var string message
	 */
	protected $message;

	/**
	 * Get the message
	 * @return  string  The message to be displayed to the user
	 */
	public function getMsg()
	{
		if (!isset($this->message))
		{
			$this->message = 'Hello World Eventat Model!';
		}
		return $this->message;
	}
}