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
<div class="sidebar-item recent-posts mt-3">
     @foreach($data as $item_data)
     <div class="post-item clearfix">
          @php
               $image_cover = null;   
          @endphp
          @inject('urlgen', '\App\Http\Controllers\Injection\MediaService')
          @if (isset($item_data->getMedia('article')[0]))
               @php
                    $original = $urlgen->UrlGenerator('article',$item_data->getMedia('article')[0]->getUrl());
                    $image_cover = config('app.base_url').'/'.$original;
               @endphp
          @endif
          <img src="{{ $image_cover  ?? "http://pasirrentcar.com/admin/img/vehicleimages/avanza.png" }}" alt="" />
          <h4>
          <a href="{{ $base_url }}{{ $item_data->slug }}" @click="window.onload()">{{$item_data->title}}</a>
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