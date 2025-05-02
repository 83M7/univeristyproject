<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Project</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="box">Home</div>
        <div class="box">About</div>
        <div class="box">Contact</div>
    </div>
    <div class="content">
        <header>
            <h1>Welcome to My Site</h1>
        </header>
        <section class="team">
            <h2>Our Team</h2>
            <div class="team-members">
                <div class="member">
                    <img src="{{ asset('img/team-member1.jpg') }}" alt="Team Member">
                    <p>John Doe</p>
                </div>
                <div class="member">
                    <img src="{{ asset('img/team-member2.jpg') }}" alt="Team Member">
                    <p>Jane Smith</p>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
