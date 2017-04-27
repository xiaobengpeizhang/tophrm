<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>查询</title>
  <!--引入boostrap库-->
  <link rel="stylesheet" type="" href="styles/bootstrap.min.css">
  <link rel="stylesheet" href="styles/bootstrap-table.css">
    <!--基本样式-->
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<!--引入jquery，bootstrap，bootstrap-table库-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<script src="js/bootstrap-table-zh-CN.js"></script>
<?php

//验证cookie
if(!isset($_COOKIE['username'])){
  echo '<h1>:(</h1><br>你还没有登录，请返回重新登录！';
  exit();
}

require 'includes/header.inc.php'
?>

<div class="panel-body" style="padding-bottom:0px;margin: 60px">
  <div class="panel panel-default">
    <div class="panel-heading">查询条件</div>
    <div class="panel-body">
      <form id="formSearch" class="form-horizontal">
        <div class="form-group" style="margin-top:15px">
          <label class="control-label col-sm-1" >项目</label>
          <div class="col-sm-3">
            <input type="text" class="form-control"  placeholder="填写你要查询的项目，如：姓名">
          </div>
          <label class="control-label col-sm-1" >条件</label>
          <div class="col-sm-3">
            <input type="text" class="form-control"  placeholder="填写你要查询的内容">
          </div>
          <div class="col-sm-4" style="text-align:left;">
            <button type="button" style="margin-left:50px" id="btn_query" class="btn btn-primary">查询</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div id="toolbar" class="btn-group">
    <button id="btn_add" type="button" class="btn btn-success">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>新增
    </button>
    <button id="btn_edit" type="button" class="btn btn-warning">
      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>修改
    </button>
    <button id="btn_delete" type="button" class="btn btn-danger">
      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>删除
    </button>
  </div>
  <table id="table" ></table>
</div>

<script src="js/lookup.inc.js"></script>

<?php
require 'includes/footer.inc.php'
?>
</body>
</html>