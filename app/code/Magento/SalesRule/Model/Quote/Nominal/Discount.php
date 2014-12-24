<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\SalesRule\Model\Quote\Nominal;

/**
 * Nominal discount total
 */
class Discount extends \Magento\SalesRule\Model\Quote\Discount
{
    /**
     * Don't add amounts to address
     *
     * @var bool
     */
    protected $_canAddAmountToAddress = false;

    /**
     * Don't fetch anything
     *
     * @param \Magento\Quote\Model\Quote\Address $address
     * @return array
     */
    public function fetch(\Magento\Quote\Model\Quote\Address $address)
    {
        return \Magento\Quote\Model\Quote\Address\Total\AbstractTotal::fetch($address);
    }

    /**
     * Get nominal items only
     *
     * @param \Magento\Quote\Model\Quote\Address $address
     * @return array
     */
    protected function _getAddressItems(\Magento\Quote\Model\Quote\Address $address)
    {
        return $address->getAllNominalItems();
    }
}
