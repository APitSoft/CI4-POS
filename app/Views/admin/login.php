<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? '' ?></title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= BASEURL ?>public/assets/images/favicon.png">
    <link href="<?= BASEURL ?>public/assets/css/all.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="<?= BASEURL ?>public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-content {
            width: 100%;
            height: 100vh;
            background-color: rgb(219, 219, 219);
            background-position: center;
            background-size: cover;
            position: relative;
            display: flex;
            justify-content: center;
        }

        .img1 {
            background-image: url(<?= base_url('assets/images/login_page/img1.jpg') ?>);

        }

        .img2 {
            background-image: url(<?= base_url('assets/images/login_page/img2.jpg') ?>);

        }

        .img3 {
            background-image: url(<?= base_url('assets/images/login_page/img3.jpg') ?>);

        }

        .img4 {
            background-image: url(<?= base_url('assets/images/login_page/img4.jpg') ?>);

        }

        .img5 {
            background-image: url(<?= base_url('assets/images/login_page/img5.jpg') ?>);

        }

        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-backdrop-filter: blur(50px);
            backdrop-filter: blur(50px);
            background-color: rgba(43, 43, 43, 0.3);
        }

        .main-box {
            position: absolute;
            z-index: 999;
            width: 350px;
            height: 300px;
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            background-color: #ffffff30;
            /* border-radius: 5px; */
            padding: 30px;
            /* bottom: 13%; */
            margin-top: 150px;
        }

        .main-img {
            position: absolute;
            z-index: 999;
            width: 250px;
            height: 150px;
            display: block;
        }

        .main-footer {
            position: absolute;
            z-index: 999;
            bottom: 5%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="main-content img1">
        <div style="width: 30%; height: auto; padding-top: 50px;">
            <div class="d-flex justify-content-center p-4">
                <img class="main-img" src="<?= base_url('assets/images/login_page/') ?>logo.jpg" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <div class="main-box">
                    <h4 class="text-light">Login</h4>
                    <form style="margin-top: 25px;" action="<?= base_url('authentication') ?>" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" style="background-color: white;"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="username" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" style="background-color: white;"><i class="fa-solid fa-mobile-screen text-muted"></i></span>
                            <input type="text" class="form-control" placeholder="Cabang" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" style="background-color: white;"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="password" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-light">Update 10 April 2023</p>
                            <button type="submit" class="btn btn-primary py-1">
                                Login <i class="fa-regular fa-circle-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="main-footer">
            <p class="text-center text-white">e-Abiyosoft - 2021 &copy; e-soft&#8482</p>
        </div>
    </div>
    <div class="background-overlay"></div>

    <script>
        let mainContent = document.querySelector(".main-content");
        let imgClass = ['img1', 'img2', 'img3', 'img4', 'img5'];
        setInterval(function() {
            let getPreviousImage = mainContent.classList[1];
            let randomNumber = Math.floor(Math.random() * 5);
            let image = imgClass[randomNumber];
            if (getPreviousImage != image) {
                mainContent.classList.remove(getPreviousImage);
                mainContent.classList.add(image);
            } else {
                if (randomNumber != 0) {
                    mainContent.classList.remove(getPreviousImage);
                    mainContent.classList.add(imgClass[(new Number(randomNumber) - 1)]);
                } else {
                    mainContent.classList.remove(getPreviousImage);
                    mainContent.classList.add(imgClass[(new Number(randomNumber) + 1)]);
                }
            }
        }, 5000)
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
</body>

</html>