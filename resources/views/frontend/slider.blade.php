<div class="slider-active">
    <?php
        $carousel = \App\Carousel::orderBy('id', 'desc')->get();
    ?>

    @foreach($carousel as $c)
    <div class="single-slider slider-height d-flex align-items-center"
        data-background="{{asset('app-assets/images/elements/'.$c->banner)}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="hero__caption">
                        <p data-animation="fadeInLeft" data-delay=".4s">
                            {{ $c->judul }}
                        </p>

                        <h5 data-animation="fadeInLeft" data-delay=".6s">
                            {{ $c->keterangan }}
                        </h5>

                        <!-- Hero-btn -->
                        <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                            {{-- <a  href="#" class="btn hero-btn">Learn More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>