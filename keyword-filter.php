<?php

class KeywordFilter {

	private $max;
    private $sort;
    private $order;
    private $listDistinct;
    private $keyword;
    private $googleResultCount;
    private $googleResultCountTo;
    private $searchVolume;
    private $searchVolumeTo;
    private $suggestedBid;
    private $suggestedBidTo;
    private $googleInTitleCount;
    private $googleInTitleCountTo;
    private $competition;
    private $competitionTo;
    private $termCount;
    private $termCountTo;

    // operations
    private $opKeyword;
    private $opGoogleResultCount;
    private $opSearchVolume;
    private $opSuggestedBid;
    private $opGoogleInTitleCount;
    private $opCompetition;
    private $opTermCount;

	// fields to get from the request
	private $fieldsToGet;

	public function getMax() {
        return $this->max;
    }

    public function setMax($max) {
        $this->max = $max;
    }

    public function getListDistinct() {
        return $this->listDistinct;
    }

    public function setListDistinct($listDistinct) {
        $this->listDistinct = $listDistinct;
    }

    public function getKeyword() {
        return $this->keyword;
    }

    public function setKeyword($keyword) {
        $this->keyword = $keyword;
    }

    public function getGoogleResultCount() {
        return $this->googleResultCount;
    }

    public function setGoogleResultCount($googleResultCount) {
        $this->googleResultCount = $googleResultCount;
    }

    public function getSearchVolume() {
        return $this->searchVolume;
    }

    public function setSearchVolume($searchVolume) {
        $this->searchVolume = $searchVolume;
    }

    public function getSearchVolumeTo() {
        return $this->searchVolumeTo;
    }

    public function setSearchVolumeTo($searchVolumeTo) {
        $this->searchVolumeTo = $searchVolumeTo;
    }

    public function getSuggestedBid() {
        return $this->suggestedBid;
    }

    public function setSuggestedBid($suggestedBid) {
        $this->suggestedBid = $suggestedBid;
    }

    public function getSuggestedBidTo() {
        return $this->suggestedBidTo;
    }

    public function setSuggestedBidTo($suggestedBidTo) {
        $this->suggestedBidTo = $suggestedBidTo;
    }

    public function getGoogleInTitleCount() {
        return $this->googleInTitleCount;
    }

    public function setGoogleInTitleCount($googleInTitleCount) {
        $this->googleInTitleCount = $googleInTitleCount;
    }

    public function getGoogleInTitleCountTo() {
        return $this->googleInTitleCountTo;
    }

    public function setGoogleInTitleCountTo($googleInTitleCountTo) {
        $this->googleInTitleCountTo = $googleInTitleCountTo;
    }

    public function getCompetition() {
        return $this->competition;
    }

    public function setCompetition($competition) {
        $this->competition = $competition;
    }

    public function getCompetitionTo() {
        return $this->competitionTo;
    }

    public function setCompetitionTo($competitionTo) {
        $this->competitionTo = $competitionTo;
    }

    public function getTermCount() {
        return $this->termCount;
    }

    public function setTermCount($termCount) {
        $this->termCount = $termCount;
    }

    public function getTermCountTo() {
        return $this->termCountTo;
    }

    public function setTermCountTo($termCountTo) {
        $this->termCountTo = $termCountTo;
    }

    public function getOpKeyword() {
        return $this->opKeyword;
    }

    public function setOpKeyword($opKeyword) {
        $this->opKeyword = $opKeyword;
    }

    public function getOpGoogleResultCount() {
        return $this->opGoogleResultCount;
    }

    public function setOpGoogleResultCount($opGoogleResultCount) {
        $this->opGoogleResultCount = $opGoogleResultCount;
    }

    public function getOpSearchVolume() {
        return $this->opSearchVolume;
    }

    public function setOpSearchVolume($opSearchVolume) {
        $this->opSearchVolume = $opSearchVolume;
    }

    public function getOpSuggestedBid() {
        return $this->opSuggestedBid;
    }

    public function setOpSuggestedBid($opSuggestedBid) {
        $this->opSuggestedBid = $opSuggestedBid;
    }

    public function getOpGoogleInTitleCount() {
        return $this->opGoogleInTitleCount;
    }

    public function setOpGoogleInTitleCount($opGoogleInTitleCount) {
        $this->opGoogleInTitleCount = $opGoogleInTitleCount;
    }

    public function getOpCompetition() {
        return $this->opCompetition;
    }

    public function setOpCompetition($opCompetition) {
        $this->opCompetition = $opCompetition;
    }

    public function getOpTermCount() {
        return $this->opTermCount;
    }

    public function setOpTermCount($opTermCount) {
        $this->opTermCount = $opTermCount;
    }

    public function getGoogleResultCountTo() {
        return $this->googleResultCountTo;
    }

    public function setGoogleResultCountTo($googleResultCountTo) {
        $this->googleResultCountTo = $googleResultCountTo;
    }

    public function getSort() {
        return $this->sort;
    }

    public function setSort($sort) {
        $this->sort = $sort;
    }

    public function getOrder() {
        return $this->order;
    }

    public function setOrder($order) {
        $this->order = $order;
    }

    public function getFieldsToGet() {
        return $this->fieldsToGet;
    }

    public function setFieldsToGet($fieldsToGet) {
        $this->fieldsToGet = $fieldsToGet;
    }
	
	public function toJson () {
		// initialize vars
		$operations = array();
		$filterObject = array();
		$jsonObject  = array();
		
		// create operations json object
		$operations["keyword"] = $this->getOpKeyword();
		$operations["googleResultCount"] = $this->getOpGoogleResultCount();
		$operations["searchVolume"] = $this->getOpSearchVolume();
		$operations["suggestedBid"] = $this->getOpSuggestedBid();
		$operations["googleInTitleCount"] = $this->getOpGoogleInTitleCount();
		$operations["competition"] = $this->getOpCompetition();
		$operations["termCount"] = $this->getOpTermCount();
		
		// create filter object
		$filterObject["keyword"] = $this->getKeyword();
		$filterObject["googleResultCount"] = $this->getGoogleResultCount();
		$filterObject["googleResultCountTo"] = $this->getGoogleResultCountTo();
		$filterObject["searchVolume"] = $this->getSearchVolume();
		$filterObject["searchVolumeTo"] = $this->getSearchVolumeTo();
		$filterObject["suggestedBid"] = $this->getSuggestedBid();
		$filterObject["suggestedBidTo"] = $this->getSuggestedBidTo();
		$filterObject["googleInTitleCount"] = $this->getGoogleInTitleCount();
		$filterObject["googleInTitleCountTo"] = $this->getGoogleInTitleCountTo();
		$filterObject["competition"] = $this->getCompetition();
		$filterObject["competitionTo"] = $this->getCompetitionTo();
		$filterObject["termCount"] = $this->getTermCountTo();
		
		// add operations to filterObject
		$filterObject["op"] = $this->cleanArray($operations);

        // create final json object for a filter request		
		$jsonObject["filter"] = $this->cleanArray($filterObject);
		$jsonObject["max"] = $this->getMax();
		$jsonObject["listDistinct"] = $this->getListDistinct();
		$jsonObject["sort"] = $this->getSort();
		$jsonObject["order"] = $this->getOrder();
		
		// add fields to get to json
		$jsonObject["fieldsRequested"] = $this->getFieldsToGet();
		
		// return encoded JSON
		return $this->cleanArray($jsonObject);		
	}
	
	private function cleanArray($array){
		$newArray = array();
		foreach($array as $key => $value){
			if($value!==null){
				$newArray[$key] = $value;
			}
		}
		return $newArray;
	}
}