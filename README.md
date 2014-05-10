###简介

个人写的一些小脚本，实现一些简单功能。充当技能练习。

包含：

- dateFormat 

    Javascript时间格式化插件。格式化一个本地时间，支持格式化指定Unix时间戳。

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

暂未做任何改进　2014-5-10
