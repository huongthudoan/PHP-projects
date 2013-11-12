<html>
<style type="text/css">

        .box1 {margin-left:80px; background-color:#efffff;
                width:60%; height: 60%;margin-top:120px;
                font-family:sans-serif; position: absolute;
                color: #4c4646; padding-left:160px; padding-top:40px}
        .box2 {margin-left:550px; background-color:#efffff;
                width:30%; height: 60%;margin-top:120px;
                font-family:sans-serif; position: absolute
                color: #4c4646}

        a.nodec {text-decoration:none; color:white}
        .menustat {float:left;color:white;
                  border 2px solid #225599;
                  text-align: center;font-family:sans-serif;
                  width:20%;
                  background-color: #225599}

        div.menu {float:left;color:white;
                  border 1px solid #225599;
                  text-align: center;font-family:sans-serif;
                  width:20%;
                  background-color: #225599}
        div.menu:hover a {display:block}
        div.menu a {display:none;
                    border-top: 1px solid #225559;
                    background-color:#eeffff;
                    width: 100px;
                    text-align:center;font-family:sans-serif;
                    text-decoration:none;
                    color:black}
        div.menu a:hover {background-color: #cfeeff}
</style>
<body bgcolor="ffffcc">
<br>
<img src="logo1.jpg">
<br>
<br>
<img src="pic1.jpg" height="150" width="100%">
<div class="menustat"><a class="nodec"
href="http://host/project2.html">Home</a></div>
<div class="menu"> About us
     <a href="http://host/glance.html">At a glance</a>
        <a href="http://host/management.html">Management</a>
        <a href="http://host/careers.html">Careers</a>
        <a href="http://host/news.html">News</a>
</div>
<div class="menu"> Products
        <a href="http://host/product1.html">Product1</a>
        <a href="http://host/product2.html">Product2</a>
        <a href="http://host/product3.html">Product3</a>
</div>
<div class="menustat"><a class="nodec" href="http://host/support.html">Support</a></div>
<div class="menustat"><a class="nodec" href="http://host/contact.html">Contact us</a></div>
<br>
<div class="box1">
<?php
$name = $_POST['searchname'];
//$name = "John+Smith";  
//$name = ereg_replace('+', ' ', $name);
//print "$name";
if($dbc = mysql_connect('host', 'hdoan', 'hdoanmysql'))
        {
        print "";
        
        @mysql_select_db('Info1');
        
        $query = "select * from Person2 where name='$name'";
        $result = mysql_query($query);
        $numrows = @mysql_num_rows($result);
        if ($numrows > 0) {

        print "<h2>Here is your request info:</h2>";
        print "<table border='1'><tr bgcolor='ff9999'>";
        print "<td><center><b>Name</b></center></td><td><center><b>Address</b></center></td><td><center><b>City</b></center></td></tr>";

        while($row = mysql_fetch_array($result)) {
                print "<tr><td>{$row['Name']}</td><td>{$row['Address']}</td><td>{$row['City']}</td><br>";
        }

        print "</table>";
         
        }
                if ($numrows == 0)
                print "<h2> Record is not found!</h2>";
        
        mysql_close();
        }
        else {
        print "Not connected!!";
        }
        
?>      
</div>  

</body> 
</html>         