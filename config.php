<?php
$statusFile = '/var/log/nagios/status.dat';
$objectsFile = '/var/spool/nagios/objects.cache';
$showAddresses = TRUE;
$refresh = 5; 
$statusFileTimeout = 60; 
// Filter hosts - filter hosts with (only machines starting with  'brno-')
// $hostFilter = function ($match) { return preg_match('/^brno-/', $match); };
$nagliteHeading = 'Monitoring Dashboard :: ' . gethostname();
