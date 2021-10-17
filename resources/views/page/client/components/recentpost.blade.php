{{-- 
     $base_url = string
     {
          data: [
               {
                    'title' => string
                    'slug' => string
                    'imag_cover' => string
               }
          ]
     }     
--}}

@if(isset($data))
<h3 class="sidebar-title">Recent Posts</h3>
<div class="sidebar-item recent-posts">
     @foreach($data as $item_data)
     <div class="post-item clearfix">
          <img src="{{ $item_data->image_cover }}" alt="" />
          <h4>
          <a href="{{ $base_url }}.'/'.{{ $item_data->slug }}" @click="window.onload()">{{$item_data->title}}</a>
          </h4>
     </div>
     @endforeach
</div>
@else
<box class="shine box-style"></box>
<div style="width:100%;">
     <lines class="shine line-style"></lines>
     <lines class="shine line-style"></lines>
     <lines class="shine line-style"></lines>
</div>
@endif