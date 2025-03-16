<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új Kapcsolatfelvétel</title>
</head>
<body>
<h2>Új üzenet érkezett a kapcsolatfelvételi űrlapon keresztül</h2>

<p><strong>Név:</strong> {{ $contactData['name'] }}</p>
<p><strong>Email:</strong> {{ $contactData['email'] }}</p>
<p><strong>Telefon:</strong> {{ $contactData['phone'] }}</p>
<p><strong>Üzenet:</strong> {{ $contactData['message'] }}</p>
<p><strong>GDPR Elfogadva:</strong> {{ $contactData['privacy'] ? 'Igen' : 'Nem' }}</p>

<p><em>Ez egy automatikus üzenet, kérlek ne válaszolj rá.</em></p>
</body>
</html>
