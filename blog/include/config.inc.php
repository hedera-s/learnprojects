<?php
	/*******************************************************************************/
	
		/*******************************************************/
		/******************GLOBAL CONFIGURATION*****************/
		/*******************************************************/
		
		// Konstanten werden in PHP mittels der Funktion define() definiert.
		// Konstanten besitzen im Gegensatz zu Variablen kein $-Präfix
		// Üblicherweise werden Konstanten komplett GROSS geschrieben.
		
		/*********** DATABASE CONFIGURATION **********/
		define("DB_SYSTEM"	,	"mysql");
		define("DB_HOST"	,	"localhost");
		define("DB_NAME"	,	"blog");
		define("DB_USER"	,	"root");
		define("DB_PWD"		,	"");
		
		/********** FORMULAR CONFIGURATION ************/
		define("INPUT_MIN_LENGTH"	, 2);
		define("INPUT_MAX_LENGTH"	, 255);
		
		/********* IMAGE UPLOAD CONFIGURATION **********/
		
		define("IMAGE_MAX_WIDTH"		, 	800);
		define("IMAGE_MAX_HEIGHT"		,	800);
		define("IMAGE_MAX_SIZE"			, 	200000);
		define("IMAGE_UPLOAD_PATH"		, 	"uploaded_images/");
		define("IMAGE_ALLOWED_MIMETYPES", 	array("image/jpg", "image/jpeg", "image/gif", "image/png"));
		
		/********* STANDART PATHS CONFIGURATION ********/
	
		
										
		/***************** DEBUGGING *******************/
		define("DEBUG"		, 	false);
		define("DEBUG_F"	, 	false);
		define("DEBUG_DB"	, 	false);
		
	
		
	
	
	
	
	
	
	/*******************************************************************************/
	
	
?>