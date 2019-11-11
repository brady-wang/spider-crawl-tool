<?php
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$request_url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$accept_languages = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$accept_encoding = $_SERVER['HTTP_ACCEPT_ENCODING'];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="color:red;margin-top:50px;margin-bottom:20px;">
            <ul>
                <li>User Agent：请求的代理信息</li>
                <li> IP：请求的IP地址</li>
                <li> Request URL：请求的访问路由</li>
                <li> Accept Languages：请求所支持的语言</li>
                <li>  Accept Encoding：请求所支持的编码格式</li>
            </ul>
        </div>
        <div class="col-md-12">
            <form>
                <div class="form-group">
                    <label for="User-Agent">User Agent</label>
                    <input type="txt" class="form-control" id="User-Agent" placeholder="<?php echo $user_agent ; ?>">
                </div>
                <div class="form-group">
                    <label for="IP">IP</label>
                    <input type="txt" class="form-control" id="IP" placeholder="<?php echo $ip; ?>">
                </div>

                <div class="form-group">
                    <label for="Request-URL">Request URL</label>
                    <input type="txt" class="form-control" id="Request-URL" placeholder="<?php echo $request_url; ?>">
                </div>

                <div class="form-group">
                    <label for="Accept-Languages">Accept Languages</label>
                    <input type="txt" class="form-control" id="Accept-Languages" placeholder="<?php echo $accept_languages; ?>">
                </div>

                <div class="form-group">
                    <label for="Accept-Encoding">Accept Encoding</label>
                    <input type="txt" class="form-control" id="Accept-Encoding" placeholder="<?php echo $accept_encoding; ?>">
                </div>


            </form>
        </div>
    </div>
</div>



<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>

