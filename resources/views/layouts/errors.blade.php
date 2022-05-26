@section('errors')
@if(!empty($errors))
    @foreach($errors as $error)
        <div class="shadow text-orange-700 p-3" role="alert">
            <p class="font-bold">Be Warned</p>
            <p>{{ $error }}</p>
        </div>
    @endforeach
@endif
@endsection
