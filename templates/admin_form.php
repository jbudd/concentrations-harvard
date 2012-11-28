<!DOCTYPE html>
<html>
    <head>
        <script>
            function addReq(str)
            {
                var xmlhttp;    
                if (str=="")
                {
                    document.getElementById("txtHint").innerHTML="";
                    return;
                }
                if (window.XMLHttpRequest)
                {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {
                    // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("reqList").innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","getcustomer.asp?q="+str,true);
                xmlhttp.send();
            }
        </script>
    </head>
    
    <body>
        <form action="admin.php" method="post">
            <fieldset>
                <div class="control-group">
                    <input autofocus name="req" placeholder="Requierment" type="text"/>
                </div>
                <div class="control-group">
                    <button type="submit" class="btn">Add</button>
                </div>
            </fieldset>
        </form>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Requierments</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Requierment 1</td></tr>
                <tr><td>Requierment 2</td></tr>
                <tr><td>Requierment 3</td></tr>
            </tbody>
        </table>
        
        <button type="submit" class="btn">Done</button>
    </body>
</html>
