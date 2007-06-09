<?php
	// spit out random quote from the quotes file
	$quotesfile = file('extras/quotes');
	$quotes = array();
	$i = 0;
	foreach ( $quotesfile as $line ) {
		$line = trim($line);
		if ( $line[0] != '#' ) {
			$x = explode('|', $line);
			if ( count($x) == 2 ) {
				$quotes[$i++] = array ( 'text' => trim( $x[0] ),
										'cite' => trim( $x[1] ) );
			}
		}
	}
	$quote = $quotes[ rand( 0, count( $quotes ) - 1 ) ];
	echo "&ldquo;<q title=\"" . $quote['cite'] . "\">" . $quote['text'] . "</q>&rdquo;";
//	echo "&ldquo;<q title=\"" . $quote['cite'] . "\">" . $quote['text'] . "</q>&rdquo; <cite>" . $quote['cite'] . "</cite>";
?>
