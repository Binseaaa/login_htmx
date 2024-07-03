@include('login')

@if (Session::has('error'))
<div class="alert alert-error text-center text-white bg-red-800 min-w-[100%] mb-3 p-3 rounded">
    <h3>{{ Session::get('error') }}</h3>
</div>
@endif
