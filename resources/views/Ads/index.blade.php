
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
                    <th style="width: 19.1895%;">image</th>


                </tr>
            </thead>

            <body>
                @foreach ($ads as $ad)

                <tr>
                    <td>
                       {{ $ad->id}}
                    </td>
                    <td>
                        <img src="{{ $ad->image }}" width="200" height="200"
                    </td>

                </tr>
                @endforeach
            </body>
        </table>
    </div>
    <div class="dataTable_bottom">
        <nav class="dataTable_pagination">
            {{$ads->links()}}
        </nav>
    </div>
</div>
@endsection
