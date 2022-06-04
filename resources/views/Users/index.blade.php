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
                        <th style="width: 19.1895%;">Password</th>
                        <th style="width: 19.1895%;">Email</th>

                    </tr>
                </thead>

                <body>
                    @foreach ($users as $user)

                    @endforeach
                    <tr>
                        <td>
                           {{ $user->id}}
                        </td>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                           {{$user->Password}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                    </tr>
                    @endforeach
                </body>
            </table>
        </div>
    <div class="dataTable_bottom">
        <nav class="dataTable_pagination">
            {{$users->links()}}
        </nav>
    </div>

    </div>
@endsection
