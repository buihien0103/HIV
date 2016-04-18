@extends('user.master')
@section('content')
<div class="censite">  
<div class="box w578"><h3 class="headbox">Tin nhà đất mới nhất</h3>
    <!--<form id="form1" name="form1" method="post" style="margin:5px; ">
      <table width="900" border="1" cellspacing="0" align="center" bgcolor="#fff">
        <tbody>
          <tr>
            <th width="20" scope="col">STT</th>
            <th width="130" scope="col">Tiêu đề</th>
            <th width="70" scope="col">Giá</th>
            <th width="90" scope="col">Diện tích</th>
            <th width="100" scope="col">Địa chỉ</th>
            
            <th width="50" scope="col">Số điện thoại</th>
            <th width="100" scope="col">Email</th>
            
          </tr>
          <?php $stt = 0?>
           @foreach($property as $item)
           <?php $stt = $stt + 1 ?>
          <tr >
            <td>{!! $stt!!}</td>
            <td><a href="{!!$item->fld_property_url!!}" style="text-decoration:none; color:#f00">{!!$item->fld_property_title!!}</a></td>
            <td>{!!$item->fld_property_price!!}</td>
            <td>{!!$item->fld_property_square!!}</td>
            <td>{!!$item->fld_property_address!!}</td>
            
            <td>{!!$item->fld_property_mobile!!}</td>
            <td>{!!$item->fld_property_email!!}</td>
          </tr>
          @endforeach() 
        </tbody>
      </table>
    </form>-->
    <ul class="list">
    @foreach($property as $item)
        <li>
            <div class="nd">
                <h2><a href="{!! url('chi-tiet-tin-tuc',[$item->fld_property_id,$item->fld_property_title]) !!}">{!! $item->fld_property_title !!}</a></h2>
                <p class="address">Địa chỉ: {!!$item->fld_property_address!!}</p>
                <p class="dientich">Diện tích: <font style="margin-right:15px; color: #0BD318 ">{!!$item->fld_property_square!!}</font>
                Giá: <font style="color: #0BD318; margin-right:0px ">{!!$item->fld_property_price!!}</font>
               <a href="{!!$item->fld_property_url!!}" style="text-decoration:none; color: #136eb4; float: right; font-size:12px">Trang nguồn</a></p>
            </div>
        </li>
    @endforeach()    
    </ul>
    <div class="pagination">
            <!--@if ($property->currentPage() != 1)
            <li><a href="{!!str_replace('/?','?',$property->url($property->currentPage() - 1))!!}">Prev</a></li>
            @endif
            @for ($i = 1; $i <= $property->lastPage(); $i = $i + 1)
            <li><a href="{!!str_replace('/?','?',$property->url($i))!!}">{!!$i!!}</a></li>
            @endfor
            @if ($property->currentPage() != $property->lastPage())
            <li><a href="{!!str_replace('/?','?',$property->url($property->currentPage() + 1))!!}">Next</a></li>
            @endif-->
            <?php
// config
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($property->lastPage() > 1)
    <ul class="pagination">
        <li class="{{ ($property->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $property->url(1) }}">First</a>
         </li>
        @for ($i = 1; $i <= $property->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $property->currentPage() - $half_total_links;
            $to = $property->currentPage() + $half_total_links;
            if ($property->currentPage() < $half_total_links) {
               $to += $half_total_links - $property->currentPage();
            }
            if ($property->lastPage() - $property->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($property->lastPage() - $property->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)
                <li class="{{ ($property->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $property->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor
        <li class="{{ ($property->currentPage() == $property->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $property->url($property->lastPage()) }}">Last</a>
        </li>
    </ul>
@endif
    </div>
</div>
</div>
   
@endsection()