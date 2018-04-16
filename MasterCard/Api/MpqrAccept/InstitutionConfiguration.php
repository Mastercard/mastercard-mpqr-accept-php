<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\MpqrAccept;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class InstitutionConfiguration extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "3d4dbb4b-2a86-4284-8d49-3ab8be8bde4c":
				return new OperationConfig("/labs/proxy/mpqr-accept/v1/api/bank/configuration", "query", array(), array());
			case "a863a365-8084-4e76-86ba-46d2274ddd14":
				return new OperationConfig("/labs/proxy/mpqr-accept/v1/api/bank/configuration/publish", "update", array(), array());
			case "4dd9ca80-f90e-4aae-a754-b94d5a8fdfb6":
				return new OperationConfig("/labs/proxy/mpqr-accept/v1/api/bank/configuration", "update", array(), array());
			case "217bba1b-977c-4556-a97e-0b2d3d56ae82":
				return new OperationConfig("/labs/proxy/mpqr-accept/v1/api/bank/configuration/terminate", "update", array(), array());
			case "0849a4aa-5265-4e3b-8c83-9b2d5d69b1bd":
				return new OperationConfig("/labs/proxy/mpqr-accept/v1/api/bank/configuration/unpublish", "update", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
	}







	/**
	 * Query objects of type InstitutionConfiguration by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return InstitutionConfiguration of the response
	 */
	public static function read($criteria)
	{
		return self::execute("3d4dbb4b-2a86-4284-8d49-3ab8be8bde4c",new InstitutionConfiguration($criteria));
	}

	/**
	 * Updates an object of type InstitutionConfiguration
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return InstitutionConfiguration of the response
	 */
	public function publish()  {
		return self::execute("a863a365-8084-4e76-86ba-46d2274ddd14",$this);
	}





	/**
	 * Updates an object of type InstitutionConfiguration
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return InstitutionConfiguration of the response
	 */
	public function update()  {
		return self::execute("4dd9ca80-f90e-4aae-a754-b94d5a8fdfb6",$this);
	}





	/**
	 * Updates an object of type InstitutionConfiguration
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return InstitutionConfiguration of the response
	 */
	public function terminate()  {
		return self::execute("217bba1b-977c-4556-a97e-0b2d3d56ae82",$this);
	}





	/**
	 * Updates an object of type InstitutionConfiguration
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return InstitutionConfiguration of the response
	 */
	public function unpublish()  {
		return self::execute("0849a4aa-5265-4e3b-8c83-9b2d5d69b1bd",$this);
	}






}

