@section('content')
    <div class="w-10/12 my-10 flex">
        <div class="rounded border p-2 w-5/12">
            @livewire('tickets')
        </div>

        <div class="rounded border p-2 mx-2 w-7/12">
            @livewire('comments')
    </div>
@endsection
