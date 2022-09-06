<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navegation">
        <ul>
            <li>
            <a href="#">
                <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                <span class="title">logo name</span>
            </a>
            </li>

            <li>
            <a href="#">
                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                <span class="title">Dashboard</span>
            </a>
            </li>

            <li>
            <a href="#">
                <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                <span class="title">Customers</span>
            </a>
            </li>

            <li>
            <a href="#">
                <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                <span class="title">Messages</span>
            </a>
            </li>

            <li>
            <a href="#">
                <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                <span class="title">Help</span>
            </a>
            </li>

            <li>
            <a href="#">
                <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                <span class="title">Setting</span>
            </a>
            </li>

            <li>
            <a href="#">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <span class="title">Password</span>
            </a>
            </li>

            <li>
            <a href="#">
                <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                <span class="title">Sing Out</span>
            </a>
            </li>
        </ul>

        <div class="toggle"></div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    let navegation = document.querySelector('.navegation');
    let toggle = document.querySelector('.toggle');
    toggle.onclick = function(){
        navegation.classList.toggle('active')
    }
</script>
</body>
</html>