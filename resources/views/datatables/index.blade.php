@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="patients-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#patients-table').DataTable({
        processing: true,
        serverSide: false,
		'dom':"T<'clear'>lfrtip",
        'tableTools' : array(
            "sSwfPath" : "/csv.swf",
            "aButtons" : array("copy", "pdf", "xls")),
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'last_name', name: 'last_name' },
            { data: 'first_name', name: 'first_name' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush