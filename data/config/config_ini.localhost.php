<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2023 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Tue, 14 Nov 2023 16:29:21 GMT
 */

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$sys_info['disable_classes'] = [];
$sys_info['disable_functions'] = [];
$sys_info['ini_set_support'] = true;
$sys_info['supports_rewrite'] = 'rewrite_mode_apache';
$sys_info['zlib_support'] = true;
$sys_info['mb_support'] = true;
$sys_info['iconv_support'] = true;
$sys_info['allowed_set_time_limit'] = true;
$sys_info['os'] = 'DARWIN';
$sys_info['fileuploads_support'] = true;
$sys_info['curl_support'] = true;
$sys_info['ftp_support'] = true;
$sys_info['string_handler'] = 'mb';
$sys_info['support_cache'] = [];
$sys_info['php_compress_methods'] = ['deflate' => 'gzdeflate', 'gzip' => 'gzencode', 'x-gzip' => 'gzencode', 'compress' => 'gzcompress', 'x-compress' => 'gzcompress'];
$sys_info['server_headers'] = ['server' => 'Apache/2.4.56 (Unix) OpenSSL/1.1.1t PHP/8.0.28 mod_perl/2.0.12 Perl/v5.34.1','x-powered-by' => 'PHP/8.0.28','x-is-http' => '1','content-length' => '0','content-type' => 'text/html; charset=UTF-8'];
$sys_info['http_only'] = false;
$sys_info['https_only'] = false;
$sys_info['ip6_support'] = true;

ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
ini_set('log_errors', '0');
ini_set('session.cookie_httponly', '1');
ini_set('session.gc_maxlifetime', '3600');
ini_set('user_agent', 'NV4');

$iniSaveTime = 1699979361;
