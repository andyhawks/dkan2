<?php

namespace Drupal\dkan_common\Tests\Unit;

use Drupal\Core\Cache\MemoryBackend;
use Drupal\Core\Extension\ModuleHandler;
use Drupal\dkan_common\Plugin\DataModifierManager;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for class DataModifierManager.
 *
 * @package Drupal\dkan_common\Tests\Unit
 */
class DataModifierManagerTest extends TestCase {

  /**
   * Test constructor.
   */
  public function testDataModifierManager() {
    $traversable = new \ArrayIterator();
    $cache = new MemoryBackend();
    $module = new ModuleHandler('blah', [], $cache);

    $manager = new DataModifierManager($traversable, $cache, $module);
    $this->assertTrue(is_object($manager));
  }

}
