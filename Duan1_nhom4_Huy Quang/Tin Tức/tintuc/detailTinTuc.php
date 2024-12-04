<?php require_once 'views/layout/header.php'; ?>

<?php require_once 'views/layout/menu.php'; ?>

<main>
    <!-- breadcrumb area start -->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= htmlspecialchars($post['tieu_de']) ?></title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <?php if (!empty($post['anh'])): ?>
                <div class="image-container">
                    <img src="<?= htmlspecialchars($post['anh']) ?>" alt="<?= htmlspecialchars($post['tieu_de']) ?>"
                        class="news-image">
                    <div class="conten">
                        <h1><?= htmlspecialchars($post['tieu_de']) ?></h1>
                        <div class="content">
                            <?= nl2br(htmlspecialchars($post['noi_dung'])) ?>
                        </div>
                    </div>
                </div>

            <?php endif; ?>


            <div class="moo">
                <p><strong>Ngày đăng:</strong> <?= htmlspecialchars($post['ngay_dang']) ?></p>
                <a href="index.php?act=danh-sach-tin-tuc" class="back-btn">Quay lại</a>
            </div>

        </div>
        <style>
            /* Container chi tiết bài viết */
            .container {
                max-width: 1200px;
                margin: 40px auto;
                padding: 30px;
                background: #fff;
                border-radius: 12px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
                color: #333;
            }

            /* Tiêu đề bài viết */
            .container h1 {
                font-size: 28px;
                color: #c29958;
                margin-bottom: 25px;
                font-weight: 600;
                line-height: 1.4;
                position: relative;
                padding-bottom: 15px;
            }

            .container h1:after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 60px;
                height: 3px;
                background-color: #c29958;
            }

            /* Nội dung bài viết */
            .content {
                font-size: 16px;
                line-height: 1.8;
                color: #5a6c7d;
                margin-bottom: 30px;
            }

            /* Nút quay lại */
            .back-btn {
                display: inline-block;
                padding: 10px 25px;
                background-color: #c29958;
                color: #ffffff;
                text-decoration: none;
                font-size: 15px;
                font-weight: 500;
                border-radius: 6px;
                transition: all 0.3s ease;
            }

            .back-btn:hover {
                background-color: #a88344;
                transform: translateY(-1px);
                box-shadow: 0 4px 8px rgba(194, 153, 88, 0.2);
            }

            /* Hình ảnh bài viết */
            .news-image {
                width: 500px;
                height: 500px;
                object-fit: cover;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            /* Container hình ảnh và nội dung */
            .image-container {
                display: flex;
                gap: 30px;
                margin-bottom: 30px;
            }

            .conten {
                flex: 1;
            }

            /* Phần meta data */
            .moo {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-top: 20px;
                border-top: 1px solid #eaeaea;
            }

            .moo p {
                color: #666;
                font-size: 14px;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .container {
                    padding: 20px;
                    margin: 20px;
                }

                .image-container {
                    flex-direction: column;
                }

                .news-image {
                    width: 100%;
                    height: auto;
                }

                .container h1 {
                    font-size: 24px;
                }

                .moo {
                    flex-direction: column;
                    gap: 15px;
                }

                .back-btn {
                    width: 100%;
                    text-align: center;
                }
            }
        </style>
        <?php require_once 'views/layout/footer.php'; ?>