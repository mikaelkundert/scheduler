<?php


namespace Drupal\scheduler_repeat\Plugin\SchedulerRepeater;

use Drupal\scheduler_repeat\SchedulerRepeaterInterface;

/**
 * @SchedulerRepeater(
 *   id = "tenminutes",
 *   label = @Translation("Every 10 minutes")
 * )
 */
class TenMinutes extends SchedulerRepeaterBase implements SchedulerRepeaterInterface {

  /**
   * @param $publish_on
   *
   * @return int
   */
  public function calculateNextPublishedOn($publish_on) {
    return strtotime("+10 mins", $publish_on);
  }

  /**
   * @param $unpublish_on
   *
   * @return int
   */
  public function calculateNextUnpublishedOn($unpublish_on) {
    return strtotime("+10 mins", $unpublish_on);
  }

}