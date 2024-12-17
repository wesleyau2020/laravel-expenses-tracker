@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="block block-rounded m-4">
            <div class="alert alert-success alert-dismissible" role="alert">
                <p class="mb-0"> {{ session('success') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <div class="block block-rounded m-4">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Logs
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="row dt-row">
                    <div class="col-sm-12">
                        <table
                            class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer"
                            id="logs-table" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr>
                                    <th class="sorting">User</th>
                                    <th class="sorting">Type</th>
                                    <th class="sorting">Message</th>
                                    <th class="sorting">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logs as $log)
                                    <tr>
                                        <td>{{ $log->user->name }}</td>
                                        <td>{{ $log->log_type }}</td>
                                        <td>{{ $log->message }}</td>
                                        <td>{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#logs-table').DataTable();
        });
    </script>
@endsection
