<?php
if (!defined('_GNUBOARD_')) exit;
@include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// 최신글 추출
// $cache_time 캐시 갱신시간
function latest($skin_dir='', $bo_table, $rows=10, $subject_len=40, $cache_time=1, $options='')
{
    global $g5;

    if (!$skin_dir) $skin_dir = 'basic';

    if(preg_match('#^theme/(.+)$#', $skin_dir, $match)) {
        if (G5_IS_MOBILE) {
            $latest_skin_path = G5_THEME_MOBILE_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
            if(!is_dir($latest_skin_path))
                $latest_skin_path = G5_THEME_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
            $latest_skin_url = str_replace(G5_PATH, G5_URL, $latest_skin_path);
        } else {
            $latest_skin_path = G5_THEME_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
            $latest_skin_url = str_replace(G5_PATH, G5_URL, $latest_skin_path);
        }
        $skin_dir = $match[1];
    } else {
        if(G5_IS_MOBILE) {
            $latest_skin_path = G5_MOBILE_PATH.'/'.G5_SKIN_DIR.'/latest/'.$skin_dir;
            $latest_skin_url  = G5_MOBILE_URL.'/'.G5_SKIN_DIR.'/latest/'.$skin_dir;
        } else {
            $latest_skin_path = G5_SKIN_PATH.'/latest/'.$skin_dir;
            $latest_skin_url  = G5_SKIN_URL.'/latest/'.$skin_dir;
        }
    }

    $caches = false;

    if(G5_USE_CACHE) {
        $cache_file_name = "latest-{$bo_table}-{$skin_dir}-{$rows}-{$subject_len}-".g5_cache_secret_key();
        $caches = g5_get_cache($cache_file_name);
        $cache_list = isset($caches['list']) ? $caches['list'] : array();
        g5_latest_cache_data($bo_table, $cache_list);
    }

    if( $caches === false ){

        $list = array();

        $board = get_board_db($bo_table, true);

        $bo_subject = get_text($board['bo_subject']);

        $tmp_write_table = $g5['write_prefix'] . $bo_table; // 게시판 테이블 전체이름
        $sql = " select * from {$tmp_write_table} where wr_is_comment = 0 order by wr_num limit 0, {$rows} ";
        
        $result = sql_query($sql);
        for ($i=0; $row = sql_fetch_array($result); $i++) {
            try {
                unset($row['wr_password']);     //패스워드 저장 안함( 아예 삭제 )
            } catch (Exception $e) {
            }
            $row['wr_email'] = '';              //이메일 저장 안함
            if (strstr($row['wr_option'], 'secret')){           // 비밀글일 경우 내용, 링크, 파일 저장 안함
                $row['wr_content'] = $row['wr_link1'] = $row['wr_link2'] = '';
                $row['file'] = array('count'=>0);
            }
            $list[$i] = get_list($row, $board, $latest_skin_url, $subject_len);

            $list[$i]['first_file_thumb'] = (isset($row['wr_file']) && $row['wr_file']) ? get_board_file_db($bo_table, $row['wr_id'], 'bf_file, bf_content', "and bf_type between '1' and '3'", true) : array('bf_file'=>'', 'bf_content'=>'');
            $list[$i]['bo_table'] = $bo_table;
            // 썸네일 추가
            if($options && is_string($options)) {
                $options_arr = explode(',', $options);
                $thumb_width = $options_arr[0];
                $thumb_height = $options_arr[1];
                $thumb = get_list_thumbnail($bo_table, $row['wr_id'], $thumb_width, $thumb_height, false, true);
                // 이미지 썸네일
                if($thumb['src']) {
                    $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'">';
                    $list[$i]['img_thumbnail'] = '<a href="'.$list[$i]['href'].'" class="lt_img">'.$img_content.'</a>';
                // } else {
                //     $img_content = '<img src="'. G5_IMG_URL.'/no_img.png'.'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'" class="no_img">';
                }
            }
        }
        g5_latest_cache_data($bo_table, $list);

        if(G5_USE_CACHE) {

            $caches = array(
                'list' => $list,
                'bo_subject' => sql_escape_string($bo_subject),
            );

            g5_set_cache($cache_file_name, $caches, 3600 * $cache_time);
        }
    } else {
        $list = $cache_list;
        $bo_subject = (is_array($caches) && isset($caches['bo_subject'])) ? $caches['bo_subject'] : '';
    }

    ob_start();
    include $latest_skin_path.'/latest.skin.php';
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
}

