@extends('templates.default')


@section('content')
<!-- ======= Menu Section ======= -->
<section class="bg-light" id="products">
    <div class="container px-5">

    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

            <div class="tab-header text-center">
                <h3 class="font-alt">Shop</h3>
            </div>

            <div class="row gy-5">
                @foreach ($coffee as $list)
                    <div class="col-lg-4 menu-item">
                        <img src="{{ $list['image'] }}" class="menu-img img-fluid" alt="">
                        <h4>{{ $list['model'] }}</h4>
                        <p class="storage">
                           {{ $list['storage'] }}
                        </p>
                        <p class="price">
                            {{ $list['price'] }}
                        </p>
                    </div><!-- Menu Item -->
                @endforeach
                
            </div>
       <!-- End Starter Menu Content -->
    </div>
    </div>
</section>
@endsection





