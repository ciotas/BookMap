@extends('layouts.app')
<!-- 标题 -->
@section('title')
    BookMap — 为您提供最省时的读书服务
@stop
{{--加载轮播js--}}
@section('headerpic')
    @include('partials.headerpic')
@stop

@section('content')
    <style>
        .tile:hover{
            background-color: #1abc9c;
            color: #ffffff;
            cursor: pointer;
        }

    </style>
    <script>
        function headToOnePage(typeid) {
            window.location.href='#';
            alert('http://www.baidu.com');
        }
    </script>
    <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <ul>
                    <li data-transition="3dcurtain-horizontal" data-slotamount="15" data-masterspeed="300">
                        <img src="images/slides/slide3.jpg" alt="" />
                    </li>
                    <li data-transition="3dcurtain-vertical" data-slotamount="15" data-masterspeed="300" data-link="#">
                        <img src="images/slides/slide5.jpg" alt="" />
                    </li>
                    <li data-transition="papercut" data-slotamount="15" data-masterspeed="300" data-link="#">
                        <img src="images/slides/slide2.jpg" alt="" />
                    </li>
                    <li data-transition="turnoff" data-slotamount="15" data-masterspeed="300">
                        <img src="images/slides/slide1.jpg" alt="" />
                    </li>
                    <li data-transition="flyin" data-slotamount="15" data-masterspeed="300">
                        <img src="images/slides/slide6.jpg" alt="" />
                    </li>
                </ul>
            </div>
        </div>
    <br>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-10">
                    <h3>什么是 BookMap ?</h3>
                    <blockquote>BookMap是思维导图图书分享平台，能为您提供最省时的读书和学习服务。</blockquote>
                </div>
                <div class="col-md-2">
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">了解更多 &raquo;</a></p>
                </div>
            </div>

        </div>
    </div> <!-- /container -->

    <div class="container">
        <h4>目录</h4>

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile" onclick="headToOnePage('typeid')">
                    <img src="../../img/icons/svg/ribbon.svg" alt="ribbon" class="tile-hot-ribbon">
                    <img src="../../img/icons/svg/compas.svg" alt="Compas" class="tile-image big-illustration">
                    <h3 class="tile-title">文学</h3>
                    <p>一个能思考的人，才真是一个力量无边的人</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">
                    <img src="../../img/icons/svg/loop.svg" alt="Infinity-Loop" class="tile-image">
                    <h3 class="tile-title">小说</h3>
                    <p>等待，不是因为那个人会回来，是因为还有爱</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">
                    <img src="../../img/icons/svg/pencils.svg" alt="Pensils" class="tile-image">
                    <h3 class="tile-title">传记</h3>
                    <p>自传是他活着时的声音，是人们依然听从的智者</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">历史</h3>
                    <p>历史上最突出的偶然的机遇是赫赫名人、伟大人物的间歇出现。</p>

                </div>

            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">国学</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">社会科学</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>


            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">哲学与宗教</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">法律</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">政治与军事</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">心理学</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">艺术与摄影</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">少儿</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">教材</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">教辅</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">考试</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">外语</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">辞典与工具书</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">励志与成功</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">经济管理</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">时尚</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">娱乐</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">孕产育儿</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">家庭教育</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">健身与保健</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">家居休闲</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">旅游与地图</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">烹饪美食与酒</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">婚恋与两性</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">计算机与互联网</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">医学</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">科学与自然</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="tile">

                    <img src="../../img/icons/svg/chat.svg" alt="Chat" class="tile-image">
                    <h3 class="tile-title">科技</h3>
                    <p>Your likes, shares and comments helps us.</p>

                </div>

            </div>



        </div>

    </div><!-- /.container -->

@endsection