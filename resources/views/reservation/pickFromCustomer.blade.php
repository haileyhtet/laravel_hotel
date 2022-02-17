
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/css/progress-indication.css') }}">
   </head>
   <body>
    @include('reservation.progressbar')
    <div class="container mt-3">
        <div class="row justify-content-md-center mt-4 my-3">
            <div class="col-lg-8 ">
            <form class="d-flex" method="GET" action="{{ route('reservation.pickFromCustomer') }}">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search-user"
                        name="q" value="{{ request()->input('q') }}">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-12">
                @if (!empty(request()->input('q')))
                    <h4>Result for "{{ request()->input('q') }}"</h4>
                    <h4>Total Data: {{ $customersCount }}</h4>
                @endif
            </div>
        </div>
        <div class="row justify-content-md-center mt-3">
            <div class="col-sm-10 d-flex mx-auto justify-content-md-center">
                <div class="pagination-block">
                    {{ $customers->onEachSide(1)->links('template.paginationlinks') }}
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($customers as $customer)
                <div class="col-lg-3 col-md-4 col-sm-6 my-1">
                    <div class="card shadow-sm justify-content-start" style="min-height:350px; ">
                        <img class="myImages" src="{{ $customer->user->getAvatar() }}"
                            style="object-fit: cover; height:250px; border-top-right-radius: 0.5rem; border-top-left-radius: 0.5rem;">
                        <div class="card-body">
                            <div class="card-text">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="mt-0">{{ $customer->name }}
                                                </h5>
                                                <div class="table-responsive">
                                                    <table>
                                                        <tr>
                                                            <td><i class="fas fa-envelope"></i></td>
                                                            <td>
                                                                <span>
                                                                    {{ $customer->user->email }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-user-md"></i></td>
                                                            <td>
                                                                <span>
                                                                    {{ $customer->job }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-map-marker-alt"></i></td>
                                                            <td style="white-space:nowrap" class="overflow-hidden">
                                                                <span>
                                                                    {{ $customer->address }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-phone"></i></td>
                                                            <td>
                                                                <span>
                                                                    +6281233808395
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-birthday-cake"></i></td>
                                                            <td>
                                                                <span>
                                                                    {{ $customer->birthdate }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <a href="{{ route('transaction.reservation.viewCountPerson', ['customer' => $customer->id]) }}"
                                            class="btn btn-primary">Choose</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-md-center mt-3">
            <div class="col-sm-10 d-flex mx-auto justify-content-md-center">
                <div class="pagination-block">
                    {{ $customers->onEachSide(1)->links('template.paginationlinks') }}
                </div>
            </div>
        </div>
    </div>
   </body>
   </html>

