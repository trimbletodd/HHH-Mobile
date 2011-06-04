<?php
/**
 * Creates a user
 *
 * POST /user
 *   input: device_id, lat, long, name, email
 *  output: HTTP OK + user_id (if successful),
 *					HTTP BADREQUEST (if invalid params),
 *					HTTP INTERNALSERVERERROR (if unforeseen error)
 *
 * @uri /user
 */

class UserResource extends Resource {
	function post($request) {
	}
}

/**
 * Allows the user to check their location against available points (also updates the user's location)
 *
 * POST /user/check_location
 *   input: game_id, user_id, lat, long
 *  output: HTTP OK + point (if successful),
 *					HTTP BADREQUEST (if invalid params),
 *					HTTP NOTFOUND (if no game exists for that id; if no user exists for that id),
 *					HTTP INTERNALSERVERERROR (if unforeseen error)
 *
 * @uri /user/check_location
 */
class UserResource extends Resource {
	function post($request) {
	}
}
?>