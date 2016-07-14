<?php

use yii\db\Migration;

/**
 * Handles adding images_column to table `car_details`.
 */
class m160709_160746_add_images_column_to_car_details extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('car_details', 'images', $this->text());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('car_details', 'images');
    }
}
