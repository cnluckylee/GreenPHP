<?php
return	array(
    'sso_sae'=> array(
        'driver' => 'FileCache', //sae缓存
        'domain' => 'sso_', //缓存域(缓存前缀)
        'expire' => 86400, //缓存有效期
    ),
    
	'sso_mem' => array(
        'driver' => 'FileCache', //缓存驱动
        'path'   => sys_get_temp_dir(), //缓存存放位置
        'domain' => 'caches', //缓存目录
        'expire' => 86400, //缓存有效期
	),
	
	'file' => array(
        'driver' => 'FileCache', //缓存驱动
        'path'   => sys_get_temp_dir(), //缓存存放位置
        'domain' => 'caches', //缓存目录
        'expire' => 86400, //缓存有效期
	),
	'common_mem' => array(
        'driver' => 'FileCache', //缓存驱动
        'path'   => sys_get_temp_dir(), //缓存存放位置
        'domain' => 'caches', //缓存目录
        'expire' => 86400, //缓存有效期
	),
	'mobi_mem' => array(
        'driver' => 'FileCache', //缓存驱动
        'path'   => sys_get_temp_dir(), //缓存存放位置
        'domain' => 'caches', //缓存目录
        'expire' => 86400, //缓存有效期
	),
	
	/*
	//memcache配置参数
	'common_mem' => array(
			'driver' => 'MemcacheCache', //memcache缓存
			'path'   => MEM_HOST, //缓存位置
			'port'   => MEM_PORT, //memcache端口
			'domain' => 'common_', //缓存域(缓存前缀)
			'expire' => 600, //缓存有效期
	),
	*/
);