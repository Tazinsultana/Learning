@extends('category.main')
@section('content')

<body>

    <div class="class-container my-4">

        <div class="row">
            <div class="col-md-2">

            </div>

            <div class="col-md-8">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('category.create') }}" class="btn btn-primary"> Create</a>
                </div>

                <div class="card-header my-3">
                    <h3 class="card-title">Categories List</h3>

                </div>

                <table class="table table-bordered my-3 pb-3">

                    <table class="table table-center">
                        <thead>
                            <tr>
                                <th scope="col">Serial No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Is Active</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <a href="" class="btn btn-success"> Show</a>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">DELETE</a>
                                </td>

                        </tbody>
                    </table>
                </table>

            </div>
            <div class="col-2">

            </div>
        </div>


    </div>
