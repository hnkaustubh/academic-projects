<!DOCTYPE html>
<html>
<head>
	<title>Google API</title>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="381750800993-6fmo6q0noajtghdu2q9q79ku3qke9ajb.apps.googleusercontent.com">
</head>
<body>
	<div id="profileInfo"></div>
	<div class="g-signin2" data-onsuccess="onSignIn"></div>

	<script>
		function onSignIn(googleUser) {
		  var profile = googleUser.getBasicProfile();
		  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
		  console.log('Name: ' + profile.getName());
		  console.log('Image URL: ' + profile.getImageUrl());
		  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
		}


	</script>
</body>
</html>