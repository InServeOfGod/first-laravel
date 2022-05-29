@extends("base")

@section("body")
    <h1 class="fw-bold text-danger text-center">POSTS PAGE</h1>

    <div class="container">
        <div class="table-responsive-md">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
                </thead>
                <tbody>

                @for($i = 0; $i < count($posts); $i++)
                    <tr>
                        <td>
                           {{ $i + 1 }}
                        </td>
                        <td>
                            {{ $posts[$i]->title }}
                        </td>
                        <td>
                            {{ $posts[$i]->body }}
                        </td>
                        <td>
                            {{ $posts[$i]->created_at }}
                        </td>
                        <td>
                            {{ $posts[$i]->updated_at }}
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
