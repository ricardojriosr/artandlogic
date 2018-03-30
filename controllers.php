<?php
// [nr11], [nr18] class names prefixed with "A"
class AdecodingFunctions
{
    // [nr01] - StyleGuide/NamingRules
    // [cg01] - StyleGuide/Commenting
    // Attributes
    public $integerValue;
    public $hexValue;
    public static $extendedRange = 8192;

    /**
    * Construct and initialize the AdecodingFunctions object.
    */
   public function __construct()
   {

   }

   /**
   * [nr02] Member functions are named using CamelCase, with a leading upper
   *  case letter.
   * @param integer integerValue Number of the value to Decode.
   **/
   public function EncodeInteger($integerValue)
   {
        if ($integerValue > 8192 || $integerValue < -8192)
        {
            return 'Invalid Value';
        }
        else
        {
            $this->integerValue = $integerValue + self::$extendedRange;
            $intermediateHex = dechex($this->integerValue);
            echo 'Unencoded (decimal) = ' . $integerValue;
            echo '<br>';
            echo 'Intermediate = ' . $this->integerValue;
            echo '<br>';
            echo 'Intermediate (Hex) = ' . $intermediateHex;
            echo '<br>';
            echo 'Encoded (Hex) = ' . 'HELP HERE!!!!';
            echo '<br>';
        }
   }


   /**
   * [nr03] Member functions are named using CamelCase, with a leading upper
   *  case letter.
   * @param string stringValue Number of the value to Encode.
   **/
   public function DecodeHex($hexValue)
   {
       $this->hexValue = $hexValue;
       return dechex($this->hexValue);
   }

   /**
   * Destruct and finish the AdecodingFunctions object.
   */
   public function __destruct()
   {

   }

}


$art1 = new AdecodingFunctions();
$art1->EncodeInteger(0);
echo '<br>';
$art1->EncodeInteger(-8192);
echo '<br>';
$art1->EncodeInteger(8191);
echo '<br>';
$art1->EncodeInteger(2048);
echo '<br>';
$art1->EncodeInteger(-4096);
