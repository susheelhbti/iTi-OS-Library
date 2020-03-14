<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <div class="col-md-3">
        <div class="card mb-3 box-shadow">
        <img class="card-img-top" src='image/{{$book->image}}' style="height: 200px">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <small class="text-muted">
                        @component('components.rating',['rating'=>$book->rating])
        
                        @endcomponent
                    </small>

                </div>
                <h6 class="card-subtitle mb-2 text-muted">Author: <strong>{{$book->author}}</strong></h6>
                <h6 class="card-subtitle mb-2 text-muted">Category: <strong>{{$book->category->name}}</strong></h6>    
                <p class="card-text">{{$book->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Lease</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favorite</button>

                </div>
            </div>
        </div>
    </div>
