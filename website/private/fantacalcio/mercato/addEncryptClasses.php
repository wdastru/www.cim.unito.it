<?php

//Encryption class
Class cls_encrypt
{
	var $s_array = array();
	var $K_array = array();
	var $return_val = "";
	var $num_count;
	var $alp_count;
	var $lwr_count;

    //Function to return the decimal value of an ascii character...
    function get_ascii_val($passed_val)
	{
        //This assigns all the ascii vals to the $asc_chars() array...
        for($x_val = 0; $x_val <= 255; $x_val = $x_val + 1)
		{
            $asc_chars[chr($x_val)] = $x_val; 
        }
        return $asc_chars[$passed_val];
    } 

    //Basic function to encrypt/decrypt. Input_val gets crypted/decrypted using key_val... 
    function encrypt_value($input_val, $key_val)
	{
        //Create an array of 0 - 255 and initialise 
        for ($i = 0; $i <= 255; $i = $i + 1)
		{
            $s_array[$i] = $i;
        }  

        //
        $j = 1;
        //Create an array of 0 - 255 and initialise with a calculated chr value...
        for ($i = 0; $i <= 255; $i = $i + 1)
		{
            if ($j > strlen($key_val))
			{
                $j = 1;
            }
            $K_array[$i] = $this -> get_ascii_val(substr($key_val, $j, 1));
            $j = $j + 1;
        }
        
        //Shuffle the array values around to give a 'random' value...
        $j = 0;
        for ($i = 0; $i <= 255; $i = $i + 1)
		{
            $j = ($j + $s_array[$i] + $K_array[$i]) % 256;
            $temp_var = $s_array[$i];
            $s_array[$i] = $s_array[$j];
            $s_array[$j] = $temp_var;
        }
        
        //Create the 'encrypted' string from the 2 initialised arrays...
        $i = 0;
        $j = 0;
        for ($x = 0; $x < strlen($input_val); $x++)
		{
            $i = ($i + 1) % 256;
            $j = ($j + $s_array[$i]) % 256;
            $temp_var = $s_array[$i];
            $s_array[$i] = $s_array[$j];
            $s_array[$j] = $temp_var;
            $t = ($s_array[$i] + ($s_array[$j] % 256)) % 256;
            $y = $s_array[$t];
            $comp_val = $this -> get_ascii_val(substr($input_val, $x, 1)) ^ $y;
            $calc_val = Chr($this -> get_ascii_val(substr($input_val, $x, 1)) ^ $y);
            $return_val = isset($return_val) ? $return_val.$calc_val : '';
        }
        return $return_val;
    }
}
?>
