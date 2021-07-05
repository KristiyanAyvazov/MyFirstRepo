<?php
// Exercise 1.
function learning_functions( $string ) {
	echo $string;
}

// Exercise 2.
$bool === false;
function boolean_checker( $bool ) {
	if ( $bool === true ) {
		echo 'Foo';
		echo "\n";
	} else {
		echo 'Bar';
		echo "\n";
	}
}

// Exercise 3.
$i = 0;
while ( $i <= 100) {
	if ( $i % 3 == 0 ) {
		echo 'Foo';
		echo "\n";
	} 

	if ( $i % 5 == 0 ) {
		echo 'Bar';
		echo "\n";
	}

	if ( $i % 3 == 0 && $i % 5 == 0 ) {
		echo 'FooBar';
		echo "\n";
	}
	$i++;
}

foreach ( range( 0,100 ) as $key) {

	if ( ($key % 3 == 0) && ($i % 5 == 0) ) {
		echo 'FooBar';
		echo "\n";
	}

	if ( $key % 3 == 0 ) {
		echo 'Foo';
		echo "\n";
	} 

	if ( $key % 5 == 0 ) {
		echo 'Bar';
		echo "\n";
	}
}