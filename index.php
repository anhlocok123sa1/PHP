<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fonts/fontawesome-free-6.4.2/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/responesive.css">
    <title>Document</title>
</head>
<body>
    <div class="app">
        <?php
            include("admincp/config/config.php");
            include("pages/header.php");
            include("pages/main.php");
            include("pages/footer.php");
        ?>
    </div>
    
    <!-- Modal layout -->
    <div class="modal">
        <div class="modal__overlay"></div>
        
        <div class="modal__body">
            <!-- Register form -->
            <!-- <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__switch-btn">Đăng nhập</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Số điện thoại">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Mật khâu">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Nhập lại mật khâu">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">Bằng việc đăng kí, bạn đã đồng ý với Shopee về <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> & <a href="" class="auth-form__text-link">Chính sách bảo mật</a></p>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn auth-form__controls-back btn--normal">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <p class="auth-form__socials-title">Kết nối với Facebook</p>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <p class="auth-form__socials-title">Kết nối với Google</p>
                    </a>
                </div>
            </div> -->

            <!-- Login form -->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch-btn">Đăng ký</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Số điện thoại">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Mật khâu">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                            <span class="auth-form__help-separate"></span>
                            <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                        </div>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn auth-form__controls-back btn--normal">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <p class="auth-form__socials-title">Đăng nhập với Facebook</p>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <p class="auth-form__socials-title">Đăng nhập với Google</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>