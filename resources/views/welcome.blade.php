<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Artistic Platform</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            background-color: #555;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #555;
        }

        a {
            color: #888;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #333;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #555;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Your Artistic Platform</h1>
        <p>Explore, Create, and Engage with Art</p>
    </header>

    <section>
        <h2>Discover Artworks</h2>
        <p>Explore a diverse collection of artistic masterpieces. Find inspiration and discover new talents.</p>
        <a href="#" style="background-color: #555; color: #fff; padding: 8px 16px; border-radius: 5px;">Explore Artworks</a>
    </section>

    <section>
        <h2>Join the Artistic Community</h2>
        <p>Connect with fellow artists and art enthusiasts. Share your thoughts, give feedback, and be part of the conversation.</p>
        <a href="{{ route('login') }}" style="background-color: #555; color: #fff; padding: 8px 16px; border-radius: 5px;">Join the Community</a>
    </section>

    <section>
        <h2>Showcase Your Art</h2>
        <p>Are you an artist? Create your profile, showcase your portfolio, and reach a global audience by selling your artworks.</p>
        <a href="{{ route('register') }}" style="background-color: #555; color: #fff; padding: 8px 16px; border-radius: 5px;">Get Started</a>
    </section>

    <footer>
        <p>&copy; 2024 Your Artistic Platform. All rights reserved.</p>
        <p>Already a member? <a href="{{ route('login') }}" style="color: #fff;">Login</a></p>
    </footer>
</body>

</html>
