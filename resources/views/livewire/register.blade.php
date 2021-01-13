@section('content')
<div class="my-10 flex justify-center w-full">
    <section class="w-6/12 border rounded shadow-lg p-4 bg-gray-200">
        <h1 class="text-center text-3xl my-5">Signup</h1>
        <hr>
        <form wire:submit.prevent='submit' class="my-4">
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                <input type="text" placeholder="Name" class="p-2 rounded border shadow-sm w-full">
                </div>
            </div>

            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                <input type="email" placeholder="Email" class="p-2 rounded border shadow-sm w-full">
                </div>
            </div>

            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                <input type="password" placeholder="Password" class="p-2 rounded border shadow-sm w-full">
                </div>
            </div>

            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                <input type="password" placeholder="Password Confirm" class="p-2 rounded border shadow-sm w-full">
                </div>
            </div>

            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                <input type="submit" value="Register" class="p-2 rounded border shadow-sm w-full bg-gray-800 tracking-wider cursor-pointer">
                </div>
            </div>
        </form>
    </section>
</div>
@endsection
