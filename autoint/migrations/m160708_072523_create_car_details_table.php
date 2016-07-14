<?php

use yii\db\Migration;

/**
 * Handles the creation for table `car_details_table`.
 */
class m160708_072523_create_car_details_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('car_details', [
            'id'                => $this->primaryKey(),
            'reg_year'          => $this->string(),
            'reg_number'        => $this->string(),
            'mileage'           => $this->string(),
            'body_type'         => $this->string(),
            'model_year'        => $this->string(),
            'engine_size'       => $this->string(),
            'engine_type'       => $this->string(),
            'trans'             => $this->string(),
            'fuel_type'         => $this->string(),
            'body_style'        => $this->string(),
            'driveline'         => $this->string(),
            'fuel_economy'      => $this->string(),
            'anti_brake_system' => $this->string(),
            'front_brake_type'  => $this->string(),
            'turning_diameter'  => $this->string(),
            'rear_suspension'   => $this->string(),
            'rear_spring_type'  => $this->string(),
            'standard_seating'  => $this->string(),
            'chassis'           => $this->string(),
            'location'          => $this->string(),
            'steering'          => $this->string(),
            'doors'             => $this->string(),
            'dimension'         => $this->string(),
            'weight'            => $this->string(),
            'max_load'          => $this->string(),
            'color'             => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('car_details');
    }
}
