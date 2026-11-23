<?php
/**
 * Copyright © Webscale. All rights reserved.
 * See LICENSE for license details.
 */

namespace Webscale\Varnish\Block\Adminhtml\Form\Renderer\Config;

use Magento\Framework\View\Element\AbstractBlock;
use Magento\Config\Model\Config\CommentInterface;
use Magento\Framework\View\Element\Context;
use Webscale\Varnish\Helper\Config;

class ScheduleEveryFieldComment extends AbstractBlock implements CommentInterface
{
    /**
     * @var Config
     */
    public $config;

    /**
     * @param Context $context
     * @param Config $config
     */
    public function __construct(
        Context $context,
        Config $config
    ) {
        $this->config = $config;

        parent::__construct($context);
    }

    /**
     * @param string $elementValue
     * @return string
     */
    public function getCommentText($elementValue)
    {
        return 'Cron Expression: <span style="color:grey;">none</span>';
    }
}
