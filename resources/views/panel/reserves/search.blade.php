@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="" class="bred">Home</a>
    <a href="" class="bred">Reserves</a>
    <a href="" class="bred">Resultados da Pesquisa</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Vôos</h1>
</div>

<div class="content-din bg-white">

    @include('panel.reserves.form-search')

    <div class="messages">
        @include('panel.includes.alerts')
    </div>

    <div class="class-btn-insert">
        <a href="{{route('reserves.create')}}" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Fazer Nova Reserva
        </a>
    </div>
    
    <table class="table table-striped">
        <tr>
            <th>#Id</th>
            <th>Usuário</th>
            <th>Vôo</th>
            <th>Status</th>
            <th width="180">Ações</th>
        </tr>

        @forelse($reserves as $reserve)
            <tr>
                <td>{{$reserve->id}}</td>
                <td>{{$reserve->user_name}}</td>
                <td>{{$reserve->flight_id}} ({{formatDateAndTime($reserve->flight_date)}})</td>
                <td>{{$reserve->status($reserve->status)}}</td>
                <td>
                    <a href="{{route('reserves.edit', $reserve->id)}}" class="edit">Edit</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan='5'>Nenhum item cadastrado !</td>
            </tr>
        @endforelse
    </table>

    {!! $reserves->appends($dataForm)->links() !!}
    
</div><!--Content Dinâmico-->

@endsection