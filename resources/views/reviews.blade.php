@extends ('layouts.layout')

@section('content')
<div class="section features-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h2 class="display-3 text-warning">Leave a Review</h2>
                <form action="/reviews" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group rating-form">
                                    <span class="rating-star">
                                        <input class="form-control" type="radio" name="rating" value="5" required><span class="star"></span>
                                        <input class="form-control" type="radio" name="rating" value="4"><span class="star"></span>
                                        <input class="form-control" type="radio" name="rating" value="3"><span class="star"></span>
                                        <input class="form-control" type="radio" name="rating" value="2"><span class="star"></span>
                                        <input class="form-control" type="radio" name="rating" value="1"><span class="star"></span>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="firstName" class="form-control" id="fistName" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                    <textarea class="form-control" name="reviewText" id="text-area" rows="3" placeholder="Write your review here ..."></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning btn-round">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
<br><br>

<!-- REVIEWS -->
@foreach ($reviews as $review)
    <div class="card text-center">
        <div class="card-header  bg-success">

            @for ($i=0; $i<$review->StarRating; $i++)
               <i class="fa fa-star text-secondary" aria-hidden="true"></i>
            @endfor

             </div>
        <div class="card-body">
            <i><p><strong>Written by</strong> {{ $review->FirstName }} {{ $review->LastName }}</p></i>
            <p>{{ $review->ReviewText }}</p>
        </div>
    </div>
    @endforeach

@endsection
