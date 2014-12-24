<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\SalesRule\Model\Plugin;

use Magento\Store\Model\StoreManagerInterface;
use Magento\Customer\Model\Session;
use Magento\SalesRule\Model\Resource\Rule;

class QuoteConfigProductAttributes
{
    /**
     * @var Rule
     */
    protected $_ruleResource;

    /**
     * @param Rule $ruleResource
     */
    public function __construct(Rule $ruleResource)
    {
        $this->_ruleResource = $ruleResource;
    }

    /**
     * Append sales rule product attribute keys to select by quote item collection
     *
     * @param \Magento\Quote\Model\Quote\Config $subject
     * @param array $attributeKeys
     *
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetProductAttributes(\Magento\Quote\Model\Quote\Config $subject, array $attributeKeys)
    {
        $attributes = $this->_ruleResource->getActiveAttributes();
        foreach ($attributes as $attribute) {
            $attributeKeys[] = $attribute['attribute_code'];
        }
        return $attributeKeys;
    }
}
