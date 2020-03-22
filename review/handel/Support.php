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
	static function checkRequestIDIfUnsigned($requestID): bool {
		
		if(is_int($requestID) == false){
			return false;
		}
		
		if(requestID <= 0){
			return false;
		}
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
	static function checkRequestIfExist(int $requestID): bool {
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
	 *   @type $request_id: int
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
	 * Purpose: insert a record in the follow up table in the database
	 * Type Contract: int -> bool
	 *   @type $request_id: int
	 *   @returnType: bool
	 * Example:
	 *   getCost(200) -> Return 60
	 *   getCost(300) -> Return 0
	 *   getCost(400) -> Return 38.25
	*/
	static function Insert(int $requestID, int $paid, string $prices, TechnicalDate $date, Tps $tps, Cleaness $cleaness, BoughtProducts $boughtProduct, double $productCost, int $technicalReview, int $serviceReview, ): double {
		if(checkRequestIDIfUnsigned($requestID) == false){
			return 0;
		}
		/** 
		 * Get the cost of request from database which match $requestID and stroe it in $requestCost variable 
		 * Query SELECT cost FROM request_stagest_t WHERE request_id = $requestID
		*/
		return $requestCost;
	}
	
	
	
	abstract class TechnicalDate{
		const Late = 0;
		const OnTime = 1;
    }
	
	abstract class Tps{
		const No = 0;
		const Yes = 1;
    }
	
	abstract class Cleaness{
		const No = 0;
		const Yes = 1;
    }
	
	abstract class BoughtProducts{
		const No = 0;
		const Yes = 1;
    }
	
?>