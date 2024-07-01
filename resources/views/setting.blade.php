<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noraebang Easy</title>

{{-- CSS --}}
    <link rel="stylesheet" href="styleSetting.css">
    <script src="https://kit.fontawesome.com/a4e07e2ceb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/solid.min.css">
{{-- CSS --}}
</head>
<body>

    <div class="full">
        {{-- SIDEBAR --}}
        <div class="sidebar">
            <img src="images/logo-apsi.png" alt="Noraebang Easy" width="300px">
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
                    <a href="search">Search</a>
                    <i class="fa-regular fa-bell"></i>
                    <a href="#"><img src="{{url ('images/profil.jpg')}}" alt="Profile"></a>
                </nav>
            </header>
        {{-- MAIN CONTENT --}}
        <main>
            <div class="lagu">
                <h1>Setting</h1>
                <h2>Language</h2>
                <p>Select language-Change will take effect after restarting the website</p>
                <h1>Appearance</h1>
                <p>Select display theme-Dark Mode</p>
            </div>
        </main>
        </div>  
    </div>

    {{-- FOOTER --}}
    <div class="musik">
        <div class="album">
            <img src="images/mic-drop.jpeg" alt="Noraebang Easy" width="50">
            <div>
                <p>MIC DROP (feat. Desiigner) [Steve Aoki Remix]</p>
                <p>BTS</p>
            </div>
        </div>
        <div class="play">
            <div class="icons">
                <i class="fas fa-3x fa-repeat"></i>
                <i class="fas fa-3x fa-step-backward"></i>
                <i class="fas fa-3x fa-play-circle"></i>
                <i class="fas fa-3x fa-step-forward"></i>
                <i class="fas fa-3x fa-shuffle"></i>
            </div>
                <input type="range" name="range" id="myProgressBar" min="0" max="100">
        </div>
        <div class="volume">
            <div>
                <i class="fas fa-3x fa-volume-high"></i>
            </div>
            <input type="range" name="range1" id="myVolumeBar" min="0" max="100">
        </div>

    </div>
</body>
</html>