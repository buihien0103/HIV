@extends('user.master')
@section('content')
<div class="censite">  
<div class="box w578"><h3 class="headbox">Thông tin tìm kiếm</h3>
    <ul class="list">
     @foreach($property_search as $item_search)
        <li>
            <div class="nd">
                <h2><a href="{!! url('chi-tiet-tin-tuc',[$item_search->fld_property_id,$item_search->fld_property_title]) !!}">{!!$item_search->fld_property_title!!}</a></h2>
                <p class="address">Địa chỉ: {!!$item_search->fld_property_address!!}</p>
                <p class="dientich">Diện tích: <font style="margin-right:15px; color: #0BD318 ">{!!$item_search->fld_property_square!!}</font>
                Giá: <font style="margin-right:0px;color: #0BD318 ">{!!$item_search->fld_property_price!!}</font>
                <a href="{!!$item_search->fld_property_url!!}" style="text-decoration:none; color: #136eb4; float: right; font-size:12px" >Trang nguồn</a></p>
            </div>
        </li>
    @endforeach()    
    </ul>
    <div class="pagination">
    		<ul>
        	@if ($property_search->currentPage() != 1)
        	
        	<li><a href="{!!str_replace('/?','?',$property_search->url($property_search->currentPage() - 1))!!}">Prev</a></li>
            @endif
            @for ($i = 1; $i <= $property_search->lastPage(); $i = $i + 1)
            <li><a href="{!!str_replace('/?','?',$property_search->url($i))!!}">{!!$i!!}</a></li>
            @endfor
            @if ($property_search->currentPage() != $property_search->lastPage())
            <li><a href="{!!str_replace('/?','?',$property_search->url($property_search->currentPage() + 1))!!}">Next</a></li>
           
            @endif
        </ul>

       <!-- <?php
// config
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($property_search->lastPage() > 1)
    <ul class="pagination">
        <li class="{{ ($property_search->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $property_search->url(1) }}">First</a>
         </li>
        @for ($i = 1; $i <= $property_search->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $property_search->currentPage() - $half_total_links;
            $to = $property_search->currentPage() + $half_total_links;
            if ($property_search->currentPage() < $half_total_links) {
               $to += $half_total_links - $property_search->currentPage();
            }
            if ($property_search->lastPage() - $property_search->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($property_search->lastPage() - $property_search->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)
                <li class="{{ ($property_search->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $property_search->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor
        <li class="{{ ($property_search->currentPage() == $property_search->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $property_search->url($property_search->lastPage()) }}">Last</a>
        </li>
    </ul>
@endif
{!! $property_search->render() !!}-->
    </div>
</div>
</div>
   
@endsection()