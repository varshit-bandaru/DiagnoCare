<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			.footer {
			  position: fixed;
			  left: 0;
			  bottom: 0;
			  width: 100%;
			  background-color: black;
			  color: white;
			  height:7%;
			  font-size: 1em;
			  text-align: center;
			  cursor: pointer;
		}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<form method="post" action="http://localhost/diagno/index.php/diagno/successful">
			<?php echo $test_lists; ?>
			<input  class="footer" type="submit" name=" checkout1" value="CheckOut" >
		</form>
	<script type="text/javascript">	
		function addnum(id)
		{
			var	a=id.split("_")
			var z=$("#add_"+a[1]).val()
			z=parseInt(z)+1
			$("#add_"+a[1]).val(z)
			$("#sub_"+a[1]).html(z)
		}
		function subnum(id)
		{
			var	a=id.split("_")
			var z=$("#add_"+a[1]).val()
			z=parseInt(z)-1
			$("#add_"+a[1]).val(z)
			$("#sub_"+a[1]).html(z)			
		}
	</script>
	</body>
</html>