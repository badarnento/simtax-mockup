@extends('layouts.master')


@section('content')
<div class="container">
    <h2>Users List</h2>
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
    </table>
</div>
@endsection


@section('scripts')

@yield('scripts')

<!-- jQuery dan DataTables -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>

    
    $(document).ready(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: false,
            ajax: "{{ route('users.get') }}",
            columns: [{
                    data: 'id'
                },
                {
                    data: 'name'
                },
                {
                    data: 'email'
                },
                {
                    data: 'created_at'
                }
            ]
        });
    });
</script>
@endsection