<?php

namespace ReverseOAuth2;

use Zend\Http\PhpEnvironment\Request;

abstract class AbstractOAuth2Provider
{
    
    protected $session;
    protected $options;
    protected $error;

    public function __construct()
    {
        $this->session = new \Zend\Session\Container('ReverseOAuth2_'.get_class($this));
    }
    
    public function getUrl()
    {

    }
    
    
    public function getToken(Request $request) 
    {
        
    }
    
    public function getUserInfo()
    {
        
    }
    
    public function getScope()
    {
        
    }
    
    public function getState()
    {
        return $this->session->state;
    }
    
    protected function generateState()
    {
        $this->session->state = md5(microtime().'-'.get_class($this));
        return $this->session->state;
    }
    
    public function setOptions($options)
    {
        $this->options = $options;
    }
    
    public function getError()
    {
        return $this->error;
    }
    
}