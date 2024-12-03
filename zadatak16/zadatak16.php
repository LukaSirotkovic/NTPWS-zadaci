<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija korisnika</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registracijski Obrazac</h1>
    <form action="" method="POST">
        <label for="first_name">First Name *</label>
        <input type="text" id="first_name" name="first_name" required placeholder="Your name..">
        
        <label for="last_name">Last Name *</label>
        <input type="text" id="last_name" name="last_name" required placeholder="Your last name..">
        
        <label for="email">Your E-mail *</label>
        <input type="email" id="email" name="email" required placeholder="Your e-mail..">
        
        <label for="username">Username *</label>
        <input type="text" id="username" name="username" minlength="5" maxlength="10" required placeholder="Username..">
        
        <label for="password">Password *</label>
        <input type="password" id="password" name="password" minlength="4" required placeholder="Password..">
        
        <label for="country">Country *</label>
        <select id="country" name="country" required>
            <option value="">Molimo odaberite</option>
            <option value="HR">Croatia</option>
            <option value="US">United States</option>
            <option value="DE">Germany</option>
        </select>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
