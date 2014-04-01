<?php
/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require '../src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '112161425513130',
  'secret' => 'cab4f988e43e8cdb12ced08f4e7f4116',
));

// Get User ID
$user = $facebook->getUser();

// // We may or may not have this data based on whether the user is logged in.
// //
// // If we have a $user id here, it means we know the user is logged into
// // Facebook, but we don't know if the access token is valid. An access
// // token is invalid if the user logged out of Facebook.

// if ($user) {
//   try {
//     // Proceed knowing you have a logged in user who's authenticated.
//     $user_profile = $facebook->api('/me');
//   } catch (FacebookApiException $e) {
//     error_log($e);
//     $user = null;
//   }
// }

// // Login or logout url will be needed depending on current user state.
// if ($user) {
//   $logoutUrl = $facebook->getLogoutUrl();
// } else {
//   $statusUrl = $facebook->getLoginStatusUrl();
//   $loginUrl = $facebook->getLoginUrl();
// }

// This call will always work since we are fetching public data.
$naitik = $facebook->api('/520045811436494/photos?fields=id,picture,source,name&limit=25&type=uploaded&after=NTg3NTkyOTI4MDE1MTE1');
// print_r($naitik);
var_dump($naitik);
?>

