<?php include 'includes/header.php'; ?>

    <section class="hero">
        <div class="hero-arrows">
            <button id="next-slide"><i class="fas fa-arrow-right"></i></button>
            <button id="prev-slide"><i class="fas fa-arrow-left"></i></button>
        </div>

        <div class="hero-slide active" style="background-image: url('images/Banner_1.png');">
            <div class="hero-content">
                <h1>Add A Touch Of Luxury To Your Look Jewelry</h1>
                <p>Add A Touch Of Luxury To Your Look Jewelry</p>
                <a href="#" class="btn-outline-dark">Shop Now <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="hero-slide" style="background-image: url('images/Banner_3.png');">
            <div class="hero-content">
                <h1>Discover Our New Summer Collection</h1>
                <p>Exclusive designs for modern elegance.</p>
                <a href="#" class="btn-outline-dark">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="hero-slide" style="background-image: url('images/Banner_2.png');">
            <div class="hero-content">
                <h1>Timeless Classics for Every Occasion</h1>
                <p>Find the perfect gift for your loved ones.</p>
                <a href="#" class="btn-outline-dark">Shop Gifts <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <section class="collections-section">
        <div class="collections-intro">
            <h2>Shop By Jewelry<br>Collection</h2>
            <p>Lets redefine Jewelry together</p>
            <a href="#" class="btn-outline-dark">See More Collection <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="collections-grid">
            <?php foreach($collections as $item): ?>
                <div class="collection-card">
                    <div class="image-circle"><img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>"></div>
                    <h3><?php echo $item['name']; ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section-padding center-text">
        <h2 class="section-title">Popular Product</h2>
        <p class="section-subtitle">Tryout Some Trending Style only for you</p>
        <div class="product-grid">
            <?php foreach($popular_products as $product): ?>
                <div class="product-card">
                    <div class="img-bg"><img src="<?php echo $product['img']; ?>" alt="Product"></div>
                    <p class="category"><?php echo $product['category']; ?></p>
                    <h4><?php echo $product['name']; ?></h4>
                    <div class="price-row">
                        <span class="price"><?php echo $product['price']; ?></span>
                        <span class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="deals-section section-padding">
        <div class="deals-banner">
            <div class="deals-text">
                <h2>Hurry, Deals Ends Soon</h2>
                <p>Elegent, Classy, Precious Same As You</p>
            </div>
            <img src="images/Offer_image.png" class="deals-center-img" alt="Necklace on Stand">
            
            <div class="deals-timer" id="countdown-timer">
                <div class="time-box"><span>DAYS</span><strong id="days">240</strong></div>
                <div class="time-box"><span>HRS</span><strong id="hours">04</strong></div>
                <div class="time-box"><span>MNS</span><strong id="minutes">15</strong></div>
                <div class="time-box"><span>SEC</span><strong id="seconds">55</strong></div>
            </div>
        </div>

        <div class="product-grid deals-products">
             <?php 
             // We use a simple loop to grab the first 3 products from our data.php file
             for($i=0; $i<3; $i++): 
                 if(isset($popular_products[$i])):
             ?>
                <div class="product-card flex-row-card">
                    <div class="img-bg small-img"><img src="<?php echo $popular_products[$i]['img']; ?>" alt="Product"></div>
                    <div class="card-details">
                        <p class="category"><?php echo $popular_products[$i]['category']; ?></p>
                        <h4><?php echo $popular_products[$i]['name']; ?></h4>
                        <div class="price-row">
                            <span class="price"><?php echo $popular_products[$i]['price']; ?></span>
                            <span class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
            <?php 
                 endif;
             endfor; 
             ?>
        </div>
    </section>
    <section class="section-padding bg-light center-text">
            
            <div class="summer-hero-banner" style="background: url('images/Summer_banner.png') no-repeat center/cover; background-color: #72a6b5; padding: 120px 20px; border-radius: 15px; max-width: 1200px; margin: 0 auto 40px; position: relative;">
                <h2 style="font-family: Arial, sans-serif; font-size: 60px; color: #fff; text-shadow: 2px 2px 10px rgba(0,0,0,0.2); letter-spacing: 2px; text-transform: uppercase;">
                    Summer <span style="font-family: 'Times New Roman', serif; font-style: italic; text-transform: lowercase; font-size: 70px;">just</span> Dropped
                </h2>
            </div>
            <div class="luxury-grid-4">
                <?php 
                // We check if the array exists just in case!
                if(isset($summer_collection)):
                    foreach($summer_collection as $item): 
                ?>
                    <div class="luxury-cat-card">
                        <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>">
                        <div class="cat-overlay"></div>
                        <h3 style="font-size: 18px;"><?php echo $item['name']; ?></h3>
                    </div>
                <?php 
                    endforeach; 
                endif; 
                ?>
            </div>
    </section>
    <section class="promo-banners section-padding">
        
        <div class="banner banner-1">
            <div class="banner-content">
                <small>NEW COLLECTION</small>
                <h3>Women<br>Collection</h3>
                <p class="price-tag">$200.00</p>
                <div class="banner-buttons">
                    <a href="#" class="btn-banner">Shop Now</a>
                </div>
            </div>
            <img src="images/Women_Collection.png" alt="Ring" class="banner-img" >
        </div>

        <div class="banner banner-2 bg-dark">
            <div class="banner-content">
                <small>FLAT DISCOUNT</small>
                <h3>Unisex<br>Collection</h3>
                <p class="price-tag">$300.00</p>
                <div class="banner-buttons">
                    <a href="#" class="btn-banner outline-white">Shop Now</a>
                </div>
            </div>
            <img src="images/promo-necklace.png" alt="Necklace" class="banner-img" >
        </div>

        <div class="banner banner-3">
            <div class="banner-content">
                <small>FASHION 2025</small>
                <h3>Men<br>Collection</h3>
                <p class="price-tag">$200.00</p>
                <div class="banner-buttons">
                    <a href="#" class="btn-banner">Shop Now</a>
                </div>
            </div>
            <img src="images/Men_Collection.png" alt="Earrings" class="banner-img">
        </div>

    </section>
   
    <section class="testimonials-section section-padding center-text">
        <h2 class="section-title">What Clients Say About Us</h2>
        <p class="section-subtitle">Our Work Speaks more than any marketing.</p>
        <div class="testimonials-grid">
            <?php foreach($testimonials as $test): ?>
                <div class="test-card">
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="test-text"><?php echo $test['text']; ?></p>
                    <div class="test-author">
                        <img src="<?php echo $test['img']; ?>" alt="Author">
                        <div>
                            <h4><?php echo $test['name']; ?></h4>
                            <p><?php echo $test['role']; ?></p>
                        </div>
                        <i class="fas fa-quote-right quote-icon"></i>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>