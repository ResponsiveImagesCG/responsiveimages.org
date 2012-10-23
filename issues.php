<?php
	// Disclaimer: I am not a PHP developer.
	include_once( "issues-opt.php" );

	function days_passed( $d ) {
		@$days = floor( ( time() - strtotime( $d ) ) / 86400 );

		switch ( $days ) {
			case 0 : 
				return "Today";
				break;
			case 1 :
				return "Yesterday";
				break;
			default: 
				return $days . " days ago";
		}
	};

	function get_issues( $state ) {
		$repos = $GLOBALS["repos"];
		$issues = array();
		$inum = 0;

		foreach( $repos as $url ) {
			// Initializing curl
			$ch = curl_init( $url . ( $state ? '?state=' . $state : '') );

			// Configuring curl options
			$options = array(
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_USERPWD => $GLOBALS['gh_username'] . ":" . $GLOBALS['gh_pass'],
				CURLOPT_HTTPHEADER => array('Content-type: application/json')
			);
			 
			// Setting curl options
			curl_setopt_array( $ch, $options );


			// Getting results
			$newiss = json_decode( curl_exec($ch) );
			@$issues = array_merge( $issues, $newiss );
			$inum = $inum + count( $issues );
		}

		if( $inum !== 0 ) {
			print '<h2 class="issuehed">' . $inum . ' ' . $state . ' issue' . ( $inum == 1 ? '' : 's' ) . '</h2>
				<table>
					<thead>
						<tr>
							<th scope="col">Issue</th>
							<th scope="col">Description</th>
							<th scope="col">Author</th>
							<th scope="col">Last Modified</th>
						</tr>
					</thead>
					<tbody>';

		foreach( $issues as $i ) {
			print("<tr>");
			print("<td>" . $i->number . "</td>");
			print('<th scope="row"><a href="' . $i->html_url . '">'. $i->title . '</a>');
			if( $i->comments > 0 ) {
				print(' <b class="comments">' . $i->comments . ' comment' . ( $i->comments == 1 ? '' : 's' ) . '</b>');
			}
			print('</th>');
			//print('<td class="label">' . "Enhancement" . '</td>');
			print('<td><a href="https://github.com/' . $i->user->login . '">'. $i->user->login . '</a></td>');
			print('<td>' . days_passed( $i->updated_at ) . '</td>');
			print "</tr>";
		}

		print '</tbody>
			</table>';
		}
	}
?>