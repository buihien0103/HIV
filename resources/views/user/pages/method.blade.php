@extends('user.master')
@section('content')
<div class="censite">  
<div class="box w578"><h3 class="headbox">Thông tin nhà đất</h3>
    <input type='hidden' id='current_page' />
<input type='hidden' id='show_per_page' />
    <ul class="list" id="list">
    @foreach($property_method as $item)
        <li>
            <div class="nd">
                <h2><a href="{!! url('chi-tiet-tin-tuc',[$item->fld_property_id,$item->fld_property_title]) !!}">{!!$item->fld_property_title!!}</a></h2>
                <p class="address">Địa chỉ: {!!$item->fld_property_address!!}</p>
                <p class="dientich">Diện tích: <font style="margin-right:15px; color: #0BD318 ">{!!$item->fld_property_square!!}</font>
                Giá: <font style="margin-right:20px;color: #0BD318 ">{!!$item->fld_property_price!!}</font>
                <a href="{!!$item->fld_property_url!!}" style="text-decoration:none; color: #136eb4">Trang nguồn</a></p>
            </div>
        </li>
    @endforeach()    
    </ul>
    <div id="page_navigation"></div>
</div>
</div>
<script type='text/javascript'>
//<![CDATA[
    $(document).ready(function(){

    //how much items per page to show
    var show_per_page = 10;
    //getting the amount of elements inside content div
    var number_of_items = $('#list').children().size();
    //calculate the number of pages we are going to have
    var number_of_pages = Math.ceil(number_of_items/show_per_page);

    //set the value of our hidden input fields
    $('#current_page').val(0);
    $('#show_per_page').val(show_per_page);

    var navigation_html = '<a class="previous_link" href="javascript:previous();">«</a>';

    var current_link = 0;
    while (number_of_pages > current_link){
        navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
        current_link++;
    }

    navigation_html += '<a class="next_link" href="javascript:next();">»</a>';

    $('#page_navigation').html(navigation_html);

    //add active_page class to the first page link
    $('#page_navigation .page_link:first').addClass('active_page');

    //hide all the elements inside content div
    $('#list').children().css('display', 'none');

    //and show the first n (show_per_page) elements
    $('#list').children().slice(0, show_per_page).css('display', 'block');

});

function previous(){

    new_page = parseInt($('#current_page').val()) - 1;
    //if there is an item before the current active link run the function
    if($('.active_page').prev('.page_link').length==true){
        go_to_page(new_page);
    }

}

function next(){
    new_page = parseInt($('#current_page').val()) + 1;
    //if there is an item after the current active link run the function
    if($('.active_page').next('.page_link').length==true){
        go_to_page(new_page);
    }

}
function go_to_page(page_num){
    //get the number of items shown per page
    var show_per_page = parseInt($('#show_per_page').val());

    //get the element number where to start the slice from
    start_from = page_num * show_per_page;

    //get the element number where to end the slice
    end_on = start_from + show_per_page;

    //hide all children elements of content div, get specific items and show them
    $('#list').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');

    /*get the page link that has longdesc attribute of the current page and add active_page class to it
    and remove that class from previously active page link*/
    $('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');

    //update the current page input field
    $('#current_page').val(page_num);
}
//]]>
</script>
<style type='text/css'>
#page_navigation{
    width:500px;
    float: right;
    height:50px;
    margin: 0 auto;
    display: inline;
    
}
#page_navigation a{
    padding:3px;
    border:1px solid gray;
    margin:2px;
    color:black;
    text-decoration:none;
}
#page_navigation a:hover{background:#ccc;}
.active_page{
    background:#555;
    color:red !important;
}
</style>
   
@endsection()