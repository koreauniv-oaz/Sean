<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="" />
        <title>카카오프렌즈 클론 코딩</title>
        <!-- meta는 속성을 정의해준다. 썸네일에 뜨는 제목 url img 등등 -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> -->
        <!-- bootstrap는 library를  이용해서 stylesheet을 외부에서 받아온다.-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/gallery.theme.css">
        <link rel="stylesheet" href="assets/css/gallery.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/img/kakaofriends_img.png">
    </head>

    <body>
         <header class="mb-5" style="position:fixed;width:70%;z-index:9999;margin-left:auto;margin-right:auto;left:0;right:0;">
                <nav class="navbar navbar-expand-md">
                    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" id="title" href="">KAKAO FRIENDS</a>
                            </li>
                        </ul>
                    </div>

                    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link" id="menu" href="">카테고리</a>
                                        <div class="dropdown-content" id="content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-2" id="submenu">
                                                        <a href="#">전체분류</a>
                                                        <a href="#">link1</a>
                                                        <a href="#">link2</a>
                                                        <a href="#">link3</a>
                                                    </div>
                                                    <div class="col-4" id="submenu">
                                                        
                                                    </div>
                                                    <div class="col-6" id="submenu">
                                                       
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                          <a href="#">Link 1</a>
                                          <a href="#">Link 2</a>
                                          <a href="#">Link 3</a>
                                        </div>
                                </div>        
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="menu" href="">스토리</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="menu" href="">뮤지엄</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="menu" href="">매장안내</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="menu" href="">고객센터</a>
                            </li>
                        </ul>
                    </div>
                
                    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <span style="font-size:1.2rem;"><i class="fa fa-search"></i></span>
                            </li>
                            <li class="nav-item">
                                <span style="font-size:1.2rem;">
                                        <div class="dropdown-content" id="content">
                                            <div class="col-2" id="submenu">
                                                <a href="#">회원가입</a>
                                                <a href="#">로그인</a>
                                                <a href="#">마이페이지</a>
                                            </div>
                                        </div>
                                </div>
                                    <i class="fa fa-user"></i>
                                </span>                           
                            </li>
                            <li class="nav-item">
                                <span style="font-size:1.2rem;"><i class="fa fa-shopping-cart"></i></span>
                            </li>
                            <li class="nav-item">
                                <span style="font-size:1.2rem;"><i class="fa fa-globe"></i></span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            
            <section>
                <div class="gallery">
                        <div id="item-1" class="control-operator"></div>
                        <div id="item-2" class="control-operator"></div>
                        <div id="item-3" class="control-operator"></div>
                    
                        <figure class="item">
                        <div class="secondary-controls">
                                <div class="superfluous">
                                    <nav>
                                        <a href="#item-3"><i class="fa fa-arrow-left"></i></a>
                                        <a href="#item-2"><i class="fa fa-arrow-right"></i></a>
                                    </nav>
                                </div>
                            </div>
                        </figure>
                    
                        <figure class="item">
                                <div class="secondary-controls">
                                        <div class="superfluous">
                                            <nav>
                                                <a href="#item-1"><i class="fa fa-arrow-left"></i></a>
                                                <a href="#item-3"><i class="fa fa-arrow-right"></i></a>
                                            </nav>
                                        </div>
                                    </div>
                        </figure>
                    
                        <figure class="item">
                                <div class="secondary-controls">
                                        <div class="superfluous">
                                            <nav>
                                                <a href="#item-2"><i class="fa fa-arrow-left"></i></a>
                                                <a href="#item-1"><i class="fa fa-arrow-right"></i></a>
                                            </nav>
                                        </div>
                                    </div>
                        </figure>
                    
                        <div class="controls">
                        <a href="#item-1" class="control-button">•</a>
                        <a href="#item-2" class="control-button">•</a>
                        <a href="#item-3" class="control-button">•</a>
                        </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img id="card" src="assets/img/image1.jpg">
                        </div>
                        <div class="col">
                            <img id="card" src="assets/img/image1.jpg">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <img id="card" src="assets/img/image1.jpg">
                        </div>
                        <div class="col">
                            <img id="card" src="assets/img/image1.jpg">
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <hr>
                <div class="container">
                    <h1 id="subtitle">새로 나온 신상품</h1>
                </div>
                <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="assets/img/image1.jpg">
                            </div>
                        </div>
                        <div class="col">

                        </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="assets/img/image2.jpg">
                        </div>
                    </div>
                    <div class="col-4" style="margin-top:30px;">
                        <h3>카카오프렌즈_초코쿠키</h3>
                        <p>1500원 | 0000 </p>
                        <button>담기</button>
                    </div>
                <div class="row">
                        <div class="col-2">
                            <img src="assets/img/image2.jpg">
                        </div>
                    </div>
                    <div class="col-4" style="margin-top:30px;">
                        <h3>카카오프렌즈_초코쿠키</h3>
                        <p>1500원 | 0000 </p>
                        <button>담기</button>
                    </div>
                </div>
            </section>
            <footer>
                <img src="assets/img/kakaofriends_img.png" width:350px; height:100px> 
            </footer>

        <script src="assets/css/bootstrap.min.js"></script>
    </body>
</html>