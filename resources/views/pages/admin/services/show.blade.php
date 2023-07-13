@extends('layouts.master')

@section('content')
    <div class="container">
        <section class="mx-auto my-5" style="max-width: 23rem;">

            <div class="card">
                <div class="card-body d-flex flex-row">
                    <div>
                        <h5 class="card-title font-weight-bold mb-2">{{ $service->name }}</h5>
                        {{-- <p class="card-text"><i class="far fa-clock pe-2"></i>07/24/2018</p> --}}
                    </div>
                </div>
                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                    <img class="img-fluid" src="{{ $service->image }}" alt="service image " />

                </div>
                <div class="card-body">
                    <p class="card-text ">
                        {{ $service->description }}
                    </p>

                </div>
            </div>

        </section>
    </div>
@endsection
