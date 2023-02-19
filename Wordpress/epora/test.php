<?php
$mydir = '/opt/lampp/htdocs/wdpf51_wp/wp_project6/wp-content/themes/epora/assets/js';
$myfiles = array_diff(scandir($mydir), array('.', '..'));
$fh = fopen('include_js.php', 'w');
fwrite($fh, '');
fwrite($fh, "<?php \n");
foreach($myfiles as $file){
  $id = current(explode(".", $file));
  $string = "wp_enqueue_script( '".$id."', get_template_directory_uri().'/assets/js/".$file."' , array(), '', true ); \n";
  fwrite($fh, $string);
}
?>