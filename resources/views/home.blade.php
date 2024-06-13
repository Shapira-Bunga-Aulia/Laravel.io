<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: silver;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }

        nav ul a:hover {
            text-decoration: underline;
        }


        .main-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
            text-align: center;
        }

        .main-profile {
            border-radius: 50%;
            width: 300px;
            height: 300px;
            object-fit: cover;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* margin-left: 500px; */
        }

        .content-profile {
            max-width: 800px;
            text-align: center;
        }

        .content-profile h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 10px;
        }

        .content-profile h2 {
            font-size: 24px;
            color: #555;
            margin-bottom: 10px;
        }

        .content-profile h3 {
            font-size: 20px;
            color: #777;
            margin-bottom: 20px;
        }

        .content-profile p {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        /* .button {
            display: inline-block;
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        } */

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
}
    </style>
</head>
<body>
<header>
        <div class="logo">
        P<span style="color:blue;">I</span>W
        </div>
    <nav>
        <ul>
            <a href="/"><i class="fa-solid fa-house-chimney"></i>Home</a>
            <a href="/about"><i class="fa-solid fa-address-card"></i>About</a>
            <a href="/project"><i class="fa-solid fa-list-check"></i>Project</a>
        </ul>
    </nav>
    </header>
<br>
<br>
    <main>
        <center>
        <div class="container">
            <img src="img/Saya7.jpg" alt="profile" class="main-profile">

            <div class="content-profile">
                    <h1>Hai, I am Shapira Bunga Aulia!</h1>
                    <h2>i'm student at Wikrama Vocational Hight School</h2>
                    <h3>I come from the Department of Software and Game Development (PPLG)</h3>
                    <p> Want to know more about me? Let's check it out! </p>

                    <!-- <a href="about.blade.php" class="button">
                        <span class="content">Next!</span></a> -->
            </div>
        </div>
    </main>
    <footer>
    Copyright &copy Shapira Bunga Aulia | 2024
    </footer>
    <script src="js/script.js"></script>
</body>
</html>