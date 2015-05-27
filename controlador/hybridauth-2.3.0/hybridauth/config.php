<?php
/**
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2014, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------


$config =   array(
		"base_url" => "http://localhost/redessociales/controlador/hybridauth-2.3.0/hybridauth/index.php", 

		"providers" => array ( 
			"Google" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "1072762848427-s9entmol7bbav9ml4dd1v5tf59hlkja6.apps.googleusercontent.com", "secret" => "KW6bQmpPEeTxoog2UbjPH71B" ), 
			),

			"Facebook" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "1560691594212581", "secret" => "00d3ad314cfff9dff077d4d64507046c" ),
                                "scope" => "email, user_about_me, user_birthday, user_hometown" // optional,
				
			),

			"Twitter" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "iKoJPDD1VQJ0YWW0UVIAMqY4B", "secret" => "WnzACb1neUSJPcBLzBIK9ZolBasOI7UXV777U11CY5gzetT2KF" ) 
			),

			"LinkedIn" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "773sapti2vywnh", "secret" => "yLzGsKsgWINXQa8U" ) 
			),
                    
                        "Instagram" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "a680305346e9447c86f53983cc763608", "secret" => "227a97739dc6414f99980f93d57681c9" ) 
			),

		),

		// If you want to enable logging, set 'debug_mode' to true.
		// You can also set it to
		// - "error" To log only error messages. Useful in production
		// - "info" To log info and error messages (ignore debug messages) 
		"debug_mode" => true,

		// Path to file writable by the web server. Required if 'debug_mode' is not false
		"debug_file" => "debug.log",
	);
