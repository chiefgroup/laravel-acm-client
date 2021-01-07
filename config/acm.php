<?php

return [
    // 是否开启配置中心的接入流程，为 true 时会自动启动 GetConfig 任务更新配置
    'enable' => true,
    //accesskey
    'access_key' => env('ALIYUN_ACM_AK'),
    //secretkey
    'secret_key' => env('ALIYUN_ACM_SK'),
    //namespace
    'namespace' => env('ALIYUN_ACM_NAMESPACE'),
    //data_id
    'data_id' => env('ALIYUN_ACM_DATA_ID'),
    //group
    'group' => env('ALIYUN_ACM_GROUP', 'DEFAULT_GROUP'),
    //acm config file path
    'path' => base_path('acm.json'),
    // endpoint
    'endpoint' => env('ALIYUN_ACM_ENDPOINT', 'acm.aliyun.com'),
];
