<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: text/css");

CONST BASE_FONTS_DIR = 'fonts';

$family = $_GET['family'];
$filter = array('.', '..', '.DS_Store');
$directories = array_diff(scandir(BASE_FONTS_DIR), $filter);

foreach($directories as $dir) {
    if($dir == $family) {
        $files = array_diff(scandir(BASE_FONTS_DIR . '/' . $family), $filter);
        foreach($files as $file) {
            $font = explode('-', $file);
            $font_name = $font[0]; 
            $font_weight = $font[1]; 
            $font_style = explode(".", $font[3])[0]; 
            $font_format = explode(".", $font[3])[1]; 
            if($font_format == 'ttf') {
                $font_format = 'truetype';
            } else {
                $font_format = 'opentype';
            }
?>
@font-face {
    font-family: '<?php echo $font_name ?>';
    font-weight: <?php echo $font_weight ?>;
    <?php if($font_style) : ?>
    font-style: <?php echo $font_style ?>;
    <?php else : ?>
    font-style: normal;
    <?php endif; ?>
    src: url('<?php echo BASE_FONTS_DIR ?>/<?php echo $font_name ?>/<?php echo $file ?>') format('<?php echo $font_format ?>');
}
<?php
        }
    }
}