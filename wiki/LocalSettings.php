<?php
# This file was automatically generated by the MediaWiki 1.29.2
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

function loadenv($envName, $default = "") {
    return getenv($envName) ? getenv($envName) : $default;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;
$wgSitename = loadenv('MEDIAWIKI_SITE_NAME', 'MediaWiki');
$customName = loadenv('MEDIAWIKI_CUSTOM_NAME', "wiki"); 
$hostName = loadenv('MEDIAWIKI_HOST_NAME', "localhost:8080");

# Virtual path. This directory MUST be different from the one used in $wgScriptPath
#$wgArticlePath = "/$customName/$1";    
#$wgUsePathInfo = true;

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/$customName";


## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
#$wgLogo = "$wgResourceBasePath/resources/assets/wiki.png";
$wgLogo = loadenv('MEDIAWIKI_LOGO', "$wgResourceBasePath/resources/assets/wiki.png");

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO


$wgEmergencyContact = loadenv('MEDIAWIKI_EMERGENCY_CONTACT', "apache@localhost");
$wgPasswordSender = loadenv('MEDIAWIKI_PASSWORD_SENDER', "apache@localhost");

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = loadenv('MEDIAWIKI_DB_TYPE', "mysql");
$wgDBserver = loadenv('MEDIAWIKI_DB_HOST', "db");
$wgDBname = loadenv('MEDIAWIKI_DB_NAME', "mediawiki");
$wgDBuser = loadenv('MEDIAWIKI_DB_USER', "root");
$wgDBpassword = loadenv('MEDIAWIKI_DB_PASSWORD', "mediawikipass");

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = false;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

$wgSecretKey = loadenv('MEDIAWIKI_SECRET_KEY', null);

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "ee70b091905bb63f";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'CologneBlue' );
wfLoadSkin( 'Modern' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Vector' );

# End of automatically generated settings.
# Add more configuration options below.
$wgEnableUploads = true;
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'jp2', 'webp', 'ppt', 'pdf', 'psd', 'mp3', 'xls', 'xlsx', 'swf', 'doc','docx', 'odt', 'odc', 'odp', 'odg', 'mpp', 'txt', 'zip', 'csv');

$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['read'] = false;
$wgGroupPermissions['user']['delete'] = true;
$wgGroupPermissions['user']['read'] = true;
$wgGroupPermissions['user']['suppressredirect'] = true;
$wgGroupPermissions['user']['createaccount'] = true;

enableSemantics("$hostName/$customName");
$smwgNamespace = "http://$hostName/$customName/";

$wgEnableParserCache = false;
$wgCachePages = false;
$smwgCacheType = CACHE_NONE;

$smwgDefaultStore = 'SMWSparqlStore';
$smwgSparqlDatabaseConnector = 'fuseki';
$smwgSparqlQueryEndpoint = loadenv('SPARQL_QUERY_ENDPOINT', "http://host.docker.internal:3030/enigma_wiki/query"); 
$smwgSparqlUpdateEndpoint = loadenv('SPARQL_UPDATE_ENDPOINT', "http://host.docker.internal:3030/enigma_wiki/update"); 
$smwgSparqlDataEndpoint = '';

require_once "$IP/extensions/PageObjectModel/PageObjectModel.php";
require_once "$IP/extensions/WorkflowTasks/WorkflowTasks.php";
$wgUseSimpleTasks=true;
$wgDisableTracking=true;
$wgUseLiPD=false;
$wgCore="(E)";
$wgOntName = "Enigma Core";
$wgOntNS = "https://w3id.org/enigma#";

$wgRunJobsAsync = true;
$wgJobRunRate = 2000;

require_once "$IP/extensions/AccessControl/AccessControl.php";
$wgAdminCanReadAll = true;
$wgAccessControlRedirect = false;

require_once "$IP/extensions/Nuke/Nuke.php";

// Larger depth for SMW queries (default is 4)
$smwgQMaxDepth = 10;
$smwgQMaxSize = 20;

// Groups & special rights
$wgGroupPermissions['visitor'] = array('createtalk'=>1);
#$wgGroupPermissions['contributor'] = array('createtalk'=>1, 'edit-page-text'=>1);
$wgGroupPermissions['basic-editor'] = array('createpage'=>1, 'createtalk'=>1,
        'edit-page-text'=>1, 'edit-page-metadata'=>1,
        'edit-ontology-text'=>1);
$wgGroupPermissions['advanced-editor'] = array('createpage'=>1, 'createtalk'=>1,
        'edit-page-text'=>1, 'edit-page-metadata'=>1,
        'edit-ontology-text'=>1, 'edit-ontology-semantics'=>1);
$wgGroupPermissions['editorial-board'] = array('createpage'=>1, 'createtalk'=>1,
        'edit-page-text'=>1, 'edit-page-metadata'=>1,
        'edit-ontology-text'=>1, 'edit-ontology-semantics'=>1,
        'edit-core-ontology'=>1, 'editpolicy'=>1);
$wgGroupPermissions['sysop'] = array('createpage'=>1, 'createtalk'=>1,
        'edit-page-text'=>1, 'edit-page-metadata'=>1,
        'edit-ontology-text'=>1, 'edit-ontology-semantics'=>1,
        'edit-core-ontology'=>1, 'editpolicy'=>1);

$wgShowExceptionDetails = true;
$wgShowSQLErrors = true;
$wgDebugDumpSql = true;

