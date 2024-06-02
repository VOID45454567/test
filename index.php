<?php
require '../app/database/db.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
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
                <?php
                session_start();


                $username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : null;

                if ($username !== null) {

                    echo '<a href="autorization.php" class="ml-7 text-xl mt-2 ease-in duration-300 hover:text-pink-700">' . htmlspecialchars($username) . '</a>';
                } else {

                    echo '<a href="autorization.php" class="ml-7 text-xl mt-2 ease-in duration-300 hover:text-pink-700">Войти</a>';
                }
                ?>
            </div>
        </div>
    </div>
</header>
<main class="text-white mt-20 ml-20">
    <div class="flex">
        <div class="container w-9/12">
            <h1 class=" text-4xl font-thin font-sans mb-20">Последние публикации</h1>
            <div class=" container flex flex-row w-full justify-start p-10 bg-black rounded-xl mb-20">
                <img src="" class="w-60 h-60 bg-gray-200 rounded-xl mr-10" alt="фото">
                <div class="flex flex-col w-9/12">
                    <h1 class="text-3xl">Заголовок статьи</h1>
                    <div class="flex flex-row justify-self-start">
                        <div>Автор</div>
                        <div class="ml-20">Дата</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam error id obcaecati quas ullam.
                        Adipisci autem deleniti eaque impedit in maxime obcaecati saepe similique tempore voluptatibus!
                        Consequuntur maxime sunt velit!</p>
                    <button class=" p-3.5 mt-20 text-white bg-black ease-in duration-300 hover:bg-pink-600  rounded-full">Подробнее</button>
                </div>

            </div>
            <div class=" container flex flex-row w-full justify-start p-10 bg-black rounded-xl mb-20">
                <img src="" class="w-60 h-60 bg-gray-200 rounded-xl mr-10" alt="фото">
                <div class="flex flex-col w-9/12">
                    <h1 class="text-3xl">Заголовок статьи</h1>
                    <div class="flex flex-row justify-self-start">
                        <div>Автор</div>
                        <div class="ml-20">Дата</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam error id obcaecati quas ullam.
                        Adipisci autem deleniti eaque impedit in maxime obcaecati saepe similique tempore voluptatibus!
                        Consequuntur maxime sunt velit!</p>
                    <button class=" p-3.5 mt-20 text-white bg-black ease-in duration-300 hover:bg-pink-600  rounded-full">Подробнее</button>
                </div>

            </div>
            <div class=" container flex flex-row w-full justify-start p-10 bg-black rounded-xl mb-20">
                <img src="" class="w-60 h-60 bg-gray-200 rounded-xl mr-10" alt="фото">
                <div class="flex flex-col w-9/12">
                    <h1 class="text-3xl">Заголовок статьи</h1>
                    <div class="flex flex-row justify-self-start">
                        <div>Автор</div>
                        <div class="ml-20">Дата</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam error id obcaecati quas ullam.
                        Adipisci autem deleniti eaque impedit in maxime obcaecati saepe similique tempore voluptatibus!
                        Consequuntur maxime sunt velit!</p>
                    <button class=" p-3.5 mt-20 text-white bg-black ease-in duration-300 hover:bg-pink-600  rounded-full">Подробнее</button>
                </div>

            </div>
            <div class=" container flex flex-row w-full justify-start p-10 bg-black rounded-xl mb-20">
                <img src="" class="w-60 h-60 bg-gray-200 rounded-xl mr-10" alt="фото">
                <div class="flex flex-col w-9/12">
                    <h1 class="text-3xl">Заголовок статьи</h1>
                    <div class="flex flex-row justify-self-start">
                        <div>Автор</div>
                        <div class="ml-20">Дата</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam error id obcaecati quas ullam.
                        Adipisci autem deleniti eaque impedit in maxime obcaecati saepe similique tempore voluptatibus!
                        Consequuntur maxime sunt velit!</p>
                    <button class=" p-3.5 mt-20 text-white bg-black ease-in duration-300 hover:bg-pink-600  rounded-full">Подробнее</button>
                </div>

            </div>
        </div>
        <div class="w-1/12 ml-20 relative">
            <h1 class=" text-4xl font-thin font-sans mb-20 mr-20 ">Поиск</h1>
            <input type="text" class="w-100 h-5" placeholder="Введите искомое слово">
            <h1 class=" text-4xl font-thin font-sans mb-10 mr-20 ">Категории</h1>
            <div class="flex flex-col">
                <a href="#" class="text-left text-xl ease-in duration-300 hover:text-pink-700">Программирование</a>
                <a href="#" class="text-left text-xl ease-in duration-300 hover:text-pink-700">Дизайн</a>
                <a href="#" class="text-left text-xl ease-in duration-300 hover:text-pink-700">Кейсы</a>
                <a href="#" class="text-left text-xl ease-in duration-300 hover:text-pink-700">Мотивация</a>
            </div>
        </div>
    </div>
</main>
<footer class="text-white absolute w-full">
    <div class=" w-full bg-black flex flex-row justify-around">
        <div>
            <h1 class="text-3xl">Мой блог</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Asperiores commodi dolores et fugiat ipsum molestiae porro quo.<br>
                Accusamus assumenda consequuntur debitis dolores error ipsam molestias suscipit?
                Consequaolorum iure magnam.</p>
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