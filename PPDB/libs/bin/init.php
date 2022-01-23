<?php

# package name
const LIBRARY_NAME = "PPDB";
const LIBRARY_VERSION = "1.4.17";
const LIBRARY_API = [1];
const LIBRARY_SSL_SUPPORT = true;
const LIBRARY_LICENCE = "Apache-2.0 License";
const LIBRARY_AUTHOR = "SurveyBuilderTeams";
const LIBRARY_AUTOUPDATE = true;


# render
   function RenderLibrary(){
			# cache LIBRARY values
		try{
		if(LIBRARY_NAME !== "PPDB"){
			throw new PPDBErr(LIBRARY_NAME);
		}
	}catch(PPDBErr $e){
			  echo $e->CHECKLIBSNAME();
	}
	try{
		if(LIBRARY_VERSION !== update::checkUpdate() && LIBRARY_AUTOUPDATE){
			throw new PPDBErr('<span style="position:absolute;text-align:center;top:25%;right:0;background-color:white;font-size:32px;border-radius:15px;">You are out-of-date!<br/><br/><b>Your Version: '.LIBRARY_VERSION.'</b><br/><b style="color:green;text-decoration:underline;">Current Version: '.update::checkUpdate().'</b><br/><a href="https://github.com/surveybuilderteams/PPDB" style="color:lime;">Download on github</a></span>');
		}
	}catch(PPDBErr $e){
		echo $e->neededUpdate();
	}
	try{
		if(LIBRARY_API[0] !== 1){
			throw new PPDBErr(LIBRARY_API[0]);
		}
	}catch(PPDBErr $e){
			  echo $e->CHECKLIBSAPI();
	}
		try{
		if(gettype(LIBRARY_SSL_SUPPORT) !== "boolean"){
			throw new PPDBErr(LIBRARY_SSL_SUPPORT);
		}
	}catch(PPDBErr $e){
			  echo $e->CHECKLIBSSL();
	}
	
		try{
		if(LIBRARY_LICENCE !== "Apache-2.0 License"){
			throw new PPDBErr(LIBRARY_LICENCE);
		}
	}catch(PPDBErr $e){
			  echo $e->CHECKLIBSLICENCE();
	}
    try{
        if(LIBRARY_AUTHOR !== "SurveyBuilderTeams"){
       throw new PPDBErr(LIBRARY_AUTHOR);
        }
    }catch(PPDBErr $e){
        echo $e->CHECKLIBSAuthor();
    }
	try{
		if(!extension_loaded('openssl')){
			throw new PPDBErr('This app needs the Open SSL PHP extension.');
		}
	}catch(PPDBErr $e){
		echo $e->noOpenSSL();
	}

	
	
	
}

RenderLibrary();
?>
