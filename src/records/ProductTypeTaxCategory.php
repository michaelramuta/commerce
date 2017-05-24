<?php

namespace craft\commerce\records;

use craft\db\ActiveRecord;

/**
 * Product type tax category record.
 *
 * @property int         $productTypeId
 * @property int         $localeId
 * @property string      $urlFormat
 *
 * @property TaxCategory $taxCategory
 * @property ProductType $productType
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2015, Pixel & Tonic, Inc.
 * @license   https://craftcommerce.com/license Craft Commerce License Agreement
 * @see       https://craftcommerce.com
 * @package   craft.plugins.commerce.records
 * @since     1.0
 */
class ProductTypeTaxCategory extends ActiveRecord
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritDoc BaseRecord::getTableName()
     *
     * @return string
     */
    public static function tableName()
    {
        return 'commerce_producttypes_taxcategories';
    }
//
//    /**
//     * @inheritDoc BaseRecord::defineRelations()
//     *
//     * @return array
//     */
//    public function defineRelations()
//    {
//        return [
//            'productType' => [static::BELONGS_TO, 'ProductType', 'required' => true, 'onDelete' => static::CASCADE],
//            'taxCategory' => [static::BELONGS_TO, 'TaxCategory', 'required' => true, 'onDelete' => static::CASCADE],
//        ];
//    }
//
//    /**
//     * @inheritDoc BaseRecord::defineIndexes()
//     *
//     * @return array
//     */
//    public function defineIndexes()
//    {
//        return [
//            ['columns' => ['productTypeId', 'taxCategoryId'], 'unique' => true],
//        ];
//    }
}