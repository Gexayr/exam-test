@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Houses</div>


                    <div class="card-body">

                        <form id="my_form" method="GET" action="search">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                <small id="emailHelp" class="form-text text-muted">also match on partial names.</small>
                            </div>

                            <div class="form-group">
                                <label for="Bedrooms">Bedrooms</label>
                                <input type="number" class="form-control" id="Bedrooms" placeholder="Bedrooms">
                            </div>
                            <div class="form-group">
                                <label for="Bedrooms">Bathrooms</label>
                                <input type="number" class="form-control" id="Bathrooms" placeholder="Bathrooms">
                            </div>
                            <div class="form-group">
                                <label for="Bedrooms">Storeys</label>
                                <input type="number" class="form-control" id="Storeys" placeholder="Storeys">
                            </div>
                            <div class="form-group">
                                <label for="Bedrooms">Garages</label>
                                <input type="number" class="form-control" id="Garages" placeholder="Garages">
                            </div>
                            <div class="form-group">
                                <label for="Bedrooms">Garages</label>
                                <input type="number" class="form-control" id="Garages" placeholder="Garages">
                            </div>
                            <label for="Bedrooms">Price </label>
                                <div class="form-row">
                                    <div class="form-group col-md-6">

                                        <input type="number" class="form-control" id="Price" placeholder="From">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="number" class="form-control" id="Price" placeholder="To">
                                    </div>
                                </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary ">Search</button>
                            </div>
                            <br>
                        </form>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Bedrooms</th>
                                <th scope="col">Bathrooms</th>
                                <th scope="col">Storeys</th>
                                <th scope="col">Garages</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->bedrooms}}</td>
                                    <td>{{$item->bathrooms}}</td>
                                    <td>{{$item->storeys}}</td>
                                    <td>{{$item->garages}}</td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
