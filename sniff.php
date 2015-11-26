<?php
    if (!class_exists('Sniffer'))  require_once('lib/Sniffer.php');
    
    function sniff() {
        try {
            return new Sniffer();
        } catch (Exception $e) {
            print "<strong>The sniff plugin threw an error</strong><br>" . $e->getMessage();
        }
    }