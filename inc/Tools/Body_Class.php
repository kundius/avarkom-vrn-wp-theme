<?php

namespace DomenART\Theme\Tools;

use DomenART\Theme\Service_Container;
use DomenART\Theme\Service;

/**
 * Class Body_Class
 *
 * @package DomenART\Theme\Tools
 */
class Body_Class implements Service {
	/**
	 * @var array
	 * @author Maxime Culea
	 */
	private $body_class = [];

	/**
	 * The unwanted classes
	 *
	 * @var array
	 */
	private $unwanted_classes = [];

	/**
	 * @param Service_Container $container
	 */
	public function register( Service_Container $container ): void {}

	/**
	 * @param Service_Container $container
	 */
	public function boot( Service_Container $container ): void {
		add_filter( 'body_class', [ $this, 'body_class' ] );
	}

	/**
	 * @return string
	 */
	public function get_service_name(): string {
		return 'body-class';
	}

	/**
	 * Add a body class
	 *
	 * @author Maxime Culea
	 *
	 * @param array|string $body_class
	 */
	public function add( $body_class ): void {
		$this->body_class[] = $body_class;
	}

	/**
	 * Stack unwanted body_classes
	 *
	 * @author Maxime Culea
	 *
	 * @param $body_class string
	 */
	public function remove( string $body_class ): void {
		$this->unwanted_classes[] = $body_class;
	}

	/**
	 *
	 * @param array $classes
	 *
	 * @return array
	 */
	public function body_class( array $classes ): array {
		// Filter body classes
		return array_filter( \array_merge( $classes, $this->body_class ), [ $this, 'filter' ] );
	}

	/**
	 * Filter method which handle to delete wanted body_class
	 *
	 * @param string $class
	 *
	 * @author Maxime CULEA
	 *
	 * @return bool
	 */
	private function filter( string $class ): bool {
		return ! in_array( $class, $this->unwanted_classes, true );
	}
}
