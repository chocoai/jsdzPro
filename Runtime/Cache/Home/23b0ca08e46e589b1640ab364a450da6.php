<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=yes">
<link href="/favicon.ico" rel="shortcut icon"/>
<title>开发者中心 - API开发文档 - <?php echo ($sitename); ?> - 支付技术服务商，让支付简单、专业、快捷！</title>
<link rel="stylesheet" href="<?php echo ($style); ?>css/qietu.css">
<link rel="stylesheet" type="text/css" href="<?php echo ($style); ?>css/iconfont.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo ($style); ?>css/animate.min.css"/>
<link rel="stylesheet" href="<?php echo ($style); ?>css/style.css">
<link rel="stylesheet" href="<?php echo ($style); ?>css/style_tr.css">
<link rel="stylesheet" href="<?php echo ($style); ?>css/responsive.css">

</head>

<body>
<div class="header  bj-3d7bf8">
    <div class="wrapper">
        <div class="logo">
            <a href="index.html"><img src="<?php echo ($logo); ?>"/></a>
        </div>
        <div class="nav-wrap">
            <div class="nav">
                <ul>
                    <li class="home_index">
                       <strong><a href="/">首页 </a></strong>
                    </li>
                    <li>
                        <strong><a href="#">产品中心<i class="iconfont icon-jiantou8"></i></a></strong>
                        <dl>
                            <dd><a href="<?php echo ($products); ?>#pro1">聚合收款</a></dd>
                            <dd><a href="<?php echo ($products); ?>#pro2">子商户系统</a></dd>
                            <dd><a href="<?php echo ($products); ?>#pro3">代付系统</a></dd>
                            <dd><a href="<?php echo ($products); ?>#pro4">二维码支付</a></dd>
                        </dl>
                    </li>
                    <!-- <li>
                        <strong><a href="/home/index/help.html">帮助中心</a></strong>
                    </li> -->
                    <li >
                        <strong><a href="#">开发者中心<i class="iconfont icon-jiantou8"></i></a></strong>
                        <dl>
                           <dd><a href="/demo">DEMO体验</a></dd>
                            <dd><a href="<?php echo ($document); ?>">API开发文档</a></dd>
                            <dd><a href="<?php echo ($sdk); ?>">SDK下载</a></dd>
                        </dl>
                    </li>
                    <!---->
                  <li>
                        <strong><a href="#">业务登陆<i class="iconfont icon-jiantou8"></i></a></strong>
                        <dl>
                           <dd><a href="<?php echo ($user_login); ?>">商户登录</a></dd>
                            <dd><a href="<?php echo ($agent_login); ?>">代理登陆</a></dd>
                            <dd><a href="<?php echo ($code_login); ?>">码商登陆</a></dd>
                        </dl>

                   </li>
                </ul>
            </div>
            <div class="btns">
                <ul>       
                 
                        <li class=" reg"><a href="<?php echo ($register); ?>">商户注册</a></li>
                                    </ul>
            </div>
        </div>
        <div class="gh"><a href="#"></a></div>
    </div>
</div>
<div class="banner">
	<div class="wrapper">
		<h2>API开发文档</h2>
		<p>-API documentation -</p>
	</div>
</div>
<div class="wrapper">
	<div class="docs">
		<div class="docs-nav">
			<ul>
				<li class="on" href="#doc1"><a href="#">API开发文档简介</a></li>
		
              
                 <li><a  href="#doc22">接入网关</a></li>
				<li><a  href="#doc66">签名算法</a></li>
				<li><a  href="#doc4">商户统一下单API</a></li>
				<li><a  href="#doc5">异步通知</a></li>
				<li><a  href="#doc6">订单查询</a></li>
				<li><a  href="#doc7">代付提交接口</a></li>
				<li><a  href="#doc8">代付查询接口</a></li>
				<li><a  href="#doc9">账户余额查询接口</a></li>
              <li><a  href="#doc77">渠道编码</a></li>
			</ul>
		</div>
		<div class="docs-main">
			<div class="docs-mod" id="doc1">
				<div class="docs-hd">
					API开发文档简介
				</div>
				<div class="docs-bd">
					本文阅读对象：使用 <?php echo ($sitename); ?> 商户自服务系统的技术架构师、研发工程师、系统运维工程师。通过本文档，商户可了解 <?php echo ($sitename); ?> 接入的技术、接入的产品业务、接入的流程、接入规范等信息，以便于商户顺利完成接入工作。
				</div>
			</div>

			
