@extends('master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Top Utilisateurs</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Classement</th>
                                    <th>Utilisateur</th>
                                    <th>Nombre de Médias Vus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topUsers->take(5) as $index => $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->medias_count }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        

        .card {
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .btn-primary {
            margin-top: 15px;
        }
    </style>
@endsection
