## SentCMS介绍
> SentCMS网站管理系统是南昌腾速科技有限公司倾力打造的一款简单易用的网站管理系统，SentCMS网站管理系统（下文简称SentCMS）继承了thinkphp5.0的优秀品质，秉承“大道至简”的设计理念。SnetCMS为网站建设而生，为网站建设减少90%的代码编写，只需前端设计师就可以设计出完美的网站，而如此完美的系统还是完全开源的。

## 安装

访问网址：http://网址/install

> 系统必须开启伪静态

## 交流讨论

> 点击链接加入群【SentCMS交流群】：http://jq.qq.com/?_wv=1027&k=2DXSKpe

## SentCMS特性包括：
* 全新的路由体系，完美的路由解决方案
* 全新的系统架构，采用thinkphp5.0内核框架
* 完善而健全的会员体系
* 健全的权限系统，权限细化到界面上的按钮和链接
* 漂亮的后台界面，后台界面采用世界领先的前端框架bootstrap，自适应的体验
* 简单易用的标签体系
* 便捷的文档系统，无需程序即可设计出完美的模型，做出完美的网站

下载最新版框架后，解压缩到web目录下面，可以看到初始的目录结构如下：
## 目录结构
~~~
├─addons                扩展插件目录
├─application           项目目录文件
│ ├─admin               网站后台模型
│ │ ├─controller
│ │ ├─static
│ │ ├─view
│ │ ├─config.php
│ ├─api                 API接口模型
│ │ ├─controller
│ │ ├─static
│ │ ├─view
│ │ ├─config.php
│ ├─common             COMMON公共模型，不可访问
│ │ ├─controller
│ │ ├─static
│ │ ├─view
│ │ ├─config.php
│ ├─index             前台模型
│ │ ├─controller
│ │ ├─static
│ │ ├─view
│ │ ├─config.php
│ ├─user              用户中心模型
│ │ ├─controller
│ │ ├─static
│ │ ├─view
│ │ ├─config.php
│ ├─common.php        公共函数库文件
│ ├─config.php        基础配置文件
│ ├─database.php      数据库配置文件
│ ├─route.php         路由配置文件
│ ├─tags.php          行为扩展配置文件
│ ├─ueditor.json      编辑配置文件
├─core                thinkphp框架目录
├─data                缓存以及备份目录
├─public         公共资源库
├─uploads        上传文件目录
├─.htaccess      Apache下伪静态文件
├─favicon.ico    ico图标
├─index.php      入口文件
├─README.md      系统介绍文件
~~~