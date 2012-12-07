<?php

include_once 'issues-opt.php';

/**
 * Return a string stating how long ago something happened.
 *
 * @param  integer $d formatted date stamp
 *
 * @return string
 */
function days_passed( $d ) {
	if( empty( $d ) ) {
		return "";
	}

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

/**
 * Fetch the issues for a given state.
 *
 * @param  string $state The state of bugs we're interested in.
 *
 * @return array         An array of issues matching the state requested.
 */
function fetch_issues( $state ) {
	global $config;
	$repos = $config['repos'];
	$issues = array();

	foreach( $repos as $url ) {
		// Initializing curl
		$ch = curl_init( $url . ( $state ? '?state=' . $state : '') );

		// Configuring curl options
		$options = array(
			CURLOPT_RETURNTRANSFER => true,
		);

		// Setting curl options
		curl_setopt_array( $ch, $options );

		$json = curl_exec($ch);

		// Getting results
		$newiss = json_decode( $json );
		$issues = is_array($newiss) ? array_merge( $issues, $newiss ) : $issues;
	}

	file_put_contents($config["{$state}CacheFile"], serialize($issues));
	return $issues;
}

function get_issues( $state ) {
	global $config;
	$issues = array();

	// Check for a cached copy.
	if( file_exists($config["{$state}CacheFile"]) ) {
		if($issues = unserialize(file_get_contents($config["{$state}CacheFile"]))) {
			return $issues;
		}
	}
	return $issues;
}

/**
 * Print a table of issues.
 *
 * @param  array $issues An array of issues to display.
 *
 * @return void
 */
function print_issues($state, $issues)
{
	$icount = count($issues);
	if( $icount ) {
		?><h2 class="issuehed"><?=$icount?> <?=$state?> issue<?=$icount == 1 ? '' : 's'?></h2>
			<table>
				<thead>
					<tr>
						<th scope="col">Issue</th>
						<th scope="col">Description</th>
						<th scope="col">Author</th>
						<th scope="col">Last Modified</th>
					</tr>
				</thead>
				<tbody>
		<? foreach( $issues as $i ):?>
			<tr>
				<td><?=$i->number?></td>
				<th scope="row">
					<a href="<?=$i->html_url?>"><?=htmlspecialchars($i->title,ENT_QUOTES,'UTF-8')?>
					<?if( $i->comments > 0 ):?><b class="comments"><?=htmlspecialchars($i->comments, ENT_QUOTES, 'UTF-8')?> comment<?=$i->comments == 1 ? '' : 's' ?></b><?endif?>
					</a>
				</th>
				<?//<td class="label">Enhancement</td>?>
				<td><a href="https://github.com/<?=htmlspecialchars($i->user->login, ENT_QUOTES, 'UTF-8')?>"><?=htmlspecialchars($i->user->login, ENT_QUOTES, 'UTF-8')?></a></td>
				<td><?=days_passed( $i->updated_at )?></td>
			</tr>
		<?endforeach;?>

			</tbody>
		</table>
		<?
	}
}