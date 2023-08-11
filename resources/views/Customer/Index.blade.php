@extends('layouts.app')

@section('content')
    <div class="py-4 mx-4">
        <div class="card">
            <div class="card-header text-center">
                Datatable Proccesing Ajax Button Actions
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped people" id="customer">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>LASTNAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th>ACTIONS</th>
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
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#customer').DataTable({
                processing: true,
                responsive: true,
                serviceSide: true,
                ajax: "{{ route('customer.index') }}",
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
                        name: 'email'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        searchable: false,
                        orderable: false,
                    },
                ]
            });
        });
    </script>
@endsection
