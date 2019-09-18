<?php
if (! isset($GLOBALS['WEEK_START'])) {
	$GLOBALS['WEEK_START'] = "";
}

function backwardStrpos($haystack, $needle, $offset = 0){
    $length = strlen($haystack);
    $offset = ($offset > 0)?($length - $offset):abs($offset);
    $pos = strpos(strrev($haystack), strrev($needle), $offset);
    return ($pos === false)?false:( $length - $pos - strlen($needle) );
}

/**
 * Gets the Monday of the week that the specified date is in.
 *
 * If the date specified is a Monday, then that date is returned.
 *
 * @param int $year  Year
 * @param int $month Month (1-12)
 * @param int $day   Day of the month
 *
 * @return int The date (in UNIX timestamp format)
 *
 * @see get_sunday_before
 */
function get_monday_before ( $year, $month, $day ) {
	$weekday = date ( "w", mktime ( 3, 0, 0, $month, $day, $year ) );
	if ( $weekday == 0 )
	return mktime ( 3, 0, 0, $month, $day - 6, $year );
	if ( $weekday == 1 )
	return mktime ( 3, 0, 0, $month, $day, $year );
	return mktime ( 3, 0, 0, $month, $day - ( $weekday - 1 ), $year );
}

/**
 * Gets the Sunday of the week that the specified date is in.
 */
function get_sunday_before ( $year, $month, $day ) {
	/**
	 * 
	 * mktime ( 3, 0, 0, $month, $day, $year )
	 * da' il timestamp delle ore 3:00 di $month, $day, $year
	 * 
	 * date ( "w", mktime ( 3, 0, 0, $month, $day, $year ) )
	 * fornisce il giorno della settimana:
	 * 
	 * 0 : sunday
	 * 1 : monday
	 * ...
	 * 
	 */
	$weekday = date ( "w", mktime ( 3, 0, 0, $month, $day, $year ) );
	return mktime ( 3, 0, 0, $month, $day - $weekday + 1 , $year );
}

/**
 * Converts a date in YYYYMMDD format into "Friday, December 31, 1999",
 * "Friday, 12-31-1999" or whatever format the user prefers.
 *
 * @param string $indate       Date in YYYYMMDD format
 * @param string $format       Format to use for date (default is "__month__
 *                             __dd__, __yyyy__")
 * @param bool   $show_weekday Should the day of week also be included?
 * @param bool   $short_months Should the abbreviated month names be used
 *                             instead of the full month names?
 * @param int    $server_time ???
 *
 * @return string Date in the specified format
 *
 * @global string Preferred date format
 * @global int    User's timezone offset from the server
 */
function date_to_str ( $indate, $format="", $show_weekday=true, $short_months=false, $server_time="" ) {
	global $DATE_FORMAT, $TZ_OFFSET;

	if ( strlen ( $indate ) == 0 ) {
		$indate = date ( "Ymd" );
	}

	$newdate = $indate;
	if ( $server_time != "" && $server_time >= 0 ) {
		$y = substr ( $indate, 0, 4 );
		$m = substr ( $indate, 4, 2 );
		$d = substr ( $indate, 6, 2 );
		if ( $server_time + $TZ_OFFSET * 10000 > 240000 ) {
			$newdate = date ( "Ymd", mktime ( 3, 0, 0, $m, $d + 1, $y ) );
		} else if ( $server_time + $TZ_OFFSET * 10000 < 0 ) {
			$newdate = date ( "Ymd", mktime ( 3, 0, 0, $m, $d - 1, $y ) );
		}
	}

	// if they have not set a preference yet...
	if ( $DATE_FORMAT == "" )
	$DATE_FORMAT = "__month__ __dd__, __yyyy__";

	if ( empty ( $format ) )
	$format = $DATE_FORMAT;

	$y = (int) ( $newdate / 10000 );
	$m = (int) ( $newdate / 100 ) % 100;
	$d = $newdate % 100;
	$date = mktime ( 3, 0, 0, $m, $d, $y );
	$wday = strftime ( "%w", $date );

	if ( $short_months ) {
		$weekday = weekday_short_name ( $wday );
		$month = month_short_name ( $m - 1 );
	} else {
		$weekday = weekday_name ( $wday );
		$month = month_name ( $m - 1 );
	}
	$yyyy = $y;
	$yy = sprintf ( "%02d", $y %= 100 );

	$ret = $format;
	$ret = str_replace ( "__yyyy__", $yyyy, $ret );
	$ret = str_replace ( "__yy__", $yy, $ret );
	$ret = str_replace ( "__month__", $month, $ret );
	$ret = str_replace ( "__mon__", $month, $ret );
	$ret = str_replace ( "__dd__", $d, $ret );
	$ret = str_replace ( "__mm__", $m, $ret );

	if ( $show_weekday )
	return "$weekday, $ret";
	else
	return $ret;
}

/**
 * Returns the full weekday name.
 *
 * Use {@link weekday_short_name()} to get the abbreviated weekday name.
 *
 * @param int $w Number of the day in the week (0=Sunday,...,6=Saturday)
 *
 * @return string The full weekday name ("Sunday")
 *
 * @see weekday_short_name
 */
