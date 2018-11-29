<?php
//convertir las horas 
$date1=$_POST['date1'];
$data2=$_POST['date2'];


$datet1=date_create($_POST['time1']);
$time1= date_format($datet1,"H:i:s");

$datet2=date_create($_POST['time2']);
$time2= date_format($datet2,"H:i:s");


$datetime1=$date1.'T'.$time1;
$datetime2=$data2.'T'.$time2;

?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<div class="row">
	<div class="col-md-2 col-sm-2 col-xs-12">
		<button id="authorize-button" style="visibility: hidden" class="btn btn-primary">Authorize</button>
    </div><!-- .col -->
    
    <div class="col-md-10 col-sm-10 col-xs-12">
		<script type="text/javascript">
			// date variables
			var now = new Date();
			today = now.toISOString();
			
			var twoHoursLater = new Date(now.getTime() + (2*1000*60*60));
			twoHoursLater = twoHoursLater.toISOString();
			
			// google api console clientID and apiKey (https://code.google.com/apis/console/#project:568391772772)
			var clientId = '722908351084-mitomggevl4oiukljthcjhrkt45vkao4.apps.googleusercontent.com';
			var apiKey = 'AIzaSyDXvN8_5PUEPLzxHR_BRXBBO9hVZrDlR0U';

			// enter the scope of current project (this API must be turned on in the google console)
			var scopes = 'https://www.googleapis.com/auth/calendar';


			// Oauth2 functions
			function handleClientLoad() {
				gapi.client.setApiKey(apiKey);
				window.setTimeout(checkAuth,1);
			}

			function checkAuth() {
				gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: true}, handleAuthResult);
			}

			// show/hide the 'authorize' button, depending on application state
			function handleAuthResult(authResult) {
				var authorizeButton = document.getElementById('authorize-button');
				var resultPanel		= document.getElementById('result-panel');
				var resultTitle		= document.getElementById('result-title');
				
				if (authResult && !authResult.error) {						
					authorizeButton.style.visibility = 'hidden';			// if authorized, hide button
					resultPanel.className = resultPanel.className.replace( /(?:^|\s)panel-danger(?!\S)/g , '' )	// remove red class
					resultPanel.className += ' panel-success';				// add green class
					resultTitle.innerHTML = 'Application Authorized'		// display 'authorized' text
					makeApiCall();											// call the api if authorization passed
				} else {													// otherwise, show button
					authorizeButton.style.visibility = 'visible';
					resultPanel.className += ' panel-danger';				// make panel red
					authorizeButton.onclick = handleAuthClick;				// setup function to handle button click
				}
			}
			
			// function triggered when user authorizes app
			function handleAuthClick(event) {
				gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: false}, handleAuthResult);
				return false;
			}
			
			// setup event details
			/*var resource = {
				"summary": "Sample Event " + Math.floor((Math.random() * 10) + 1),
				"start": {
					"dateTime": today
				},
				"end": {
					"dateTime": twoHoursLater
				}
			};*/
   var event = {
  'summary': `<?php echo $_POST['asunto']; ?>`,
  'location': '<?php echo $_POST['dir']; ?>',
  'description': '<?php echo $_POST['html_info']; ?>',
  'start': {
    'dateTime': '<?php echo $datetime1; ?>',
    'timeZone': 'America/Lima'
  },
  'end': {
    'dateTime': '<?php echo $datetime2; ?>',
    'timeZone': 'America/Lima'
  },
  'recurrence': [
    'RRULE:FREQ=DAILY;COUNT=1'
  ],
  /*'attendees': [
    {'email': 'lpage@example.com'},
    {'email': 'sbrin@example.com'}
  ],*/
  'reminders': {
    'useDefault': false,
    'overrides': [
      {'method': 'email', 'minutes': 24 * 60},
      {'method': 'popup', 'minutes': <?php echo $_POST['tiempo_noti']; ?>} //tiempo de evento
    ]
  }
};
  function algo(){ 
opener.location.reload(); 
window.close(); 
}  
  
			// function load the calendar api and make the api call
			function makeApiCall() {
				gapi.client.load('calendar', 'v3', function() {					// load the calendar api (version 3)
					var request = gapi.client.calendar.events.insert({
						'calendarId':		'primary',	// calendar ID
						"resource":			event							// pass event details with api call
					});
					
					// handle the response from our api call
					request.execute(function(resp) {
							console.log(resp)
						if(resp.status=='confirmed') {
							document.getElementById('event-response').innerHTML = "Event created successfully. View it <a href='" + resp.htmlLink + "'>online here</a>.";
						} else {
							document.getElementById('event-response').innerHTML = "There was a problem. Reload page and try again.";
						}
						/* for (var i = 0; i < resp.items.length; i++) {		// loop through events and write them out to a list
							var li = document.createElement('li');
							var eventInfo = resp.items[i].summary + ' ' +resp.items[i].start.dateTime;
							li.appendChild(document.createTextNode(eventInfo));
							document.getElementById('events').appendChild(li);
						} */
						console.log(resp);
						//link
						var id_muro='<?php echo $_POST['id_muro']; ?>';
						var link=resp.htmlLink;
						$.ajax({
                          type: "POST",
                          url: "php/update_calendar.php",
                          data: {id_muro:id_muro,link:link},
                          success: function(data){
                               console.log(data);
                               ///algo();
                               
                                
                            }
                        });
    
						
						console.log("id: "+resp.etag)
						console.log("link: "+resp.htmlLink);
						
						

					});
				});
				
				
			}
		</script>
		<script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
	
		
		
		
			<div class="panel panel-danger" id="result-panel">
			<div class="panel-heading">
				<h3 class="panel-title" id="result-title">Application Not Authorized</h3>
			</div><!-- .panel-heading -->
			<div class="panel-body">
				<p>Insert Event into Public Calendar&hellip;</p>
				<div id="event-response"></div>
			</div><!-- .panel-body -->
		</div><!-- .panel -->
		
	</div><!-- .col -->
</div><!-- .row -->