<div class="docs-mod"  id="doc22">
				<div class="docs-hd">
					接入网关
				</div>
				<div class="docs-bd">
										请登录商户中心，API管理 开发文档中 查看网关地址和API对接参数。
									</div>
			</div>


			

<div class="docs-mod" id="doc4">
				<div class="docs-hd">
					统一下单接口
				</div>
				<div class="docs-bd">
					<div class="docs-sub">
						提交方式：POST
					</div>
					<div class="docs-sub">
						地址： 接入网关/Pay_Index.html
					</div>
					<table>
						<thead>
							<tr>
								<th>参数名称</th>
								<th style="text-align: left;">参数含义</th>
								<th style="text-align: left;">是否必填</th>
								<th style="text-align: left;">参与签名</th><th style="text-align: left;">参数说明</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td>pay_memberid</td>
							<td style="text-align: left;">商户号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">平台分配商户号</td>
						</tr>
						<tr>
							<td>pay_orderid</td>
							<td style="text-align: left;">订单号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">上送订单号唯一, 字符长度20</td>
						</tr>
						<tr>
							<td>pay_applydate</td>
							<td style="text-align: left;">提交时间</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">时间格式：2016-12-26 18:18:18</td>
						</tr>
						<tr>
							<td>pay_bankcode</td>
							<td style="text-align: left;">银行编码</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">在商户中心查询</td>
						</tr>
						<tr>
							<td>pay_notifyurl</td>
							<td style="text-align: left;">服务端通知</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">服务端返回地址.（POST返回数据）</td>
						</tr>
						<tr>
							<td>pay_callbackurl</td>
							<td style="text-align: left;">页面跳转通知</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">页面跳转返回地址（POST返回数据）</td>
						</tr>
						<tr>
							<td>pay_amount</td>
							<td style="text-align: left;">订单金额</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">单位：元</td>
						</tr>
						<tr>
							<td>pay_md5sign</td>
							<td style="text-align: left;">MD5签名</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">请查看签名算法</td>
						</tr>
						<tr>
							<td>pay_productname</td>
							<td style="text-align: left;">商品名称</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>pay_productnum</td>
							<td style="text-align: left;">商户品数量</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>pay_productdesc</td>
							<td style="text-align: left;">商品描述</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>pay_producturl</td>
							<td style="text-align: left;">商户链接地址</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>
					</tbody>
					</table>
				 </div>
			</div>
			<div class="docs-mod" id="doc5">
				<div class="docs-hd">
					异步通知
				</div>
				<div class="docs-bd">
					<div class="docs-sub">
						提交方式：POST
					</div>
					<div class="docs-sub">
						接收到服务器点对点通讯时，在页面输出“<span style="color:red">OK</span>”（ 没有双引号，OK 两个字母大写 ) ，否则会重复5次发送点对点通知.
					</div>
					<table>
						<thead>
							<tr>
								<th>参数名称</th>
								<th style="text-align: left;">参数含义</th>
								<th style="text-align: left;">是否必填</th>
								<th style="text-align: left;">参与签名</th><th style="text-align: left;">参数说明</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td>memberid</td>
							<td style="text-align: left;">商户编号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">平台分配商户号</td>
						</tr>
						<tr>
							<td>orderid</td>
							<td style="text-align: left;">订单号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">上送订单号唯一, 字符长度20</td>
						</tr>
						<tr>
							<td>amount</td>
							<td style="text-align: left;">订单金额</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>transaction_id</td>
							<td style="text-align: left;">交易流水号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
                      <tr>
							<td>datetime</td>
							<td style="text-align: left;">交易时间</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>returncode</td>
							<td style="text-align: left;">交易状态</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">00表示成功，其它表示失败</td>
						</tr>
						<tr>
							<td>attach</td>
							<td style="text-align: left;">扩展返回</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">商户附加数据返回</td>
						</tr>
						<tr>
							<td>sign</td>
							<td style="text-align: left;">MD5签名</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>				
					</tbody>
					</table>
				 </div>
			</div>
		
			<div class="docs-mod" id="doc6">
				<div class="docs-hd">
					订单查询接口
				</div>
				<div class="docs-bd">
					<div class="docs-sub">
						提交方式：POST
					</div>
					<div class="docs-sub">
						地址： 接入网关/Pay_Trade_query.html
					</div>
					<table>
						<thead>
							<tr>
								<th>参数名称</th>
								<th style="text-align: left;">参数含义</th>
								<th style="text-align: left;">是否必填</th>
								<th style="text-align: left;">参与签名</th><th style="text-align: left;">参数说明</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td>pay_memberid</td>
							<td style="text-align: left;">商户编号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>pay_orderid</td>
							<td style="text-align: left;">商户订单号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>					
						<tr>
							<td>pay_md5sign</td>
							<td style="text-align: left;">MD5签名</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>					
					</tbody>
					</table>
					<div class="docs-sub">
						返回值
					</div>
					<table>
						<thead>
							<tr>
								<th>参数名称</th>
								<th style="text-align: left;">参数含义</th>
								<th style="text-align: left;">是否必填</th>
								<th style="text-align: left;">参与签名</th><th style="text-align: left;">参数说明</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td>memberid</td>
							<td style="text-align: left;">商户编号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>	
						<tr>
							<td>returncode</td>
							<td style="text-align: left;">请求状态</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">00表示成功，其它表示失败</td>
						</tr>							
						<tr>
							<td>data</td>
							<td style="text-align: left;">订单信息（数据类型：集合）</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>	
						<tr>
							<td>sign</td>
							<td style="text-align: left;">MD5签名</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>											
					</tbody>
					</table>
					<div class="docs-sub">
						返回值data参数
					</div>
					<table>
						<thead>
							<tr>
								<th>参数名称</th>
								<th style="text-align: left;">参数含义</th>
								<th style="text-align: left;">参数说明</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td>orderid</td>
							<td style="text-align: left;">商户订单号</td>			
							<td style="text-align: left;"></td>
						</tr>	
							<tr>
							<td>transaction_id</td>
							<td style="text-align: left;">平台订单号</td>			
							<td style="text-align: left;"></td>
						</tr>							
						<tr>
							<td>amount</td>
							<td style="text-align: left;">订单金额</td>						
							<td style="text-align: left;">单位：元</td>
						</tr>	
						<tr>
							<td>time_end</td>
							<td style="text-align: left;">支付成功时间</td>					
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>trade_state</td>
							<td style="text-align: left;">支付状态</td>					
							<td style="text-align: left;">SUCCESS：支付成功，NOTPAY：未支付</td>
						</tr>						
					</tbody>
					</table>
				 </div>
			</div>
			
			<div class="docs-mod" id="doc7">
				<div class="docs-hd">
					代付提交接口
				</div>
				<div class="docs-bd">
					<div class="docs-sub">
						提交方式：POST
					</div>
					<div class="docs-sub">
						提交地址：网关地址+/Payment_Dfpay_add.html
					</div>
					<table>
						<thead>
							<tr>
								<th>参数名称</th>
								<th style="text-align: left;">参数含义</th>
								<th style="text-align: left;">是否必填</th>
								<th style="text-align: left;">参与签名</th><th style="text-align: left;">参数说明</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td>mchid</td>
							<td style="text-align: left;">商户编号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">平台分配商户号</td>
						</tr>
						<tr>
							<td>out_trade_no</td>
							<td style="text-align: left;">商户订单号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">保证唯一值</td>
						</tr>
						<tr>
							<td>money</td>
							<td style="text-align: left;">订单金额</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">单位：元</td>
						</tr>
						<tr>
							<td>bankname</td>
							<td style="text-align: left;">开户行名称</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>subbranch</td>
							<td style="text-align: left;">支行名称</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>accountname</td>
							<td style="text-align: left;">开户名</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>cardnumber</td>
							<td style="text-align: left;">银行卡号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>province</td>
							<td style="text-align: left;">省份</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>city</td>
							<td style="text-align: left;">城市</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>extends</td>
							<td style="text-align: left;">附加字段</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>sign</td>
							<td style="text-align: left;">MD5签名</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>				
					</tbody>
					</table>
					<div class="docs-sub" style="color:red">
						注：extends字段具体需要上送哪些字段以及字段的含义，对接时请咨询平台方，如果不需要扩展字段则不传。不为空时，格式：先转化为JSON，接着进行Base64加密
					</div>
                  <div class="docs-sub">
						例如：扩展字段为phone和idno，extends[phone]=13800138000，extends[idno]=111111111111111111。首先将extends转化为JSON格式得到{"phone":"13800138000","idno":"111111111111111111"}，然后将此JSON字符串进行base64加密得到eyJwaG9uZSI6IjEzODAwMTM4MDAwIiwiaWRubyI6IjExMTExMTExMTExMTExMTExMSJ9，最终得到extends=eyJwaG9uZSI6IjEzODAwMTM4MDAwIiwiaWRubyI6IjExMTExMTExMTExMTExMTExMSJ9。
					</div>

					<div class="docs-sub">
						返回值
					</div>
					<table>
						<thead>
							<tr>
								<th>参数名称</th>
								<th style="text-align: left;">参数含义</th>
								<th style="text-align: left;">是否必填</th>
								<th style="text-align: left;">参与签名</th><th style="text-align: left;">参数说明</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td>status</td>
							<td style="text-align: left;">状态</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">成功:success 失败：error（不代表业务成功）</td>
						</tr>	
						<tr>
							<td>msg</td>
							<td style="text-align: left;">状态描述</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>							
						<tr>
							<td>transaction_id</td>
							<td style="text-align: left;">平台流水号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">成功时返回</td>
						</tr>																	
					</tbody>
					</table>
				 </div>
			</div>
			<div class="docs-mod" id="doc8">
				<div class="docs-hd">
					代付查询接口
				</div>
				<div class="docs-bd">
					<div class="docs-sub">
						提交方式：POST
					</div>
					<div class="docs-sub">
						提交地址：网关地址+/Payment_Dfpay_query.html
					</div>
					<table>
						<thead>
							<tr>
								<th>参数名称</th>
								<th style="text-align: left;">参数含义</th>
								<th style="text-align: left;">是否必填</th>
								<th style="text-align: left;">参与签名</th><th style="text-align: left;">参数说明</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td>out_trade_no</td>
							<td style="text-align: left;">商户订单号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>mchid</td>
							<td style="text-align: left;">商户号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>pay_md5sign</td>
							<td style="text-align: left;">签名</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>
						</tbody>
					</table>	
					<div class="docs-sub">
						返回值
					</div>
					<table>
						<thead>
							<tr>
								<th>参数名称</th>
								<th style="text-align: left;">参数含义</th>
								<th style="text-align: left;">是否必填</th>
								<th style="text-align: left;">参与签名</th><th style="text-align: left;">参数说明</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td>status</td>
							<td style="text-align: left;">状态</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">success：请求成功（不代表业务成功），error：请求失败</td>
						</tr>
						<tr>
							<td>msg</td>
							<td style="text-align: left;">状态描述</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>mchid</td>
							<td style="text-align: left;">商户号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">status=success时返回</td>
						</tr>
						<tr>
							<td>out_trade_no</td>
							<td style="text-align: left;">商户订单号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">status=success时返回</td>
						</tr>
						<tr>
							<td>amount</td>
							<td style="text-align: left;">金额</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">status=success时返回</td>
						</tr>
						<tr>
							<td>transaction_id</td>
							<td style="text-align: left;">平台流水号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">status=success时返回</td>
						</tr>
						<tr>
							<td>refCode</td>
							<td style="text-align: left;">业务状态</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">status=success时返回</td>
						</tr>
						<tr>
							<td>refMsg</td>
							<td style="text-align: left;">业务描述</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">status=success时返回</td>
						</tr>
						<tr>
							<td>success_time</td>
							<td style="text-align: left;">成功时间</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">status=success，refCode=1时返回</td>
						</tr>				
						<tr>
							<td>sign</td>
							<td style="text-align: left;">MD5签名</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>				
					</tbody>
					</table>
					<div class="docs-sub">
						refCode返回值
					</div>
					<table>
						<thead>
							<tr>
								<th>返回值</th>
								<th style="text-align: left;">含义</th>					
							</tr>
						</thead>
					<tbody>
						<tr>
							<td style="text-align: left;">1</td>
							<td style="text-align: left;">成功</td>
						</tr>	
						<tr>
							<td style="text-align: left;">2</td>
							<td style="text-align: left;">失败</td>
						</tr>
						<tr>
							<td style="text-align: left;">3</td>
							<td style="text-align: left;">处理中</td>			
						</tr>
						<tr>
							<td style="text-align: left;">4</td>
							<td style="text-align: left;">待处理</td>			
						</tr>
						<tr>
							<td style="text-align: left;">5</td>
							<td style="text-align: left;">审核驳回</td>		
						</tr>
						<tr>
							<td style="text-align: left;">6</td>
							<td style="text-align: left;">待审核</td>		
						</tr>
						<tr>
							<td style="text-align: left;">7</td>
							<td style="text-align: left;">	交易不存在</td>			
						</tr>
						<tr>
							<td style="text-align: left;">8</td>
							<td style="text-align: left;">未知状态</td>			
						</tr>																
					</tbody>
					</table>
					<div class="docs-sub">
						注：当status=success和refCode=1同时成立时才表示转账成功
					</div>
				 </div>
			</div>
                  
                  
                  <div class="docs-mod"  id="doc66">
				<div class="docs-hd">
					签名算法
				</div>
				<div class="docs-bd">

					<div>签名生成的通用步骤如下：</div>

					<div class="pp">
						第一步，设所有发送或者接收到的数据为集合M，将集合M内非空参数值的参数按照参数名ASCII码从小到大排序（字典序），使用URL键值对的格式（即key1=value1&key2=value2…）拼接成字符串。
					 	</div>

					<div class="pp">
						第二步，在stringA最后拼接上应用key得到stringSignTemp字符串，并对stringSignTemp进行MD5运算，再将得到的字符串所有字符转换为大写，得到sign值signValue。

					</div>

					<div class="pp">

						stringSignTemp="pay_amount=pay_amount&pay_applydate=pay_applydate&pay_bankcode=pay_bankcode&pay_callbackurl=pay_callbackurl&pay_memberid=pay_memberid&pay_notifyurl=pay_notifyurl&pay_orderid=pay_orderid&key=key"
						sign=MD5(stringSignTemp).toUpperCase()


					</div>
				</div>
			</div>
			<div class="docs-mod" id="doc9">
				<div class="docs-hd">
					账户余额查询接口
				</div>
				<div class="docs-bd">
					<div class="docs-sub">
						提交方式：POST
					</div>
					<div class="docs-sub">
						接口地址：网关地址+/Payment_Dfpay_balance.html
					</div>
					<table>
						<thead>
							<tr>
								<th>参数名称</th>
								<th style="text-align: left;">参数含义</th>
								<th style="text-align: left;">是否必填</th>
								<th style="text-align: left;">参与签名</th><th style="text-align: left;">参数说明</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td>mchid</td>
							<td style="text-align: left;">商户编号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">平台分配商户号</td>
						</tr>					
						<tr>
							<td>pay_md5sign</td>
							<td style="text-align: left;">MD5签名</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>				
					</tbody>
					</table>
					<div class="docs-sub">
						返回值
					</div>
					<table>
						<thead>
							<tr>
								<th>参数名称</th>
								<th style="text-align: left;">参数含义</th>
								<th style="text-align: left;">是否必填</th>
								<th style="text-align: left;">参与签名</th><th style="text-align: left;">参数说明</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td>status</td>
							<td style="text-align: left;">状态</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">success:请求成功，error：请求失败</td>
						</tr>					
						<tr>
							<td>msg</td>
							<td style="text-align: left;">状态描述</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;"></td>
						</tr>
						<tr>
							<td>mchid</td>
							<td style="text-align: left;">商户号</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">status=success时返回</td>
						</tr>
						<tr>
							<td>balance</td>
							<td style="text-align: left;">可提现余额</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">status=success时返回</td>
						</tr>
						<tr>
							<td>blockedbalance</td>
							<td style="text-align: left;">冻结余额</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">status=success时返回</td>
							<td style="text-align: left;"></td>
						</tr>	
						<tr>
							<td>pay_md5sign</td>
							<td style="text-align: left;">MD5签名</td>
							<td style="text-align: left;">是</td>
							<td style="text-align: left;">否</td>
							<td style="text-align: left;"></td>
						</tr>						
					</tbody>
					</table>
				 </div>
			</div>

                  
                  <div class="docs-mod"  id="doc77">
				<div class="docs-hd">
					渠道编码
				</div>
				<div class="docs-bd">
											请登录商户中心，API管理 通道费率中 查看所属应用的支付通道编码。
					

				</div>
			</div>

                  
                  
		</div>
	</div>

	<style>

		.docs-bd div.pp{
			margin-bottom: 8px;
		}

		.docs-bd th{
			border:#dcdcdc solid 1px;
			padding: 5px 10px;
			font-weight: bold;

		}


		.docs-bd table{
			border-collapse:collapse;
			width:100%;

		}
		.docs-bd table tr td{
			border:#dcdcdc solid 1px;
			padding: 5px 10px;

		}
	</style>
