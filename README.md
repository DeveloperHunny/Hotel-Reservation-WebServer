# Hotel-Reservation-WebServer
# 호텔 예약 / 관리 웹 서비스
---

사용한 기술 스택 
1. Apache2(웹서버)
2. PHP(백엔드 - 프론트 연결)
3. MySQL(백엔드)

Apache2로 웹페이지를 보여주고 뒤에는 PHP를 이용해 MySQL 백엔드에 연결했다.
* 군대에서 진행하는 프로젝트라 codeanywhere을 적극적으로 이용

ROUGTH SKETCH

호텔 예약 프로그램

apache - php - mysql 

webserver 방식 이용

첫번째 페이지 ⇒ 로그인 페이지

로그인 페이지 detail

1. client or manager 선택 
2. id/pw 로그인 OR 새로운 사람일 경우 회원가입 버튼을 통해 회원 가입
    - 회원가입할 때 client 일 경우 필요한 개인정보 수집

    ex) Id(중복체크 & 추후엔 이메일 형식으로만 받게끔), password(2번), 이름, 전화번호, 성별

    - 회원가입할 때 manager일 경우

    manger인 경우 따로 회원가입 X ⇒ root 계정을 통해 새로 추가해줘야 함.(보안!!!)

3. 로그인 실패 시 ⇒ 다시 로그인 페이지 OR 성공 시 각자 해당하는 page로 이동
    - Client는 예약 / 예약한 목록들 확인 가능한 페이지로 이동. 이때, 예약하는 화면에서는 현재 사용 가능한 방 목록을 알려주고 이미 예약된 방은 예약 못하게끔 설정해야 함.
    - Manger는 client들의 예약 현황을 볼 수 있는 창으로 이동. 이때, 여기서 수정 및 삭제 및 체크인/체크아웃 가능하게 끔!
4. manager로 로그인 했을 경우 해당 계정이 root 계정인지 아닌 지 확인해야 함. 일반 manager 계정일 경우 위에 기술한 기능들만 가능하게 끔 하고, root 계정일 경우 좀 더 많은 작업이 가능하게 끔 설정

    ex) 관리자 관리 버튼 ⇒ manger 계정 관리 가능한 화면으로 이동

필요한 엔터티

Client / 고객 정보

Manger / id, pw만 있으면 됨.(고객이 예약한 방을 관리하는 프로그램이므로 자세한 정보 필요 X)

Room / 방의 정보 (최대 인원, 가격, 예약 유무 등등) 

필요한 테이블

Client - id/pw 및 예약 정보 ID만 존재

ClientDetail - 고객에 대한 자세한 정보 존재

BookingList - 고객이 예약한 목록들 정보

Manger - id/pw만 필요

Room - 방의 정보(최대 인원, 가격, 예약 유무 등)
