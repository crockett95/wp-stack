include lamp

# Vhost
apache::vhost { 'wordpress.192.168.33.10.xip.io' :
	port	=>	'80',
	docroot	=>	'/vagrant',
	serveraliases	=>	'*.wordpress.192.168.33.10.xip.io',
	directories 	=> 	[
		{
			path	=>	'/vagrant', 
        	options => 	[ 'FollowSymLinks', 'MultiViews' ], 
		},
	],
}

# New Database
mysql::db { 'wordpress' :
	user 		=> 	'wordpress',
	password 	=> 	'password',
	host 		=> 	'localhost',
	grant 		=> 	['ALL'],
}
