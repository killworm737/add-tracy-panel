<?php

/**
 * This file is part of the Tracy (https://tracy.nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
namespace Killworm737;
/**
 * IBarPanel implementation helper.
 * @internal
 */
class AddPanel implements Tracy\IBarPanel
{
  public function __construct()
  {
  }

  /**
   * Renders HTML code for custom tab.
   * @return string
   */
  public function getTab()
  {
    ob_start();
    require __DIR__ . "/assets/Bar/bbbb.tab.phtml";
    return ob_get_clean();
  }

  /**
   * Renders HTML code for custom panel.
   * @return string
   */
  public function getPanel()
  {
    ob_start();
    require __DIR__ . "/assets/Bar/bbbb.panel.phtml";
    return ob_get_clean();
  }

}
