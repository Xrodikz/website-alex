<link rel="stylesheet" href="/css/style.css">
{{-- Card slide --}}
{{-- <h5 class="text-center">Welcome <b>{{ Auth::user()->name }}</b></h5> --}}
<div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/produk/Lap1.jpg" class="d-block img-fluid">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/produk/Lap2.png" class="d-block img-fluid">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/produk/Lap3.jpg" class="d-block img-fluid">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
{{-- card product --}}
<div class="card">
  <div class="card-header">
    <h5 class="text-center"> Rekomendasi Produk</h5>
  </div>
<div class="d-flex flex-col-6">
  <div class="card-body">
    <div class="container">
        @foreach ($products as $val)
        <div class="row">
           <div class="col-md-4">
                   <div class="card" style="width: 18rem; height: 22rem;">
                       <img src="/img/{{ $val->image }}" class="card-img-top" alt="img">
                       <div class="card-body">
                           <h4 class="card-text text-center"><b>{{ $val->detail }}</b></h4>
                           <center>
                            <h3 class="card-text text-center"><b>Rp. {{ $val->price }}</b></h3>
                               <a href="#" class="btn btn-dark">Buy</a>
                               <a href="#" class="btn btn-dark">Detail</a>
                           </center>
                       </div>
                   </div>
           </div>
       </div>
        @endforeach
    </div>
  </div>
</div>
</div>
<div class="card">
  <div class="card-header">
   <h5 class="text-center">Produk</h5>
  </div>
  <div class="card-body">
    <div class="container">
         <div class="row">
            <div class="col-md-4">
                    <div class="card" style="width: 18rem; height: 22rem;">
                            <img src="produk/Lap1.jpg" class="card-img-top">
                            <div class="card-body">
                              <p class="card-text text-center">KONTOL</p>
                              <center>
                                <a href="#" class="btn btn-dark">Beli</a>
                                <a href="#" class="btn btn-dark">Detail</a>
                            </center>
                            </div>
                          </div>
            </div>
            <div class="col-md-4">
                   <div class="card" style="width: 18rem; height: 22rem;">
                           <img src="produk/Lap2.png" class="card-img-top">
                           <div class="card-body">
                             <p class="card-text text-center">KONTOL</p>
                             <center>
                               <a href="#" class="btn btn-dark">Beli</a>
                               <a href="#" class="btn btn-dark">Detail</a>
                           </center>
                           </div>
                         </div>
           </div>
           <div class="col-md-4">
               <div class="card" style="width: 18rem; height: 22rem; ">
                       <img src="produk/Lap3.jpg" class="card-img-top">
                       <div class="card-body">
                         <p class="card-text text-center">KONTOL</p>
                         <center>
                           <a href="#" class="btn btn-dark">Beli</a>
                           <a href="#" class="btn btn-dark">Detail</a>
                       </center>
                       </div>
                     </div>
       </div>
        </div>
    </div>

  </div>
</div>
