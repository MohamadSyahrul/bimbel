@extends('frontend.master')
@section('title')
Kelas
@endsection
@section('content')
<div class="recent-area section-paddingt">
    <div class="container">
        <!-- section tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>KELAS TERBATAS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($kelas->where('kategori_kelas', 'terbatas') as $t)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/kelas/'.$t->id) }}">
                            <img class="course-img" src="{{ asset('app-assets/images/thumbnail/kelas/'.$t->thumbnail) }}" alt="">
                        </a>
                    </div>
                    <div class="recent-cap pb-5">
                        <span class="text-uppercase">{{ $t->kategori }}</span>
                        <h4><a href="{{ url('/kelas/'.$t->id) }}">{{ $t->nama_kelas }}</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman dengan AC</p>
                        <a href="{{ url('/kelas/'.$t->id) }}" class="btn btn-primary float-right btn-sm">
                            <i class="fas fa-info-circle"></i> Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="recent-area section-paddingt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>KELAS REGULAR</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($kelas->where('kategori_kelas', 'regular') as $r)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/kelas/'.$r->id) }}">
                            <img class="course-img" src="{{ asset('app-assets/images/thumbnail/kelas/'.$r->thumbnail) }}" alt="">
                        </a>
                    </div>
                    <div class="recent-cap pb-5">
                        <span class="text-uppercase">{{ $r->kategori }}</span>
                        <h4><a href="{{ url('/kelas/'.$r->id) }}">{{ $r->nama_kelas }}</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman dengan AC</p>
                        <a href="{{ url('/kelas/'.$r->id) }}" class="btn btn-primary float-right btn-sm">
                            <i class="fas fa-info-circle"></i> Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
