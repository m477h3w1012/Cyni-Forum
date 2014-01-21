<?php

/**
 * Copyright 2014 Matthew Ball (CyniCode/M477h3w1012)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$home_dir = getcwd()."/..";

require_once "$home_dir/function/database.php";

function isInstalled( $home_dir ) {

	$database = new database($home_dir);

	return ( file_exists("$home_dir/config/props.php") && $database->getInstallStatus() );

}

function getUserRegTime( $userName, $home_dir ) {

	$database = new database($home_dir);
	return "";

}

?>