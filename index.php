<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGO Минифигурки - Витрина коллекций</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Коллекции LEGO Минифигурок</h1>
            <nav>
                <ul>
                    <li><a href="#classic">Классические</a></li>
                    <li><a href="#licensed">Лицензионные</a></li>
                    <li><a href="#exclusive">Эксклюзивные</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <?php
        // Массив с коллекциями минифигурок
        $collections = [
            [
                'id' => 'classic',
                'title' => 'Классические коллекции',
                'description' => 'Традиционные серии минифигурок LEGO',
                'items' => [
                    ['name' => 'LEGO Minifigures Series 25', 'price' => '299 ₽', 'image' => 'series25.jpg'],
                    ['name' => 'LEGO Minifigures Series 24', 'price' => '299 ₽', 'image' => 'series24.jpg'],
                    ['name' => 'LEGO Minifigures Disney 100', 'price' => '349 ₽', 'image' => 'disney100.jpg'],
                    ['name' => 'LEGO Minifigures Series 23', 'price' => '299 ₽', 'image' => 'series23.jpg']
                ]
            ],
            [
                'id' => 'licensed',
                'title' => 'Лицензионные коллекции',
                'description' => 'Минифигурки из популярных франшиз',
                'items' => [
                    ['name' => 'Marvel Super Heroes', 'price' => '399 ₽', 'image' => 'marvel.jpg'],
                    ['name' => 'Star Wars', 'price' => '379 ₽', 'image' => 'starwars.jpg'],
                    ['name' => 'Harry Potter', 'price' => '359 ₽', 'image' => 'harrypotter.jpg'],
                    ['name' => 'DC Comics', 'price' => '399 ₽', 'image' => 'dccomics.jpg']
                ]
            ],
            [
                'id' => 'exclusive',
                'title' => 'Эксклюзивные коллекции',
                'description' => 'Редкие и ограниченные серии',
                'items' => [
                    ['name' => 'LEGO Collectible Minifigures VIP', 'price' => '899 ₽', 'image' => 'vip.jpg'],
                    ['name' => 'LEGO Ideas', 'price' => '599 ₽', 'image' => 'ideas.jpg'],
                    ['name' => 'LEGO Architecture', 'price' => '459 ₽', 'image' => 'architecture.jpg'],
                    ['name' => 'LEGO Seasonal', 'price' => '429 ₽', 'image' => 'seasonal.jpg']
                ]
            ]
        ];

        // Вывод коллекций
        foreach ($collections as $collection) {
            echo "
            <section id='{$collection['id']}' class='collection-section'>
                <h2>{$collection['title']}</h2>
                <p class='collection-description'>{$collection['description']}</p>
                <div class='minifigures-grid'>
            ";

            foreach ($collection['items'] as $item) {
                echo "
                <div class='minifigure-card'>
                    <div class='minifigure-image'>
                        <img src='images/{$item['image']}' alt='{$item['name']}' onerror=\"this.src='images/placeholder.jpg'\">
                    </div>
                    <div class='minifigure-info'>
                        <h3>{$item['name']}</h3>
                        <div class='price'>{$item['price']}</div>
                        <button class='add-to-cart' data-name='{$item['name']}' data-price='{$item['price']}'>
                            Добавить в корзину
                        </button>
                    </div>
                </div>
                ";
            }

            echo "
                </div>
            </section>
            ";
        }
        ?>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 LEGO Минифигурки. Все права защищены.</p>
        </div>
    </footer>

    <!-- Корзина -->
    <div id="cart-sidebar" class="cart-sidebar">
        <div class="cart-header">
            <h3>Корзина</h3>
            <button id="close-cart" class="close-cart">&times;</button>
        </div>
        <div id="cart-items" class="cart-items">
            <!-- Товары будут добавляться через JavaScript -->
        </div>
        <div class="cart-footer">
            <div id="cart-total" class="cart-total">Итого: 0 ₽</div>
            <button id="checkout-btn" class="checkout-btn">Оформить заказ</button>
        </div>
    </div>

    <div id="cart-overlay" class="cart-overlay"></div>

    <script src="script.js"></script>
</body>
</html>