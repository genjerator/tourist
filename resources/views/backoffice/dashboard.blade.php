<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Active</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Round ID</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($challenges as $challenge)
                                <td>{{ $challenge->id }}</td>
                                <td>{{ $challenge->name }}</td>
                                <td>{{ $challenge->description }}</td>
                                <td>{{ $challenge->active }}</td>
                                <td>{{ $challenge->created_at }}</td>
                                <td>{{ $challenge->updated_at }}</td>
                                <td>{{ $challenge->round->name }}</td>
                                <td>{{ $challenge->round->end_time }}</td>
                        </tr>
                        @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
