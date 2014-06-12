<?php
/**
PHP Keyworddesk API Class for simple calling via functions
**/
include 'keyword-filter.php';

class KeyworddeskApi {
	private $token;
	
    // the url for the api login and to the api base,including the version tag for the api version you want to use
    private $urlApiLogin = 'http://api.keyworddesk.com/api/login';
    private $urlApiBase = 'http://api.keyworddesk.com/v1';
	
	// possible fields for getKeywordData api call
	private $possibleFields = array('suggestedBid','googleInTitleCount','googleResultCount','searchVolume');
		
	// possible COUNT TYPES
	public static $COUNT_TYPE_ALL = 0;
    public static $COUNT_TYPE_SHORTTAIL = 1;
    public static $COUNT_TYPE_LONGTAIL = 2;
    public static $COUNT_TYPE_HAVE_PLANNER_DATA = 3;

	public static $FILTER_ILIKE = "ILike";
    public static $FILTER_NOTILIKE = "NotILike";
    public static $FILTER_LIKE = "Like";
    public static $FILTER_NOTLIKE = "NotLike";
    public static $FILTER_EQUAL = "Equal";
    public static $FILTER_NOTEQUAL = "NotEqual";
    public static $FILTER_IBEGINSWITH = "IBeginsWith";
    public static $FILTER_BEGINSWITH = "BeginsWith";
    public static $FILTER_IENDSWITH = "IEndsWith";
    public static $FILTER_ENDSWITH = "EndsWith";

	public static $FILTER_NUMERIC_EQUAL = "Equal";
    public static $FILTER_NUMERIC_NOT_EQUAL = "NotEqual";
    public static $FILTER_NUMERIC_LESS_THAN = "LessThan";
    public static $FILTER_NUMERIC_LESS_THAN_EQUALS = "LessThanEquals";
    public static $FILTER_NUMERIC_GREATER_THAN = "GreaterThan";
    public static $FILTER_NUMERIC_GREATER_THAN_EQUALS = "GreaterThanEquals";
    public static $FILTER_NUMERIC_BETWEEN = "Between";
    public static $FILTER_NUMERIC_IS_NULL = "IsNull";
    public static $FILTER_NUMERIC_IS_NOT_NULL = "IsNotNull";
	
    public static $FIELD_SEARCHVOLUME = "searchVolume";
    public static $FIELD_SUGGESTEDBID = "suggestedBid"; // also known as CPC
    public static $FIELD_COMPETITION = "competition";
    public static $FIELD_GOOGLE_RESULT_COUNT = "googleResultCount";
    public static $FIELD_GOOGLE_INTITLE_COUNT = "googleInTitleCount";
	
	public function __construct($username, $password) {
		$this->login($username, $password);
	}
	
	// perform the login and stores the token in object
	private function login($username,$password) {
		$loginArray = array('username' => $username, 'password' => $password);
		$login = $this->makeCall($this->getLoginUrl(),json_encode($loginArray));
		$this->setToken($login->token);
	}
	
	// gets the keyworddata via makeCall submits keywords and fields if set
	public function getKeywordData($keywords,$fields = null) {
		$data = array();
		foreach($keywords AS $keyword){
			$requestArray = array();
			$requestArray["keyword"] = $keyword;
			if($fields != null){
				foreach($fields AS $field) {
					if(in_array($field,$this->possibleFields)) {
						$requestArray[$field] = true;
					}
				}
			} else {
				$requestArray["searchVolume"] = true;
			}
			$data[] = $requestArray;
		}
		
		return $this->makeCall($this->getBaseUrl().'/getKeywordData',json_encode($data));
	}
	
	// gets the keywordcount via makeCall 
	public function getKeywordCount($countType) {
		$requestArray = array();
		$requestArray["countType"] = $countType;
		
		return $this->makeCall($this->getBaseUrl().'/getKeywordCount',json_encode($requestArray));
	}
	
	private function makeCall($url, $content) {	
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
	
	public function filterKeywords($filter) {
		return $this->filter($filter)->keywords;
    }
	
	public function filter($filter) {
		$jsonObject = $filter->toJson();
        $keywordResultList = $this->makeCall($this->getBaseUrl().'/filterKeywords',json_encode($jsonObject));

		return $keywordResultList;
	}

    public function getCreditBalance() {
		$responseContent =  $this->makeCall($this->getBaseUrl().'/getCreditBalance',"");
        return $responseContent;
    }

    public function hasCredits() {
        if($this->getCreditBalance()->creditsLeft > 0) {
            return true;
        }
        return false;
    }
	
	public function logout(){
        $this->makeCall($this->getBaseUrl().'/logout',"");
    }
	
	private function getToken() {
		return $this->token;
	}
	
	private function setToken($token) {
		$this->token = $token;
	}
	
	private function getLoginUrl() {
		return $this->urlApiLogin;
	}
	
	private function getBaseUrl() {
		return $this->urlApiBase;
	}
}
?>