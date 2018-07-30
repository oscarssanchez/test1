<?php
/**
 * The admin page class
 *
 * @package Test1
 */

namespace Test1;

/**
 * Class Admin
 *
 * @package Test1
 */
class Admin {

	/**
	 * Admin initializer.
	 */
	public function init() {
		add_action( 'init' , array( $this, 'use_also_this' ) );
		add_action( 'init' , array( $this, 'use_this' ) );
	}

	public function test_userobject_remove_roles() {
	$user = wp_get_current_user();
	array_shift( $user->roles );
	$another_user_variable = wp_get_current_user();
}

	public function use_this() {
		$this->test_userobject_remove_roles();
	}

	public function use_also_this() {
		$user2 = wp_get_current_user();
		return $user2;
	}

}
