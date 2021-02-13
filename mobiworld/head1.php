<script>
function lightbg_clr() {
	$('#qu').val("");
	$('#textbox-clr').text("");
 	$('#search-layer').css({"width":"auto","height":"auto"});
	$('#livesearch').css({"display":"none"});	
	$("#qu").focus();
 };
 
function fx(str)
{
var s1=document.getElementById("qu").value;
var xmlhttp;
if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
	document.getElementById("search-layer").style.width="auto";
	document.getElementById("search-layer").style.height="auto";
	document.getElementById("livesearch").style.display="block";
	$('#textbox-clr').text("");
    return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
	document.getElementById("search-layer").style.width="100%";
	document.getElementById("search-layer").style.height="100%";
	document.getElementById("livesearch").style.display="block";
	$('#textbox-clr').text("X");
    }
  }
xmlhttp.open("GET","call_ajax.php?n="+s1,true);
xmlhttp.send();	
}
</script>         
 <style>
 .srbox{
	width:350px; 
	height:70px; 
	margin-left:3px;
	margin-top:15px; 
	}
.textbox{
	border-radius: 8px 0px 0px 8px;
	background-color:#fff;
	float:left;
	border:none;
	height:30px;
	padding:1px 12px;
	font-size:15px;
	line-height: 1.42857;
	color:#000;
	width:220px;
	
	}
.query-submit{
	border-radius: 0px 8px 8px 0px;
	cursor:pointer;
	background:#fbfbfb;
	width:85px;
	padding:1px 6px;
	float:left;
	border:none;
	 
	height:30px;
	}
.textbox-clr{
	cursor:pointer;
	background:#fff;
	width:20px; 
	height:30px;
	float:left;
	border:none;
	
	text-align:center;
	}
/***********************************/


/***********************************/

/***********************************/
#search-layer{
	position:absolute; 
	background:rgba(255,255,255,0.5); 
	z-index:9; 
	left:0px; 
	top:0px;
	}
/***********************************/
#livesearch{
	z-index:9999; 
	background:#fff;
	max-height:260px;
	overflow:auto; 
	width:250px;
	box-shadow:0px 2px 4px #444; 
	margin-left:1.2%;
	}
/***********************************/
.live-outer{
	width:250px; 
	height:60px;
	border-bottom:1px solid #ccc; 
	background:#fff;
	}
.live-outer:hover{
	background:#F3F3F3;
	}
.live-im{
	float:left;
	width:10%; 
	height:60px;
	}
.live-im img{
	position:relative;
	left:5px;
	top:3px;
	width:30px; 
	height:90%;
	}
.live-product-det{
	float:left; 
	width:90%; 
	height:60px;
	}
.live-product-name{
	width:100%; 
	height:22px; 
	margin-top:4px;
	margin-left:18px;
	
	}
.live-product-name p{
	margin:0px;
	color:#333;
	text-shadow: 1px 1px 1px #DDDDDD;
	font-size:13px;
	}
.live-product-price{
	width:100%;
	height:25px;
	}
.live-product-price-text{
	float:left; 
	width:50%;
	}
.live-product-price-text p{
	margin:0px;
	font-size:12px;
	margin-left:18px;
	}
.link-p-colr{
	color:#333;
	}
 </style>

		<div class="srbox">
			
			  <div class="bk">
              	<input type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" class="textbox" placeholder="What are you looking for ?" tabindex="1">
				<button type="button" class="textbox-clr" id="textbox-clr" onClick="lightbg_clr()"><span class="fa fa-close"></span></button>
				<button type="submit" class="query-submit" tabindex="2"><i class="fa fa-search" style="color:#727272; font-size:20px"></i></button>
		    	<div id="livesearch"></div>
   	  		  </div>
			
		</div>
    
	
    
