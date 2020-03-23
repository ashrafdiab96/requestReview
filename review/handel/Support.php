<?php

	/** 
	 * Purpose: check request id and return true if it is int larger than 0
	 * Type Contract: mixed -> unsigned int
	 *   @type $requestID: mixed
	 *   @returnType: unsigned int
	 * Example:
	 *   checkRequestIfExist(200) -> Return True
	 *   checkRequestIfExist(0) -> Return False
	 *   checkRequestIfExist(200.1) -> Return False
	 *   checkRequestIfExist(-10) -> Return False
	 *   checkRequestIfExist(-10.5) -> Return False
	 *   checkRequestIfExist("string") -> Return False
	*/
	static function checkRequestIDIfUnsigned($requestID) {
		if(ctype_digit($requestID)){
		if($requestID > 0){
			return true;
		}else{
			return false;
		}
	}
	else{
		return false;
	}
	
	/** 
	 * Purpose: return false if the request not exist in follow_up_t table
	 * Type Contract: unsigned int -> bool
	 *   @type $requestID: unsigned int
	 *   @returnType: bool
	 * Example:
	 *   checkRequestIfExist(200) -> Return True
	 *   checkRequestIfExist(202) -> Return False
	*/
	static function checkRequestIfExist(int $requestID) {
		if(checkRequestIDIfUnsigned($requestID) == false){
			return false;
		}
		/** 
		 * Get request_count from database which match $requestID and stroe it in $requestCount variable 
		 * Query SELECT COUNT(request_id) AS request_count FROM follow_up_t WHERE request_id = $requestID
		*/
		
		if($requestCount == 0){
			return false;
		}
		else{
			return true; 
		}
	}

	/** 
	 * Purpose: return the cost of the request
	 * Type Contract: int -> unsigned double
	 *   @type $requestID: int
	 *   @returnType: unsigned double
	 * Example:
	 *   getCost(200) -> Return 60
	 *   getCost(300) -> Return 0
	 *   getCost(400) -> Return 38.25
	*/
	static function getCost(int $requestID): double {
		if(checkRequestIDIfUnsigned($requestID) == false){
			return 0;
		}
		/** 
		 * Get the cost of request from database which match $requestID and stroe it in $requestCost variable 
		 * Query SELECT cost FROM request_stagest_t WHERE request_id = $requestID
		*/
		return $requestCost;
	}
	
	/** 
	 * Purpose: update know us filed in client table and return true on success
	 * Type Contract: int, string -> bool
	 *   @type $requestID: int
	 *   @type $knowUs: string
	 *   @returnType: bool
	 * Example:
	 *   updateKnowUs(400, "صفحتنا") -> Return True
     *   updateKnowUs(400, "") -> Return False
	*/
	static function updateKnowUs(int $reqeustID, string $knowUs) {
		if(checkRequestIDIfUnsigned($requestID) == false){
			return false;
		}

		if($knowUs == NULL){
			return false;
		}
		/** 
		 * Update know us in client table
		 * Query Update client_t JOIN request_t ON client_t.client_id = request_t.client_id SET client_know_us = '$knowUs' WHERE request_t.request_id = $reqeustID
		*/
		// Return true is there is no error happen
	}
	
?>