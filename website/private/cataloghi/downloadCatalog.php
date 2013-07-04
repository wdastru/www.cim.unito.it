<?php
    require ("connect.php");
    require ("variables.php");

    /*
     * export database to CSV file
     * 
     * * * * * * * * * * * * * * * */
    
    //create query to select as data from your table
    $select = "SELECT * FROM $DBName.catalogo";
    
    //run mysql query and then count number of fields
    $export = mysql_query ( $select ) 
           or die ( "Sql error : " . mysql_error( ) );
    $fields = mysql_num_fields ( $export );
    
    $header;
    $data;
    $file_name;
    
    //create csv header row, to contain table headers 
    //with database field names
    for ( $i = 0; $i < $fields; $i++ ) {
        $header .= mysql_field_name( $export , $i ) . "\t";
    }
    
    //this is where most of the work is done. 
    //Loop through the query results, and create 
    //a row for each
    while( $row = mysql_fetch_row( $export ) ) {
        $line = '';
        //for each field in the row
        foreach( $row as $value ) {
            //if null, create blank field
            if ( ( !isset( $value ) ) || ( $value == "" ) ){
                $value = ",";
            }
            //else, assign field value to our data
            else {
                $value = str_replace( '"' , '""' , $value );
                $value = '"' . $value . '"' . "\t";
            }
            //add this field value to our row
            $line .= $value;
        }
        //trim whitespace from each row
        $data .= trim( $line ) . "\n";
    }
    //remove all carriage returns from the data
    $data = str_replace( "\r" , "" , $data );
    
    
    //create a file and send to browser for user to download
    header("Content-type: application/vnd.ms-excel");
    header("Content-disposition: csv" . date("Y-m-d") . ".csv");
    header( "Content-disposition: filename=".$file_name.".csv");
    print "$header\n$data";
    exit;
?>