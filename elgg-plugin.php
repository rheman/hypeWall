<?php

return [
	'bootstrap' => \hypeJunction\Wall\Bootstrap::class,
	'entities' => [
		'hjwall' => [
			'type' => 'object',
			'subtype' => 'hjwall',
			'class' => \hypeJunction\Wall\Post::class,
			'searchable' => true,
		],
	],
	'settings' => [
		'url' => 1,
		'photo' => 1,
		'third_party_wall' => 0,
		'character_limit' => 0,
	],
	'user_settings' => [
		'river_access_id' => ACCESS_PRIVATE,
		'third_party_wall' => 0,
	],
	'routes' => [
		'default:object:hjwall' => [
			'path' => '/wall/owner',
			'resource' => 'wall/owner',
			'middleware' => [
				\Elgg\Router\Middleware\Gatekeeper::class,
			],
		],
		'collection:object:hjwall' => [
			'path' => '/wall/{guid}',
			'resource' => 'wall/container',
		],
		'collection:object:hjwall:owner' => [
			'path' => '/wall/owner/{username?}/{post_guids?}',
			'resource' => 'wall/owner',
		],
		'collection:object:hjwall:group' => [
			'path' => '/wall/group/{guid}/{post_guids?}',
			'resource' => 'wall/container',
		],
		'view:object:hjwall' => [
			'path' => '/wall/post/{guid}',
			'resource' => 'wall/view',
		],
		'edit:object:hjwall' => [
			'path' => '/wall/edit/{guid}',
			'resource' => 'wall/edit',
		],
	],
];
