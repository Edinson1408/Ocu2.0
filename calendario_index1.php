<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <style type="text/css">
    .customBtn {
      display: inline-block;
      background: white;
      color: #444;
      width: 190px;
      border-radius: 5px;
      border: thin solid #888;
      box-shadow: 1px 1px 1px grey;
      white-space: nowrap;
    }
    .customBtn:hover {
      cursor: pointer;
    }
    span.label {
      font-family: serif;
      font-weight: normal;
    }
    span.icon {
      background: url('https://google-developers.appspot.com//identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 42px;
      height: 42px;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 42px;
      padding-right: 42px;
      font-size: 14px;
      font-weight: bold;
      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto', sans-serif;
    }
    button:hover {
    opacity: 0.8;
        }
        
        .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
                    }
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <div class="col-md-10 col-sm-10 col-xs-12">
		<script type="text/javascript">
			// date variables
			var now = new Date();
			today = now.toISOString();
			
			var twoHoursLater = new Date(now.getTime() + (2*1000*60*60));
			twoHoursLater = twoHoursLater.toISOString();
			
			// google api console clientID and apiKey (https://code.google.com/apis/console/#project:568391772772)
			var clientId = '722908351084-hst3p7hm8i0n9chc9n1uktc1eugmmsdv.apps.googleusercontent.com';
			var apiKey = 'AIzaSyB3zpzkn8BSzLTPEyJZ_W6A_m16m8_ZoSM';

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
					//makeApiCall();											// call the api if authorization passed
					console.log('autorizado');
					 console.log('aqui esta si entro i tiene insertar redirigir' );
                      var Titulo='<?php echo $_GET['text']; ?>';
                      var date='<?php echo $_GET['dates']; ?>';
                      var text='<?php echo urlencode($_GET['details']); ?>';
                      var id_muro='<?php echo $_GET['id_muro']; ?>';
                      window.location.replace("AgendaGoogle.php?titulo="+Titulo+"&date="+date+"&text="+text+"&id_muro="+id_muro);
				} else {													// otherwise, show button
					authorizeButton.style.visibility = 'visible';
					resultPanel.className += ' panel-danger';				// make panel red
					authorizeButton.onclick = handleAuthClick;				// setup function to handle button click
					console.log('no avtuarizado');
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
  
  
			// function load the calendar api and make the api call
			
		</script>
		<script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
<div class="container">	<h1>Google Calendar</h1></div>
		<div class="imgcontainer">
        <img src="http://sky.gestionx.com/erpx/Componentes/Ocurrencias2.0/img/logo.jpg" alt="Avatar" class="avatar">
        </div>
		
<div class="container">
    
		 <div class="row">
    		<div class="panel panel-danger" id="result-panel">
    			
    			<p>Inicio rápido de la API de Google Calendar</p>
    			<p>Autoriza a nuestra API para interactuar con GOOGLE CALENDAR</p>
    			<div class="panel-heading">
    			    
    				<p class="panel-title" id="result-title">Application No Autorizada</p>
    			</div><!-- .panel-heading -->
    			<div class="panel-body">
    				<p></p>
    				<div id="event-response"></div>
    			</div><!-- .panel-body -->
    		</div><!-- .panel -->
    		
            
            </div><!-- .row -->

        <div class="row">
	     <center>
		<button id="authorize-button" style="visibility: hidden" class="customBtn"><span class="icon"></span><span class="buttonText">Autorizar</span></button>
		</center>   
    </div><!-- .col -->
    
</div>
    
