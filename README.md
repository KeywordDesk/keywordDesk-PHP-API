To use the PHP API, you must include keyworddesk-customer-api.php 
After that you can create an instance of KeyworddeskApi

`new KeyworddeskApi($username,$password)`

If you have an instance just do this:

`$keyworddeskApi->etKeywordData(array('hund'),array('suggestedBid','googleInTitleCount','googleResultCount','searchVolume'))`
