<?php

// Define the path to the files to monitor
$path = '/path/to/files/';

// Generate checksums for the files and store them in an array
$baseline_checksums = array();
$dir_iterator = new RecursiveDirectoryIterator($path);
foreach (new RecursiveIteratorIterator($dir_iterator) as $filename => $file) {
    if ($file->isFile()) {
        $baseline_checksums[$filename] = hash_file('sha256', $filename);
    }
}

// Check the current checksums against the stored baseline checksums
$current_checksums = array();
foreach ($baseline_checksums as $filename => $baseline_checksum) {
    $current_checksum = hash_file('sha256', $filename);
    if ($current_checksum !== $baseline_checksum) {
        // Send an email alert if any changes are detected
        $subject = 'FIM Alert: File '.$filename.' has been modified';
        $message = 'The file '.$filename.' has been modified.';
        $headers = 'From: your@email.com';
        mail('recipient@email.com', $subject, $message, $headers);
    }
}