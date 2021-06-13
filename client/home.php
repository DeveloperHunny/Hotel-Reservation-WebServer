<?php 
    //Check the user's status is login
    //if not login, back to login page
    session_start();
    if($_SESSION['client_user'] == 'NONE' || !isset($_SESSION['client_user'])){
        echo ("<script>location.replace('../index.php')</script>");
    }

?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8"/>
        <title>HOME</title>
        <link rel="stylesheet" href="../css/home.css"/>
        <script src="https://kit.fontawesome.com/d040bc7e91.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <div class="logo">
                    <i class="fas fa-h-square" alt="Logo"></i>
                    <span id=title><a href="home.php"><h2>Hotel</h2></a></span>
                </div>
                <input type="checkbox" id="moreBtn"/>
                <label for="moreBtn"><i class="fas fa-bars"></i></label>
                <nav>
                    <ul>
                        <li><a href='#'>Instroduction</a></li>
                        <li><a href='#'>Room</a></li>
                        <li><a href='#'>Service</a></li>
                        <li><a href='reservation.php'>Reservation</a></li>
                        <li><a href='#'>Community</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <div class="photo">
                    <img src="../img/HotelImg1.jpg" style="width:100%; height:auto;vertical-align:top;">
                </div>
                <div class="content">
                    <div id="introduction">
                        <span id="title"><h3>Hotel Introduction</h3></span>
                        <p>쾌적하고 편안한 휴식에 초점을 맞추어 설계된 JW 메리어트 호텔 서울의 객실은 펜트하우스 2개와 
                            스위트룸 32개를 포함해 총 379개로 구성되어 있습니다. 한국의 전통미와 모던한 인테리어가 
                            아름다운 조화를 이루는 객실 디자인과 더불어 시몬스 최상위 컬렉션인 뷰티레스트 
                            랙 매트리스, 릴렉싱 소파를 갖추고 있어 진정한 휴식과 힐링, 숙면을 위한 최적의 공간을 
                            제공합니다. 대리석으로 꾸며진 욕실 내 샤워 부스 바닥에는 피톤치드를 내뿜는 히노끼 매트를 
                            설치해 은은히 올라오는 편백나무 향 속에서 쾌적하게 목욕을 즐기실 수 있으며, 허브와 꽃, 
                            씨앗 등에서 추출한 자연 성분과 프랑스 프로방스 라벤더 향을 담은 특별한 어메니티가 함께 준비되어 있습니다.</p>
                    </div>
                    <div class="mainBox">
                        <div id="tabMenu">
                            <input type="radio" id="tab_btn_notice" name="tabBtn" checked="checked">
                            <label for="tab_btn_notice">공지사항</label>
                            <input type="radio" id="tab_btn_community" name="tabBtn">
                            <label for="tab_btn_community">커뮤니티</label>
                            <input type="radio" id="tab_btn_question" name="tabBtn">
                            <label for="tab_btn_question">Q&A</label>

                            <section id="tab_content_notice" class="tabContent">
                                <ul>
                                    <li><a href="#">공지사항1</a></li>
                                    <li><a href="#">공지사항2</a></li>
                                    <li><a href="#">공지사항3</a></li>
                                    <li><a href="#">공지사항4</a></li>
                                    <li><a href="#">공지사항5</a></li>
                                </ul>
                            </section>
                            <section id="tab_content_community" class="tabContent">
                                <ul>
                                    <li><a href="#">자유의견1</a></li>
                                    <li><a href="#">자유의견2</a></li>
                                    <li><a href="#">자유의견3</a></li>
                                    <li><a href="#">자유의견4</a></li>
                                    <li><a href="#">자유의견5</a></li>
                                </ul>
                            </section>
                            <section id="tab_content_question" class="tabContent">
                                <ul>
                                    <li><a href="#">질문1</a></li>
                                    <li><a href="#">질문2</a></li>
                                    <li><a href="#">질문3</a></li>
                                    <li><a href="#">질문4</a></li>
                                    <li><a href="#">질문5</a></li>
                                </ul>
                            </section>
                        </div>
                        <div id="serviceMenu">
                            <span id = title><h3>바로가기</h3></span>
                            <ul>
                                <li><a href="#">예약하기</a></li>
                                <li><a href="#">찾아오는 길</a></li>
                                <li><a href="#">주변 시설</a></li>
                                <li><a href="#">식단</a></li>
                                <li><a href="#">기타</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <div class="logo">
                    <i class="fas fa-h-square" alt="Logo"></i>
                    <span id=title><h2>Hotel</h2></span>
                </div>
                <div class="info">
                    <span>주소: 대한민국 경기도 용인시 XXX로</span>
                    <span>대표: 고대훈</span>
                    <span>사업자번호: 123-4567-123</span>
                    <span>전화: 1588-0000</span>
                    <span>이메일: eogns0321@gmail.com</span>
                </div>
            </footer>
        </div>
    </body>
</html>

