<!-- HEAD BLOCK ================================================= -->
<?php include "inc/header.php"	?>
<!-- /HEAD BLOCK ================================================= -->
	
			
<script>
(function() { 
     function handlePageLoad() {
       var endpointMatcher = new RegExp("[\\?\\&]endpoint=([^&#]*)");
       document.getElementById('prechatForm').setAttribute('action',
       decodeURIComponent(endpointMatcher.exec(document.location.search)[1]));
       } 
       if (window.addEventListener) {
         window.addEventListener('load', handlePageLoad, false);
       } else { 
         window.attachEvent('onload', handlePageLoad, false);
       }
	}
	)(); 
</script>
<body onload="initSubmit()">
    <div class="container">
<!-- NAVBAR BLOCK ================================================ -->
			<?php include "inc/navbar.php" ?>
			<!-- /NAVBAR BLOCK ================================================ -->

<h1>One moment <?php echo $_SESSION["1stBank_FirstName"]; ?></h1> 


<div>
<form method='post' id='prechatForm'> 


<input type="hidden" name="liveagent.prechat.query:Email" value="Contact,Contact.Email" /> 
      <input type="hidden" name="liveagent.prechat:Email" value="<?php echo $_SESSION["1stBank_CustomerEmail"]; ?>" />

   <input type='submit' value='Request Chat' id='prechat_submit'/>

</form> 
</div>

    <script>
    
        function initSubmit() 
        {
// Enable line below for auto submit            
            window.setTimeout(doSubmit, 0)
        }
        
        function doSubmit()
        {
            var btnSubmit = document.getElementById('prechat_submit');
            btnSubmit.click();
        }    
            
    </script>
    
			</div>

			<!-- FOOTER BLOCK ================================================ -->
			<?php include "inc/footer.php" ?>
			<!-- /FOOTER BLOCK ================================================ -->