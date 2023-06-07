@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Houses</div>


                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Search
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">

                                    <form id="myForm" method="GET" action="search">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name"  name="name" placeholder="Name">
                                            <small id="emailHelp" class="form-text text-muted">also match on partial names.</small>
                                        </div>

                                        <div class="form-group">
                                            <label for="Bedrooms">Bedrooms</label>
                                            <input type="number" class="form-control" id="Bedrooms" placeholder="Bedrooms" name="bedrooms">
                                        </div>
                                        <div class="form-group">
                                            <label for="Bedrooms">Bathrooms</label>
                                            <input type="number" class="form-control" id="Bathrooms" placeholder="Bathrooms" name="bathrooms">
                                        </div>
                                        <div class="form-group">
                                            <label for="Bedrooms">Storeys</label>
                                            <input type="number" class="form-control" id="Storeys" placeholder="Storeys" name="storeys">
                                        </div>
                                        <div class="form-group">
                                            <label for="Bedrooms">Garages</label>
                                            <input type="number" class="form-control" id="Garages" placeholder="Garages" name="garages">
                                        </div>
                                        <div class="form-group">
                                            <label for="Bedrooms">Garages</label>
                                            <input type="number" class="form-control" id="Garages" placeholder="Garages" name="garages">
                                        </div>
                                        <label for="Bedrooms">Price </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">

                                                <input type="number" class="form-control" name="price_from" placeholder="From">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="number" class="form-control" name="price_to" placeholder="To">
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary ">Search</button>
                                        </div>
                                        <br>
                                    </form>

                                    </div>
                                </div>
                            </div>
                        </div>





                        <table class="table" >
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

                            <tbody id="table-content">
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

                        <div id="loading" style="display: none;">
                            <img src="loading.gif" alt="Loading..." width="250" height="250"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
