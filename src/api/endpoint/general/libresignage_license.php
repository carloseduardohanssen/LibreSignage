<?php
	/*
	*  ====>
	*
	*  *Get the Markdown version of the LibreSignage license file.*
	*
	*  <====
	*/

	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/config.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/api/api.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/api/api_error.php');

	$LIBRESIGNAGE_LICENSE = new APIEndpoint(
		$method = API_METHOD['GET'],
		$response_type = API_RESPONSE['TEXT'],
		$format = NULL
	);
	api_endpoint_init($LIBRESIGNAGE_LICENSE);

	$LIBRESIGNAGE_LICENSE->resp_set(file_get_contents(
		realpath(LIBRESIGNAGE_ROOT.LIBRESIGNAGE_LICENSE_RST)
	));
	$LIBRESIGNAGE_LICENSE->send();