@extends('front.layout')
@section('content')
    <section class="ezy__epcart4 gray" id="ezy__epcart4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card ezy__epcart4-card mb-3">
                        {{-- <div class="card-body d-flex align-items-start p-md-4">
                            <div class="ezy__epcart4-image me-3 me-md-4">
                                <a href="#!">
                                    <img src="https://cdn.easyfrontend.com/pictures/portfolio/portfolio15.jpg" alt=""
                                        class="img-fluid" />
                                </a>
                            </div>
                            <div>
                                <div class="ezy__epcart4-heading mb-3">
                                    <a href="#!">
                                        Wholesale Hexagon Pine Solid Wood Brand Women Watch Display Box Custom Logo Wooden
                                        Watch Luxury
                                        Box
                                    </a>
                                </div>
                                <div>
                                    <div class="input-group ezy__epcart4-qty mb-3">
                                        <input type="text" class="form-control" placeholder="" value="2"
                                            aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                        <div class="input-group-text d-flex flex-column bg-transparent p-0">
                                            <button class="btn" type="button"><i class="fas fa-chevron-up"></i></button>
                                            <button class="btn" type="button"><i
                                                    class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <h3 class="ezy__epcart4-price mb-0">Rs. 7,351</h3>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="btn ezy__epcart4-del d-inline-flex justify-content-center align-items-center rounded-circle p-0">
                                    <i class="fas fa-times fs-6"></i>
                                </button>
                            </div>
                        </div> --}}
                        @foreach ($cartItems as $item)
                            <hr class="ezy__epcart4-hr my-0" />
                            <div class="card-body d-flex align-items-start p-md-4">
                                <div class="ezy__epcart4-image me-3 me-md-4">
                                    <a href="#!">
                                        <img src="https://cdn.easyfrontend.com/pictures/portfolio/portfolio3.jpg"
                                            alt="" class="img-fluid" />
                                    </a>
                                </div>
                                <div>
                                    <h2 class="fs-5 fw-bold">{{ $item->artwork->title }}</h2>
                                    <div class="ezy__epcart4-heading mb-3">
                                        <a href="#!">
                                            {{ $item->artwork->description }}
                                        </a>
                                    </div>
                                    <div>
                                        <div class="input-group ezy__epcart4-qty mb-3">
                                            <form action="{{ route('item.remove', $item->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="form-control"
                                                    onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                            </form>

                                        </div>

                                    </div>
                                    <h3 class="ezy__epcart4-price mb-0">
                                        {{ $item->artwork->price }}</h3>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="btn ezy__epcart4-del d-inline-flex justify-content-center align-items-center rounded-circle p-0">
                                    <i class="fas fa-times fs-6"></i>
                                </button>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="card ezy__epcart4-card sticky-card" id="stickyCard">
                        <div class="card-body p-md-4">
                            <h6 class="mb-4 opacity-75">Order Summary</h6>
                            @foreach ($cartItems as $item)
                            <form id="checkoutForm" action="{{ route('session.store') }}" method="POST">

                              @csrf <!-- Add CSRF token for Laravel forms -->
                              <!-- Include hidden fields for order data -->
                              <input type="hidden" name="user_id" value="{{ $user_id }}">
                              <input type="hidden" name="artwork_id" value="{{ $artworkId }}">
                              <input type="hidden" name="amount" value="{{ $totalPrice }}">
                              
                              <input type="hidden" name="stripeToken" id="stripeToken">
                          
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>{{ $item->artwork->title }}</span>
                                    <span class="fw-bold">${{ $item->artwork->price }}</span>
                                </div>
                                <hr class="ezy__epcart4-hr" />
                            @endforeach
                            {{-- <hr class="ezy__epcart4-hr" />
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Shipping Fee</span>
                            <span class="fw-bold">$209</span>
                        </div>
                        <hr class="ezy__epcart4-hr" />
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Tax</span>
                            <span class="fw-bold">$453</span>
                        </div> --}}

                     
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-5 fw-bold">Total</span>
                                <span class="fw-bold"> ${{ $totalPrice }}</span>
                            </div>

                        </div>
                        <div class="card-body px-md-4 pb-md-4">
                            <button class="btn ezy__epcart4-btn w-100" type="submit">BUY ({{ $cartItems->count() }})</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <script src="https://js.stripe.com/v3/"></script>

    
@endsection
