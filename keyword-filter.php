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
	private $opSearchVolumeJanuary;
    private $opSearchVolumeFebruary;
    private $opSearchVolumeMarch;
    private $opSearchVolumeApril;
    private $opSearchVolumeMay;
    private $opSearchVolumeJune;
    private $opSearchVolumeJuly;
    private $opSearchVolumeAugust;
    private $opSearchVolumeSeptember;
    private $opSearchVolumeOctober;
    private $opSearchVolumeNovember;
    private $opSearchVolumeDecember;
	
	// searchvolumes
	private $searchVolumeJanuary;
    private $searchVolumeJanuaryTo;
    private $searchVolumeFebruary;
    private $searchVolumeFebruaryTo;
    private $searchVolumeMarch;
    private $searchVolumeMarchTo;
    private $searchVolumeApril;
    private $searchVolumeAprilTo;
    private $searchVolumeMay;
    private $searchVolumeMayTo;
    private $searchVolumeJune;
    private $searchVolumeJuneTo;
    private $searchVolumeJuly;
    private $searchVolumeJulyTo;
    private $searchVolumeAugust;
    private $searchVolumeAugustTo;
    private $searchVolumeSeptember;
    private $searchVolumeSeptemberTo;
    private $searchVolumeOctober;
    private $searchVolumeOctoberTo;
    private $searchVolumeNovember;
    private $searchVolumeNovemberTo;
    private $searchVolumeDecember;
    private $searchVolumeDecemberTo;

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
	
	public function getOpSearchVolumeJanuary() {
        return $this->opSearchVolumeJanuary;
    }

    public function setOpSearchVolumeJanuary($opSearchVolumeJanuary) {
        $this->opSearchVolumeJanuary = $opSearchVolumeJanuary;
    }

    public function getOpSearchVolumeFebruary() {
        return $this->opSearchVolumeFebruary;
    }

    public function setOpSearchVolumeFebruary($opSearchVolumeFebruary) {
        $this->opSearchVolumeFebruary = $opSearchVolumeFebruary;
    }

    public function getOpSearchVolumeMarch() {
        return $this->opSearchVolumeMarch;
    }

    public function setOpSearchVolumeMarch($opSearchVolumeMarch) {
        $this->opSearchVolumeMarch = $opSearchVolumeMarch;
    }

    public function getOpSearchVolumeApril() {
        return $this->opSearchVolumeApril;
    }

    public function setOpSearchVolumeApril($opSearchVolumeApril) {
        $this->opSearchVolumeApril = $opSearchVolumeApril;
    }

    public function getOpSearchVolumeMay() {
        return $this->opSearchVolumeMay;
    }

    public function setOpSearchVolumeMay($opSearchVolumeMay) {
        $this->opSearchVolumeMay = $opSearchVolumeMay;
    }

    public function getOpSearchVolumeJune() {
        return $this->opSearchVolumeJune;
    }

    public function setOpSearchVolumeJune($opSearchVolumeJune) {
        $this->opSearchVolumeJune = $opSearchVolumeJune;
    }

    public function getOpSearchVolumeJuly() {
        return $this->opSearchVolumeJuly;
    }

    public function setOpSearchVolumeJuly($opSearchVolumeJuly) {
        $this->opSearchVolumeJuly = $opSearchVolumeJuly;
    }

    public function getOpSearchVolumeAugust() {
        return $this->opSearchVolumeAugust;
    }

    public function setOpSearchVolumeAugust($opSearchVolumeAugust) {
        $this->opSearchVolumeAugust = $opSearchVolumeAugust;
    }

    public function getOpSearchVolumeSeptember() {
        return $this->opSearchVolumeSeptember;
    }

    public function setOpSearchVolumeSeptember($opSearchVolumeSeptember) {
        $this->opSearchVolumeSeptember = $opSearchVolumeSeptember;
    }

    public function getOpSearchVolumeOctober() {
        return $this->opSearchVolumeOctober;
    }

    public function setOpSearchVolumeOctober($opSearchVolumeOctober) {
        $this->opSearchVolumeOctober = $opSearchVolumeOctober;
    }

    public function getOpSearchVolumeNovember() {
        return $this->opSearchVolumeNovember;
    }

    public function setOpSearchVolumeNovember($opSearchVolumeNovember) {
        $this->opSearchVolumeNovember = $opSearchVolumeNovember;
    }

    public function getOpSearchVolumeDecember() {
        return $this->opSearchVolumeDecember;
    }

    public function setOpSearchVolumeDecember($opSearchVolumeDecember) {
        $this->opSearchVolumeDecember = $opSearchVolumeDecember;
    }

    public function getSearchVolumeJanuary() {
        return $this->searchVolumeJanuary;
    }

    public function setSearchVolumeJanuary($searchVolumeJanuary) {
        $this->searchVolumeJanuary = $searchVolumeJanuary;
    }

    public function getSearchVolumeJanuaryTo() {
        return $this->searchVolumeJanuaryTo;
    }

    public function setSearchVolumeJanuaryTo($searchVolumeJanuaryTo) {
        $this->searchVolumeJanuaryTo = $searchVolumeJanuaryTo;
    }

    public function getSearchVolumeFebruary() {
        return $this->searchVolumeFebruary;
    }

    public function setSearchVolumeFebruary($searchVolumeFebruary) {
        $this->searchVolumeFebruary = $searchVolumeFebruary;
    }

    public function getSearchVolumeFebruaryTo() {
        return $this->searchVolumeFebruaryTo;
    }

    public function setSearchVolumeFebruaryTo($searchVolumeFebruaryTo) {
        $this->searchVolumeFebruaryTo = $searchVolumeFebruaryTo;
    }

    public function getSearchVolumeMarch() {
        return $this->searchVolumeMarch;
    }

    public function setSearchVolumeMarch($searchVolumeMarch) {
        $this->searchVolumeMarch = $searchVolumeMarch;
    }

    public function getSearchVolumeMarchTo() {
        return $this->searchVolumeMarchTo;
    }

    public function setSearchVolumeMarchTo($searchVolumeMarchTo) {
        $this->searchVolumeMarchTo = $searchVolumeMarchTo;
    }

    public function getSearchVolumeApril() {
        return $this->searchVolumeApril;
    }

    public function setSearchVolumeApril($searchVolumeApril) {
        $this->searchVolumeApril = $searchVolumeApril;
    }

    public function getSearchVolumeAprilTo() {
        return $this->searchVolumeAprilTo;
    }

    public function setSearchVolumeAprilTo($searchVolumeAprilTo) {
        $this->searchVolumeAprilTo = $searchVolumeAprilTo;
    }

    public function getSearchVolumeMay() {
        return $this->searchVolumeMay;
    }

    public function setSearchVolumeMay($searchVolumeMay) {
        $this->searchVolumeMay = $searchVolumeMay;
    }

    public function getSearchVolumeMayTo() {
        return $this->searchVolumeMayTo;
    }

    public function setSearchVolumeMayTo($searchVolumeMayTo) {
        $this->searchVolumeMayTo = $searchVolumeMayTo;
    }

    public function getSearchVolumeJune() {
        return $this->searchVolumeJune;
    }

    public function setSearchVolumeJune($searchVolumeJune) {
        $this->searchVolumeJune = $searchVolumeJune;
    }

    public function getSearchVolumeJuneTo() {
        return $this->searchVolumeJuneTo;
    }

    public function setSearchVolumeJuneTo($searchVolumeJuneTo) {
        $this->searchVolumeJuneTo = $searchVolumeJuneTo;
    }

    public function getSearchVolumeJuly() {
        return $this->searchVolumeJuly;
    }

    public function setSearchVolumeJuly($searchVolumeJuly) {
        $this->searchVolumeJuly = $searchVolumeJuly;
    }

    public function getSearchVolumeJulyTo() {
        return $this->searchVolumeJulyTo;
    }

    public function setSearchVolumeJulyTo($searchVolumeJulyTo) {
        $this->searchVolumeJulyTo = $searchVolumeJulyTo;
    }

    public function getSearchVolumeAugust() {
        return $this->searchVolumeAugust;
    }

    public function setSearchVolumeAugust($searchVolumeAugust) {
        $this->searchVolumeAugust = $searchVolumeAugust;
    }

    public function getSearchVolumeAugustTo() {
        return $this->searchVolumeAugustTo;
    }

    public function setSearchVolumeAugustTo($searchVolumeAugustTo) {
        $this->searchVolumeAugustTo = $searchVolumeAugustTo;
    }

    public function getSearchVolumeSeptember() {
        return $this->searchVolumeSeptember;
    }

    public function setSearchVolumeSeptember($searchVolumeSeptember) {
        $this->searchVolumeSeptember = $searchVolumeSeptember;
    }

    public function getSearchVolumeSeptemberTo() {
        return $this->searchVolumeSeptemberTo;
    }

    public function setSearchVolumeSeptemberTo($searchVolumeSeptemberTo) {
        $this->searchVolumeSeptemberTo = $searchVolumeSeptemberTo;
    }

    public function getSearchVolumeOctober() {
        return $this->searchVolumeOctober;
    }

    public function setSearchVolumeOctober($searchVolumeOctober) {
        $this->searchVolumeOctober = $searchVolumeOctober;
    }

    public function getSearchVolumeOctoberTo() {
        return $this->searchVolumeOctoberTo;
    }

    public function setSearchVolumeOctoberTo($searchVolumeOctoberTo) {
        $this->searchVolumeOctoberTo = $searchVolumeOctoberTo;
    }

    public function getSearchVolumeNovember() {
        return $this->searchVolumeNovember;
    }

    public function setSearchVolumeNovember($searchVolumeNovember) {
        $this->searchVolumeNovember = $searchVolumeNovember;
    }

    public function getSearchVolumeNovemberTo() {
        return $this->searchVolumeNovemberTo;
    }

    public function setSearchVolumeNovemberTo($searchVolumeNovemberTo) {
        $this->searchVolumeNovemberTo = $searchVolumeNovemberTo;
    }

    public function getSearchVolumeDecember() {
        return $this->searchVolumeDecember;
    }

    public function setSearchVolumeDecember($searchVolumeDecember) {
        $this->searchVolumeDecember = $searchVolumeDecember;
    }

    public function getSearchVolumeDecemberTo() {
        return $this->searchVolumeDecemberTo;
    }

    public function setSearchVolumeDecemberTo($searchVolumeDecemberTo) {
        $this->searchVolumeDecemberTo = $searchVolumeDecemberTo;
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
		$operations["searchVolumeJanuary"] = $this->getOpSearchVolumeJanuary();
		$operations["searchVolumeFebruary"] = $this->getOpSearchVolumeFebruary();
		$operations["searchVolumeMarch"] = $this->getOpSearchVolumeMarch();
		$operations["searchVolumeApril"] = $this->getOpSearchVolumeApril();
		$operations["searchVolumeMay"] = $this->getOpSearchVolumeMay();
		$operations["searchVolumeJune"] = $this->getOpSearchVolumeJune();
		$operations["searchVolumeJuly"] = $this->getOpSearchVolumeJuly();
		$operations["searchVolumeAugust"] = $this->getOpSearchVolumeAugust();
		$operations["searchVolumeSeptember"] = $this->getOpSearchVolumeSeptember();
		$operations["searchVolumeOctober"] = $this->getOpSearchVolumeOctober();
		$operations["searchVolumeNovember"] = $this->getOpSearchVolumeNovember();
		$operations["searchVolumeDecember"] = $this->getOpSearchVolumeDecember();
		
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
		$filterObject["termCount"] = $this->getTermCount();
		$filterObject["termCountTo"] = $this->getTermCountTo();
		
		$filterObject["searchVolumeJanuary"] = $this->getSearchVolumeJanuary();
		$filterObject["searchVolumeJanuaryTo"] = $this->getSearchVolumeJanuaryTo();
		$filterObject["searchVolumeFebruary"] = $this->getSearchVolumeFebruary();
		$filterObject["searchVolumeFebruaryTo"] = $this->getSearchVolumeFebruaryTo();
		$filterObject["searchVolumeMarch"] = $this->getSearchVolumeMarch();
		$filterObject["searchVolumeMarchTo"] = $this->getSearchVolumeMarchTo();
		$filterObject["searchVolumeApril"] = $this->getSearchVolumeApril();
		$filterObject["searchVolumeAprilTo"] = $this->getSearchVolumeAprilTo();
		$filterObject["searchVolumeMay"] = $this->getSearchVolumeMay();
		$filterObject["searchVolumeMayTo"] = $this->getSearchVolumeMayTo();
		$filterObject["searchVolumeJune"] = $this->getSearchVolumeJune();
		$filterObject["searchVolumeJuneTo"] = $this->getSearchVolumeJuneTo();
		$filterObject["searchVolumeJuly"] = $this->getSearchVolumeJuly();
		$filterObject["searchVolumeJulyTo"] = $this->getSearchVolumeJulyTo();
		$filterObject["searchVolumeAugust"] = $this->getSearchVolumeAugust();
		$filterObject["searchVolumeAugustTo"] = $this->getSearchVolumeAugustTo();
		$filterObject["searchVolumeSeptember"] = $this->getSearchVolumeSeptember();
		$filterObject["searchVolumeSeptemberTo"] = $this->getSearchVolumeSeptemberTo();
		$filterObject["searchVolumeOctober"] = $this->getSearchVolumeOctober();
		$filterObject["searchVolumeOctoberTo"] = $this->getSearchVolumeOctoberTo();
		$filterObject["searchVolumeNovember"] = $this->getSearchVolumeNovember();
		$filterObject["searchVolumeNovemberTo"] = $this->getSearchVolumeNovemberTo();
		$filterObject["searchVolumeDecember"] = $this->getSearchVolumeDecember();
		$filterObject["searchVolumeDecemberTo"] = $this->getSearchVolumeDecemberTo();
		
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