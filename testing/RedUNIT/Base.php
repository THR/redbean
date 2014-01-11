<?php 

namespace RedUNIT;

/**
 * RedUNIT_Base
 *
 * @file    RedUNIT/Base.php
 * @desc    Base class for all drivers that support all database systems.
 * @author  Gabor de Mooij and the RedBeanPHP Community
 * @license New BSD/GPLv2
 *
 * (c) G.J.G.T. (Gabor) de Mooij and the RedBeanPHP Community.
 * This source file is subject to the New BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class Base extends RedUNIT
{
	/**
	 * What drivers should be loaded for this test pack?
	 * 
	 * @return array
	 */
	public function getTargetDrivers()
	{
		return array( 'mysql', 'pgsql', 'sqlite', 'CUBRID', 'oracle' );
	}
}
