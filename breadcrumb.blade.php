<!-- Breadcrumb done by @sina-rzp -->
<i class="fa fa-home"></i>
<a href="{{ URL::to('/') }}">Home</a>

@php 
  $bread = URL::to('/'); 
  $link = Request::path(); 
  $subs = explode("/", $link);
@endphp

@if (Request::path() != '/')

  <i class="fa fa-angle-right"></i>

  @for($i = 0; $i < count($subs); $i++)

    @php 
      $bread = $bread."/".$subs[$i]; 

      $title = urldecode($subs[$i]);
      $title = str_replace("-", " ", $title);
      $title = title_case($title);
    @endphp

    <a href="{{ $bread }}"><span>{{ $title }}</span></a>

    @if ($i != (count($subs)-1))
      <i class="fa fa-angle-right"></i>
    @endif

  @endfor

@endif
<!-- Breadcrumb done by @sina-rzp -->