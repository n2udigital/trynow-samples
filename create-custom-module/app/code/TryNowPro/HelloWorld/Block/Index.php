<?php
namespace TryNowPro\HelloWorld\Block;
class Index extends \Magento\Framework\View\Element\Template
{

    /**
     * Get Hello World page content
     * @return string
     */
    public function getContent()
    {
        return __("This is a custom module in Magento 2.");
    }
}