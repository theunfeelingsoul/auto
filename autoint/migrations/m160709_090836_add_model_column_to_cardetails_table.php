<?php

use yii\db\Migration;

/**
 * Handles adding model_column to table `cardetails_table`.
 */
class m160709_090836_add_model_column_to_cardetails_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('car_details', 'model', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('car_details', 'model');
    }
}
