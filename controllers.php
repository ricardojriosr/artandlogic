<?php
/*
* [nr11], [nr18] class names prefixed with "A"
* This class is Used to Decode and Encode The Values
*/
class AdecodingFunctions
{
    // [nr01] - StyleGuide/NamingRules
    // [cg01] - StyleGuide/Commenting
    // Attributes
    public $integerValue;
    public $hexValue;
    public static $extendedRange = 8192;

    /**
    * [nr02] Member functions are named using CamelCase, with a leading upper
    *  case letter.
    * @param string stringValue name of the value to set.
    * @param string dynamicValue of the value to set.
    **/
    public function Set($attribute, $content){
			   $this->$attribute = $content;
		}

    /**
    * [nr03] Member functions are named using CamelCase, with a leading upper
    *  case letter.
    * @param string stringValue of the value to Get.
    **/
    public function Get($attribute) {
        return $this->$attribute;
    }


   /**
   * [nr04] Member functions are named using CamelCase, with a leading upper
   *  case letter.
   * @param integer integerValue Number of the value to Encode.
   **/
   public function EncodeInteger()
   {
        if ($this->integerValue > 8192 || $this->integerValue < -8192)
        {
            return 'Invalid Value';
        }
        else
        {
            $integerHex = $this->integerValue + self::$extendedRange;
            $integerHex0 = dechex($this->integerValue);
            $integerHex21 = $integerHex;
            $integerHex2 = ($integerHex21 &= 0x7F);
            $integerHex3 = $integerHex2 + (($integerHex &= 0xFF80)<<1);
            $encodedword = dechex((string)$integerHex3);
            return $encodedword;
        }
   }


   /**
   * [nr03] Member functions are named using CamelCase, with a leading upper
   *  case letter.
   * @param string stringValue Number of the value to Encode.
   **/
   public function DecodeHex()
   {
      $hexadecimal = intval($this->hexValue, 16);
      $hexadecimal2 = $hexadecimal;
      $hexadecimal3 = $hexadecimal;
      $hexadecimal1 =  (($hexadecimal2 &= 0x7F00) >> 1) + ($hexadecimal3 &= 0x7F);
      $hexadecimal1 = $hexadecimal1 -8192;
      return $hexadecimal1;
   }

}

?>
