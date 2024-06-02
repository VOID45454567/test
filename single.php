<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Статья</title>
    <link rel="stylesheet" href="/assets/stules.css">
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
                <?php if (isset($_SESSION['id'])): ?>
                    <a href="" class="ml-7 text-xl mt-2 ease-in duration-300 hover:text-pink-700"><?php echo $_SESSION['username'];?></a>
                <?php else: ?>
                    <a href="" class="ml-7 text-xl mt-2 ease-in duration-300 hover:text-pink-700">Войти</a>
                <?php endif;?>
            </div>
        </div>
    </div>
</header>
<main class="text-white mt-20 ml-20">
    <div class="flex flex-row">
        <div class="w-9/12">
            <h1 class="text-4xl font-thin font-sans mb-20">Заголовок статьи</h1>
            <div class="flex flex-col">
                <img src="" alt="фото" class="w-full h-96 bg-gray-200">
                <div class="flex flex-row justify-start">
                    <p>Автор</p>
                    <p class="ml-20">Дата</p>
                </div>
                <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula sagittis tortor non porttitor. Phasellus felis sem, cursus id turpis eu, aliquam malesuada ipsum. Nunc aliquam commodo mauris. Cras lectus nisl, malesuada in blandit sit amet, aliquet ultrices enim. Cras faucibus eros vitae dolor sodales venenatis. Nunc eu porta turpis. Phasellus sed consectetur libero. Vivamus pulvinar aliquet sem hendrerit pretium. In pellentesque consequat porttitor. Suspendisse pharetra ex nec sapien aliquam ornare. Nam nec diam tincidunt, lacinia ipsum eget, lobortis arcu. Curabitur porttitor erat at tempor lacinia. Sed laoreet congue elementum. Nam non orci et lectus scelerisque auctor id eu ipsum.

                    In egestas id felis in bibendum. Mauris auctor magna vitae tempor vestibulum. Vestibulum velit neque, aliquam nec ipsum in, condimentum maximus mauris. Etiam quis lectus pulvinar, viverra lacus non, bibendum augue. Aliquam erat volutpat. Cras a ipsum massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis egestas urna, non imperdiet diam malesuada ac.

                    Cras quis felis ullamcorper, scelerisque orci ut, varius sapien. Morbi sit amet nunc sed metus elementum lobortis. Vivamus lacus nibh, efficitur vel mollis sed, elementum et mi. Phasellus ultricies nunc hendrerit, dapibus nunc vel, luctus quam. Donec suscipit, orci et dictum pretium, tellus lectus elementum metus, sed interdum elit sem non turpis. Nam velit purus, accumsan id aliquam vitae, mattis at magna. Quisque ut tincidunt ex.

                    Vivamus feugiat, nisl finibus tincidunt laoreet, turpis mauris gravida ex, a semper justo lorem sit amet ligula. Nunc quis sapien eget velit volutpat rutrum. Maecenas volutpat turpis posuere ante iaculis, non dignissim mi bibendum. Proin quis neque metus. Nullam rhoncus metus malesuada eros egestas scelerisque. Integer vel ullamcorper ex. Donec tristique odio vel tortor consequat, sit amet posuere est accumsan. Etiam non tortor ac risus fringilla consectetur ut ac enim. Sed facilisis dolor eget lacinia vestibulum. Aenean ut sem euismod, sodales mauris nec, scelerisque risus. Praesent accumsan tellus vel feugiat interdum. In justo ligula, finibus ut magna auctor, gravida euismod velit. Ut ac malesuada libero. Nulla risus arcu, vestibulum in ullamcorper ac, malesuada nec nisi.

                    Ut nec lorem luctus, lacinia eros blandit, sollicitudin sem. Quisque ut ex rhoncus, venenatis sapien at, accumsan velit. Donec ac nibh sit amet nunc egestas sollicitudin. Aliquam ante elit, pretium et dignissim id, ullamcorper eget tortor. Pellentesque feugiat dapibus arcu eu pharetra. Morbi eget ipsum vitae nisl condimentum porta quis at quam. Fusce venenatis, augue eget dignissim tempus, ex purus egestas erat, eu volutpat eros tortor et ante. Vivamus in eros et dolor aliquet ultricies. Nunc quis tincidunt urna. Sed eget auctor tellus, nec lobortis nisi. Praesent a risus a augue dapibus egestas.</p>
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