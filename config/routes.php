<?php
return array(

	'flight/([0-9]+)' => 'flight/view/$1',
	'about' => 'about/index',
	'contacts/order' =>'contacts/order',
	'contacts' =>'contacts/index',

	'cabinet/edit' => 'cabinet/edit',
	'cabinet' => 'cabinet/index',

	//category = news
	// 'cabinet' => 'cabinet/index',

	// 'news/page-([0-9]+)/([0-9]+)' => 'news/$2/$1',
	//category = news

	'user/registry' => 'user/registry',
	'user/login' => 'user/login',
	'user/logout' => 'user/logout',


    // 'cabinet/edit' => 'cabinet/edit',
    	


	'news/page-([0-9]+)/([0-9]+)' => 'news/view/$2/$1',

	 'news/page-([0-9]+)' => 'news/index/$1',


	// 'news/([0-9]+)' => 'news/view/$1', //actionView in newsController
	'news' => 'news/index', // actionIndex in NewsController
//  'news/{id:\d+}'
	// 'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
	// 'news/([0-9]+)' => 'news/view',
	// 'products' => 'product/list', // actionList in ProductController

	
	'main' => 'main/index',
	'flight' => 'main/index',

    
    

	'' => 'main/index',

	// 'main' => 'main/index',

);