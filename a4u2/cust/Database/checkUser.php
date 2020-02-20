<!DOCTYPE html>
<html>
<head> 
	<title>Check User</title>
</head>
<body>
	<h1>
User Availability Page 
</h1>
<form>
	User Name<input onblur="funObj()" id="un">
	<span id="sp1"></span>
	<br>	
	Mobile<input id="mb">

 </form>
</body>
<script type="text/javascript">

	function funObj()
	{
		vUN=document.getElementById('un');
		vSP=document.getElementById('sp1');
		vSP.innerHTML="<img src='a.gif' width='80px'>";
		txtUserName=vUN.value;
		  //alert(txtUserName);
		  //sleep(20);
 		 methodname="post";
		 pagename="checkdata.php?qun="+txtUserName;
	 	 obj =new XMLHttpRequest();	 
		 obj.open(methodname,pagename,true);
		 obj.send();
		 obj.onreadystatechange=function()
		{
			if(obj.readyState==4)
			{
				if(obj.responseText==0)
				{
					vSP.innerHTML="User Name Available";
					vSP.style.color="green";
				}
				else
				{
					vSP.innerHTML="User Name Already Exits";
					vSP.style.color="red";

					vUN.value="";
				}
			}
		}
	}
</script>
</html>