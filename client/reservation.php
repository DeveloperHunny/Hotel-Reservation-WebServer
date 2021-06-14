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
        <title>Reservation</title>
        <link rel="stylesheet" href="../css/reservation.css"/>
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
                <div id="img_wrapper">
                    <img src="../img/hotelRoom1.jpg"/>
                    <span class="title"><h1>Reservation</h1></span>
                </div>
                <div id="info_wrapper">
                    <span class="title"><h1>Reservation</h1></span>
                    <span class="small_bar"></span>
                    <span class="info">객실 예약은 실시간 예약 페이지에서 바로 하실 수 있습니다. 
                        예약 이후 12시간 내 요금 전액을 입금하시면 예약이 완료 되며<br>
                        입금이 확인되지 않을 경우 예약이 취소 될 수 있습니다. 그밖에 예약 
                        전 안내사항을 꼭 확인 부탁드립니다.</span>
                </div>
                <div id="reservation_wrapper">
                    <div id="calender_wrapper">
                        <div id ="controller">
                            <button id="prevMonthBtn"><i class="fas fa-chevron-left"></i></button>
                            <span id="year_month">Current Month</span>
                            <button id="nextMonthBtn"><i class="fas fa-chevron-right"></i></button>
                        </div>
                        <span class="small_bar"></span>
                        <table id="calender">
                            <tr>
                                <td class="day">일요일</td>
                                <td class="day">월요일</td>
                                <td class="day">화요일</td>
                                <td class="day">수요일</td>
                                <td class="day">목요일</td>
                                <td class="day">금요일</td>
                                <td class="day">토요일</td>
                            </tr>
                        </table>
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
    <script src="../js/calender.js"></script>
</html>