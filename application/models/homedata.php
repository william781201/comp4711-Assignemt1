<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dineData
 *
 * @author Clemens
 */
class homedata extends CI_Model{
    
    // Dummy data for dine
    var $data = array(
        array('id' => '1', 'content' => 'one',
            'img' => '../img/bcg_slide-1.jpg'),
        
        array('id' => '2', 'content' => 'two',
            'img' => 'img/bcg_slide-2.jpg'),
        
        array('id' => '3', 'content' => 'three',
            'img' => 'img/bcg_slide-3.jpg'),
        
        array('id' => '4', 'content' => 'four',
            'img' => 'img/bcg_slide-4.jpg')
    );
    
    // Constructor
    public function __construct() {
        parent::__construct();
    }
    
    // Retrieve all dine data
    public function getAll() {
        return $this->data;
    }
}