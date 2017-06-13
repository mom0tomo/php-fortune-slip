<?php

	$uranai = array( "大吉", "中吉", "小吉", "吉", "凶" );

	$i = count( $uranai );
	$result = $uranai[ mt_rand( 0, $i-1 ) ];

	print( '今日のあなたの運勢は ' . '<span style="color:red; font-weight:bold;">' . $result . '</span>' . ' です！' );
