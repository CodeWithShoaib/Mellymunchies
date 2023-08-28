@extends('theme.MellyMunchies.website')
<style>
</style> 
@section('content')
<main>
  <!-- inner banner  -->
  <div class="inner-banner">
    <div class="inner-banner_img">
      <img
        src="{{ asset('public/theme/myweb/assets/images/inner-banner.png')}}"
        alt=""
      />
    </div>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-6 text-center">
          <div class="inner-banner_content">
            <h1>our <span>products</span></h1>
            <ul>
              <li><a href="{{url('/')}}">home</a></li>
              /
              <li>
                <a href="loginSignup.html" class="active">our products</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products-filter-card">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3 p-3">
          <div class="caterogy-card">
            <h4>CATEGORIES</h4>
            <ul>
                @php
                $category=App\Entity\Category\Category::where('is_gift',0)->get();
                @endphp
              @foreach($category as $data)
                @php
                $categoryTranslation=App\Entity\Category\CategoryTranslation::where('category_id',$data->id)->first();
                @endphp
              <li>
                <a href="{{route('categories',[$data->slug])}}">{{$categoryTranslation->name}}</a>
              </li>
              @endforeach
            </ul>
          </div>
          <div class="price-rating">
            <h4>PRICE RANGE</h4>
            <ul>
              <li><input type="radio" class='price_range' name='price' /></li>
              <li class='starting_value'>$0</li>
              <li class='ending_value'>$25</li>
            </ul>
            <ul>
              <li><input type="radio" class='price_range' name='price' /></li>
              <li class='starting_value'>$0</li>
              <li class='ending_value'>$25</li>
            </ul>
            <ul>
              <li><input type="radio" class='price_range' name='price' /></li>
              <li class='starting_value'>$0</li>
              <li class='ending_value'>$25</li>
            </ul>
            <ul>
              <li><input type="radio" class='price_range' name='price' /></li>
              <li class='starting_value'>$0</li>
              <li class='ending_value'>$100</li>
            </ul>
            <ul>
              <li><input type="radio" class='price_range' name='price' /></li>
              <li class='starting_value'>$0</li>
              <li class='ending_value'>$25</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-9 p-3">
          <div class="filter-card">
            <div class="row">
              <div class="col-12 col-lg-6">
                  	@php $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : ''; @endphp
                <div class="tt-select">
                  <select id="sort_by" class="filter">
                 	<option value="default">{{ _lang('Default') }}</option>
										<option value="oldest" {{ $sort_by == "oldest" ? "selected" : "" }}>{{ _lang('Oldest') }}</option>
										<option value="newest" {{ $sort_by == "newest" ? "selected" : "" }}>{{ _lang('Newest') }}</option>
										<option value="low_to_high" {{ $sort_by == "low_to_high" ? "selected" : "" }}>{{ _lang('Price: Low to High') }}</option>
										<option value="high_to_low" {{ $sort_by == "high_to_low" ? "selected" : "" }}>{{ _lang('Price: High to Low') }}</option>
										<option value="a_to_z" {{ $sort_by == "a_to_z" ? "selected" : "" }}>{{ _lang('Name: A-Z') }}</option>
										<option value="z_to_a" {{ $sort_by == "z_to_a" ? "selected" : "" }}>{{ _lang('Name: Z-A') }}</option>
                  </select>
                </div>
              </div>
              @php $length = isset($_GET['length']) ? $_GET['length'] : ''; @endphp
              <div class="col-12 col-lg-3">
                <div class="tt-select">
                 	<select id="length" class="filter">
										<option value="09" {{ $length == '09' ? 'selected' : '' }}>09</option>
										<option value="15" {{ $length == '15' ? 'selected' : '' }}>15</option>
										<option value="25" {{ $length == '25' ? 'selected' : '' }}>25</option>
										<option value="30" {{ $length == '30' ? 'selected' : '' }}>30</option>
									</select>
                </div>
              </div>
              <div class="col-12 col-lg-3 head-nav">
              </div>
              <div class='col-12'>
              <div class='row products_from_filter'>
               @if (count($products)>0)
                @foreach($products as $item)
                @php
                $productsTranslation=App\Entity\Product\ProductTranslation::where('product_id',$item->id)->first();
                @endphp

             
                <div class="col-12 col-lg-4 mt-5 p-0">
                  <a href='{{ url('product/'.$item->slug) }}'>
                <div class="product-card gift-card">
                  <img
                    src="{{ asset('storage/app/'. $item->image->file_path) }}"
                    class="img-fluid"
                    alt="image"
                  />
                  <div class="our-product_content">
                    <div
                      class="justify-content-between align-items-center d-flex"
                    >
                      <h4 style='color:#000;'>{{$productsTranslation->name}}</h4>
                      <ul>
                        <li>
                          <span class="fa fa-star checked"></span>
                        </li>
                        <li>
                          <span class="fa fa-star checked"></span>
                        </li>
                        <li>
                          <span class="fa fa-star checked"></span>
                        </li>
                        <li>
                          <span class="fa fa-star unchecked"></span>
                        </li>
                        <li>
                          <span class="fa fa-star unchecked"></span>
                        </li>
                      </ul>
                    </div>
                    <div
                      class="align-items-center justify-content-between d-flex"
                    >
                      <strong style='color:#000;'>$ {{$item->price}}</strong>
                      <div class="theme-group">
                        <a href="{{ url('add_to_cart/'.$item->id) }}" class="theme-btn btn add_to_cart" data-type="{{ $item->product_type }}">add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              @endforeach
              </div>
              @else
              <div class="no_product">
                <p style="color: red;" >No Products Available!</p>
              </div>
              @endif
          
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@section('js-script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function(){
  $(".price_range").change(function(){
    // var closestParent = $(this).sibling(".upper_value").innerText;
    var starting_value = $(this).closest('ul').find('.starting_value').text();
    var ending_value = $(this).closest('ul').find('.ending_value').text();
    $.ajax({
      url: "{{ url('/products_filter') }}",
       type: "POST",
        data :{
          starting_value: starting_value,
          ending_value: ending_value,
            _token: '{{ csrf_token() }}'
                    },
            success:function(success){
              console.log(success);
              $('.products_from_filter').html(success);
         
            }        
                    
  })
  })

})
</script>
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection
@endsection   
