<?php

	/* connect to database */
	$serverName = "den1.mysql6.gear.host";
	$userName = "sanyaatest";
	$dbPass = "Ko6j1572F7_~";
	$dbName = "sanyaatest";
	$conn = new mysqli ($serverName , $userName , $dbPass , $dbName);
	
	/** 
	 * Purpose: check request id and return true if it is int larger than 0
	 * Type Contract: mixed -> unsigned int
	 *   @type $requestID: mixed
	 *   @returnType: unsigned int
	 * Example:
	 *   checkRequestIDIfUnsigned(200) -> Return True
	 *   checkRequestIDIfUnsigned(0) -> Return False
	 *   checkRequestIDIfUnsigned(200.1) -> Return False
	 *   checkRequestIDIfUnsigned(-10) -> Return False
	 *   checkRequestIDIfUnsigned(-10.5) -> Return False
	 *   checkRequestIDIfUnsigned("string") -> Return False
	*/
    function checkRequestIDIfUnsigned($requestID) {
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
	}
	
	/** 
	 * Purpose: return true if the request exist in the request table
	 * Type Contract: unsigned int -> bool
	 *   @type $requestID: unsigned int
	 *   @returnType: bool
	 * Example:
	 *   checkRequestIfExist(113) -> Return True
	 *   checkRequestIfExist(100000) -> Return False
	*/
    function checkRequestIfExist($requestID, $conn) {
		$sqlQuery = "SELECT COUNT(request_id) AS request_count
                       FROM request_t
                       WHERE request_id = $requestID";
		$requestCount = sqlExcuteScaler($sqlQuery, $conn);
		if((int)$requestCount >= 1){
			return true;
		}
		else{
			return false; 
		}
	}
	
	/** 
	 * Purpose: return true if the request is exist in the follow up table
	 * Type Contract: unsigned int -> bool
	 *   @type $requestID: unsigned int
	 *   @returnType: bool
	 * Example:
	 *   checkRequestIfReviewed(200) -> Return False
	 *   checkRequestIfReviewed(202) -> Return True
	*/
    function checkRequestIfReviewed($requestID, $conn) {
		$sqlQuery = "SELECT COUNT(request_id) AS request_count
                       FROM follow_up_t
                       WHERE request_id = $requestID";
		$requestCount = sqlExcuteScaler($sqlQuery, $conn);
		if((int)$requestCount >= 1){
			return true;
		}
		else{
			return false; 
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
	function getCost($requestID, $conn) {
		$query = "SELECT cost FROM request_stages_t WHERE request_id = $requestID";
		$cost = sqlExcuteScaler($query, $conn);
		return $cost;
	}
	
	/** 
	 * Purpose: return the first field in the first row of the query result
	 * Type Contract: string -> mixed
	 *   @type $query: string
	 *   @type $conn: mysql connection
	 *   @returnType: string
	 * Example:
	 *   checkRequestIfExist(200) -> Return True
	 *   checkRequestIfExist(202) -> Return False
	*/
    function sqlExcuteScaler($query, $conn) {
		$sqlResult = $conn->query($query);
		if($sqlResult){
			while($row = mysqli_fetch_array($sqlResult)){
				$resultScaler = $row[0];
				break;
			}
			return $resultScaler;
		}
		else{
			return "-1";
		}
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
	
	/**
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
		/
		// Return true is there is no error happen
	}
	*/
//}
?>