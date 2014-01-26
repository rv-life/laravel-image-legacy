<?php



return array(

	/*
	|--------------------------------------------------------------------------
	| Default Image Driver
	|--------------------------------------------------------------------------
	|
	| This option controls the default image "driver" used by Imagine library
	| to manipulate images.
	|
	| Supported: "gd", "imagick", "gmagick"
	|
	*/

	'driver' => 'gd',

	/*
	|--------------------------------------------------------------------------
	| URL parameter
	|--------------------------------------------------------------------------
	|
	| The URL parameter that will be appended to your image filename containing
	| all the options for image manipulation. You have to put {options} where
	| you want options to be placed. Keep in mind that this parameter is used
	| in an url so all characters should be URL safe.
	|
	| Default: -image({options})
	|
	| Example: /uploads/photo-image(300x300-grayscale).jpg
	|
	*/
	'url_parameter' => '-image({options})',

	/*
	|--------------------------------------------------------------------------
	| Serve image
	|--------------------------------------------------------------------------
	|
	| If true, a route will be added to catch image containing the
	| URL parameter above.
	|
	*/
	'serve_image' => true,

	/*
	|--------------------------------------------------------------------------
	| Serve custom Filters only
	|--------------------------------------------------------------------------
	|
	| Restrict options in url to custom filters only. This prevent direct
	| manipulation of the image.
	|
	*/
	'serve_custom_filters_only' => false,

	/*
	|--------------------------------------------------------------------------
	| Write image
	|--------------------------------------------------------------------------
	|
	| When serving an image, write the manipulated image in the same directory
	| as the original image so the next request will serve this static file
	|
	*/
	'write_image' => true

);