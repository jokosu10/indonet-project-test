<?php
namespace Udigital\CustomModule\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class CustomModule extends Template implements BlockInterface
{
   protected $_template = "widget/custom_widget.phtml";

}