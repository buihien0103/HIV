
<div class="menu">
    <nav>
        <ul>
            <li><a href="{{url('/')}}">Trang chủ</a></li>
            <?php
				$menu = DB::table('tbl_methods')->get();
			?>
            @foreach($menu as $item_menu)
            <li><a href="{!!URL('hinh-thuc',[$item_menu->fld_method_id,$item_menu->fld_method_name])!!}">{!!$item_menu->fld_method_name!!}</a></li>
            @endforeach()
        </ul>
    </nav>
    <div class="search">
                    <form  method="get" action="http://localhost:88/batdongsan/search">
                        <input type="text" name="search" id="search" placeholder="Tìm kiếm...">
                        <button type="submit" class="button" value=""><i class="fa fa-search"></i></button>
                    </form>
                    
                    
     </div>
</div>
      