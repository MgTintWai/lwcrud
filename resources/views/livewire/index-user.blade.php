<div class="container">
    <div class="card my-5">
        <div class="card-body">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div>
                @if (session()->has('danger'))
                    <div class="alert alert-danger">
                        {{ session('danger') }}
                    </div>
                @endif
            </div>
            <a href="/create" class="btn btn-primary mb-3">Create</a>
            <input wire:model="search" type="text" class="form-control mb-3" placeholder="Enter Something">
            <table class="table table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>CreatedAt</th>
                    <th>UpdatedAt</th>
                    {{--  <th>Password</th>  --}}
                    <th>Action</th>
                </thead>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <a href="/edit/{{$user->id}}" class="btn btn-warning">Edit</a>
                                <a wire:click.prevent="$emit('delete',{{ $user->id }})" class="btn btn-danger">Delete</a>
                            </td>
                            
                        </tr>
                    @endforeach
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>
