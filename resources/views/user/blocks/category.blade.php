<div class="box w198"><h3 class="headboxc">Mua bán nhà đất</h3>
    <ul class="listcate">
    <?php
            $cate = DB::table('tbl_categories')->get();
    ?>
            @foreach($cate as $item_cate)
                <li><a href="{!!URL('loai-nha-dat',[$item_cate->fld_category_id,$item_cate->fld_category_name])!!}" class="title">{!!$item_cate->fld_category_name!!}</a>
            	</li>
            @endforeach()      
    </ul>
</div>