<?php require_once 'views/layout/header.php'; ?>
<?php require_once 'views/layout/menu.php'; ?>

<main>
    <!-- Breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tin Tức</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->

    <div class="news-container">
        <h1 class="news-title">Tin Tức Mới Nhất</h1>
        
        <?php if (!empty($news)): ?>
            <div class="news-grid">
                <?php foreach ($news as $item): ?>
                    <article class="news-item">
                        <?php if (!empty($item['anh'])): ?>
                            <div class="news-image">
                                <img src="<?= htmlspecialchars($item['anh']) ?>" alt="<?= htmlspecialchars($item['tieu_de']) ?>">
                            </div>
                        <?php endif; ?>
                        <div class="news-content">
                            <h4><?= htmlspecialchars($item['tieu_de']) ?></h4>
                            <span class="news-date">
                                <i class="far fa-calendar-alt"></i>
                                <?= date('d/m/Y', strtotime($item['ngay_dang'])) ?>
                            </span>
                            <p><?= nl2br(htmlspecialchars(substr($item['noi_dung'], 0, 150))) ?>...</p>
                            <a href="index.php?act=chi-tiet-tin-tuc&id=<?= htmlspecialchars($item['id']) ?>" 
                               class="detail-btn">
                                Xem chi tiết
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="empty-state">
                <i class="far fa-newspaper fa-3x"></i>
                <p>Chưa có bài viết nào được đăng tải!</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php require_once 'views/layout/footer.php'; ?>
<style>
    /* News Container Styles */
.news-container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
}

/* Breadcrumb Styles */
.breadcrumb-area {
    background-color: #f8f9fa;
    padding: 15px 0;
    margin-bottom: 30px;
}

.breadcrumb {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}

.breadcrumb-item {
    font-size: 14px;
    color: #6c757d;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "/";
    padding: 0 8px;
    color: #6c757d;
}

.breadcrumb-item a {
    color: #5F9EA0;
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb-item a:hover {
    color: #4a7d7f;
}

/* News List Title */
.news-title {
    font-size: 32px;
    color: #2c3e50;
    margin-bottom: 30px;
    text-align: center;
    font-weight: 600;
}

/* News Grid Layout */
.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
    margin: 30px 0;
}

/* News Item Card */
.news-item {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid #eaeaea;
}

.news-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}

/* News Image */
.news-image {
    width: 100%;
    height: 200px;
    overflow: hidden;
}

.news-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.news-item:hover .news-image img {
    transform: scale(1.05);
}

/* News Content */
.news-content {
    padding: 20px;
}

.news-content h4 {
    font-size: 20px;
    color: #c29958;
    margin: 0 0 12px 0;
    font-weight: 600;
    line-height: 1.4;
}

.news-date {
    display: block;
    color: #666;
    font-size: 14px;
    margin-bottom: 12px;
}

.news-date i {
    margin-right: 5px;
    color: #c29958;
}

.news-content p {
    color: #5a6c7d;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 15px;
}

/* Detail Button */
.detail-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #c29958;
    color: #ffffff;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 500;
    font-size: 14px;
    transition: all 0.3s ease;
}

.detail-btn:hover {
    background-color: #a88344;
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(194, 153, 88, 0.2);
}

/* Empty State */
.empty-state {
    text-align: center;
    padding: 40px 20px;
    color: #666;
}

.empty-state i {
    color: #c29958;
    margin-bottom: 15px;
}

/* Responsive */
@media (max-width: 768px) {
    .news-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .news-content h4 {
        font-size: 18px;
    }

    .news-image {
        height: 180px;
    }
}
</style>