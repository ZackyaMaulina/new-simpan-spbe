<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('printr')) {
    function printr($var, $echo = TRUE)
    {
        $output = '<pre style="position:absolute; z-index: 10001; padding: 20px; background: #fff; top: 0; left: 0;">' . print_r($var, TRUE) . '</pre>';
        echo $output;
        return;
    }
}

if (!function_exists('get_frontend_gravatar')) {
    function get_frontend_gravatar($image)
    {
        $img = $image;
        $imgdefault ='uploads/images/profile/default.png';

        if ($image !== null && $image !== '' && file_exists($img)) {
            return base_url($img);
        }
        return base_url($imgdefault);
    }
}

/**
 * Get Excerpt helper
 * @author Based on http://www.phpsnaps.com/snaps/view/get-excerpt-from-string/
 * @version 1.0
 */
if (!function_exists('get_excerpt')) {
    function get_excerpt($str = NULL, $max_lenght) {
        if(strlen($str) > $max_lenght) {
            $excerpt    = substr($str, 0, $max_lenght-3);
            $last_space = strrpos($excerpt, ' ');
            $excerpt    = substr($excerpt, 0, $last_space);
            $excerpt   .= '...';
        } else {
            $excerpt = $str;
        }

        return strip_tags($excerpt);
    }
}

/**
 * Konversi Tanggal
 * @author Masriadi
 * @version 1.0
 * example : short_date('D, j M Y', 2016-12-13) result : Wed, 13 Dec 2016
 */
// if (!function_exists('long_date')) {
//     function long_date($format, $date = "now", $language_id = 'id')
//     {
//         $en = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
//         $lang = explode(',', lang('lang_date'));
//         return str_replace($en, $lang, date($format, strtotime($date)));
//     }
// }

// if (!function_exists('short_date')) {
//     function short_date($format, $date = "now", $language_id = 'id')
//     {
//         $en = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
//         $lang = explode(',', lang('lang_date_short'));
//         return str_replace($en, $lang, date($format, strtotime($date)));
//     }
// }

function tanggal_indonesia($tanggal){

    // printr($tanggal); die();

	$bulan = array (
		1 =>   	'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
		);

		$var = explode('-', $tanggal);

		return $var[0] . ' ' . $bulan[ (int)$var[1] ] . ' ' . $var[2];
		// var 0 = tanggal
		// var 1 = bulan
		// var 2 = tahun
}


