@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center">Products</h3>
        <div class="text-right my-2">
            <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">
                Add new
            </a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Author</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product)
                                    <tr class="odd gradeX">
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->author->name ?? null }}</td>
                                        <td align="right">
                                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-sm btn-info">
                                                Show
                                            </a>
                                            <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-sm btn-primary">
                                                Edit
                                            </a>
                                        </td>

                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
@endsection



