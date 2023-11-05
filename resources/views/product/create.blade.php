@extends('Main')
@section('content')
    <div class="container my-2 ">
        <div class="row">
            <div class="col-12 my-3">

                <div class="col-md-8">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('product.index') }}" class="btn btn-primary"> List</a>
                    </div>
                    <div class="card-header my-3">
                        <h3 class="card-title"> Create Product </h3>

                    </div>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">

                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price">

                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity">

                        </div>
                        <div class="form-group">
                           <label for="category my-2">Product Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">ALL</option>

                        </div>

                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
