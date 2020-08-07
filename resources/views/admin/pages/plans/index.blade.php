@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
        #filtros
        </div>
        <div class="card-body">
            <table class ="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th width= "50">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($plans as $plan)
                            <tr>
                                <td>
                                    {{ $plan->name}}
                                </td>
                                <td>
                                     {{ number_format($plan->price,2,',','.')}}
                                </td>
                                <td style="width=10px;">
                                    <a href="" class="btn btn-warning">VER</a>
                                </td>
                            </tr>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {!! $plans->links() !!}
        </div>
    </div>
@endsection