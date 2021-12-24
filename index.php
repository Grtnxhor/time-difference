<?php

$datposted = 10/20/19 10:20:35;

function timediffrnce($dateposted) {
 
//if you leave this it takes your current timezone
$userTimezone = "Africa/Lagos";
$timezone = new DateTimeZone( $userTimezone );
 
$crrentSysDate = new DateTime(date('m/d/y h:i:s a'),$timezone);
$userDefineDate = $crrentSysDate->format('m/d/y h:i:s a');
 
$start = date_create($userDefineDate,$timezone);
$end = date_create(date('m/d/y h:i:s a', strtotime($dateposted)),$timezone);
 
$diff=date_diff($start,$end);

$year 		 = $diff->y;
$month       = $diff->m;
$days 		 = $diff->d;
$hours		 = $diff->h;
$minutes	 = $diff->i;
$seconds 	 = $diff->s;


 
if($seconds < 60 && $minutes == 0 && $hours == 0 && $days == 0 && $month == 0 && $year == 0) {

	echo "Just now";

} else {

if($minutes < 60 && $hours == 0 && $days == 0 && $month == 0 && $year == 0) {

	echo $minutes." minutes ago";

} else {

if($hours < 24 && $days == 0 && $month == 0 && $year == 0){
	
	if($hours == 1) {
		echo $hours." hour ago";
	} else {
		echo $hours." hours ago";
	}
	
} else {

if($days != 0 && $month == 0 && $year == 0) {

	if($days == 1) {
		echo $days." day ago";
	} else {
		echo $days." days ago";
	}

} else {

if($month != 0 && $year == 0) {

	if($month == 1) {
		echo $month." month ago";
	} else {
		echo $month." months ago";
	}
	
	
} else {

if($year != 0) {

	if($year == 1) {
		echo $year." year ago";
	} else {
		echo $year." years ago";
	}
	
}
}
}
}
}
}
}

echo timediffrnce($dateposted);
?>
