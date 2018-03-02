<?php require_once('includes/header.php'); ?>


<div class="slider-wrap">
    <div class="promo_slider owl-carousel owl-theme">
        <div class="slide">
            <img src="img/test.jpg" alt="">
        </div>
        <div class="slide">
            <img src="img/test.jpg" alt="">
        </div>
        <div class="slide">
            <img src="img/test.jpg" alt="">
        </div>
    </div>
</div>

<div class="bradcrumbs">
    <ul>
        <li><a href="#">Каталог </a></li>
    </ul>
</div>  

<div class="catalog container"> 
    <div class="catalog_inner">  
        <div class="sidebar-catalog">
            <h3 class="main-title cat-title">Категории</h3>
            <div class="burger-cat"></div>
            <ul class="cat-list">
                <li><a class="cat-link" href="#">Спорт</a>
                    <ul>
                        <li><a href="#">Футболки с Хабибом</a></li>
                        <li><a href="#">Подкатегория2</a></li>
                        <li><a href="#">Подкатегория3</a></li>
                        <li><a href="#">Подкатегория4</a></li>
                        <li><a href="#">Подкатегория5</a></li>
                    </ul>
                </li>
                <li>
                    <a class="cat-link" href="#">Кавказ</a>
                    <ul>
                        <li><a href="#">Подкатегория1</a></li>
                        <li><a href="#">Подкатегория2</a></li>
                        <li><a href="#">Подкатегория3</a></li>
                        <li><a href="#">Подкатегория4</a></li>
                        <li><a href="#">Подкатегория5</a></li>
                    </ul>
                </li>
                <li><a class="cat-link" href="#">Фильмы</a></li>
                <li><a class="cat-link" href="#">Кинозвезды</a></li>
                <li><a class="cat-link" href="#">Детские</a></li>
            </ul>
        </div>

        <div class="content-catalog">
            <div class="category-top">
                <h1 class="main-title">Каталог</h1>
                <div class="search-box">
                    <form action="#" method="post">
                        <input class="search-area" type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                </div>
            </div>

            <div class="product-box">
                <div class="cart">
                    <a href="#"><img src="img/cat-img.jpg" alt=""></a>
                    <a class="blog-box_btn cart_btn" href="category.php">Подробнее</a>
                    <div class="cart_info cat_info">
                        <a href="category.php">Спорт</a><br>
                    </div>
                </div>

                <div class="cart">
                    <a href="#"><img src="img/cat-img2.jpg" alt=""></a>
                    <a class="blog-box_btn cart_btn" href="#">Подробнее</a>
                    <div class="cart_info cat_info">
                        <a href="#">Кавказ</a><br>
                    </div>
                </div>

                <div class="cart">
                    <a href="#"><img src="img/cat-img3.jpg" alt=""></a>
                    <a class="blog-box_btn cart_btn" href="#">Подробнее</a>
                    <div class="cart_info cat_info">
                        <a href="#">Фильмы</a><br>
                    </div>
                </div>

                <div class="cart">
                    <a href="#"><img src="img/cat-img4.jpg" alt=""></a>
                    <a class="blog-box_btn cart_btn" href="#">Подробнее</a>
                    <div class="cart_info cat_info">
                        <a href="#">Кинозвезды</a><br>
                    </div>
                </div>

                <div class="cart">
                    <a href="#"><img src="img/cat-img5.jpg" alt=""></a>
                    <a class="blog-box_btn cart_btn" href="#">Подробнее</a>
                    <div class="cart_info cat_info">
                        <a href="#">Детские</a><br>
                    </div>
                </div>
                
            </div>

            <div class="pagination">
                <ul>
                    <li><a href="#">Назад</a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">50</a></li>
                    <li><a href="#">Далее</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require_once('includes/footer.php'); ?>









