# blog
基于tp5+boostrap框架搭建的一个小网站（数据库在跟目录下），未全面完善    
本地测试步骤：  
1、环境工具phpstudy，启动进程，把整个项目放在phpstudy的WWW跟目录下，在菜单选择打开phpMyAdmin数据库连接，导入数据库  
2、web服务器配置：使用的是HBuilderX，找到设置"webServer.config"，配置url即可，本地写的是http://localhost：8080或者http://localhost，在public下的入口文件也要进行一致的配置define('SITE_URL', 'http://localhost/myblog/');   
3、数据库的连接：找到application下database.php，填写数据库登录用户名密码和数据库名（这个和登录数据库的信息是一致的）  
4、在入口文件运行即可浏览
