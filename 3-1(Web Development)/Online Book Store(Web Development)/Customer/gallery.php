<!DOCTYPE html>

<html>
   
   <head>
        
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
		<style>
		   
		    .row 
		    {
			   display: -ms-flexbox;
               display: flex;
               -ms-flex-wrap: wrap;
               flex-wrap: wrap;
               padding: 0 4px;
			   
            }
		 
			/* Create two equal columns that sits next to each other */
            .column 
			{
				-ms-flex: 25%;
                flex: 25%;
				max-width: 25%;
                padding: 0 4px;

            }

            .column img 
			{
				margin-top: 8px;
                vertical-align: middle;
				width: 100%;
				height:250px;
            }

            /* Responsive layout - makes a two column-layout instead of four columns */
            @media screen and (max-width: 800px) 
			{
				.column 
				{
					-ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
                }
            }

            /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) 
			{
				.column 
				{
					-ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
				}
			}

		</style>
	
	</head>
	
	<body>
	    
		
	
	    <div class="row"> 
             
			<div class="column">
               <a target="_blank" href="image/1.jpg"><img src="a4.jpg" style="width:100%"></a>
               <a target="_blank" href="image/2.jpg"><img src="a5.jpg" style="width:100%"></a>
               <a target="_blank" href="image/3.jpg"><img src="a7.jpg" style="width:100%"></a>
               <a target="_blank" href="image/4.jpeg"><img src="a8.jpg" style="width:100%"></a>
            </div>
			
			<div class="column">
               
               <a target="_blank" href="image/5.jpeg"><img src="p.jpg" style="width:100%"></a>
               <a target="_blank" href="image/6.jpeg"><img src="q.jpg" style="width:100%"></a>
               <a target="_blank" href="image/7.jpeg"><img src="t.jpg" style="width:100%"></a>
               <a target="_blank" href="image/8.jpeg"><img src="s.jpg" style="width:100%"></a>
            </div>
			
			<div class="column">
               
               <a target="_blank" href="image/9.jpeg"><img src="13.jpg" style="width:100%"></a>
               <a target="_blank" href="image/10.jpeg"><img src="a12.jpg" style="width:100%"></a>
               <a target="_blank" href="image/11.jpeg"><img src="a10.jpg" style="width:100%"></a>
               <a target="_blank" href="image/12.jpeg"><img src="a11.jpg" style="width:100%"></a>
            </div>
			
			<!--<div class="column">
               
			   <a target="_blank" href="image/13.jpeg"><img src="g.jpeg" style="width:100%"></a>
               <a target="_blank" href="image/14.jpeg"><img src="3.jpeg" style="width:100%"></a>
			   <a target="_blank" href="image/15.jpg"><img src="1.jpeg" style="width:100%"></a>
			   <a target="_blank" href="image/16.jpeg"><img src="m.jpeg" style="width:100%"></a>
    
            </div>-->
  
        </div>
	    
		
	</body>
	
</html>
