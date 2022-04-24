{{-- @include('layouts.navigation') --}}
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    @if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')
        @if ($isOpen)
            @include('livewire.users.update')
        @else
            @include('livewire.users.create')
        @endif
    @endif
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Role</th>
                <th>Email</th>
                @if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')
                    <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->role }}</td>
                    <td>{{ $value->email }}</td>
                    @if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')
                        <td>
                            <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                            @if (Auth::user()->role == 'admin')
                                <button wire:click="delete({{ $value->id }})"
                                    class="btn btn-danger btn-sm">Delete</button>
                            @endif
                        </td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>

    </script>
    <script>
        $(document).ready(function() {
            $('#sampleTable').DataTable({
                responsive: true,
            });
        });
    </script>
</div>
