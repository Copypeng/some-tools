<?php
// 创建一个新cURL资源
$url='http://www.qq.com/';
$ch=curl_init();
$timeout=10;
// 设置URL和相应的选项
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
// 抓取URL
$page_content=curl_exec($ch);
// 关闭cURL资源
curl_close($ch);
// 正则匹配模式
$preg='/<a .*?href="(.*?)".*?>(.*?)<\/a>/is';
$file_name = 'result.txt';
// 开始匹配
preg_match_all($preg,$page_content,$matches);
//将所有链接以及内容写入文件
$fh = fopen($file_name, 'w');
for ($i=0; $i < count($matches[0]); $i++) {
	echo fwrite($fh, $matches[0][$i]."\n");
}
fclose($fh);
?>
