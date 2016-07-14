<?php

use yii\db\Migration;

/**
 * Handles adding manufacturer_column to table `car_details_table`.
 */
class m160709_091202_add_manufacturer_column_to_car_details_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('car_details', 'manufacturer', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('car_details', 'manufacturer');
    }
}
