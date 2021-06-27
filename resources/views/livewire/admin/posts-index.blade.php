<div>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un post">
        </div>
        @if ($posts->count())    
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th colspan="2" scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach                            
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$posts->links()}}
        </div>
        @endif
    </div>
</div>
