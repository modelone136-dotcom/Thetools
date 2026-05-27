<?php include 'includes/header.php'; ?>
    
    
    <section class="section-padding bg-light center-text">
    
                <h2 class="section-title" style="font-family: 'Times New Roman', Times, serif; font-size: 36px;">Our Best Collection</h2>
                <p class="section-subtitle">Discover the season's most requested pieces</p>
                                
                <div class="summer-hero-banner" style="background: url('images/collect/Siren_banner') no-repeat center/cover; background-color: #004721; padding: 120px 20px; border-radius: 15px; max-width: 1200px; margin: 0 auto 40px; position: relative;">
                    <h2 style="font-family: Arial, sans-serif; font-size: 60px; color: #fff; text-shadow: 2px 2px 10px rgba(0,0,0,0.2); letter-spacing: 2px; text-transform: uppercase;">
                        Siren <span style="font-family: 'Times New Roman', serif; font-style: italic; text-transform: lowercase; font-size: 70px;">Song</span> Collection
                    </h2>
                </div>
                
                <div class="luxury-grid-4">
                    <?php foreach($best_collection as $item): ?>
                        <div class="luxury-cat-card">
                            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>">
                            <div class="cat-overlay"></div>
                            <h3 style="font-size: 18px;"><?php echo $item['name']; ?></h3>
                        </div>
                    <?php endforeach; ?>
                </div>
        </section>
    <div class="page-title-banner" style="background: #fafafa; padding: 60px 0; text-align: center;">
                <h1 style="font-size: 36px; margin-bottom: 10px;">Our Collections</h1>
                <p style="color: #666;">A companion for every occasion</p>
    </div>

    <section class="section-padding">
        <div class="luxury-grid-2x2">
            <?php foreach($collection_categories as $cat): ?>
                <div class="luxury-cat-card">
                    <img src="<?php echo $cat['img']; ?>" alt="<?php echo $cat['name']; ?>">
                    <div class="cat-overlay"></div>
                    <h3><?php echo $cat['name']; ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section-padding center-text bg-light">
        <h2 class="section-title" style="font-family: serif; font-size: 36px;">Styling 101 With Diamonds</h2>
        <p class="section-subtitle">Trendsetting diamond jewellery suited for every occasion</p>
        
        <div class="coverflow-container" id="slider-1">
            <div class="coverflow-track">
                <?php foreach($styling_101 as $index => $style): ?>
                    <div class="coverflow-slide" data-index="<?php echo $index; ?>">
                        <img src="<?php echo $style['img']; ?>" alt="Style">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section-padding center-text" style="background-color: #e8ded4;">
        <h2 class="section-title" style="font-family: serif; font-size: 36px;">Choose Your Look</h2>
        
        <div class="coverflow-container" id="slider-2">
            <div class="coverflow-track">
                <?php foreach($choose_your_look as $index => $look): ?>
                    <div class="coverflow-slide" data-index="<?php echo $index; ?>">
                        <img src="<?php echo $look['img']; ?>" alt="<?php echo $look['name']; ?>">
                        <h4 class="slide-label"><?php echo $look['name']; ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section-padding center-text bg-light">
            <h2 class="section-title" style="font-family: 'Times New Roman', Times, serif; font-size: 36px;">Choose Your Gemstone</h2>
            
            <div class="coverflow-container" id="slider-3">
                <div class="coverflow-track">
                    <?php foreach($choose_gemstone as $index => $gem): ?>
                        <div class="coverflow-slide" data-index="<?php echo $index; ?>">
                            <img src="<?php echo $gem['img']; ?>" alt="<?php echo $gem['name']; ?>">
                            <h4 class="slide-label"><?php echo $gem['name']; ?></h4>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    
        <section class="section-padding center-text" style="background-color: #f4ece4;">
            <h2 class="section-title" style="font-family: 'Times New Roman', Times, serif; font-size: 36px;">Choose From Item</h2>
            
            <div class="coverflow-container" id="slider-4">
                <div class="coverflow-track">
                    <?php foreach($choose_item as $index => $item): ?>
                        <div class="coverflow-slide" data-index="<?php echo $index; ?>">
                            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>">
                            <h4 class="slide-label"><?php echo $item['name']; ?></h4>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    
        <section class="section-padding center-text" style="background-color: #ffffff;">
            <h2 class="section-title" style="font-family: 'Times New Roman', Times, serif; font-size: 36px;">Choose From Our Collection</h2>
            
            <div class="coverflow-container" id="slider-5">
                <div class="coverflow-track">
                    <?php foreach($choose_collection as $index => $collection_item): ?>
                        <div class="coverflow-slide" data-index="<?php echo $index; ?>">
                            <img src="<?php echo $collection_item['img']; ?>" alt="<?php echo $collection_item['name']; ?>">
                            <h4 class="slide-label"><?php echo $collection_item['name']; ?></h4>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>