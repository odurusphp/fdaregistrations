<?php


// Constant to secure "cron" jobs
define('JOBSEC', '$2y$10$VLdXLJRsEFF/lgJ2cQPEguWBLvoGSwpKPL.L3A3phIFyhDaDtr4bW');

define('JSVARS',serialize(array(
	'urlroot' => URLROOT
)));

define('ROUTE_REQUEST',true);

define('USERNAME', 'postmaster@mg.myfinancecoach.com');
define('PASSWORD', '0015e89b20ad6cbc5e3961b951595ffd');
define('MFCEMAIL', 'mymentor@myfinancecoach.org');
//define('MFCEMAIL', 'cassandra.sarfo@yahoo.com');
define('MFCSENDEREMAIL', 'volunteering@myfinancecoach.com');



?>