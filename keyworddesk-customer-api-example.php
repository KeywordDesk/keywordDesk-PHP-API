<?php
include 'keyworddesk-customer-api.php';

$username = 'account';
$password = 'password';

// Create Api Object and login via constructor
$keyworddesk = new KeyworddeskApi($username,$password);

/** --- Result in all calls is a JSON object --- **/

// get keyword hund with all fields
$dogResults = $keyworddesk->getKeywordData(array('hund'),array('suggestedBid','googleInTitleCount','googleResultCount','searchVolume'));

// get keyword hund with suggestedBid
$dogResults = $keyworddesk->getKeywordData(array('hund'),array('suggestedBid'));

// get n keywords with only searchVolume
$moreThanOne = $keyworddesk->getKeywordData(array('hund','katze','maus'),array('searchVolume'));

// get n keywords with m fields
$moreThanOne = $keyworddesk->getKeywordData(array('hund','katze','maus'),array('suggestedBid','googleInTitleCount'));

$plannerDataCount = $keyworddesk->getKeywordCount(KeyworddeskApi::$COUNT_TYPE_HAVE_PLANNER_DATA);
$allCount = $keyworddesk->getKeywordCount(KeyworddeskApi::$COUNT_TYPE_ALL);


// Simple KeywordFilter!
$keywordFilter = new KeywordFilter();
$keywordFilter->setKeyword("a");
$keywordFilter->setOpKeyword(KeyworddeskApi::$FILTER_ILIKE);

// searchvolume
$keywordFilter->setSearchVolume("1000");
$keywordFilter->setSearchVolumeTo("5000");

// suggested Bid
$keywordFilter->setSuggestedBidTo("1.4");
$keywordFilter->setSuggestedBid("0.0");

// termncount
$keywordFilter->setTermCount("1");
$keywordFilter->setTermCountTo("6");

// Resultcount
$keywordFilter->setGoogleResultCount("0");
$keywordFilter->setGoogleResultCountTo("200000");

// Intitlecount
$keywordFilter->setGoogleInTitleCount("0");
$keywordFilter->setGoogleInTitleCountTo("1000000");

// SET OPERATIONS
$keywordFilter->setOpSuggestedBid(KeyworddeskApi::$FILTER_NUMERIC_BETWEEN);
$keywordFilter->setOpSearchVolume(KeyworddeskApi::$FILTER_NUMERIC_BETWEEN);

$keywordFilter->setOpTermCount(KeyworddeskApi::$FILTER_NUMERIC_BETWEEN);
$keywordFilter->setOpGoogleResultCount(KeyworddeskApi::$FILTER_NUMERIC_BETWEEN);
$keywordFilter->setOpGoogleInTitleCount(KeyworddeskApi::$FILTER_NUMERIC_BETWEEN);

$keywordFilter->setMax(10);
$keywordFilter->setFieldsToGet(array('suggestedBid','googleInTitleCount','googleResultCount','searchVolume','searchVolumeJanuary'));

$resultsetNew = $keyworddesk->filter($keywordFilter);

var_dump($keyworddesk->getCreditBalance()->creditsLeft);
var_dump($resultsetNew->availableCount);
var_dump($resultsetNew->keywords);

// SAVE TOKEN FOR REUSE DON'T OPEN A NEW SESSION FOR EVERY CALL
$token = $keyworddesk->getToken();
$keyworddesk2 = new KeyworddeskApi();
$keyworddesk2->setToken($token);
var_dump($keyworddesk2->filter($keywordFilter));
var_dump($allCount);
var_dump($plannerDataCount);