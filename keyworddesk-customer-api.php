<?php
/**
PHP Keyworddesk API Class for simple calling via functions
**/

class KeyworddeskApi{
	private $token;
	
    // the url for the api login and to the api base,including the version tag for the api version you want to use
    private $urlApiLogin = 'http://api.keyworddesk.com/api/login';
    private $urlApiBase = 'http://api.keyworddesk.com/v1';
	
	// possible fields for getKeywordData api call
	private $possibleFields = array('suggestedBid','googleInTitleCount','googleResultCount','searchVolume');

	public function __construct($username, $password){
		$this->login($username, $password);
	}
	
	// perform the login and stores the token in object
	private function login($username,$password){
		$loginArray = array('username' => $username, 'password' => $password);
		$login = $this->makeCall($this->getLoginUrl(),json_encode($loginArray));
		$this->setToken($login->token);
	}
	
	// gets the keyworddata via makeCall submits keywords and fields if set
	public function getKeywordData($keywords,$fields){
		$data = array();
		foreach($keywords AS $keyword){
			$requestArray = array();
			$requestArray["keyword"] = $keyword;
			foreach($fields AS $field){
				if(in_array($field,$this->possibleFields)){
					$requestArray[$field] = true;
				}
			}
			$data[] = $requestArray;
		}
		
		return $this->makeCall($this->getBaseUrl().'/getKeywordData',json_encode($data));
	}
	
	private function makeCall($url, $content){	
		$postArray = null;
		
		if($url === $this->getLoginUrl()) {
			$postArray = array (
				'http' => array(
					'method' => 'POST',
					'header' => 'Content-type: application/json'."\r\n",
					'content' => $content
				)
			);
		} else {
			$postArray = array (
				'http' => array(
					'method' => 'POST',
					'header' => 'X-Auth-Token: '.$this->getToken()."\r\n".
								'Content-type: application/json'."\r\n",
					'content' => $content
				)
			);
		}
		
		$context = stream_context_create($postArray);
		return json_decode(file_get_contents($url,false,$context));
	}
	
	private function getToken(){
		return $this->token;
	}
	
	private function setToken($token){
		$this->token = $token;
	}
	
	private function getLoginUrl(){
		return $this->urlApiLogin;
	}
	
	private function getBaseUrl(){
		return $this->urlApiBase;
	}
}
?>