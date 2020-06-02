<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--  Google API -->
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="425789449877-hmna0tirie3lf6aot04ckghk9rghcsid.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<!-- Google Api -->
<div align="center">
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="light" style="width: 300px"></div>
</div>
<script>
    function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        document.location.href = "google_login.php?id=" + profile.getId() + "&email=" + profile.getEmail() + "&name=" + profile.getGivenName() + "&fname=" + profile.getFamilyName();
    }
</script>