<?php
return [
    'paths' => [
        "/signup" => [
            "post" => [
                "tags" => [
                    "account"
                ],
                "summary" => "User Sign Up",
                "description" => "User Sign Up",
                "operationId" => "signup",
                "consumes" => [
                    "multipart/form-data"
                ],
                "produces" => [
                   "application/json"
                ],
                "parameters" => [
                    [
                        "name" => "first_name",
                        "in" => "formData",
                        "description" => "first_name",
                        "required" => false,
                        "type" => "string"
                    ],
                    [
                        "name" => "last_name",
                        "in" => "formData",
                        "description" => "last_name",
                        "required" => false,
                        "type" => "string"
                    ],
                    [
                        "name" => "mobile",
                        "in" => "formData",
                        "description" => "mobile",
                        "required" => false,
                        "type" => "string",
                    ],
                   
                ],
                "responses" => [
                    
                ]
            ]
        ],
      
        "/login" => [
            "post" => [
                "tags" => [
                    "account"
                ],
                "summary" => "Login a user",
                "description" => "Login for agent or renter",
                "operationId" => "login",
                "consumes" => [
                    "application/json"
                ],
                "produces" => [
                    "application/json"
                ],
                "parameters" => [
                    [
                        "in" => "body",
                        "name" => "body",
                        "description" => "Login with mobile number role will be provider/user",
                        "required" => false,
                        "schema" => [
                            '$ref' => "#/definitions/login"
                        ]
                    ]
                ],
                "responses" => [
                    
                ]
            ]
        ],
        "/resend-code" => [
            "post" => [
                "tags" => [
                    "account"
                ],
                "summary" => "resend-code",
                "description" => "resend-code",
                "operationId" => "resend-code",
                "consumes" => [
                    "application/json"
                ],
                "produces" => [
                    "application/json"
                ],
                "parameters" => [
                    [
                        "in" => "body",
                        "name" => "body",
                        "description" => "resend-code",
                        "required" => false,
                        "schema" => [
                            '$ref' => "#/definitions/login"
                        ]
                    ]
                ],
                "responses" => [
                    
                ]
            ]
                ],
        "/verify" => [
            "post" => [
                "tags" => [
                    "account"
                ],
                "summary" => "verify a user",
                "description" => "verify",
                "operationId" => "verify",
                "consumes" => [
                    "application/json"
                ],
                "produces" => [
                    "application/json"
                ],
                "parameters" => [
                    [
                        "in" => "body",
                        "name" => "body",
                        "description" => "role will be user/provider",
                        "required" => false,
                        "schema" => [
                            '$ref' => "#/definitions/verify"
                        ]
                    ]
                ],
                "responses" => [
                    
                ]
            ]
                ],
        "/logout" => [
            "post" => [
                "tags" => [
                    "account"
                ],
                "summary" => "Login a user",
                "description" => "Login for agent or renter",
                "operationId" => "login",
                "consumes" => [
                    "application/json"
                ],
                "produces" => [
                    "application/json"
                ],
                "parameters" => [
                    [
                        "in" => "header",
                        "name" => "access-token",
                        "description" => "",
                        "required" => TRUE,
                        "type" => "string"
                    ]
                ],
                "responses" => [
                    
                ]
            ]
        ],
        
        "/user_detail" => [
            "get" => [
                "tags" => [
                    "account"
                ],
                "summary" => "Get user detail",
                "description" => "Get user detail",
                "operationId" => "user_detail",
                "consumes" => [
                    "application/json"
                ],
                "produces" => [
                    "application/json"
                ],
                "parameters" => [
                    [
                        "name" => "access-token",
                        "in" => "header",
                        "description" => "",
                        "required" => true,
                        "type" => "string",
                        "format" => "int64"
                    ],
                ],
                "responses" => [
                    "default" => [
                        "description" => "successful operation"
                    ]
                ]
            ]
        ],
        "/update-profile" => [
            "post" => [
                "tags" => [
                    "account"
                ],
                "summary" => "User update",
                "description" => "User update",
                "operationId" => "update",
                "consumes" => [
                    "multipart/form-data"
                ],
                "produces" => [
                   "application/json"
                ],
                "parameters" => [
                     [
                        "name" => "access-token",
                        "in" => "header",
                        "description" => "access-token",
                        "required" => true,
                        "type" => "string"
                    ],
                    [
                        "name" => "role",
                        "in" => "formData",
                        "description" => "role will be user/provider",
                        "required" => true,
                        "type" => "string"
                    ],
                    [
                        "name" => "first_name",
                        "in" => "formData",
                        "description" => "First Name",
                        "required" => true,
                        "type" => "string"
                    ],
                    [
                        "name" => "last_name",
                        "in" => "formData",
                        "description" => "last Name",
                        "required" => false,
                        "type" => "string"
                    ],
                   
                    [
                        "name" => "profile",
                        "in" => "formData",
                        "description" => "profile",
                        "required" => false,
                        "type" => "file",
                    ],
                    [
                        "name" => "email",
                        "in" => "formData",
                        "description" => "email",
                        "required" => false,
                        "type" => "string",
                    ],
                    [
                        "name" => "dob",
                        "in" => "formData",
                        "description" => "dob",
                        "required" => false,
                        "type" => "string",
                    ], [
                        "name" => "address",
                        "in" => "formData",
                        "description" => "address",
                        "required" => false,
                        "type" => "string",
                    ],
                    [
                        "name" => "experience",
                        "in" => "formData",
                        "description" => "experience",
                        "required" => false,
                        "type" => "string",
                    ],
                    [
                        "name" => "doc_proof",
                        "in" => "formData",
                        "description" => "doc_proof",
                        "required" => false,
                        "type" => "file",
                    ],
                    [
                        "name" => "provider_type",
                        "in" => "formData",
                        "description" => "provider_type will be zommer/normal",
                        "required" => false,
                        "type" => "string",
                    ]
                ],
                "responses" => [
                    
                ]
            ]
                ],
               
    ],
    'definitions' => [
        'login' => [
            'type' => "object",
            'properties' => [
               
                'username' => [
                    'type' => 'string'
                ],
                'password' => [
                    'type' => 'string'
                ]
               
            ],
            'xml' => [
                'name' => "Login"
            ]
        ],
        'contact-us' => [
            'type' => "object",
            'properties' => [
                'booking_id' => [
                    'type' => 'string'
                ],
               
                'comments' => [
                    'type' => 'string'
                ]
            ],
            'xml' => [
                'name' => "Login"
            ]
            ],
        'rating' => [
            'type' => "object",
            'properties' => [
                'from_id' => [
                    'type' => 'string'
                ],
                
                'to_id' => [
                    'type' => 'string'
                ],
                'rating' => [
                    'type' => 'string'
                ],
                'reviews' => [
                    'type' => 'string'
                ],
                'appointment_id' => [
                    'type' => 'string'
                ]
               
            ],
            'xml' => [
                'name' => "Login"
            ]
        ],
        'transaction-save' => [
            'type' => "object",
            'properties' => [
                'transaction_id' => [
                    'type' => 'string'
                ],
                 'booking_id' => [
                    'type' => 'string'
                ],
                'amount' => [
                    'type' => 'string'
                ],
                'type' => [
                    'type' => 'string'
                ]
                
               
            ],
            'xml' => [
                'name' => "transaction-save"
            ]
            ],
        'verify' => [
            'type' => "object",
            'properties' => [
                'otp' => [
                    'type' => 'string'
                ],
                'device_id' => [
                    'type' => 'string'
                ],
                'device_type' => [
                    'type' => 'string'
                ],
                'role' => [
                    'type' => 'string'
                ],
        
               
            ],
            'xml' => [
                'name' => "verify"
            ]
            ],
            'accept' => [
                'type' => "object",
                'properties' => [
                    'booking_id' => [
                        'type' => 'string'
                    ],
                    'status' => [
                        'type' => 'string'
                    ],
                    
            
                   
                ],
                'xml' => [
                    'name' => "verify"
                ]
                ],
                'cancel' => [
                    'type' => "object",
                    'properties' => [
                        'booking_id' => [
                            'type' => 'string'
                        ],
                        'status' => [
                            'type' => 'string'
                        ],
                        
                
                       
                    ],
                    'xml' => [
                        'name' => "verify"
                    ]
                    ],
                'confirm' => [
                    'type' => "object",
                    'properties' => [
                        'booking_id' => [
                            'type' => 'string'
                        ],
                        'code' => [
                            'type' => 'string'
                        ],
                        
                
                       
                    ],
                    'xml' => [
                        'name' => "verify"
                    ]
                    ],
                    'complete' => [
                        'type' => "object",
                        'properties' => [
                            'booking_id' => [
                                'type' => 'string'
                            ],
                            'status' => [
                                'type' => 'string'
                            ],
                            'amount' => [
                                'type' => 'string'
                            ],
                            'description' => [
                                'type' => 'string'
                            ],
                           
                        ],
                        'xml' => [
                            'name' => "verify"
                        ]
                        ],
                        'mentor_skill' => [
                            'type' => "object",
                            'properties' => [
                                'category' => [
                                    'type' => 'array',
                                    'items' => ['$ref' => '#/definitions/inner_param']
                                ]
                            ],
                            'xml' => [
                                'name' => "Add skill"
                            ]
                            ],
                        'inner_param' => [
                            'type' => "object",
                            'properties' => [
                                'category_id' => ['type' => 'number'],
                                'sub_category_id' => ['type' => 'number'],
                              
                            ]
                        ],
                    
        'booking' => [
            'type' => "object",
            'properties' => [
                'category_id' => [
                    'type' => 'string'
                ],
                'sub_category_id' => [
                    'type' => 'string'
                ],
                'service_id' => [
                    'type' => 'string'
                ],
                'name' => [
                    'type' => 'string'
                ],
                'address' => [
                    'type' => 'string'
                ],
                'address2' => [
                    'type' => 'string'
                ],
                'email' => [
                    'type' => 'string'
                ],
                'date' => [
                    'type' => 'string'
                ],
                'time' => [
                    'type' => 'string'
                ],
                'quantity' => [
                    'type' => 'integer'
                ],
        
               
            ],
            'xml' => [
                'name' => "verify"
            ]
        ]
  ,
        'detail' => [
            'type' => "object",
            'properties' => [
                'tiken' => [
                    'type' => 'string'
                ]
            ],
            'xml' => [
                'name' => "detail"
            ]
           ],
       
    ]
    ];
