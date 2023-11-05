@extends('Main')
@section('content')
    <div class="container my-2 ">
        <div class="row">
            <div class="col-12 my-3">

                <div class="col-md-8">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('category.index') }}" class="btn btn-primary"> List</a>
                    </div>
                    <div class="card-header my-3">
                        <h3 class="card-title"> Create Categories </h3>

                    </div>
                    <form action=" " method="get">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="textl" class="form-control-group" id="title" name="title">

                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active">
                            <label class="form-check-label" for="checkbox">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
