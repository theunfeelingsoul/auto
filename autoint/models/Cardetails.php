<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "car_details".
 *
 * @property integer $id
 * @property string $reg_year
 * @property string $reg_number
 * @property string $mileage
 * @property string $body_type
 * @property string $model_year
 * @property string $engine_size
 * @property string $engine_type
 * @property string $trans
 * @property string $fuel_type
 * @property string $body_style
 * @property string $driveline
 * @property string $fuel_economy
 * @property string $anti_brake_system
 * @property string $front_brake_type
 * @property string $turning_diameter
 * @property string $rear_suspension
 * @property string $rear_spring_type
 * @property string $standard_seating
 * @property string $chassis
 * @property string $location
 * @property string $steering
 * @property string $doors
 * @property string $dimension
 * @property string $weight
 * @property string $max_load
 * @property string $color
 * @property string $model
 * @property string $manufacturer
 * @property string $images
 */
class Cardetails extends \yii\db\ActiveRecord
{
    // public $imageFile=array();

     /**
     * @var UploadedFile[]
     */
    public $imageFiles;


    public $savedImageNames;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['images'], 'string'],
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
            [['reg_year', 'reg_number', 'mileage', 'body_type', 'model_year', 'engine_size', 'engine_type', 'trans', 'fuel_type', 'body_style', 'driveline', 'fuel_economy', 'anti_brake_system', 'front_brake_type', 'turning_diameter', 'rear_suspension', 'rear_spring_type', 'standard_seating', 'chassis', 'location', 'steering', 'doors', 'dimension', 'weight', 'max_load', 'color', 'model', 'manufacturer'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reg_year' => 'Reg Year',
            'reg_number' => 'Reg Number',
            'mileage' => 'Mileage',
            'body_type' => 'Body Type',
            'model_year' => 'Model Year',
            'engine_size' => 'Engine Size',
            'engine_type' => 'Engine Type',
            'trans' => 'Trans',
            'fuel_type' => 'Fuel Type',
            'body_style' => 'Body Style',
            'driveline' => 'Driveline',
            'fuel_economy' => 'Fuel Economy',
            'anti_brake_system' => 'Anti Brake System',
            'front_brake_type' => 'Front Brake Type',
            'turning_diameter' => 'Turning Diameter',
            'rear_suspension' => 'Rear Suspension',
            'rear_spring_type' => 'Rear Spring Type',
            'standard_seating' => 'Standard Seating',
            'chassis' => 'Chassis',
            'location' => 'Location',
            'steering' => 'Steering',
            'doors' => 'Doors',
            'dimension' => 'Dimension',
            'weight' => 'Weight',
            'max_load' => 'Max Load',
            'color' => 'Color',
            'model' => 'Model',
            'manufacturer' => 'Manufacturer',
            'images' => 'Images',
        ];
    }

     /**
     * Saves the uploaded image to the a folder
     * If upload is succesful it returns true
     */
    public function upload()
    {   
        // loop through images
        foreach ($this->imageFiles as $file) {
            // create the name to saved as
            $filename = $file->baseName.mt_rand() . '.' . $file->extension;
            // save image with name created
            $file->saveAs('images/uploads/' . $filename);
            // add all the names to a variable to be used in the controller
            $this->savedImageNames.=$filename.',';

            //  create thumbs for the images
            $this->create_thumbs('images/uploads/',$filename,'images/thumbs/');
        }
        return true;
    } // end upload()

    function create_thumbs($directory, $filename, $destination) 
    {
        // $filename = $filename;
        $image = $directory.$filename;

        if (file_exists($image)) 
        {

            $source_size = getimagesize($image);

            if ($source_size !== false) 
            {


                switch($source_size['mime']) 
                {
                    case 'image/jpeg':
                         $source = imagecreatefromjpeg($image);
                    break;
                    case 'image/png':
                         $source = imagecreatefrompng($image);
                    break;
                    case 'image/gif':
                         $source = imagecreatefromgif($image);
                    break;
                }

                list($width, $height) = getimagesize($image);
                //$source_size=getimagesize(getcwd().$upload_image);
                // $newwidth = $width*0.1; // This can be a set value or a percentage of original size ($width)
                // $newheight = $height*0.1; // This can be a set value or a percentage of original size ($height)


                // the math below makes all images same height. 
                // and the with is scaled propotionally 

                // height i want
                $newheight = 116;

                // get the ratio
                $ratio_orig = $height/$width;

                // get the new propotional width
                $newwidth = $newheight/$ratio_orig;
                // Load the images

                $thumb_s = imagecreatetruecolor($newwidth, $newheight);

                imagecopyresized($thumb_s, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                switch($source_size['mime']) 
                {
                    case 'image/jpeg':
                        imagejpeg($thumb_s, $destination.$filename);
                    break;
                    case 'image/png':
                        imagepng($thumb_s, $destination.$filename);
                    break;
                    case 'image/gif':
                        imagegif($thumb_s, $destination.$filename);
                    break;
                }

            }

        }
    } // end create_thumbs()

} // endclass
