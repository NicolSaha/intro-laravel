@extends ('layout')

@section('content')
<div class="section features-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group rating-form">
                                    <span class="rating-star">
                                        <input class="form-control" type="radio" name="rating" value="5"><span class="star"></span>
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
        <div class="card-header">
            <h5><strong>Rating:</strong> {{ $review->StarRating }} Stars</h5>
             </div>
        <div class="card-body">
            <i><p><strong>Written by</strong> {{ $review->FirstName }} {{ $review->LastName }}</p></i>
            <p>{{ $review->ReviewText }}</p>
        </div>
    </div>
    @endforeach

@endsection
