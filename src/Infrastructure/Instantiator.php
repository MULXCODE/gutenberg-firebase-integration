<?php declare( strict_types=1 );

/**
 * Gutenberg <=> Firebase Integration Example.
 *
 * @package   BN\Fireberg
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      https://www.alainschlesser.com
 * @copyright 2019 Alain Schlesser
 */

namespace BN\Fireberg\Infrastructure;

/**
 * Interface to make the act of instantiation extensible/replaceable.
 *
 * This way, a more elaborate mechanism can be plugged in, like using
 * ProxyManager to instantiate proxies instead of actual objects.
 */
interface Instantiator {

	/**
	 * Make an object instance out of an interface or class.
	 *
	 * @param string $class        Class to make an object instance out of.
	 * @param array  $dependencies Optional. Dependencies of the class.
	 * @return object Instantiated object.
	 */
	public function instantiate( string $class, array $dependencies = [] ): object;
}
