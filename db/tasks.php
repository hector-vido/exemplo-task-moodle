<?php

defined('MOODLE_INTERNAL') || die();
$tasks = array(
	array(
		'classname' => 'local_pulso\task\pulso',
		'blocking' => 0,
		'minute' => '*/1', # A cada 1 minuto
		'hour' => 0,
		'day' => 0,
		'dayofweek' => 0,
		'month' => 0
	)
);
