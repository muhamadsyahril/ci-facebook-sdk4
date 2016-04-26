<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$config['facebook']['api_id']       = '359906217544246';
$config['facebook']['app_secret']   = '2ed254eb53bc31429c9a186bf8fa6d7e';
$config['facebook']['redirect_url'] = 'http://localhost:11000/login/';
$config['facebook']['permissions']  = array(
                                        'email',
                                        'user_location',
                                        'user_birthday'
                                      );