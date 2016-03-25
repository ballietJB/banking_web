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

<h1>Pre-chat Form</h1> 


<div>
<form method='post' id='prechatForm'> 
       
	<table>
		<tr>
  			<td>First Name: </td>
  			<td>
  				<input type='text' name='liveagent.prechat:FirstName'/>
  			</td>
		</tr>
		<tr>
  			<td>Last Name: </td>
  			<td>
  				<input type='text' name='liveagent.prechat:LastName'/>
  			</td>
		</tr>
		<tr>
  			<td>Email Address: </td>
  			<td>
  				<input type='text' name='liveagent.prechat:Email' />
  			</td>
		</tr>
		<tr>
  			<td>Phone: </td>
  			<td>
  				<input type='text' name='liveagent.prechat:Phone'"/>
  			</td>
		</tr>
		<tr>
  			<td>Case Reason:  </td>
  			<td>
  				<select name="liveagent.prechat:CaseReason">
			 		<option value="Change of Address">Change of Address</option>
 			 		<option value="Close Account">Close Account</option>
 			 		<option value="Financial Advisor Meeting" selected>Financial Advisor Meeting</option>
  					<option value="General Enquiry">General Enquiry</option>
 			 		<option value="Lost Card">Lost Card</option>
 			 		<option value="Lost PIN Number">Lost PIN Number</option>
 			 		<option value="Upgrade">Upgrade</option>
				</select>
  			</td>
		</tr>
	</table>
	<br />
	<input type="hidden" name="liveagent.visitorname" value="Joe" />
	<input type="hidden" name="liveagent.prechat.query:Email" value="Contact,Contact.Email" /> 
      <input type="hidden" name="liveagent.prechat.save:Email" value="jgionta@gmail.com" />
	
   <input type='submit' value='Request Chat' id='prechat_submit'/>

</form> 
</div>

<!--
<div>
<form method='post' id='prechatForm'> 

       
Email Address:
  				<input type='text' name='liveagent.prechat:Email' value="jgionta@gmail.com"/>

<input type="hidden" name="liveagent.prechat.query:Email" value="Contact,Contact.Email" /> 
      <input type="hidden" name="liveagent.prechat.save:Email" value="jgionta@gmail.com" />

   <input type='submit' value='Request Chat' id='prechat_submit'/>

</form> 
</div>

-->
			</div>

			<!-- FOOTER BLOCK ================================================ -->
			<?php include "inc/footer.php" ?>
			<!-- /FOOTER BLOCK ================================================ -->