</div>

<div class="footer">
    <div class="wrapper">
        <dl class="s">
            <dt>联系我们</dt>
            <dd><a href="#about2">联系方式</a></dd>
            <dd><img src="<?php echo ($logo); ?>" style="width: 120px" /></dd>
        </dl>
        <dl>
            <dt>产品项目</dt>
            <dd><a href="<?php echo ($products); ?>#pro1">聚合收款</a></dd>
            <dd><a href="<?php echo ($products); ?>#pro2">子商户系统</a></dd>
            <dd><a href="<?php echo ($products); ?>#pro3">代付系统</a></dd>
        </dl>
        <dl>
            <dt>关于公司</dt>
            <dd><a href="<?php echo ($about); ?>">关于我们</a></dd>
            <dd><a href="javascript:openKefuLink();">接口合作</a></dd>
            <dd><a href="javascript:openKefuLink();">流量合作</a></dd>
        </dl>
        <dl>
            <dt>开发者</dt>
            <dd><a href="/demo">DEMO体验</a></dd>
            <dd><a href="<?php echo ($document); ?>">API开发文档</a></dd>
            <dd><a href="<?php echo ($sdk); ?>">SDK下载</a></dd>
        </dl>
        <dl class="s">
            <dt>扫一扫</dt>
            <dd><img src="<?php echo ($style); ?>picture/mobile.png" style="width: 109px;"/></dd>
        </dl>
    </div>
</div>
<div class="copyright">
    <div class="wrapper">
        Copyright © 2018 <?php echo ($sitename); ?> All rights reserved. 版权所有
    </div>
</div>

<script type="text/javascript">
function openKefuLink()
{
    window.open("http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($qq); ?>&site=qq&menu=yes",'_blank');
}

</script>

 
<script type="text/javascript" src="<?php echo ($style); ?>js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo ($style); ?>js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo ($style); ?>js/script.js"></script>
<script type="text/javascript">
	$(function() {
	  $('.pro-sys-l li').click(function(){
			$(this).addClass('on').siblings().removeClass('on');
			$('.pro-sys-r').hide().eq($(this).index()).show();
			return false
		})
	})
</script>
</body>
</html>