<head>
<style>
 .username-ok{color:#2FC332;}
 .username-taken{color:#D60202;}
 </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
 
 <link rel="stylesheet" href="Style.css">
 <script>

  function getResult()
  {
	  jQuery.ajax(
	  {
		  url: "backend-search.php",
		  data:'term='+$("#term").val(),
		  type: "POST",
		  success:function(data2)
		  {
			  $("#result").html(data2);
		  }
	  });
  }
  </script>
  </head>
  <body>
  <div id="msg"></div>
  <br>
  <input name="term" type="text" id="term" onkeyup="getResult()" placeholder= "Search Term..." />
  <div id="result"></div>
  </body>
		  