<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 0, 300 ],
         slide: function (event, ui) {
         	$("#amount").val( "값" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );

   		 $( "#amount" ).val( "값" + $( "#slider-range" ).slider( "values", 0 ) +" - $" + $( "#slider-range" ).slider( "values", 1 ));

            var value1 = $("#slider-range").slider("values", 0);
            var value2 = $("#slider-range").slider("values", 1);
            
            
        }
    });
});
  </script>
</head>
<body>
 <form method="POST" action="testtest.php">
        
		<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;" name="slide-value"/><br/>
		<div id="slider-range" style="width: 500px;"></div> 
   
        <input type="submit" name="submit"/>

    </form>


	<?php
	
	 $value=(float)$_POST['value1'];
	 echo $value;
	?>
	</div>

</body>
</html>
