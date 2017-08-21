<?php

Route::any('/', 'AdminController@index'); // 首页
Route::any('login', 'LoginController@index'); // 登录
Route::any('logout', 'LoginController@logout'); // 退出
Route::any('register', 'RegisterController@index'); // 注册

Route::get('admin', 'AdminController@index'); // 后台首页
Route::any('admin/userList', 'AdminController@userList'); // 账号列表
Route::any('admin/addUser', 'AdminController@addUser'); // 添加账号
Route::any('admin/editUser', 'AdminController@editUser'); // 编辑账号
Route::post('admin/delUser', 'AdminController@delUser'); // 删除账号
Route::get('admin/nodeList', 'AdminController@nodeList'); // 节点列表
Route::any('admin/addNode', 'AdminController@addNode'); // 添加节点
Route::any('admin/editNode', 'AdminController@editNode'); // 编辑节点
Route::post('admin/delNode', 'AdminController@delNode'); // 删除节点
Route::get('admin/articleList', 'AdminController@articleList'); // 文章列表
Route::any('admin/addArticle', 'AdminController@addArticle'); // 添加文章
Route::any('admin/editArticle', 'AdminController@editArticle'); // 编辑文章
Route::post('admin/delArticle', 'AdminController@delArticle'); // 删除文章
Route::get('admin/inviteList', 'AdminController@inviteList'); // 邀请码列表
Route::post('admin/makeInvite', 'AdminController@makeInvite'); // 生成邀请码
Route::any('admin/config', 'AdminController@config'); // 配置列表
Route::any('admin/addConfig', 'AdminController@addConfig'); // 添加配置
Route::post('admin/delConfig', 'AdminController@delConfig'); // 删除配置
Route::post('admin/setDefaultConfig', 'AdminController@setDefaultConfig'); // 设置默认配置
Route::get('admin/trafficLog', 'AdminController@trafficLog'); // 流量日志
Route::any('admin/export', 'AdminController@export'); // 导出配置信息
Route::any('admin/convert', 'AdminController@convert'); // 格式转换
Route::any('admin/import', 'AdminController@import'); // 数据导入
Route::get('admin/monitor', 'AdminController@monitor'); // 流量监控
Route::any('admin/profile', 'AdminController@profile'); // 修改个人信息
Route::any('admin/analysis', 'AdminController@analysis'); // 日志分析
Route::any('admin/system', 'AdminController@system'); // 系统设置
Route::post('admin/setConfig', 'AdminController@setConfig'); // 设置某个配置项
Route::post('admin/setInviteNum', 'AdminController@setInviteNum'); // 可生成邀请码数
Route::post('admin/setWebsiteName', 'AdminController@setWebsiteName'); // 设置网站名称
Route::post('admin/setWebsiteUrl', 'AdminController@setWebsiteUrl'); // 设置网站地址
Route::post('admin/setResetPasswordTimes', 'AdminController@setResetPasswordTimes'); // 设置重置密码次数
Route::get('makePasswd', 'AdminController@makePasswd'); // 获取随机密码
Route::get('download', 'AdminController@download'); // 下载转换过的JSON配置

Route::any('user', 'UserController@index'); // 用户首页
Route::any('user/article', 'UserController@article'); // 文章详情
Route::any('user/nodeList', 'UserController@nodeList'); // 节点列表
Route::any('user/profile', 'UserController@profile'); // 修改个人信息
Route::any('user/trafficLog', 'UserController@trafficLog'); // 流量日志
Route::any('user/invite', 'UserController@invite'); // 邀请码
Route::any('user/makeInvite', 'UserController@makeInvite'); // 生成邀请码
Route::any('resetPassword', 'UserController@resetPassword'); // 重设密码
Route::any('reset/{token}', 'UserController@reset'); // 重设密码

