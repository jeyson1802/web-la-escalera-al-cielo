<div>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un documento">
        </div>
        @if ($documents->count())    
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
                    @foreach ($documents as $document)
                    <tr>
                        <th scope="row">{{$document->id}}</th>
                        <td>{{$document->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.documents.edit', $document)}}">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('admin.documents.destroy', $document)}}" method="POST">
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
            {{$documents->links()}}
        </div>
        @endif
    </div>
</div>
