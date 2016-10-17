<?php

<<<<<<< HEAD
=======
/**
 * @file
 * Contains \Drupal\admin_toolbar\Tests\AdminToolbarAlterTest.
 */

>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
namespace Drupal\admin_toolbar_tools\Tests;

use Drupal\simpletest\WebTestBase;

<<<<<<< HEAD

/**
 * Tests for the existence of Admin Toolbar tools new links.
 *
 * @group admin_toolbar
=======
/**
 * Test the existence of Admin Toolbar tools new links.
 *
 * @group admin_toolbar_tools
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
 */
class AdminToolbarToolsAlterTest extends WebTestBase {

  /**
<<<<<<< HEAD
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['toolbar', 'admin_toolbar', 'admin_toolbar_tools'];

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
  public static $modules = array(
    'toolbar',
    'admin_toolbar',
    'admin_toolbar_tools'
  );

  protected function setUp() {
    parent::setUp();

    // Create an administrative user and log it in.
    $this->adminUser = $this->drupalCreateUser(array(
        'access toolbar',
        'access administration pages'
      ));
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
    $this->drupalLogin($this->adminUser);
  }

  /**
   * Tests for a the hover of sub menus.
   */
  function testAdminToolbarTools() {
<<<<<<< HEAD
    // Assert that special menu items are present in the HTML.
    $this->assertRaw('class="toolbar-icon toolbar-icon-admin-toolbar-tools-flush"');
  }
=======

    // Test for admin_toolbar_tools if special menu items are added.
    $this->assertRaw('id="toolbar-link-admin_toolbar_tools-flush"');

  }

>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
}
