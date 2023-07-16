<?php

namespace MediaWiki\Extension\PkgStore;

use OutputPage, Skin;

/**
 * Class MW_EXT_META
 */
class MW_EXT_META
{
  /**
   * Load resource function.
   *
   * @param OutputPage $out
   * @param Skin $skin
   *
   * @return void
   */
  public static function onBeforePageDisplay(OutputPage $out, Skin $skin): void
  {
  }
}
