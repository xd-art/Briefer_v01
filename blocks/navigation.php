<style>
    .selected {
        font-weight: bold;
    }
</style>


<style>
    /* Добавьте стили для модального окна здесь, если не хотите использовать отдельный файл */
    /* Modal Styles */
    .modal {
        display: none;
        /* Скрыто по умолчанию */
        position: fixed;
        /* Фиксированное позиционирование */
        z-index: 1000;
        /* Поверх других элементов */
        left: 0;
        top: 0;
        width: 100%;
        /* Полная ширина */
        height: 100%;
        /* Полная высота */
        background-color: rgba(0, 0, 0, 0.5);
        /* Полупрозрачный фон */
    }




    .modal-content {
        background-color: #fff;
        /* Белый фон */
        margin: 15% auto;
        /* Отступы сверху и авто для центрирования */
        padding: 20px;
        /* Внутренние отступы */
        border: 1px solid #888;
        /* Рамка */
        width: 80%;
        /* Ширина модального окна */
        max-width: 100vh;
        /* Максимальная ширина */

    }

    .close-button {
        color: #aaa;
        /* Цвет кнопки закрытия */
        float: right;
        /* Позиционирование кнопки */
        font-size: 28px;
        /* Размер шрифта */
        font-weight: bold;
        /* Жирный шрифт */
    }

    .close-button:hover,
    .close-button:focus {
        color: black;
        /* Цвет при наведении */
        text-decoration: none;
        /* Убираем подчеркивание */
        cursor: pointer;
        /* Указатель курсора */
    }




</style> 
<!-- 
<style>
    /* Стили для модального окна */
    .modal {
        display: none; /* Скрыто по умолчанию */
        position: fixed; /* Фиксированное позиционирование */
        z-index: 1000; /* Поверх других элементов */
        left: 0;
        top: 0;
        width: 100%; /* Полная ширина */
        height: 100%; /* Полная высота */
        background-color: rgba(0, 0, 0, 0.5); /* Полупрозрачный фон */
    }

    .modal-content {
        background-color: #fff; /* Белый фон */
        position: absolute; /* Абсолютное позиционирование */
        top: 50%; /* Центрирование по вертикали */
        left: 50%; /* Центрирование по горизонтали */
        transform: translate(-50%, -50%); /* Сдвиг на половину ширины/высоты */
        padding: 20px; /* Внутренние отступы */
        border: 1px solid #888; /* Рамка */
        width: 80%; /* Ширина окна */
        max-width: 800px; /* Максимальная ширина */
        max-height: 90%; /* Максимальная высота */
        box-sizing: border-box; /* Учитывать отступы в размеры */
        overflow-y: auto; /* Скролл, если содержимое превышает высоту */
    }

    .close-button {
        color: #aaa; /* Цвет кнопки закрытия */
        float: right; /* Позиционирование кнопки */
        font-size: 28px; /* Размер шрифта */
        font-weight: bold; /* Жирный шрифт */
        cursor: pointer; /* Указатель курсора */
    }

    .close-button:hover,
    .close-button:focus {
        color: black; /* Цвет при наведении */
        text-decoration: none; /* Убираем подчеркивание */
    }
</style> -->








<style>
    /* Стили для кнопки с плюсиком */
    .circle-button {
        width: 40px;
        height: 40px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        cursor: pointer;
        position: relative;
        margin-left: 30px;
        margin-top: 10px;
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, .5);
        background-color: #2962ff;


    }

    .circle-button:hover {
        box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, .5);

    }


    @media screen and (max-width: 700px) {

        .circle-button {
            position: fixed;
            /* Фиксированное позиционирование */
            top: 10px;
            /* Отступ от верхней части экрана */
            right: 20px;
            /* Отступ от правой стороны */
            z-index: 1001;
            /* Убедитесь, что кнопка поверх других элементов */
        }
    }
</style>












<nav aria-label="Website navigation" class="navigation">
    <div class="navigation__menu">
        <img class="logo" src="/images/briefer-logo.svg" alt=""></img>
        <div class="--menu">
            <a href="/index.php">Home</a>
            <a href="/pages/briefs.php">Briefs</a>
            <a href="https://hf.co/chat/assistant/6730465d4b08e55af9d58a91" target="_blank">AI Chat</a>
            <a href="/pages/blog.php">Blog</a>
            <a href="/pages/about.php">About</a>
            <a href="/pages/donate.php">Donate</a>




            <button class="circle-button" id="openPopupButton">+</button>




        </div>
    </div>

</nav>




<div id="popupModal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <iframe src="/pages/ai-popup.php" frameborder="0" width="100%" height="400px"></iframe>
    </div>
</div>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Получаем элементы
        var modal = document.getElementById('popupModal');
        var openButton = document.getElementById('openPopupButton');
        var closeButton = document.querySelector('.close-button');

        // Функция для открытия модального окна
        openButton.addEventListener('click', function() {
            modal.style.display = 'block'; // Показываем модальное окно
        });

        // Функция для закрытия модального окна
        closeButton.addEventListener('click', function() {
            modal.style.display = 'none'; // Скрываем модальное окно
        });

        // Закрыть модальное окно, если пользователь кликает за его пределами
        window.addEventListener('click', function(event) {
            if (event.target === modal) {
                modal.style.display = 'none'; // Скрываем модальное окно
            }
        });
    });
</script>










<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Получаем текущий URL страницы без параметров
        var currentPath = window.location.pathname;

        // Получаем все элементы <a> внутри блока меню
        var links = document.querySelectorAll('.--menu a');

        // Проверяем, какой из URL соответствует текущему
        links.forEach(function(link) {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('selected');
            }
        });
    });
</script>













<!-- 

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Получаем текущий URL страницы
    var currentUrl = window.location.href;

    // Получаем все элементы <a> внутри класса "--menu"
    var links = document.querySelectorAll('.--menu a');

    // Проходим по каждой ссылке и сравниваем ее URL с текущим URL
    links.forEach(function (link) {
        if (link.href === currentUrl) {
            link.classList.add('selected');
        }
    });
});
</script> -->