<?php
class Meanbee_BarcodeAnnotator_Helper_Config extends Mage_Core_Helper_Abstract {
    const XML_ENABLED = 'meanbee_barcodeannotator/general/active';
    const XML_ORDER_NUMBER_BARCODE_SYMBOLOGY = 'meanbee_barcodeannotator/general/order_number_barcode_symbology';
    const XML_INVOICE_NUMBER_BARCODE_SYMBOLOGY = 'meanbee_barcodeannotator/general/invoice_number_barcode_symbology';
    const XML_SHIPMENT_NUMBER_BARCODE_SYMBOLOGY = 'meanbee_barcodeannotator/general/shipment_number_barcode_symbology';
    const XML_CREDITMEMO_NUMBER_BARCODE_SYMBOLOGY = 'meanbee_barcodeannotator/general/creditmemo_number_barcode_symbology';
    const XML_PRODUCT_SKU_BARCODE_SYMBOLOGY = 'meanbee_barcodeannotator/general/product_sku_barcode_symbology';

    /**
     * @param null $store
     *
     * @return bool
     */
    public function getEnabled($store = null) {
        return Mage::getStoreConfigFlag(self::XML_ENABLED, $store);
    }

    /**
     * @param null $store
     *
     * @return string
     */
    public function getOrderNumberBarcodeSymbology($store = null) {
        return Mage::getStoreConfig(self::XML_ORDER_NUMBER_BARCODE_SYMBOLOGY, $store);
    }

    /**
     * @param null $store
     *
     * @return string
     */
    public function getInvoiceNumberBarcodeSymbology($store = null) {
        return Mage::getStoreConfig(self::XML_INVOICE_NUMBER_BARCODE_SYMBOLOGY, $store);
    }

    /**
     * @param null $store
     *
     * @return string
     */
    public function getShipmentNumberBarcodeSymbology($store = null) {
        return Mage::getStoreConfig(self::XML_SHIPMENT_NUMBER_BARCODE_SYMBOLOGY, $store);
    }

    /**
     * @param null $store
     *
     * @return string
     */
    public function getCreditMemoNumberBarcodeSymbology($store = null) {
        return Mage::getStoreConfig(self::XML_CREDITMEMO_NUMBER_BARCODE_SYMBOLOGY, $store);
    }
    
    /**
     * @param null $store
     *
     * @return string
     */
    public function getProductSkuBarcodeSymbology($store = null) {
        return Mage::getStoreConfig(self::XML_PRODUCT_SKU_BARCODE_SYMBOLOGY, $store);
    }
}
