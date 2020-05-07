@if(session('success'))
<div class="alert alert-success text-center text-uppercase font-weight-bold border border-primary rounded-0  " role="alert">

    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

    {{session('success')}}
</div>
@endif
