
@extends('components.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th style="width: 19.1895%;">ID</th>
                    <th style="width: 19.1895%;">Name</th>
                    <th style="width: 19.1895%;">image</th>
                    <th style="width: 19.1895%;">price</th>
                </tr>
            </thead>

            <body>
                @foreach ($Products as $Product)

                @endforeach
                <tr>
                    <td>
                       {{ $Product->id}}
                    </td>
                    <td>
                        {{$Product->name}}
                    </td>
                    <td>
                        {{$Product->price}}
                    </td>
                    <td>
                        <img src="{{ $Product->image }}" width="200" height="200"
                    </td>
                </tr>
                @endforeach
            </body>
        </table>
    </div>
<div class="dataTable_bottom">
    <nav class="dataTable_pagination">
        {{$Products->links()}}
    </nav>
</div>

</div>
@endsection

