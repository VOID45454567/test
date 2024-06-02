<?php
//include '../app/database/db.php';
include '../app/controllers/users.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="stules.css">
</head>
<body class="bg-gradient-to-r from-indigo-500 to-pink-500">
<header class="text-white bg-black">
    <div class=" flex flex-row justify-around font-bold py-5 px-6 ">
        <div class="text-4xl">My blog</div>
        <div>
            <div class="basis-1/2 flex-initial flex flex-row justify-around w-full">
                <button class="ml-7 text-xl mt-2 ease-in duration-300 hover:text-pink-700">Главная</button>
                <button class="ml-7 text-xl mt-2 ease-in duration-300 hover:text-pink-700">О нас</button>
                <button class="ml-7 text-xl mt-2 ease-in duration-300 hover:text-pink-700">Услуги</button>
                <button class="ml-7 text-xl mt-2 ease-in duration-300 hover:text-pink-700">Кабинет</button>
            </div>
        </div>
    </div>
</header>
<main>
    <form class="mx-auto rounded-xl bg-white bg-opacity-60 flex flex-col w-5/12 mt-32 p-10 mb-10" method="post" action="registration.php">
        <h1 class="text-pink-600 font-bold text-xl text-center">Регистрация</h1>
        <p class=" text-pink-600 text-center">Email</p>
        <input type="text" class="w-8/12 mx-auto h-10 rounded-xl mb-5 text-center" name="email">
        <p class=" text-pink-600 text-center">Username</p>
        <input type="text" class="w-8/12 mx-auto h-10 rounded-xl mb-5 text-center" name="username">
        <p class=" text-pink-600 text-center">Password</p>
        <input type="password" class="w-8/12 mx-auto h-10 rounded-xl mb-10 text-center" name="password">
        <div class="w-8/12 mx-auto">

            <button class="bg-white w-full rounded-xl h-10 ease-in duration-300 hover:bg-pink-600 " type="submit" name="registr">Регистрация</button>
            <p class="text-center text-pink-600 font-bold"><?=$ErrorMessage?></p>
        </div>
    </form>
</main>
<footer class="text-white absolute w-full bottom-0">
    <div class=" w-full bg-black flex flex-row justify-around">
        <div>
            <h1 class="text-3xl">Мой блог</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Asperiores commodi dolores et fugiat ipsum molestiae porro quo.<br>
                Accusamus assumenda consequuntur debitis dolores error ipsam molestias suscipit?
                Consequatur dolorum iure magnam.</p>
            <p class="text-xl">Номер телефона</p>
            <p class="text-xl">email</p>
        </div>
        <div class="flex flex-col">
            <h1 class="text-3xl">Links</h1>
            <a href="#" class="text-left text-xl scale-1 ease-in duration-300 hover:text-pink-700">События</a>
            <a href="#" class="text-left text-xl ease-in duration-300 hover:text-pink-700 ">Команда</a>
            <a href="#" class="text-left text-xl ease-in duration-300 hover:text-pink-700">Упражнения</a>
            <a href="#" class="text-left text-xl ease-in duration-300 hover:text-pink-700">Галерея</a>

        </div>
        <div class="flex flex-col">
            <h1 class="text-3xl">Обратная связь</h1>
            <input class="mb-2" type="email" placeholder="Email">
            <input placeholder="massage" type="text">
        </div>
    </div>
</footer>
</body>
</html>