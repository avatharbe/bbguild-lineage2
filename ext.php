<?php
/**
 * bbGuild Lineage 2 Extension
 *
 * @package   bbguild_lineage2 v2.0
 * @copyright 2018 avathar.be
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 */

namespace avathar\bbguild_lineage2;

use phpbb\extension\base;

class ext extends base
{
	public function is_enableable()
	{
		$ext_manager = $this->container->get('ext.manager');
		return $ext_manager->is_enabled('avathar/bbguild');
	}
}
