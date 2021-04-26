<?php
/*Imagine a web server that redirects clients from one domain to another. Say the web server is configured with rules like the following:

{"from": "bsd.kent.edu",     "to": "biologicalsciences.kent.edu"}
{"from": "cdis.kent.edu",    "to": "ctds.kent.edu"}
{"from": "kent.edu",         "to": "www.kent.edu"}
{"from": "example.kent.edu", "to": "kent.edu"}

When a web browser visits one of the "from" domains, it will receive a redirect to the "to" domain. If the new domain is also a "from" domain, the browser will be redirected again.


Write a function that accepts the following two parameters:

1. A list of redirect objects like in the above list.
2. An input domain.

Have the function return the final domain after following all of the applicable redirect rules. If the input domain does not match any rules, the final domain should be the same as the input domain.

For example, given the above rules and "example.kent.edu", the function should return "www.kent.edu". For "maps.kent.edu", the function should return "maps.kent.edu".

*/
$_SERVER['REQUEST_URI1'] = "example.kent.edu";

$redirects = array (
"bsd.kent.edu" => "biologicalsciences.kent.edu",
"cdis.kent.edu" => "ctds.kent.edu",
"kent.edu" => "www.kent.edu",
"example.kent.edu" => "kent.edu",
"www.kent.edu" => "mayank.local"
);
$new_redirect = $_SERVER['REQUEST_URI1'];
	while (isset($redirects[$new_redirect])) {
		$new_redirect = $redirects[$new_redirect];
	}
	echo "<br /><br />".$new_redirect;
	//header ("Location:https://". $redirects[new_redirect]);

?>