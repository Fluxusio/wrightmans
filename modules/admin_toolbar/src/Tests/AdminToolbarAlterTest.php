<?php

<<<<<<< HEAD
=======
/**
 * @file
 * Contains \Drupal\admin_toolbar\Tests\AdminToolbarAlterTest.
 */

>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
namespace Drupal\admin_toolbar\Tests;

use Drupal\simpletest\WebTestBase;

<<<<<<< HEAD

=======
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
/**
 * Test the existence of Admin Toolbar module.
 *
 * @group admin_toolbar
 */
class AdminToolbarAlterTest extends WebTestBase {

  /**
<<<<<<< HEAD
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['toolbar', 'breakpoint', 'admin_toolbar'];

  /**
   * A test user with permission to access the administrative toolbar.
=======
   * A user with permission to access the administrative toolbar.
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
<<<<<<< HEAD
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Create and log in an administrative user.
    $this->adminUser = $this->drupalCreateUser([
      'access toolbar',
      'access administration pages',
    ]);
=======
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('toolbar', 'admin_toolbar');

  protected function setUp() {
    parent::setUp();

    // Create an administrative user and log it in.
    $this->adminUser = $this->drupalCreateUser(array('access toolbar', 'access administration pages'));
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
    $this->drupalLogin($this->adminUser);
  }

  /**
   * Tests for a the hover of sub menus.
   */
  function testAdminToolbar() {
<<<<<<< HEAD
    // Assert that expanded links are present in the HTML.
    $this->assertRaw('class="toolbar-icon toolbar-icon-user-admin-index"');
=======

    // Assert that expanded links are present in HTML.
    // Test with the site configuration link that must be there whatever modules exists.
    $this->assertRaw('id="toolbar-link-system-admin_config_system"');

>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
  }
}
