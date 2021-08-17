@extends('layouts.master')
    @section('content') 
<body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVN6NHG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('layouts.menu')
<div class=innerbannerwrap>

@php
if((Request::get('_branch_name')))
$url  = "downloadapk?_branch_name=".$_REQUEST['_branch_name'];
else
$url  = "downloadapk?_branch_name=010O";
@endphp
     

    
        <div class=innerbannerinstall>
            <h2 class=bannerHeadline>
                <a href="{{$settings->playstore_url}}" class="btn btn-white">Download Now</a>
                <a href="{{$settings->playstore_url}}" style="color:#ffffff; display: block;">If downloading not started click Here </a>
            </h2>
            
        </div>

    </div>
<section class="latest_news bg-white">
<div class=container>
        <div class=row><h2 class=heading>How To <span style="color:#0e42b8;">Install</span></h2>
                <p class=headParagraph>Fantasy sports that allow you to win money are not allowed on the google play store</p>


                <div class="LatestNews_wrap clearfix">
                    
                    <div class="tab-content news_display_container clearfix">
                        
                        <a class="prv club_prev"></a> <a class="nxt club_next"></a>
                        <ul id=club_news class="tab-pane active clearfix ">
                            
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src="{{URL::asset('webmedia/images/widget/01.png')}}" alt=image></div>
                                      
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src="{{URL::asset('webmedia/images/widget/02.png')}}" alt=image></div>
                                      
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src="{{URL::asset('webmedia/images/widget/03.png')}}" alt=image></div>
                                      
                                    </div>
                                </div>
                            </li>
                         </ul>

                      <div class="secure_safe"><img src="{{URL::asset('webmedia/images/widget/safe_secure.jpg')}}" alt=image></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<section class=players>
        <div class=container>
            <div class=row><h2 class=heading>Review <span>Rating</span></h2>
            <div class="row custrat"><img src="{{URL::asset('webmedia/images/rating.jpg')}}" alt=image></div>
                <div class="wrapplayer clearfix"><a class="prv prev-player"></a> <a class="nxt next-player"></a>
                    <ul class="boardmember clearfix">
                        <li class=clearfix>
                            <div>
                                <div>
                                    
                                    <div class="bg-black01 fig02"><h6 class=paragraph02>Sonu Shrivastav</h6>

                                        <p class="uppercaseheading red">Indore</p>

                                        <p>I have been playing Dream11 since 2017, and one thing I can say for sure is practice matters if you want to win big. I take a lot of time to study teams and players, and this time my hard work helped me win ₹25 Lakh.</p></div>
                                    
                                    <div class="bg-redcolor fig02"><p>Mega Contest Winner PUNJAB vs RAJASTHAN  - 25L winning</p></div>
                                </div>
                            </div>
                        </li>

                        <li class=clearfix>
                            <div>
                                <div>
                                    
                                    <div class="bg-black01 fig02"><h6 class=paragraph02>Sonu Shrivastav</h6>

                                        <p class="uppercaseheading red">Indore</p>

                                        <p>I have been playing Dream11 since 2017, and one thing I can say for sure is practice matters if you want to win big. I take a lot of time to study teams and players, and this time my hard work helped me win ₹25 Lakh.</p></div>
                                    
                                    <div class="bg-redcolor fig02"><p>Mega Contest Winner
PUNJAB vs RAJASTHAN  - 25L winning</p></div>
                                </div>
                            </div>
                        </li>

                        <li class=clearfix>
                            <div>
                                <div>
                                    
                                    <div class="bg-black01 fig02"><h6 class=paragraph02>Sonu Shrivastav</h6>

                                        <p class="uppercaseheading red">Indore</p>

                                        <p>I have been playing Dream11 since 2017, and one thing I can say for sure is practice matters if you want to win big. I take a lot of time to study teams and players, and this time my hard work helped me win ₹25 Lakh.</p></div>
                                    
                                    <div class="bg-redcolor fig02"><p>Mega Contest Winner
PUNJAB vs RAJASTHAN  - 25L winning</p></div>
                                </div>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="latest_news bg-white">
<div class=container>
        <div class=row><h2 class=heading>Get the App and <span style="color:#0e42b8;">Win Crores</span></h2>
                
                <div class="LatestNews_wrap clearfix">
                    
                    <div class="tab-content news_display_container clearfix">
                        
                        <a class="prv club_prev"></a> <a class="nxt club_next"></a>
                        <ul id=club_news class="tab-pane active clearfix ">
                            
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src="{{URL::asset('webmedia/images/app/01.png')}}" alt=image></div>
                                      
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src="{{URL::asset('webmedia/images/app/02.png')}}" alt=image></div>
                                      
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src="{{URL::asset('webmedia/images/app/03.png')}}" alt=image></div>
                                      
                                    </div>
                                </div>
                            </li>
                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        
         window.setTimeout(function(){

            window.location.href = "{{$url}}";

}, 3000);
       
    </script>
    @stop