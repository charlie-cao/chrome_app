<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="mongodb gui">
        <meta name="author" content="charlie">
        <!-- Le styles -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Le fav and touch icons -->
    </head>

    <body>
        <div class="container-fluid"><h1>Mongodb GUI</h1></div>
        
        <div class="container-fluid">
            <div class="span3">
                <ul>
                    <li>DB1</li>
                    <li>DB1</li>
                    <li> Coll1</li>
                    <li> Coll1</li>
                    <li> Coll1</li>
                    <li>DB1</li>
                    <li>DB1</li>
                </ul>
                <button class="btn">Add DB</button>
            </div>
            <div class="span9">
                <div class="well well-small">表信息 或者 DB信息</div>
                <div class="well well-small">数据栏</div>
                
            </div>
        </div>
        <script>
    var db = window.openDatabase("mydata", "1.0","数据库描述",20000);
//window.openDatabase("数据库名字", "版本","数据库描述",数据库大小);
if(db)  
     alert("新建数据库成功！");
 
 db.transaction(function(tx) {
 tx.executeSql("CREATE TABLE test (id int UNIQUE, mytitle TEXT, timestamp REAL)");
});
var mongodb = require('mongodb');
console.log(mongodb);
    </script>
    </body>
</html>