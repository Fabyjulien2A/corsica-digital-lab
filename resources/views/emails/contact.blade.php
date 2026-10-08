<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle demande de contact</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333; line-height: 1.7;">

    <h2 style="color: #b96c50;">
        Nouvelle demande de contact
    </h2>

    <p>Un visiteur a envoyé un message depuis Corsica Digital Lab.</p>

    <hr>

    <p><strong>Nom :</strong> {{ $name }}</p>

    <p><strong>E-mail :</strong> {{ $email }}</p>

    <p><strong>Type de projet :</strong> {{ $subjectType }}</p>

    <p><strong>Message :</strong></p>

    <div style="padding: 15px; background: #f8f5f1; border-radius: 6px; white-space: pre-wrap;">{{ $messageContent }}</div>

    <hr>

    <p style="font-size: 12px; color: #888;">
        Message envoyé depuis le formulaire de contact de Corsica Digital Lab.
    </p>

</body>
</html>