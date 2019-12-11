<?php

$params = require_once('params.php');

echo json_encode([
    'resourcePath' => '/request',
    'basePath' => $params['apiUrl'],
    'apis' => [
        [
            'path' => '/request/departments/{id}',
            'description' => 'get department list',
            'operations' => [
                [
                    'parameters' => [
                       [
                            'name' => 'id',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'integer',
                            'allowMultiple' => false,
                            'paramType' => 'path'
                        ],
                    ],
                    'summary' => 'department list',
                    'httpMethod' => 'GET',
                    'nickname' => '',
                    "consumes" => [
                       
                    ],
                ]
            ]
        ],
        [
            'path' => '/request/hearing-type',
            'description' => 'get hearing type list',
            'operations' => [
                [
                    'parameters' => [
                        [
                            'name' => 'access-token',
                            'description' => "The user's access_token",
                            'required' => true,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'header'
                        ]
                    ],
                    'summary' => 'hearing type list',
                    'httpMethod' => 'GET',
                    'nickname' => '',
                    "consumes" => [
                       
                    ],
                ]
            ]
        ],
        [
            'path' => '/request',
            'description' => 'post request',
            'operations' => [
                [
                    'parameters' => [
                        [
                            'name' => 'access-token',
                            'description' => "The user's access_token",
                            'required' => true,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'header'
                        ],
                        [
                            'name' => 'timezone',
                            'description' => "Current timezone like:- Asia/Kolkata",
                            'required' => true,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'case_id',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'case_number',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                      
                        [
                            'name' => 'department_id',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'hearing_type_id',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'sub_hearing_type',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'address',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'case_date',
                            'description' => "formate should be yyyy-mm-dd",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'case_time',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'party_1',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'party_2',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'party1_mobile',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'description',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'desired_outcome',
                            'description' => "",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'image[]',
                            'description' => "Document image",
                            'required' => false,
                            'dataType' => 'file',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                        [
                            'name' => 'tags',
                            'description' => "comma seperated values of tags",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'formData'
                        ],
                    ],
                    'summary' => 'post request',
                    'httpMethod' => 'POST',
                    'nickname' => '',
                    'consumes' => [
                        "multipart/form-data"
                    ],
                ]
            ]
        ],
        [
            'path' => '/request/generate-case-id',
            'description' => 'Generate caseId',
            'operations' => [
                [
                    'parameters' => [
                        [
                            'name' => 'access-token',
                            'description' => "The user's access_token",
                            'required' => true,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'header'
                        ],
                        
                    ],
                    'summary' => 'Generate caseId',
                    'httpMethod' => 'GET',
                    'nickname' => '',
                    "consumes" => [
                       
                    ],
                ]
            ]
        ],
        [
            'path' => '/request/accept-reject',
            'description' => 'Generate caseId',
            'operations' => [
                [
                    'parameters' => [
                        [
                            'name' => 'access-token',
                            'description' => "The user's access_token",
                            'required' => true,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'header'
                        ],
                        [
                            'name' => 'timezone',
                            'description' => "Timezone should be Asia/Kolkata",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'query'
                        ],
                        [
                            'name' => 'body',
                            'description' => 'status should be cancelled/accepted/completed<br><br>Timezone should be Asia/Kolkata',
                            'required' => false,
                            'type' => 'accept_reject',
                            'paramType' => 'body'
                        ],
                        
                    ],
                    'summary' => 'cancel request',
                    'httpMethod' => 'POST',
                    'nickname' => '',
                    "consumes" => [
                       
                    ],
                ]
            ]
        ],
        [
            'path' => '/request/list',
            'description' => 'Generate caseId',
            'operations' => [
                [
                    'parameters' => [
                        [
                            'name' => 'access-token',
                            'description' => "The user's access_token",
                            'required' => true,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'header'
                        ],
                        [
                            'name' => 'type',
                            'description' => "should be:- requested/received/cancelled",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'query'
                        ],
                        [
                            'name' => 'last_case_id',
                            'description' => "should be:- ",
                            'required' => false,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'query'
                        ],
                    ],
                    'summary' => 'request list',
                    'httpMethod' => 'GET',
                    'nickname' => '',
                    "consumes" => [
                       
                    ],
                ]
            ]
        ],
        [
            'path' => '/request/{request_id}',
            'description' => 'Case request detail',
            'operations' => [
                [
                    'parameters' => [
                        [
                            'name' => 'access-token',
                            'description' => "The user's access_token",
                            'required' => true,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'header'
                        ],
                        [
                            'name' => 'request_id',
                            'description' => "",
                            'required' => true,
                            'dataType' => 'int',
                            'allowMultiple' => false,
                            'paramType' => 'path'
                        ],
                        
                    ],
                    'summary' => 'request detail',
                    'httpMethod' => 'GET',
                    'nickname' => '',
                    "consumes" => [
                       
                    ],
                ]
            ]
        ],
        [
            'path' => '/request/case-review',
            'description' => 'Case Review',
            'operations' => [
                [
                    'parameters' => [
                        [
                            'name' => 'access-token',
                            'description' => "The user's access_token",
                            'required' => true,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'header'
                        ],
                        [
                            'name' => 'body',
                            'description' => 'message should be in string',
                            'required' => false,
                            'type' => 'case_review',
                            'paramType' => 'body'
                        ],
                        
                    ],
                    'summary' => 'Case review',
                    'httpMethod' => 'POST',
                    'nickname' => '',
                    "consumes" => [
                       
                    ],
                ]
            ]
        ],
        [
            'path' => '/request/case-cancel-message',
            'description' => 'Case cancel message',
            'operations' => [
                [
                    'parameters' => [
                        [
                            'name' => 'access-token',
                            'description' => "The user's access_token",
                            'required' => true,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'header'
                        ],
                        [
                            'name' => 'request_id',
                            'description' => "",
                            'required' => true,
                            'dataType' => 'int',
                            'allowMultiple' => false,
                            'paramType' => 'query'
                        ],
                        [
                            'name' => 'timezone',
                            'description' => "Timezone should be Asia/Kolkata",
                            'required' => true,
                            'dataType' => 'string',
                            'allowMultiple' => false,
                            'paramType' => 'query'
                        ],
                    ],
                    'summary' => 'Case cancel message',
                    'httpMethod' => 'GET',
                    'nickname' => '',
                    "consumes" => [
                       
                    ],
                ]
            ]
        ],
    ],
    'apiVersion' => $params['apiVersion'],
    'swaggerVersion' => $params['swaggerVersion'],
    'models' => [
        'post_request' => [
            'properties' => [
                'case_id' => ['type' => 'string'],
                'case_number' => ['type' => 'string'],
                'to_id' => ['type' => 'string'],
                'department_id' => ['type' => 'string'],
                'hearing_type_id' => ['type' => 'string'],
                'address' => ['type' => 'string'],
                'case_date' => ['type' => 'string'],
                'case_time' => ['type' => 'string'],
                'party_1' => ['type' => 'string'],
                'party_2' => ['type' => 'string'],
                'description' => ['type' => 'string'],
                'desired_outcome' => ['type' => 'string'],
            ],
            'id' => 'post_request',
            'type' => 'any',
            'required' => false
        ],
        'changepassword'=>[
            'properties' => [
                'password'=>['type'=>'string'],
                'new_password'=>['type'=>'string'],
            ],
            'id' => 'changepassword',
            'type' => 'any',
            'required' => false
        ],
        'accept_reject'=>[
            'properties' => [
                'request_id'=>['type'=>'string'],
                'status'=>['type'=>'string']
            ],
            'id' => 'accept_reject',
            'type' => 'any',
            'required' => false
        ],
        'case_review'=>[
            'properties' => [
                'request_id'=>['type'=>'string'],
                'review'=>['type'=>'string'],
            ],
            'id' => 'case_review',
            'type' => 'any',
            'required' => false
        ],
    ] 
]);

