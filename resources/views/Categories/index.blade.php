

@extends('components.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>

                    <th style="width: 19.1895%;">name</th>

 <th style="width: 19.1895%;">Id</th>

                </tr>
            </thead>

            <body>
                @foreach ($Categories as $Categorie)


                <tr>
                    <td>
                       {{ $Categorie->name}}
                    </td>
                    {{ $Categorie->Id}}


                </tr>
                @endforeach
            </body>
        </table>
    </div>
    <div class="dataTable_bottom">
        <nav class="dataTable_pagination">
            {{$Categories->links()}}
        </nav>
    </div>
</div>
@endsection
