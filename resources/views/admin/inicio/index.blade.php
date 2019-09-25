
@extends("theme.$theme.layout")
@section('titulo')
    pagina principal permisos
@endsection
@section('contenido')
<section class="content">
        <div class="row">
          <div class="col-lg-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Bordered Table</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                       <th>ID</th>
                       <th>PERMISO</th>
                       <th>SLUG</th>
                       <th></th>
                    </tr>
                    </thead>
                    <tbody>
                              @foreach ($permisos as $item)
                                              
                            <tr>
                            <td>{{$item->id}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->slug}}</td>
                                <td></td>
                            </tr>  
                                   
                            @endforeach  
                    </tbody>
                 
                </table>
              </div>
           
              </div>
            </div>
        </div>
        
</section>


@endsection