function weekday_name ( $w ) {
	switch ( $w ) {
		case 0: return "Sunday";
		case 1: return "Monday";
		case 2: return "Tuesday";
		case 3: return "Wednesday";
		case 4: return "Thursday";
		case 5: return "Friday";
		case 6: return "Saturday";
	}
	return "unknown-weekday($w)";
}

/**
 * Returns the full name of the specified month.
 *
 * Use {@link month_short_name()} to get the abbreviated name of the month.
 *
 * @param int $m Number of the month (0-11)
 *
 * @return string The full name of the specified month
 *
 * @see month_short_name
 */
function month_name ( $m ) {
	switch ( $m ) {
		case 0: return "January";
		case 1: return "February";
		case 2: return "March";
		case 3: return "April";
		case 4: return "May "; // needs to be different than "May"
		case 5: return "June";
		case 6: return "July";
		case 7: return "August";
		case 8: return "September";
		case 9: return "October";
		case 10: return "November";
		case 11: return "December";
	}
	return "unknown-month($m)";
}

/**
 * Returns the week number for specified date.
 *
 * Depends on week numbering settings.
 *
 * @param int $date Date in UNIX timestamp format
 *
 * @return string The week number of the specified date
 */
function week_number ( $date ) {
	$tmp = getdate($date);
	$iso = gregorianToISO($tmp['mday'], $tmp['mon'], $tmp['year']);
	$parts = explode('-',$iso);
	$week_number = intval($parts[1]);
	return sprintf("%02d",$week_number);
}

/**
 * Converts from Gregorian Year-Month-Day to ISO YearNumber-WeekNumber-WeekDay.
 *
 * @internal JGH borrowed gregorianToISO from PEAR Date_Calc Class and added
 * $GLOBALS['WEEK_START'] (change noted)
 *
 * @param int $day   Day of month
 * @param int $month Number of month
 * @param int $year  Year
 *
 * @return string Date in ISO YearNumber-WeekNumber-WeekDay format
 *
 * @ignore
 */
function gregorianToISO($day,$month,$year) {
	$mnth = array (0,31,59,90,120,151,181,212,243,273,304,334);
	$y_isleap = isLeapYear($year);
	$y_1_isleap = isLeapYear($year - 1);
	$day_of_year_number = $day + $mnth[$month - 1];
	if ($y_isleap && $month > 2) {
		$day_of_year_number++;
	}
	// find Jan 1 weekday (monday = 1, sunday = 7)
	$yy = ($year - 1) % 100;
	$c = ($year - 1) - $yy;
	$g = $yy + intval($yy/4);
	$jan1_weekday = 1 + intval((((($c / 100) % 4) * 5) + $g) % 7);


	// JGH added next if/else to compensate for week begins on Sunday
	if (! $GLOBALS['WEEK_START'] && $jan1_weekday < 7) {
		$jan1_weekday++;
	} elseif (! $GLOBALS['WEEK_START'] && $jan1_weekday == 7) {
		$jan1_weekday=1;
	}

	// weekday for year-month-day
	$h = $day_of_year_number + ($jan1_weekday - 1);
	$weekday = 1 + intval(($h - 1) % 7);
	// find if Y M D falls in YearNumber Y-1, WeekNumber 52 or
	if ($day_of_year_number <= (8 - $jan1_weekday) && $jan1_weekday > 4){
		$yearnumber = $year - 1;
		if ($jan1_weekday == 5 || ($jan1_weekday == 6 && $y_1_isleap)) {
			$weeknumber = 53;
		} else {
			$weeknumber = 52;
		}
	} else {
		$yearnumber = $year;
	}
	// find if Y M D falls in YearNumber Y+1, WeekNumber 1
	if ($yearnumber == $year) {
		if ($y_isleap) {
			$i = 366;
		} else {
			$i = 365;
		}
		if (($i - $day_of_year_number) < (4 - $weekday)) {
			$yearnumber++;
			$weeknumber = 1;
		}
	}
	// find if Y M D falls in YearNumber Y, WeekNumber 1 through 53
	if ($yearnumber == $year) {
		$j = $day_of_year_number + (7 - $weekday) + ($jan1_weekday - 1);
		$weeknumber = intval($j / 7);
		if ($jan1_weekday > 4) {
			$weeknumber--;
		}
	}
	// put it all together
	if ($weeknumber < 10)
	$weeknumber = '0'.$weeknumber;
	return "{$yearnumber}-{$weeknumber}-{$weekday}";
}

/**
 * Is this a leap year?
 *
 * @internal JGH Borrowed isLeapYear from PEAR Date_Calc Class
 *
 * @param int $year Year
 *
 * @return bool True for a leap year, else false
 *
 * @ignore
 */
function isLeapYear($year='') {
	if (empty($year)) $year = strftime("%Y",time());
	if (strlen($year) != 4) return false;
	if (preg_match('/\D/',$year)) return false;
	return (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0);
}
?>
