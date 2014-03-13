<?php
include 'keyworddesk-customer-api.php';

$username = 'YourKeyworddeskUser';
$password = 'YourKeyworddeskPassword';

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