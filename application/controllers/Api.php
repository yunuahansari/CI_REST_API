<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

/*
 * Changes:
 * 1. This project contains .htaccess file for windows machine.
 *    Please update as per your requirements.
 *    Samples (Win/Linux): http://stackoverflow.com/questions/28525870/removing-index-php-from-url-in-codeigniter-on-mandriva
 *
 * 2. Change 'encryption_key' in application\config\config.php
 *    Link for encryption_key: http://jeffreybarke.net/tools/codeigniter-encryption-key-generator/
 * 
 * 3. Change 'jwt_key' in application\config\jwt.php
 *
 */

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class Api extends REST_Controller
{
	
    /**
     * URL: http://localhost/CodeIgniter-JWT-Sample/auth/token
     * Method: GET
     */
	public function __construct() {
        parent::__construct();
        
        // Load these helper to create JWT tokens
        $this->load->helper(['jwt', 'authorization']);
        $this->load->library('form_validation');    
	}
	
    public function signup_post()
    {
        $config = [
            [
                    'field' => 'first_name',
                    'rules' => 'required|min_length[3]|valid_email',
                    'errors' => [
                            'required' => 'Please enter first  name.',
                            'valid_email' => 'Please enter valid email address.',
                            'min_length' => 'Minimum Username length is 3 characters',
                            'alpha_dash' => 'You can only use a-z 0-9 _ . – characters for input',
                    ],
            ],
            [
                    'field' => 'last_name',
                    'rules' => 'required|min_length[6]',
                    'errors' => [
                            'required' => 'Please enter last  name.',
                            'min_length' => 'Minimum Password length is 6 characters',
                    ],
            ],
        ];
        
        $data = $this->input->post();
        
        $this->form_validation->set_data($data);
        $this->form_validation->set_rules($config);
        
        if($this->form_validation->run()==FALSE){
            $data = [];
            $res = [];
            $errrs = $this->form_validation->error_array();
            foreach($errrs as $key => $val){
                $data[] = $val;
            }
           $res['message'] =$data[0];
           return $this->set_response(["success"=>false,'errors'=>$res], 422);
            
        }else{
        $tokenData = array();
        $tokenData = $this->input->post(); //TODO: Replace with data for token
        $output['token'] = AUTHORIZATION::generateToken($tokenData);
            return $this->set_response(["success"=>true,'data'=>$output,'message'=>'sinup successfully.']);
        }
   	
   
    }

    /**
     * URL: http://localhost/CodeIgniter-JWT-Sample/auth/token
     * Method: POST
     * Header Key: Authorization
     * Value: Auth token generated in GET call
     */
    public function token_post()
    {
        $headers = $this->input->request_headers();

        if (array_key_exists('Authorization', $headers) && !empty($headers['Authorization'])) {
            $decodedToken = AUTHORIZATION::validateToken($headers['Authorization']);
            if ($decodedToken != false) {
                $this->set_response($decodedToken, REST_Controller::HTTP_OK);
                return;
            }
        }

        $this->set_response("Unauthorised", REST_Controller::HTTP_UNAUTHORIZED);
	}
	public function login_post()
 {
        // Have dummy user details to check user credentials
        // send via postman
        $dummy_user = [
            'username' => 'Test',
            'password' => 'test'
        ];
        // Extract user data from POST request
        $username = $this->post('username');
        $password = $this->post('password');
        // Check if valid user
        if ($username === $dummy_user['username'] && $password === $dummy_user['password']) {
            
            // Create a token from the user data and send it as reponse
            $token = AUTHORIZATION::generateToken(['username' => $dummy_user['username']]);
            // Prepare the response
            $status = parent::HTTP_OK;
			$response = ['status' => $status, 'token' => $token,'message'=>'login successfully.'];
			$this->response($response, 200);
        }
        else {
            $this->response(['msg' => 'Invalid username or password!'], 401);
        }
 }
 private function verify_request()
{
    // Get all the headers
    $headers = $this->input->request_headers();

 $token = $headers['access-token'];
 // Use try-catch
 // JWT library throws exception if the token is not valid
 try {
	 // Validate the token
	 // Successfull validation will return the decoded user data else returns false
	 $data = AUTHORIZATION::validateToken($token);
	 if ($data === false) {
		 $status = parent::HTTP_UNAUTHORIZED;
		 $response = ['status' => $status, 'msg' => 'Unauthorized Access!'];
		 $this->response($response, $status);
		 exit();
	 } else {
		 return $data;
	 }
 } catch (Exception $e) {
	 // Token is invalid
	 // Send the unathorized access message
	 $status = parent::HTTP_UNAUTHORIZED;
	 $response = ['status' => $status, 'msg' => 'Unauthorized Access! '];
	 $this->response($response, $status);
 }
}

public function user_detail_get()
{
    // Call the verification method and store the return value in the variable
    $data = $this->verify_request();
    // Send the return data as reponse
    $status = parent::HTTP_OK;
    $response = ['status' => $status, 'data' => $data];
    $this->response($response, $status);
}
}
