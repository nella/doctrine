<?php

$message = 'THE DEVELOPMENT OF NELLA DOCTRINE HAS BEEN ABANDONED';

if (PHP_SAPI === 'cli') {
	$message .= PHP_EOL . 'Please use stable version (v0.8.0) or kdyby/doctrine' . PHP_EOL;
} else {
	$message .= PHP_EOL . '<br>' . PHP_EOL . 'Please use stable version (v0.8.0) or <a href="http://addons.nette.org/kdyby/doctrine">kdyby/doctrine</a>';
}

die($message);
