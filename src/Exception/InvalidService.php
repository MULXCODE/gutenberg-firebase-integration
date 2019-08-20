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

namespace BN\Fireberg\Exception;

use InvalidArgumentException;

class InvalidService
	extends InvalidArgumentException
	implements FirebergException {

	/**
	 * Create a new instance of the exception for a service class name that is
	 * not recognized.
	 *
	 * @param string|object $service Class name of the service that was not
	 *                               recognized.
	 *
	 * @return static
	 */
	public static function from_service( $service ) {
		$message = \sprintf(
			'The service "%s" is not recognized and cannot be registered.',
			\is_object( $service )
				? \get_class( $service )
				: (string) $service
		);

		return new static( $message );
	}

	/**
	 * Create a new instance of the exception for a service identifier that is
	 * not recognized.
	 *
	 * @param string $service_id Identifier of the service that is not being
	 *                           recognized.
	 *
	 * @return static
	 */
	public static function from_service_id( string $service_id ) {
		$message = \sprintf(
			'The service ID "%s" is not recognized and cannot be retrieved.',
			$service_id
		);

		return new static( $message );
	}
}