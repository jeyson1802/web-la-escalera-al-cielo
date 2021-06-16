<div class="barra-mapa">
  @foreach ($countries as $country)
    <img src="{{Storage::url($country->url_flag)}}" />
  @endforeach  
</div>