<?php
/**
 * DBALite - a lightweight, PDO based Database Abstraction Layer
 *
 * @package DBALiteTest
 * @author Paul Garvin <paul@paulgarvin.net>
 * @copyright Copyright 2008-2012 Paul Garvin.
 * @license LGPL-3.0+
 *
 * DBALite is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of
 * the License, or (at your option) any later version.
 *
 * DBALite is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with DBALite. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * @package DBALiteTest
 */
class SingletonTest extends PHPUnit_Framework_TestCase
{
    public function testGetSingleton()
    {
        $driver = 'sqlite';
        $config = array('dbname' => './Data/SqliteTest.sqlite');
        $first = DBALite::getSingleton($driver, $config);
        $second = DBALite::getSingleton();
        $this->assertEquals($first, $second);
    }
}
