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

$home_dir = getcwd();

require_once "$home_dir/function/page_generation.php";
require_once "$home_dir/function/function.php";

$pg = new pageTemplate( "rooting.htm", $home_dir );

$body = "<div class='newsarticle_text'>Congratulations! You are now registered! You are now able to post in the forums and generally be a nice guy. Please remember to show respect to the admins and moderators!</div>";

$pg->setTag( "LOCATION", "." );
$pg->setTag( "TITLE", "Registration Complete" );
$pg->setTag( "BODY", "<div class='newsarticle'>$body</div>" );
$pg->setTag( "HEAD", "<img src='./images/forum_logo.png' class='logo' />" );
$pg->setTag( "LOGINBOX", getLoginStatus($home_dir) );
$pg->setTag( "FOOT", "" );

$pg->showPage();