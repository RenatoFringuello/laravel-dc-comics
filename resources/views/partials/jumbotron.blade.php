<div class="jumbotron">
    @if (isset($comic))
        <div class="filled">
            <div class="comic-container">
                <div class="wrapper">
                    <div class="info top-0 text-uppercase">{{$comic->type}}</div>
                    <div class="info bottom-0 w-100 text-center text-uppercase">View Gallery</div>
                    <img class="comic-img img-fluid" src="{{$comic->thumb}}" alt="">
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="sans-narrow filled">current series</div>
        </div>
    @endif
</div>