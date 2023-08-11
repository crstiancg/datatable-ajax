@extends('layouts.app')

@section('content')
    <div class="py-4 mx-4">
        <div class="card">
            <div class="card-header text-center">
                Datatable Proccesing Ajax
            </div>
            <div class="card-body">
                <table class="table table-striped people" id="people">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>LASTNAME</th>
                            <th>EMAIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($peoples as $people)        
                        <tr>
                        <th>{{ $people->id }}</th>
                        <td>{{ $people->name }}</td>
                        <td>{{ $people->lastname }}</td>
                        <td>{{ $people->email }}</td>
                        </tr>
                    @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.people').DataTable({
                processing: true,
                serviceSide: true,
                responsive: true,
                ajax: "{{ route('people.index') }}",
                dataType: 'json',
                type: 'POST',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'lastname',
                        name: 'lastname'
                    },
                    {
                        data: 'email',
                        name: 'email',
                        searchable: false,
                        orderable: false,
                    },
                ],
            })
        });
    </script>
@endsection
