@extends('components.layout.layout')

@section('title', 'Companies')

@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-button">
                <a href="{{ url('companies/create') }}">Crear</a>
            </div>
            <div class="card-table">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Logo</th>
                            <th>Website</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

