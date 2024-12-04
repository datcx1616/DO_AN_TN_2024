<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Tin công nghệ</span>
    </h2>
    <div class="row px-xl-5">
        @foreach ($posts as $post)
            <div class="col-md-3">
                <div class="product-offer mb-30" style=" border-radius: 10px; height: 200px;">
                    <img class="img-fluid" src="{{ $post->image }}" alt="" style="height: 100%; width: 100%;">
                    <div class="offer-text">
                        <h3 class="text-white mb-3" style="text-align: center; width: 70%; font-size: 16px;">
                            {{ $post->title }}
                        </h3>
                        <a href="{{ route('post.detail', ['id' => $post->id]) }}" class="btn btn-primary"
                            style="font-size: 14px;">
                            Xem thêm
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>