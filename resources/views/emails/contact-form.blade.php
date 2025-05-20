<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari Form Kontak</title>
</head>
<body>
    <h2>Detail Pesan:</h2>
    <p><strong>Nama:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Telepon:</strong> {{ $data['phone'] }}</p>
    <p><strong>Subjek:</strong> {{ $data['subject'] }}</p>
    <p><strong>Pesan:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>