// 그룹 최신글 추출

// $cache_time 캐시 갱신시간

function latest_group($skin_dir='', $gr_id, $rows=10, $subject_len=40, $cache_time=1, $options='')

{

    global $g5;

 

    if (!$skin_dir) $skin_dir = 'basic';

 

    if(preg_match('#^theme/(.+)$#', $skin_dir, $match)) {

        if (G5_IS_MOBILE) {

            $latest_skin_path = G5_THEME_MOBILE_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];

            if(!is_dir($latest_skin_path))

                $latest_skin_path = G5_THEME_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];

            $latest_skin_url = str_replace(G5_PATH, G5_URL, $latest_skin_path);

        } else {

            $latest_skin_path = G5_THEME_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];

            $latest_skin_url = str_replace(G5_PATH, G5_URL, $latest_skin_path);

        }

        $skin_dir = $match[1];

    } else {

        if(G5_IS_MOBILE) {

            $latest_skin_path = G5_MOBILE_PATH.'/'.G5_SKIN_DIR.'/latest/'.$skin_dir;

            $latest_skin_url  = G5_MOBILE_URL.'/'.G5_SKIN_DIR.'/latest/'.$skin_dir;

        } else {

            $latest_skin_path = G5_SKIN_PATH.'/latest/'.$skin_dir;

            $latest_skin_url  = G5_SKIN_URL.'/latest/'.$skin_dir;

        }

    }

 

    $cache_fwrite = false;

    if(G5_USE_CACHE) {

        $cache_file = G5_DATA_PATH."/cache/latest-group-{$gr_id}-{$skin_dir}-{$rows}-{$subject_len}.php";

 

        if(!file_exists($cache_file)) {

            $cache_fwrite = true;

        } else {

            if($cache_time > 0) {

                $filetime = filemtime($cache_file);

                if($filetime && $filetime < (G5_SERVER_TIME - 3600 * $cache_time)) {

                    @unlink($cache_file);

                    $cache_fwrite = true;

                }

            }

 

            if(!$cache_fwrite)

                include($cache_file);

        }

    }

 

    if(!G5_USE_CACHE || $cache_fwrite) {

        $list = array();

        $sql_common = " from {$g5['board_new_table']} a, {$g5['board_table']} b, {$g5['group_table']} c where a.bo_table = b.bo_table and b.gr_id = c.gr_id and b.bo_use_search = 1 ";

        $sql_common .= " and b.gr_id = '$gr_id' ";

        // $sql_common .= " and a.bo_table not in ('aaaa', 'bbbb') ";

        $sql_common .= " and a.wr_id = a.wr_parent ";

        $sql_order = " order by a.bn_id desc ";

        $sql = " select a.*, b.bo_subject, c.gr_subject, c.gr_id {$sql_common} {$sql_order} limit 0, {$rows}";

		$result = sql_query($sql);

 

		for ($i=0; $row=sql_fetch_array($result); $i++) {

 

			$sql = " select * from {$g5['board_table']} where bo_table = '{$row['bo_table']}' ";

			$board = sql_fetch($sql);

			$gr_subject = $row['gr_subject'];

 

			$tmp_write_table = $g5['write_prefix'] . $row['bo_table'];

			$row2 = sql_fetch(" select * from {$tmp_write_table} where wr_id = '{$row['wr_id']}' ");

 

			$list[$i] = $row2;

			$list[$i] = get_list($row2, $board, $latest_skin_url, $subject_len);

			$list[$i]['bo_subject'] = $row['bo_subject'];

			$list[$i]['bo_table'] = $row['bo_table'];

		}

 

        if($cache_fwrite) {

            $handle = fopen($cache_file, 'w');

            $cache_content = "<?php\nif (!defined('_GNUBOARD_')) exit;\n\$gr_subject='".$gr_subject."';\n\$list=".var_export($list, true)."?>";

            fwrite($handle, $cache_content);

            fclose($handle);

        }

    }

 

    ob_start();

    include $latest_skin_path.'/latest.skin.php';

    $content = ob_get_contents();

    ob_end_clean();

 

    return $content;

}
