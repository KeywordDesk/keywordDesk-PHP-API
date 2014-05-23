<?php
include 'keyworddesk-customer-api.php';

$username = 'yourAccount';
$password = 'yourPW';

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

// Plannerdata Count
$plannerDataCount = $keyworddesk->getKeywordCount(KeyworddeskApi::$COUNT_TYPE_HAVE_PLANNER_DATA);

// All Count
$AllCount = $keyworddesk->getKeywordCount(KeyworddeskApi::$COUNT_TYPE_ALL);

// Simple KeywordFilter!
$keywordFilter = new KeywordFilter();
$keywordFilter->setKeyword("handy");
$keywordFilter->setOpKeyword(KeyworddeskApi::$FILTER_ILIKE);
$keywordFilter->setSearchVolume("1000");
$keywordFilter->setSearchVolumeTo("5000");
$keywordFilter->setSuggestedBidTo("1.4");
$keywordFilter->setSuggestedBid("0.0");
$keywordFilter->setTermCount("1");
$keywordFilter->setTermCountTo("6");
$keywordFilter->setOpSuggestedBid(KeyworddeskApi::$FILTER_NUMERIC_BETWEEN);
$keywordFilter->setOpSearchVolume(KeyworddeskApi::$FILTER_NUMERIC_BETWEEN);
$keywordFilter->setMax(100);
$keywordFilter->setFieldsToGet(array('suggestedBid','googleInTitleCount','googleResultCount','searchVolume'));

$resultset = $keyworddesk->filterKeywords($keywordFilter);
var_dump($resultset);