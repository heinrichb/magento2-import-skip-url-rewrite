<?php
namespace heinrichb\skipurlrewrite\Plugin\Model\Import;

class Product
{
    /**
     * This function runs before Magento saves the URL rewrites during an import.
     * By returning `false`, we prevent the original `saveUrlRewrites()` method
     * from ever being executed.
     *
     * @param \Magento\CatalogImportExport\Model\Import\Product $subject
     * @return bool
     */
    public function beforeSaveUrlRewrites(
        \Magento\CatalogImportExport\Model\Import\Product $subject
    ) {
        // Returning false effectively disables the URL rewrite generation for all imports.
        return false;
    }
}
