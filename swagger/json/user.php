<?php
return [
    'paths' => [

        "/logout" => [
            "post" => [
                "tags" => [
                    "user"
                ],
                "summary" => "Logout User",
                "description" => "",
                "operationId" => "logout",
                "consumes" => [
                    "application/json"
                ],
                "parameters" => [
                    [
                        "name" => "access-token",
                        "in" => "header",
                        "description" => "Access Token",
                        "required" => true,
                        "type" => "string",
                        "format" => "int64"
                    ],
                ],
                "responses" => [
                    
                ]
            ],
        ],
        
        "/change-password" => [
            "post" => [
                "tags" => [
                    "user"
                ],
                "summary" => "Change User Password",
                "description" => "Change User Password",
                "operationId" => "change-password",
                "consumes" => [
                    "multipart/form-data"
                ],
                "parameters" => [
                    [
                        "name" => "access-token",
                        "in" => "header",
                        "description" => "Access Token",
                        "required" => true,
                        "type" => "string",
                        "format" => "int64"
                    ],
                    [
                        "name" => "current_password",
                        "in" => "formData",
                        "description" => "Current Password",
                        "required" => true,
                        "type" => "string",
                        "format" => "string"
                    ],
                    [
                        "name" => "new_password",
                        "in" => "formData",
                        "description" => "New Password",
                        "required" => true,
                        "type" => "string",
                        "format" => "string"
                    ],
                    [
                        "name" => "confirm_password",
                        "in" => "formData",
                        "description" => "Confirm Password",
                        "required" => true,
                        "type" => "string",
                        "format" => "string"
                    ],
                ],
                "responses" => [
                    
                ]
            ],
        ],
        "/users-settings" => [
            "post" => [
                "tags" => [
                    "user"
                ],
                "summary" => "User settings",
                "description" => "User settings",
                "operationId" => "fogot",
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
                        "description" => "Access Token",
                        "required" => true,
                        "type" => "string",
                        "format" => "int64"
                    ],
                    [
                        "name" => "email_setting",
                        "in" => "formData",
                        "description" => "Email Setting",
                        "required" => true,
                        "type" => "string",
                        'enum' => ["on", "off"]
                    ],
                    [
                        "name" => "notification_setting",
                        "in" => "formData",
                        "description" => "Notification Setting",
                        "required" => true,
                        "type" => "string",
                        'enum' => ["on", "off"]
                    ],
                ],
                "responses" => [
                    
                ]
            ]
        ],
        "/get-user-settings" => [
            "get" => [
                "tags" => [
                    "user"
                ],
                "summary" => "Get User settings",
                "description" => "Get User settings",
                "operationId" => "get-user-settings",
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
                        "description" => "Access Token",
                        "required" => true,
                        "type" => "string",
                        "format" => "int64"
                    ],
                ],
                "responses" => [
                    
                ]
            ]
        ],
        "/property" => [
            "get" => [
                "tags" => [
                    "user"
                ],
                "summary" => "Property list for all users",
                "description" => "",
                "consumes" => [
                    "application/json"
                ],
                "parameters" => [
                    [
                        "name" => "access-token",
                        "in" => "header",
                        "description" => "Access Token",
                        "required" => false,
                        "type" => "string",
                        "format" => "int64"
                    ],
                    [
                        "name" => "agent_id",
                        "in" => "query",
                        "description" => "Agent ID",
                        "required" => false,
                        "type" => "string",
                        "format" => "int64"
                    ],
                    [
                        "name" => "min_price",
                        "in" => "query",
                        "description" => "Min Price",
                        "required" => false,
                        "type" => "string",
                        "format" => "int64"
                    ],
                    [
                        "name" => "max_price",
                        "in" => "query",
                        "description" => "Max Price",
                        "required" => false,
                        "type" => "string",
                        "format" => "int64"
                    ],
                    [
                        "name" => "property_type",
                        "in" => "query",
                        "description" => "Property Type ID should be ( 1,2,3,4 )",
                        "required" => false,
                        "type" => "string",
                        "format" => "int64"
                    ],
                    [
                        "name" => "bedroom",
                        "in" => "query",
                        "description" => "Bedroom should be ( any,studio,studio+1,studio+2,studio+3 )",
                        "required" => false,
                        "type" => "string",
                        "format" => "string"
                    ],
                    [
                        "name" => "bathroom",
                        "in" => "query",
                        "description" => "Bathroom should be ( any,1,1.5,2,2.5 )",
                        "required" => false,
                        "type" => "string",
                        "format" => "string"
                    ],
                    [
                        "name" => "property_amenities",
                        "in" => "query",
                        "description" => "Amenities ID should be ( 1,2,3,4 )",
                        "required" => false,
                        "type" => "string",
                        "format" => "int64"
                    ],
                    [
                        "name" => "exclusivity_agreement",
                        "in" => "query",
                        "description" => "Exclusivity Agreement",
                        "required" => false,
                        "type" => "string",
                        "enum" => ["yes", "no"]
                    ],
                    [
                        "name" => "brokerage_fee",
                        "in" => "query",
                        "description" => "Brokerage Fee",
                        "required" => false,
                        "type" => "string",
                        "enum" => ["yes", "no"]
                    ],
                    [
                        "name" => "available_beginning_date",
                        "in" => "query",
                        "description" => "Date Format should be - YYYY-MM-DD",
                        "required" => false,
                        "type" => "string",
                        "format" => "string"
                    ],
                    [
                        "name" => "page",
                        "in" => "query",
                        "description" => "Page",
                        "required" => false,
                        "type" => "integer",
                        "format" => "int64",
                    ],
                    [
                        "name" => "lat_long",
                        "in" => "query",
                        "description" => "Latitude & Longitude for center location, it sholud be (22.123456, 75.123456)",
                        "required" => false,
                        "type" => "string",
                        "format" => "string"
                    ],
                    [
                        "name" => "coordinates_1",
                        "in" => "query",
                        "description" => "for Polygon view, it sholud be 22.123456, 75.123456",
                        "required" => false,
                        "type" => "string",
                        "format" => "string"
                    ],
                    [
                        "name" => "coordinates_2",
                        "in" => "query",
                        "description" => "for Polygon view, it sholud be 22.123456, 75.123456",
                        "required" => false,
                        "type" => "string",
                        "format" => "string"
                    ],
                    [
                        "name" => "coordinates_3",
                        "in" => "query",
                        "description" => "for Polygon view, it sholud be 22.123456, 75.123456",
                        "required" => false,
                        "type" => "string",
                        "format" => "string"
                    ],
                    [
                        "name" => "coordinates_4",
                        "in" => "query",
                        "description" => "for Polygon view, it sholud be 22.123456, 75.123456",
                        "required" => false,
                        "type" => "string",
                        "format" => "string"
                    ],
                ],
                "responses" => [
                    
                ],
            ],
        ],
        "/contact-us" => [
            "post" => [
                "tags" => [
                    "user"
                ],
                "summary" => "Contact Us",
                "description" => "Contact Us",
                "operationId" => "contact-us",
                "consumes" => [
                    "multipart/form-data"
                ],
                "produces" => [
                   "application/json"
                ],
                "parameters" => [
                    [
                        "name" => "name",
                        "in" => "query",
                        "description" => "Name",
                        "required" => true,
                        "type" => "string",
                        "format" => "string"
                    ],
                    [
                        "name" => "email",
                        "in" => "query",
                        "description" => "Email",
                        "required" => true,
                        "type" => "string",
                        "format" => "string"
                    ],
                    [
                        "name" => "message",
                        "in" => "query",
                        "description" => "Message",
                        "required" => true,
                        "type" => "string",
                        "format" => "string"
                    ],
                ],
                "responses" => [
                    
                ]
            ]
        ],
    ],
    'definitions' => [

    ]
];
