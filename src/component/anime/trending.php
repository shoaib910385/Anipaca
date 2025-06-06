<div id="anime-trending">
    <div class="container">
        <section class="block_area block_area_trending">
            <div class="block_area-header">
                <div class="bah-heading">
                    <h2 class="cat-heading">Trending</h2>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="block_area-content">
                <div class="trending-list" id="trending-home" style="">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach ($data['trending'] as $item): ?>
                                <?php
                                    $title = !empty($item['title']) ? $item['title'] : 'Unknown';
                                    $jname = !empty($item['jname']) ? $item['jname'] : $title;
                                ?>
                                <div class="swiper-slide item-qtip" data-id="<?= htmlspecialchars($item['data_id']) ?>" style="width: 209px; margin-right: 15px;">
                                    <div class="item">
                                        <div class="number">
                                            <span><?= htmlspecialchars($item['number']) ?></span>
                                            <div class="film-title dynamic-name"
                                                data-en="<?= htmlspecialchars($title) ?>"
                                                data-jp="<?= htmlspecialchars($jname) ?>">
                                                <?= htmlspecialchars($title) ?>
                                            </div>
                                        </div>
                                        <a href="/details/<?= htmlspecialchars($item['id']) ?>" class="film-poster">
                                            <img data-src="<?= htmlspecialchars($item['poster']) ?>" class="film-poster-img lazyloaded" alt="<?= htmlspecialchars($title) ?>" src="<?= htmlspecialchars($item['poster']) ?>">
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="clearfix"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="trending-navi">
                        <div class="navi-next" tabindex="0" role="button" aria-label="Next slide"><i class="fas fa-angle-right"></i></div>
                        <div class="navi-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide"><i class="fas fa-angle-left"></i></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
