<script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
<script>
function start() {
  // 2. Initialize the JavaScript client library.
  gapi.client.init({
    'apiKey': 'AIzaSyDXvN8_5PUEPLzxHR_BRXBBO9hVZrDlR0U',
    // clientId and scope are optional if auth is not required.
    'clientId': '722908351084-mitomggevl4oiukljthcjhrkt45vkao4.apps.googleusercontent.com',
    'scope': 'profile',
  }).then(function() {
    // 3. Initialize and make the API request.
    return gapi.client.request({
      'path': 'https://people.googleapis.com/v1/people/me?requestMask.includeField=person.names',
    })
  }).then(function(response) {
    console.log(response.result);
  }, function(reason) {
    console.log('Error: ' + reason.result.error.message);
  });
};
// 1. Load the JavaScript client library.
gapi.load('client', start);
</script>