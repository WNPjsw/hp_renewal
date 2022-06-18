<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/css/style.css">
    <title>wnp homepage</title>
<body>
    
    <section class="wrap">

         <!--헤더 스타일-->
        <header>
            <div class="header_cont">
            <p class="logo_1"><a href="#"><img src="images/logo_1.png" /></a></p>
            <ul>
                <li><a href="#">기업정보</a></li>
                <li><a href="#">사업분야</a></li>
                <li><a href="#">기술분야</a></li>
                <li><a href="#">고객분야</a></li>
                
            </ul>
            
            </div>
          
       <div class="line"></div>

       <nav id="menu" style="display:none;"> 
          <div id="menu_t">
            <ul>
               <li><a href="#">회사소개</a></li>
               <li><a href="#">구성원소개</a></li>
               <li><a href="#">연혁/인증</a></li>
               <li><a href="#">주요 고객사</a></li>
               <li><a href="#">포트폴리오</a></li>
            </ul>

            <ul>
                <li><a href="#">Smart Factory</a></li>
                <li><a href="#">출입관리</a></li>
                <li><a href="#">출장관리</a></li>
            
            </ul>
            <ul>
                <li><a href="#">웹 사이트</a></li>
                <li><a href="#">모바일</a></li>
                <li><a href="#">응용 프로그램</a></li>
            </ul>
            <ul>
                <li><a href="#">공지사항</a></li>
                <li><a href="#">견적문의</a></li>
                <li><a href="#">오시는 길</a></li>
            </ul>
          </div>
       </nav>
        </header>
       <!--메인 배너 슬라이드-->
        <div class="slide_btn"><p><img src="/images/slide_btn.png" /></p></div>

        <div class = "swiper mySwiper0">
        <div id="main_slide" class = "swiper-wrapper">
            <div id="imagebox_1" class = "swiper-slide">
            
            
                <div class="txt">
                    <p class="text_box">다양한 기술과 경험을 바탕으로<br/>
                    최고의 방법을 제시합니다. 
                    </p>
                
                </div>
            </div>

            <div id="imagebox_2" class = "swiper-slide">
                <div class="txt">
                    <p class="text_box_2">WNP 는 <br />
                        지속적인 성장과정과 <br />
                        차별화된 고객가치를 실현하고 있습니다.</p>
                </div>
            </div>
            <div id="imagebox_3" class = "swiper-slide">
            
            
                <div class="txt">
                    <p class="text_box">높은 수준의 전문성,제품개발<br />
                        성공 비즈니스를 위한 <br />
                        최적의 IT솔루션
                    </p>
                
                </div>
            </div>

            <div id="imagebox_4" class = "swiper-slide">
            
            
                <div class="txt">
                    <p class="text_box_4">소프트웨어와 하드웨어의 융합 <br />
                        GLOBAL IT SERVICE <br />
                        기업으로 성장하겠습니다.
                    </p>
                
                </div>
            </div>
        
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

        <div class="clear"></div>

        <!--사업분야 -->
        <div id="business">

            
            <div class="b_title">
                <p>BUSINESS <br /> INTRODUCTION</p>
                  <!--사업분야 버튼 스타일 
                - 버튼 클릭 시 색상 변경, 오른쪽에 2px 선 나타남
                - 내용, 이미지 바뀜-->
                
                <div class="business_txt_02">
                    <label for="business_btn1"> <input type="radio" name="business_btn" id="business_btn1">Smart Factory</label>
                    <label for="business_btn2"><input type="radio" name="business_btn" id="business_btn2">출입 관리</label>
                    <label for="business_btn3"> <input type="radio" name="business_btn" id="business_btn3">출장 관리</label>

                    <input type="radio" name="business_btn" id="business_btn1" checked>
                    <input type="radio" name="business_btn" id="business_btn2">
                    <input type="radio" name="business_btn" id="business_btn3">
                </div>
            </div>
            <div class="b_box">
            
            <div class="business_box">
                
                
            <!--스마트펙토리-->
            <div class="smartfactory">
            <ul class="business_txt_01">
               
                <li>Smart Factory</li>
                <li>생산 효율성 및 품질 관리, 수요 변화 대응 등의 <br />
                    제조 경쟁력 극대화를 위한 지능형 ·자동화 공장으로의 <br />
                    혁신적인 변화를 제공합니다.</li>
                <li>- MES (Manufacturing Execution System)</li>
                <li>- SCM (Supply Chain Management)</li>
                <li>- POP (Point Of Production)</li>
                <li>- WMS (Warehouse Management System)</li>
               
            </ul>

            <!--더보기 버튼-->
            <div class="view">
                <a href="#"><div class="view_btn" >view more<img src="images/plus_btn.png" /></div></a>
            </div>

            </div>
            
            <!--출입관리-->
            <div class="access">
            <ul class="business_txt_01">
               
                <li>출입 관리</li>
                <li>사용자의 스마트폰을 이용하여 <br />
                    공용 출입문을 자동으로 열어주고, <br />
                    관리자가 출입 현황을 편리하게 <br />
                    파악할 수 있는 서비스를 제공합니다.</li>
                <li>- 신호 감지</li>
                <li>- 출입문 출입 제어</li>
                <li>- 출입 관리</li>
                
            </ul>
            <div class="view">
                <a href="#"><div class="view_btn" >view more<img src="images/plus_btn.png" /></div></a>
            </div>
            </div>
            <!--출장관리-->
            <div class="schedule">
                <ul class="business_txt_01">
                   
                    <li>출장 관리</li>
                    <li>출장 관리와 더불어 담당자 배정과 <br />
                        실시간 알림, 결과 보고 기능으로 <br />
                        출장 업무를 수행 할 수 있는 <br />
                        서비스를 제공합니다.</li>
                    <li>- 출장 관리 및 배정(스케쥴) 관리</li>
                    <li>- 담당자 스케쥴 알림 및 결과 보고 기능</li>
                    <li>- 물품 판매 관리 및 정산 관리</li>
                    
                    
                </ul>
                <div class="view">
                    <a href="#"><div class="view_btn" >view more<img src="images/plus_btn.png" /></div></a>
                </div>
                </div>
            </div>
           
            <div class="img_box">
            <!--사업분야 이미지-->
            <div class="smartfactory">
            <ul class="business_img">
                <li></li>
                <li><img src="images/smart.jpg" /></li>
               
            </ul>
            </div>
            <div class="access">
            <ul class="business_img">
                <li></li>
                <li><img src="images/access.jpg" /></li>
               
            </ul>
            </div>
            <div class="schedule">
                <ul class="business_img">
                    <li></li>
                    <li><img src="images/business.jpg" /></li>
                </ul>
                </div>
            </div>
        </div>
        </div>
        <div class="clear"></div>

        <!--기술분야-->
        
        <div id="tech_box">
           
            <div id="tech">
                <p>WNP TECHNOLOGY</p>
                <!--기술분야 슬라이드 버튼-->
                <!--<p class="arrow_01"><a href="#"><img src="images/arrow_01.png"></a></p>-->
                <!--<p class="arrow_02"><a href="#"><img src="images/arrow_02.png"></a></p>-->
                <!--기술분야 웹-->
                <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div id="web">
                <div class="tech_img"><img src="images/web.jpg" /></div>
                <div class="tech_txt">
                    <ul>
                        <li>Web Site</li>
                        <li>웹사이트</li>
                        <li>전문가들의 독창적인 기술력을 바탕으로 <br />
                            편의성과 확장성을 고려한 웹 사이트를 구축합니다.</li>
                        <li>- PHP</li>
                        <li>- eGovFramework</li>
                        <li>- SpringFramework</li>
                    </ul>
                    <div class="view">
                        <a href="#"><div class="view_btn" >view more<img src="images/plus_btn.png" /></div></a>
                    </div>
                   
                    <p>01</p>
                </div>
             </div>
            </div> <!-- slide -->

             <!--기술분야 앱-->
             <div class="swiper-slide">
             <div id="app">
                <div class="tech_img"><img src="images/app.jpg" /></div>
                <div class="tech_txt">
                    <ul>
                        <li>Mobile</li>
                        <li>애플리케이션</li>
                        <li>높은 수준의 전문성과 제품 개발 등으로 여러분의 <br />
                            성공 비즈니스를 위한 최적의 IT솔루션을 제공합니다.</li>
                        <li>- C#</li>
                        <li>- Android (java, kotlin)</li>
                        <li>- iOS (objective-C, swift)</li>
                    </ul>
                    <div class="view">
                        <a href="#"><div class="view_btn" >view more<img src="images/plus_btn.png" /></div></a>
                    </div>
                    <p>02</p>
                </div>
                
             </div>
            </div> <!-- slide -->
            </div> <!-- wrapper -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div> <!-- container -->
        </div>
    </div>


        <!--포트폴리오-->
        <div id="portfolio_box">
            <div class="portfolio_title">
                <p>WNP <br />PORTFOLIO</p>
                
                <div class="view">
                    <a href="#"><div class="view_btn" > view more<img src="images/plus_btn.png" /></div></a>
                </div>
               
            </div>
            <!--포트폴리오 스와이퍼 이미지 슬라이드 기능-->
            <div class="portfolio_image">
                <p></p>
                <ul>
                    <li><a href="#"><figure><img src="images/portfolio_01.jpg" /><figcaption>CP- MS 디자인 개편<br />
                        <span>씨에이프로텍(주)</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_02.jpg" /><figcaption>스마트 출입관리 시스템<br />
                        <span>(주)삼경엠에스</span></figcaption></figure></a></li>
                    <!--<li><a href="#"><figure><img src="images/portfolio_03.jpg" /><figcaption>운송정보 시스템<br />
                        <span>고려아연(주)</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_04.jpg" /><figcaption>오존 농도 측정 시스템<br />
                        <span>(주)랩시스텍</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_05.jpg" /><figcaption>히트쿠키 (도매몰)<br />
                        <span>(주)랩시스텍</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_06.jpg" /><figcaption>MES시스템<br />
                        <span>한국섬유개발원</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_07.jpg" /><figcaption>홈페이지 유지보수<br />
                        <span>(주)일성하이스코</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_08.jpg" /><figcaption>스마트팩토리<br />
                        <span>(주)선재하이테크, 센텀전자(주)</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_09.jpg" /><figcaption>생산 및 외주관리 시스템<br />
                        <span>동일유리(주)</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_10.jpg" /><figcaption>재고/부스관리 시스템<br />
                        <span>(주)퍼플아이앤씨</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_11.jpg" /><figcaption>데이터분석 시스템<br />
                        <span>(주)아무르</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_12.jpg" /><figcaption>전자결재 시스템<br />
                        <span>경북보건대학교</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_13.jpg" /><figcaption>GBT 심리 검사 시스템<br />
                        <span>GBT 뇌기반학습튜터링센터</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_14.jpg" /><figcaption>UYeG<br />
                        <span>(주)아이티공간</span></figcaption></figure></a></li>
                    <li><a href="#"><figure><img src="images/portfolio_15.jpg" /><figcaption>영업관리 시스템<br />
                        <span>아이앤뷰커뮤니케이션</span></figcaption></figure></a></li>--> 
                </ul>
            </div>
        </div>
        <div class="clear"></div>

        <!--오시는 길-->
        <div id="map_box">
            <div id="map">
                <p><div class="map_cont" style="font:normal normal 400 12px/normal dotum ;width:728px; height:665px; color:#333; position:relative"><div style="height: 633px;"><a href="https://map.kakao.com/?urlX=1016594.0&amp;urlY=580381.0&amp;itemId=1588259966&amp;q=%EB%8D%94%EB%B8%94%EC%9C%A0%EC%97%94%ED%94%BC&amp;srcid=1588259966&amp;map_type=TYPE_MAP&amp;from=roughmap" target="_blank"><img class="map" src="http://t1.daumcdn.net/roughmap/imgmap/c34e2f93ca4c78fdc5decbed3fd92519b4a8278c591a0181f8a5b559bfdc59e0" width="726px" height="631px" style="border:1px solid #ccc;"></a></div><div style="overflow: hidden; padding: 7px 11px; border: 1px solid rgba(0, 0, 0, 0.1); border-radius: 0px 0px 2px 2px; background-color: rgb(249, 249, 249);"><a href="https://map.kakao.com" target="_blank" style="float: left;"> </a><div style="float: right; position: relative; top: 1px; font-size: 11px;"><a target="_blank" href="https://map.kakao.com/?from=roughmap&amp;srcid=1588259966&amp;confirmid=1588259966&amp;q=%EB%8D%94%EB%B8%94%EC%9C%A0%EC%97%94%ED%94%BC&amp;rv=on" style="float:left;height:15px;padding-top:1px;line-height:15px;color:#000;text-decoration: none;">로드뷰</a><span style="width: 1px;padding: 0;margin: 0 8px 0 9px;height: 11px;vertical-align: top;position: relative;top: 2px;border-left: 1px solid #d0d0d0;float: left;"></span><a target="_blank" href="https://map.kakao.com/?from=roughmap&amp;eName=%EB%8D%94%EB%B8%94%EC%9C%A0%EC%97%94%ED%94%BC&amp;eX=1016594.0&amp;eY=580381.0" style="float:left;height:15px;padding-top:1px;line-height:15px;color:#000;text-decoration: none;">길찾기</a><span style="width: 1px;padding: 0;margin: 0 8px 0 9px;height: 11px;vertical-align: top;position: relative;top: 2px;border-left: 1px solid #d0d0d0;float: left;"></span><a target="_blank" href="https://map.kakao.com?map_type=TYPE_MAP&amp;from=roughmap&amp;srcid=1588259966&amp;itemId=1588259966&amp;q=%EB%8D%94%EB%B8%94%EC%9C%A0%EC%97%94%ED%94%BC&amp;urlX=1016594.0&amp;urlY=580381.0" style="float:left;height:15px;padding-top:1px;line-height:15px;color:#000;text-decoration: none;">지도 크게 보기</a></div></div></div>
                </p>
                
                <div class="map_txt">
                    <p>LOCATION</p>
                    <table id="table_d">
                    <tr>
                        <td>주소</td>
                        <td>울산 중구 종가로 15 울산테크노파크 <br />
                            기술혁신 B동 401호</td>
                    </tr>
                    <tr >
                        <td>찾아오시는 <br />
                            방법</td>
                        <td>울산 테크노파크 정류장에서 <br />
                            도보 2분 소요
                            </td>
                    </tr>
                    <tr>
                        <td>FAX</td>
                        <td>052-700-0919</td>
                    </tr>
                    <tr>
                        <td>TEL</td>
                        <td>052-947-0919</td>
                    </tr>
                </div>    
                    
                </table> 
                    
            </div>
        </div>

        <div class="clear"></div>

        <!--푸터-->
        <footer>
            <div id="footer_box">
            <ul class="footer_txt">
                <li><a href="#"><img src="images/footer_logo.png"></a></li>
                <li><a href="#">원격지원서비스</a></li>
                <li><a href="#">회사소개서</a></li>
                <li><a href="#">블로그</a></li>
                <li><a href="#">견적문의</a></li>
            </ul>
            <div class="clear"></div>
            <p>울산 중구 종가로 15 울산테크노파크 기술혁신B동 401호 | TEL : 052-947-0919 | FAX : 052-700-0919 <br />
                대표자 : 김병건  E-mail : sales@wnpsoft.co.kr<br />
                COPYRIGHT ⓒ 2019 WNP Co.,Ltd. ALL RIGHTS RESERVED.
            </p>
            <div class="clear"></div>
            
            <ul class="footer_txt_2">
                <li><a href="#">공지사항</a></li>
                <li><a href="#">개인정보처리방침</a></li>
            </ul>
           
          </div>
        </footer>

    </section>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>

        var swiper0 = new Swiper(".mySwiper0", {
        centeredSlides: true,
        loop : true,
        loopAdditionalSlides : 1,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        autoplay: {//자동슬라이드 (false-비활성화)          
            delay: 2500, // 시간 설정          
            disableOnInteraction: false, // false-스와이프 후 자동 재생
        },
      });

      var swiper1 = new Swiper(".mySwiper1", {
        centeredSlides: true,
        loop : true,
        loopAdditionalSlides : 1,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      var swiper2 = new Swiper(".mySwiper2", {

        slidesPerView : 2,
        centeredSlides: true,
        loop : true,
        loopAdditionalSlides : 1,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

</body>
</html>