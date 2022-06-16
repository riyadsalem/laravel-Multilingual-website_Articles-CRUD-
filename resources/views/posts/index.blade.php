@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Posts</div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                 <tr>
                                     <th>Id</th>
                                     <th>Title</th>
                                 </tr>
                            </thead> <!-- End: thead -->
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                    </tr>
                    @endforeach
                </tbody> <!-- End: tbody -->
             </table> <!-- End: table -->

            </div>

            </div>
        </div>
    </div>
</div>

@endsection