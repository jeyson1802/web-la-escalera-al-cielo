<div>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un video">
        </div>
        @if ($videos->count())    
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th colspan="2" scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $video)
                    <tr>
                        <th scope="row">{{$video->id}}</th>
                        <td>{{$video->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.videos.edit', $video)}}">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('admin.videos.destroy', $video)}}" method="POST">
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
            {{$videos->links()}}
        </div>
        @endif
    </div>
</div>
