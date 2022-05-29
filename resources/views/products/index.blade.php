@extends("base")

@section("body")
    <ul>
        @foreach($products as $id => $product)
            <li>
                <a href="{{ route("products_show", ['id' => $id]) }}">{{ $product }}</a>
            </li>
        @endforeach
    </ul>
@endsection

