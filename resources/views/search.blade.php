<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noraebang Easy</title>

{{-- CSS --}}
    <link rel="stylesheet" href="styleSearch.css">
    <script src="https://kit.fontawesome.com/a4e07e2ceb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/solid.min.css">
{{-- CSS --}}
</head>
<body>

    <div class="full">
        {{-- SIDEBAR --}}
        <div class="sidebar">
            <img src="images/logo-apsi.png" alt="Noraebang Easy" width="300px">
            <div class="navigasi">
            <nav class="sidebar-nav">
                <h1>Your Collection</h1>
                <ul class="playlist">
                    <li><i class="fas fa-music"></i>
                        <a class="nav-link" href="#">Your Playlist Name</a>
                    </li>
                    <p>Playlist Noraebang Easy</p>
                    <li><i class="fas fa-music"></i>
                        <a class="nav-link" href="#">Your Playlist Name</a>
                    </li>
                    <p>Playlist Noraebang Easy</p>
                    <li><i class="fas fa-music"></i>
                        <a class="nav-link" href="#">Your Playlist Name</a>
                    </li>
                    <p>Playlist Noraebang Easy</p>
                    <li><i class="fas fa-music"></i>
                        <a class="nav-link" href="#">Your Playlist Name</a>
                    </li>
                    <p>Playlist Noraebang Easy</p>
                </ul>
                <nav class="nav-akun">
                    <ul>
                        <li class="link-akun"><a href="#">Account</a></li>
                        <li class="link-akun"><a href="#">Profile</a></li>
                        <li class="link-akun"><a href="setting">Setting</a></li>
                        <li class="link-akun"><a href="#">Sign Out</a></li>
                    </ul>
                </nav>
            </nav>
            </div>
        </div>
        {{-- NAVBAR --}}
        <div class="content">
            <header class="nav-head">
                <div>
                <i class="fa-solid fa-circle-chevron-left"></i>
                <i class="fa-solid fa-circle-chevron-right"></i>
                </div>
                <div class="box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="What do you want to play?">
                </div>
                <nav class="nav-set">
                    <a href="home">Home</a>
                    <a href="#">Search</a>
                    <i class="fa-regular fa-bell"></i>
                    <a href="#"><img src="{{url ('images/profil.jpg')}}" alt="Profile"></a>
                </nav>
            </header>
        {{-- MAIN CONTENT --}}
        <main>
            <div class="lagu">
                <p>Hi, Group 5 Information System Analysis & Design</p>
                <div class="easy">
                    <h1><b>GETTING</b></h1>
                    <h1><b>STARTED IS EASY!</b></h1>
                    <h3>What do you want to listen to?</h3>
                    <p>We will make it easier for you to listen to and sing music specifically Korean K-Pop</p>
                </div>
            </div>
        </main>
        </div>  
    </div>
</body>
</html>