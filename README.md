To use the PHP API, you must include keyworddesk-customer-api.php 
After that you can create an instance of KeyworddeskApi

`$keyworddeskApi = new KeyworddeskApi($username,$password);`

If you have an instance just do this:

`$keyword = $keyworddeskApi->getKeywordData(array('hund'),array('suggestedBid','googleInTitleCount','googleResultCount','searchVolume'));`
