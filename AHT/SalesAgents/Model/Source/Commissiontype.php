<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace AHT\SalesAgents\Model\Source;

/**
 * Catalog category landing page attribute source
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Commissiontype extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = [
            ['label' => __('--Fixel/Percent--'), 'value' => ''], 
            ['label' => __('Fixel'), 'value' => 1],
             ['label' => __('Percent'), 'value' => 2]];
        }
        return $this->_options;
    }
}