

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>Error Massage{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



@if (session('error'))

<div class="alert alert-danger">
    <li>Data Update {{ 'error' }}</li>
</div>

@endif


@if (session('success'))
<div class="alert alert-success">
    <li>Data Update {{ 'success' }}</li>
</div>
@endif
