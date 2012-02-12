<?php
/**
 * Hans2103 hide Compare option on ProductDetailPage
 *
 * @package     Hans2103_HideCompare
 * @author      Hans2103 (http://www.Hans2103.nl/)
 * @copyright   Copyright (c) 2011 Hans2103 (http://www.Hans2103.nl/)
 * @license     Open Software License
 */
 
class Hans2103_HideCompare_Helper_Product_Compare extends Mage_Catalog_Helper_Product_Compare
{ 
	/**
	 * Retrieve url for adding product to conpare list, return false
	 *
	 * @param   Mage_Catalog_Model_Product $product - not used but must leave else we get errors
	 * @return  boolean false
	 */
	public function getAddUrl($product)
	{
		//if(Mage::getStoreConfig('catalog/recently_products/compared_count')) {
		//	return parent::getAddUrl($product);
    	//}
		return false;
	}     
}