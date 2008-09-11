<?php
    // spit out random quote from the quotes file
    $quotesfile = file('extras/quotes');
    $quotes = array();
    $i = 0;
    foreach ( $quotesfile as $line ) {
	$line = preg_replace('/#.*$/', '', $line);
	$x = explode('|', $line);
	if ( count($x) == 2 ) {
	    $quotes[$i++] = array ( 'text' => $x[0], 'cite' => $x[1] );
	}
    }
    $quote = $quotes[ rand( 0, count( $quotes ) - 1 ) ];
    echo "&ldquo;<q>" . $quote['text'] . "</q>&rdquo; <cite>" . $quote['cite'] . "</cite>";
?>
