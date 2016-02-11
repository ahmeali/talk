@extends('pages.templet')
@section('content')
    <h1>ahmed ali</h1>

    <div class="row">
        <div class="col-lg-9 pull-right">
            <div class="row  slider-main-navigator ">
                <div class="col-xs-12" style="margin-bottom: 20px;">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="/images/pictures/slider1.jpg" alt="...">

                                <div class="carousel-caption">
                                    اعرفى اهم اللحظات فى أولى تجمعات اتكلمى فبراير 2016
                                </div>
                            </div>
                            <div class="item">
                                <img src="/images/pictures/slider1.jpg" alt="...">

                                <div class="carousel-caption">
                                    اعرفى اهم اللحظات فى أولى تجمعات اتكلمى فبراير 2016
                                </div>
                            </div>

                            <div class="item">
                                <img src="/images/pictures/slider1.jpg" alt="...">

                                <div class="carousel-caption">
                                    اعرفى اهم اللحظات فى أولى تجمعات اتكلمى فبراير 2016
                                </div>
                            </div>
                            <div class="item">
                                <img src="/images/pictures/slider1.jpg" alt="...">

                                    <span class="carousel-caption"
                                          style="font-size: 25px ;display: inline;text-align: right">
الحقيقة وراء الأحداث حدث في مثل هذا اليوم تم طلب موقع نساءي
                                    </span>
                            </div>

                            <div class="item">
                                <img src="/images/pictures/slider1.jpg" alt="...">

                                <div class="carousel-caption">
                                    اعرفى اهم اللحظات فى أولى تجمعات اتكلمى فبراير 2016
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail" style="height:250px; ">
                        <div class="down"> إتكلمي
                            <hr style="border-color:#000128!important; margin-top:0px!important;"/>
                            <img src="/images/pictures/e.png" class="img-thumbnail img-responsive text-center">
                        </div>
                        <div class="caption">
                            <p style="text-align:right;font-size: 13px;font-family:elight;color: #001652;">
                                مشاركتك بالقلم و الصوت و الصورة ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail" style="height:250px; ">
                        <div class="down"> دنيانا
                            <hr style="border-color:#000128!important; margin-top:0px!important;"/>
                            <img src="/images/pictures/d.png" class="img-thumbnail img-responsive text-center">
                        </div>
                        <div class="caption">
                            <p style="text-align:right;font-size: 13px;font-family:elight;color: #001652;">
                                تابع معانا أهم اللحظات اللى حصلت فى أول تجمعات ,,إتكلمى,, فبراير 2016
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail" style="height:250px; ">
                        <div class="down"> تجمعاتنا
                            <hr style="border-color:#000128!important; margin-top:0px!important;"/>
                        </div>
                        <p style="text-align:right;font-size: 13px;font-family:elight; color: #001652; ">
                            تجمعنا الاول فى القاهرة السبت 20 فبراير 2016 . هنتقابل و نسمع بعض
                            هنتقابل ونسمع بعض ، يمكن نبكي
                            يمكن نبتسم ، يمكن نضحك
                            لما نحكى تجاربنا
                        </p>
                    </div>
                </div>

            </div>
        </div>


        <div class="col-lg-3 col-xs-12 col-sm-12  col-md-3 pull-left">
            <div class="row">
                <div class="col-md-12 col-sm-4 col-xs-12">
                    <div class="thumbnail" id="left">
                        <p class="header-name">
                            رأيك
                            ايه؟
                        </p>

                        <p class="text">برأيك من تستحق لقب الاكثر شجاعة
                            من القصص الاتية</p>

                        <div class="radio">
                            <label style="margin-right:15%;">أميرة محمد</label><input type="radio" name="radiooption"
                                                                                      style="background-color:#c0e7ee!important;">
                        </div>
                        <div class="radio">
                            <label style="margin-right:15%;">لبنى أحمد</label><input type="radio" name="radiooption"
                                                                                     style="background-color:#c0e7ee!important;">
                        </div>
                        <div class="radio">
                            <label style="margin-right:15%;"> أيه حسن</label><input type="radio" name="radiooption"
                                                                                    style="background-color:#c0e7ee!important;">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-4 col-xs-12">
                    <div class="thumbnail" id="left">
                        <p class="header-name">شاركى
                            معانا</p>

                        <p class="text">كونى انتى صاحبة القصة القادمة و
                            شاركينا تجربتك و اشتركى الان</p>

                    </div>
                </div>

                <div class="col-md-12 col-sm-4 col-xs-12">
                    <div class="thumbnail" id="left">
                        <p style="padding-right:10px; !important;background-color: #376773;color: white;font-size:150%">
                            Tags</p>

                        <p class="text">اتكلمى دنيانا افينتات</p>

                    </div>
                </div>






            </div>


        </div>


    </div>


    <div class="row"
         style="background-color:#6e949f; padding-top: 2%; padding-bottom:5%;margin: 0 !important; font-family: ebold;  ">
        <footer>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <div style=" text-align:right; font-size:30px; color: white;">

                    أحدث التغريدات
                    <img src="/images/pictures/point.png"/>
                    <hr style="margin-right:0px;color: white; width:80%; pull:right; "/>
                </div>
                <div style=" font-family: elight; text-align:center; font-size:15px; color: white;">
                    Inas: # join_us Follow us and wait for the Inas: # join_us Follow us and <br/>
                    big event منذ 4 ايام <br/>
                    Inas: # join_us Follow us and wait for the Inas: # join_us Follow us and <br/>
                    big event منذ 5 ايام
                </div>
                <button style="padding:0px 0px; border:0px; border-radius:3px;"><img
                            src="/images/pictures/twitter.png"></button>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align:right; padding-right:40px;">
                <div style=" text-align:right; font-size:30px; color: white;">
                    ليصلك كل جديد
                    <img src="/images/pictures/point.png"/>
                    <hr style=" margin-right:0px;color: white; width:70%; pull:right;"/>
                </div>
                <div style=" font-family: elight; text-align:right; font-size:15px; color: white;">
                    كى يصلك كل جديد و لمعرفة أهم اخبارنا و تجمعاتنا القادمة
                    <br/>
                    ادخل ايميلك الان و أنتظر
                    <br/>
                    .... مناالمزيد
                </div>

                <div class="row" style="padding-top: 2%;">
                    <form class="form-inline" role="form" style="text-align:right;">
                        <div class="form-group">
                            <div class="col-md-3 col-lg-3">
                                <button class="btn btn-info"
                                        style="background-color:#78c8ab; border-radius:3px;">
                                    Submit
                                </button>
                            </div>
                            <div class="col-md-9 col-lg-9"><input type="email" class="form-control" id="email-term">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </footer>
    </div>



@stop





