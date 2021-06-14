let date = new Date();
let today = date.getDate();
let curMonth = date.getMonth();
let isfirst = true;
RenderCalender();
isfirst = false;

function RenderCalender(){
    let viewYear = date.getFullYear();
    let viewMonth = date.getMonth();

    //year_month text 넣기
    let year_month = document.querySelector("#controller #year_month");
    year_month.innerHTML = `<h3>${viewYear}년 ${viewMonth +1}월</h3>`;

    //date object 생성
    let prevLast = new Date(viewYear, viewMonth, 0);
    let curLast = new Date(viewYear, viewMonth+1,0);

    //date 생성
    let prevLastDate = prevLast.getDate();
    let curLastDate = curLast.getDate();

    //day 생성
    let prevLastDay = prevLast.getDay();
    let curLastDay = curLast.getDay();

    //배열 생성
    let prevCalender = new Array();
    let curCalender = new Array(curLastDate);
    let nextCalender = new Array();


    //배열에 값 넣기
    //prev Calander 배열 채우기
    if(prevLastDay != 6){ //지난 달 마지막이 토요일(6)일 경우 배열 채울 필요 X
        for(let i = 0; i <= prevLastDay; i++){
            prevCalender.unshift(prevLastDate-i);
        }
    }

    //current Calender 배열 채우기
    for(let i = 0; i < curCalender.length; i++){
        curCalender[i] = i+1;
    }

    //next Calender 배열 채우기
    if(curLastDay != 6){//이번 달 마지막이 토요일(6)일 경우 배열 채울 필요 X
        for(let i = 1; i <= 6 - curLastDay; i++){
            nextCalender.push(i);
        }
    }

    let calenderArray = prevCalender.concat(curCalender,nextCalender);

    let firstDateIndex = calenderArray.indexOf(1);
    let lastDateIndex = calenderArray.lastIndexOf(curLastDate);
    let calender = document.querySelector('#calender_wrapper #calender');
    if(!isfirst){
        calender.innerHTML = `<tr>
                                <td class="day">일요일</td>
                                <td class="day">월요일</td>
                                <td class="day">화요일</td>
                                <td class="day">수요일</td>
                                <td class="day">목요일</td>
                                <td class="day">금요일</td>
                                <td class="day">토요일</td>
                            </tr>`;
    }
    calenderArray.forEach((element,index) => {
        let condition = index >= firstDateIndex && index < lastDateIndex + 1
                        ? 'this'
                        : 'other';

        if(element == today && date.getMonth() === curMonth) condition = 'today';

        if(index % 7 === 0){ //일요일
            calenderArray[index] = `<tr><td class="date"><span class="${condition}">${element}</span></td>`;
        }
        else if(index % 7 === 6){ //토요일
            calenderArray[index] = `<td class="date"><span class="${condition}">${element}</span></td></tr>`;
        }
        else{
            calenderArray[index] = `<td class="date"><span class="${condition}">${element}</span></td>`;
        }
    });

    calender.innerHTML += calenderArray.join('');
}

function prevMonth(){
    date.setMonth(date.getMonth() -1);
    RenderCalender();
}

function nextMonth(){
    date.setMonth(date.getMonth() + 1);
    RenderCalender();
}

const prevBtn = document.querySelector("#prevMonthBtn");
const nextBtn = document.querySelector("#nextMonthBtn");

prevBtn.addEventListener('click', prevMonth);
nextBtn.addEventListener('click',nextMonth);






