@extends('layouts.app')

@section('template_title')
    Subscription
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Suscripción') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('subscriptions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Duración</th >
										<th>Precio</th>
										<th>Tipo</th>
										<th>Id Usuarios</th>
										<th>Id Pagos</th>
										<th>Id Actividades</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscriptions as $subscription)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $subscription->duration }}</td>
											<td>{{ $subscription->price }}</td>
											<td>{{ $subscription->type }}</td>
											<td>{{ $subscription->id_users }}</td>
											<td>{{ $subscription->id_pays }}</td>
											<td>{{ $subscription->id_activities }}</td>

                                            <td>
                                                <form action="{{ route('subscriptions.destroy',$subscription->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subscriptions.show',$subscription->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subscriptions.edit',$subscription->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $subscriptions->links() !!}
            </div>
        </div>
    </div>
@endsection
