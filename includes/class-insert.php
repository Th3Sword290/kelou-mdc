<?php
	require_once('class-db.php');

	if ( !class_exists('INSERT') ) {
		class INSERT {
			public function post($postdata) {
				global $db;

				$kind = serialize($postdata['post_kind']);

				$name = time();
				$_FILES['post_pic']['name'] = $name;
				$path = 'C:\wamp64\www\kelou-mdc\uploads/'.$_FILES['post_pic']['name'].'.jpg';
				move_uploaded_file($_FILES['post_pic']['tmp_name'], $path);
				$path_file = "./uploads/".$name.".jpg";

				$data[0] = addslashes($postdata['post_title']);
				$data[1] = addslashes($postdata['post_date']);
				$data[2] = addslashes($postdata['post_real']);
				$data[3] = addslashes($postdata['post_duration']);
				$data[4] = addslashes($postdata['post_language']);
				$data[5] = addslashes($postdata['post_subs']);
				$data[6] = addslashes($postdata['post_quality']);
				$data[7] = addslashes($postdata['post_synopsis']);
				$data[8] = addslashes($postdata['post_ba']);

				$query = "
								INSERT INTO 'posts' (post_title, post_date, post_real, post_kind, post_duration, post_language, post_subs, post_quality, post_synopsis, post_ba, post_pic)
								VALUES ('$data[0]', '$data[1]', '$data[2]', '$kind', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$path_file')
							";
				return $db->insert($query);
			}
		}
	}

	$insert = new INSERT;
?>