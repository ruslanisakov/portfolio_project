@if(Auth::user())

    @extends('inc.basic_structure')

@section('title')
    {{__ ('language.Title_Main') }}
@endsection

@section('custom-style')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
@endsection

@section('content')
    <div id="mySidenav" class="sidenav">
        <p class="logo">{{__ ('admin.Menu.Title_logo') }}<span class="menu">&#9776;</span></p>
        <p class="logo1"> <span class="menu1">&#9776;</span></p>
        <a href="#" class="icon-a"><i class="fa fa-briefcase icons"> </i> &nbsp;&nbsp;{{__ ('admin.Menu.Portfolio') }}    </a>
        <a href="#"class="icon-a"><i class="fa fa-dollar-sign icons"></i> &nbsp;&nbsp;{{__ ('admin.Menu.Finance') }}      </a>
        <a href="#"class="icon-a"><i class="fa fa-book icons">       </i> &nbsp;&nbsp;{{__ ('admin.Menu.Books') }}        </a>
        <a href="#"class="icon-a"><i class="fa fa-film icons">       </i> &nbsp;&nbsp;{{__ ('admin.Menu.Movies') }}       </a>
        <a href="#"class="icon-a"><i class="fa fa-trophy icons">     </i> &nbsp;&nbsp;{{__ ('admin.Menu.Achievements') }} </a>
        <a href="#"class="icon-a"><i class="fa fa-tasks icons">      </i> &nbsp;&nbsp;{{__ ('admin.Menu.Tasks') }}        </a>
    </div>
    <div id="main">
        <div class="header">
            <div class="col-md-12">
                <p class="nav"> Dashboard</p>
            </div>
        </div>
        <div class="head">
            <div class="col-div-6">
                <p class="nav"> Dashboard</p>
            </div>
            <div class="col-div-6">
                <i class="fa fa-search search-icon"></i>
                <i class="fa fa-bell noti-icon"></i>
                <div class="notification-div">
                    <p class="noti-head">Notification <span>2</span></p>
                    <hr class="hr" />
                    <p>Your Order is Placed
                        <span>Lorem Ipsum is simply dummy </span>
                    </p>
                    <p>Your Order is Placed
                        <span>Lorem Ipsum is simply dummy </span>
                    </p>
                    <p>Your Order is Placed
                        <span>Lorem Ipsum is simply dummy </span>
                    </p>
                </div>
                <div class="profile">
                    <img src="/images/login/user.png" class="pro-img" />
                    @if(Auth::user())
                        <p class="user-name">{{Auth::user()->login}} <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                    @endif
                    <div class="profile-div">
                        <p><i class="fa fa-user"></i> &nbsp;&nbsp;Profile</p>
                        <p><i class="fa fa-cogs"></i> &nbsp;&nbsp;Settings</p>
                        <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;Log Out</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <br/>

        <div class="col-div-4-1">
            <div class="box">
                <p class="head-1">Sales</p>
                <p class="number">67343</p>
                <p class="percent"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> 5.674% <span>Since Last Months</span></p>
                <i class="fa fa-line-chart box-icon"></i>
            </div>
        </div>
        <div class="col-div-4-1">
            <div class="box">
                <p class="head-1">purchases</p>
                <p class="number">2343</p>
                <p class="percent" style="color:red!important"><i class="fa fa-long-arrow-down" aria-hidden="true"></i> 5.64% <span>Since Last Months</span></p>
                <i class="fa fa-circle-o-notch box-icon"></i>
            </div>
        </div>
        <div class="col-div-4-1">
            <div class="box">
                <p class="head-1">orders</p>
                <p class="number">35343</p>
                <p class="percent"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> 5.674% <span>Since Last Months</span></p>
                <i class="fa fa-shopping-bag box-icon"></i>
            </div>
        </div>
        <div class="clearfix"></div>
        <br/>

        <div class="col-div-4-1">
            <div class="box-1">
                <div class="content-box-1">
                    <p class="head-1">Overview</p>
                    <br/>
                    <div class="m-box active">
                        <p>Member Profit<br/><span class="no-1">Last Months</span></p>
                        <span class="no">+2343</span>
                    </div>

                    <div class="m-box">
                        <p>Member Profit<br/><span class="no-1">Last Months</span></p>
                        <span class="no">+2343</span>
                    </div>

                    <div class="m-box">
                        <p>Member Profit<br/><span class="no-1">Last Months</span></p>
                        <span class="no">+2343</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-div-4-1">
            <div class="box-1">
                <div class="content-box-1">
                    <p class="head-1">Total Sale <span>View All</span></p>

                    <div class="circle-wrap">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            <div class="inside-circle"> 70% </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-div-4-1">
            <div class="box-1">
                <div class="content-box-1">
                    <p class="head-1">Acitivity <span>View All</span></p>
                    <br/>
                    <p class="act-p"><i class="fa fa-circle" ></i> Lorem Ipsum is simply dummy text of the &nbsp;&nbsp;&nbsp;&nbsp;printing and typesetting industry. </p>
                    <p class="act-p"><i class="fa fa-circle" style="color:red!important;"></i> Lorem Ipsum is simply dummy text of the &nbsp;&nbsp;&nbsp;&nbsp;printing and typesetting industry. </p>
                    <p class="act-p"><i class="fa fa-circle" style="color:green!important;"></i> Lorem Ipsum is simply dummy text of the &nbsp;&nbsp;&nbsp;&nbsp;printing and typesetting industry. </p>
                    <p class="act-p"><i class="fa fa-circle" ></i> Lorem Ipsum is simply dummy text of the &nbsp;&nbsp;&nbsp;&nbsp;printing and typesetting industry. </p>s
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <br/>
        <div class="col-div-12">
            <div class="box-8">
                <div class="content-box">
                    <p>Top Selling Projects <span>Sell All</span></p>
                    <br/>
                    <table>
                        <tr>
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Country</th>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Centro comercial Moctezuma</td>
                            <td>Francisco Chang</td>
                            <td>Mexico</td>
                        </tr>
                        <tr>
                            <td>Ernst Handel</td>
                            <td>Roland Mendel</td>
                            <td>Austria</td>
                        </tr>
                        <tr>
                            <td>Island Trading</td>
                            <td>Helen Bennett</td>
                            <td>UK</td>
                        </tr>
                        <tr>
                            <td>Ernst Handel</td>
                            <td>Roland Mendel</td>
                            <td>Austria</td>
                        </tr>
                        <tr>
                            <td>Island Trading</td>
                            <td>Helen Bennett</td>
                            <td>UK</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

@section('custom-scripts')
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    <!-- jQuery 3.6.0 -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"> </script>
    <!-- jQuery 3.6.0 -->
    <script>
        $(".menu").click(function(){
            $("#mySidenav").css('width','70px');
            $(".logo").css('display', 'none');
            $(".logo1").css('display','block');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-8px');
            $(".menu1").css('display','block');
            $(".menu").css('display','none');
            $('#main').css('margin-left', '70px');
        });
        $(".menu1").click(function(){
            $("#mySidenav").css('width','300px');
            $("#main").css('margin-left','300px');
            $(".logo").css('visibility', 'visible');
            $(".logo").css('display','block');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".menu").css('display','block');
            $(".menu1").css('display','none');
        });
    </script>
    <script>
        $(document).ready(function(){
            $(".profile p").click(function(){
                $(".profile-div").toggle();
            });
            $(".noti-icon").click(function(){
                $(".notification-div").toggle();
            });
        });
    </script>
@endsection
@endif
@guest
    <?php
        header("Location: /login");
        exit();
    ?>
@endguest
