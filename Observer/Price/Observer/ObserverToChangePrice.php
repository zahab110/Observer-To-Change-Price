<?php
namespace Observer\Price\Observer;

use Magento\Framework\Event\ObserverInterface;

class ObserverToChangePrice implements ObserverInterface
{
    /**
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
            $collection = $observer->getEvent()->getCollection();
            $price = 5; 
    
            foreach ($collection as $product) {
                $product->setPrice($price);
                $product->setFinalPrice($price);
            }
    }

}