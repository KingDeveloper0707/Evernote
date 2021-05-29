<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function sendSMTPEmail($to = '', $subject  = '', $body = '', $attachment = '', $cc = '')
	{
		$controller =& get_instance();
       	$controller->load->helper('path'); 
		
		$config = array();
        $config['useragent']            = "GEM";
        $config['protocol']             = "smtp";
        $config['smtp_host']            = "ssl://smtp.googlemail.com";
        $config['smtp_port']            = "465";
		$config['smtp_timeout'] 		= '30';
		$config['smtp_user']    		= "lignepolaris@gmail.com";
		$config['smtp_pass']    		= "fufxoc-nybwi7-gahVyq";
		$config['smtp_crypto'] 			= 'security';
        $config['mailtype'] 			= 'html';
        $config['charset']  			= 'utf-8';
        $config['newline']  			= "\r\n";
        $config['wordwrap'] 			= TRUE;

        $controller->load->library('email');

        $controller->email->initialize($config);
			
		$controller->email->from( 'info@careequity.com' , 'Care Equity Insights' );
		
		$controller->email->to($to);
		
		$controller->email->subject($subject);
		
		$controller->email->message($body);
		if($cc != '') 
		{	
			$controller->email->cc($cc);
		}	
		if($attachment != '')
		{
			$controller->email->attach(base_url()."pdfs/" . $attachment );
		 
		}
		if($controller->email->send()){
			return true;
		}
		else
		{
			return false;
		}
    }
    
    function sendEmail($to = '', $subject, $message, $cc = '') {
		$from_email = 'Care Equity Insights <info@careequity.com>';
		
		// To send HTML mail, the Content-type header must be set
		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';
		$headers[] = 'From: '.$from_email;
		if ($cc != '')
			$headers[] = 'CC: '.$cc;

		// Mail it
		return mail($to, $subject, $message, implode("\r\n", $headers));
	}
    
    
?>