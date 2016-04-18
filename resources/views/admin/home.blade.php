
@extends('admin.master')
@section('content')

<style type="text/css">
    .contentsite{
    width: 500px;
    margin-left: 300px;
    float: left;
    margin-top: 5px;
    margin-bottom: 10px
}
.contentsite .list{
    float: left;
    width: 500px;
    margin: 0 auto;
    padding: 0;
}
.contentsite .list li{
    list-style:none;
    float:left;
    margin: 0;
    padding: 0;
    width: 154px;
    margin: 5px 35px
}
.contentsite .list li a{
    text-decoration:none;
    float:left;
    padding:5px 10px;
}
.contentsite .list li a img{
    border: 0;
    max-width: 154px;
    max-height: 154px;
}
.contentsite .list li h3{
    padding:0;
    height:20px;
    margin-left: 45px

}
.contentsite .list li h3 a{
    color:#136eb4; 
    text-decoration:none; 
    font-size:14px;
    text-align: center;
}
</style>
<div class="contentsite">
            <ul class="list">
                <li>
                <a href=""><img src="{{ url('public/user/Images/Client_v2.jpg')}}"></a>
                <h3><a href="">Bệnh nhân</a></h3>
                </li>

                <li>
                <a href=""><img src="{{ url('public/user/Images/Task_v2.jpg')}}"></a>
                <h3><a href="">Nhắc nhở</a></h3>
                </li>

                <li>
                <a href=""><img src="{{ url('public/user/Images/module_list.png')}}"></a>
                <h3><a href="">Phản hồi</a></h3>
                </li>

                <li>
                <a href=""><img src="{{ url('public/user/Images/Competitor_v2.jpg')}}"></a>
                <h3><a href="">Kết quả</a></h3>
                </li>
            </ul>

            </div>
@endsection()