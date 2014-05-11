###简介

个人写的一些小脚本，实现一些简单功能。充当技能练习。

包含：

- dateFormat 

    Javascript时间格式化插件。格式化一个本地时间，支持格式化指定Unix时间戳。
 
- myPin

    一个在页面上固定菜单或其他页面元素的Jquery插件，功能很强悍。

- mySlider

    一个简单强悍的Jquery幻灯片插件。

- 数据库固定时间(如每５分钟，每半小时)平均化处理语句


- php页面超链接采集脚本

    可以一次性采集某页面上所有超链接以及链接内容（文本，照片）

###dateFormat

调用方式：
````
dateFormat(format,[date]);
````
例如：
````
dateFormat('yyyy-MM-dd hh:mm:ss', '1298698667');  
````
输出： 2011-02-26 13:37:47
````
dateFormat('yyyy-MM-dd hh:mm:ss');
````
输出：2014-05-10 13:14:22 （本地当前时间）

支持的模式有：
````
支持的模式字母有： 
- y: 年
- M: 月份(1-12)
- d: 天(1-31)
- h: 小时(0-23)
- m: 分钟(0-59)
- s: 秒(0-59)
- S: 毫秒(0-999)
- q: 季度(1-4) 
````
###myPin
based on [jQuery.pin](https://github.com/webpop/jquery.pin)

[DEMO](http://webpop.github.io/jquery.pin/)

暂未做任何改进　2014-5-10

###mySlider

暂未完成

###数据库固定时间平均化处理
假如有以下结构的表

````
CREATE TABLE `yl_sensor_data` (

`id` int(10) NOT NULL AUTO_INCREMENT,

`data_timestamp` int(10) unsigned DEFAULT NULL,

`data_value` double DEFAULT NULL,

PRIMARY KEY (`id`)

) ENGINE=InnoDB;
````
````data_value```` 为某一数据源上传至数据库的数据点，````data_timestamp```` 为该数据点上传时间戳。

若需要对库中所有的数据统计每１０分钟的平均值。则操作如下：
````
SELECT  `data_timestamp` -  `data_timestamp` % ( 10 *60 ) , AVG(  `data_value` ) 
FROM  `yl_sensor_data` 
GROUP BY  `data_timestamp` -  `data_timestamp` % ( 10 *60 ) 
````

###php页面采集脚本

很简单，具体请看curl.php代码。示例为一次性采集腾讯首页所有超链接及其内容,写入.txt文件。