@extends('templates.default')

@section('title')
    Horários
@endsection

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col-6">
                <h2 class="text-maincolor">Cadastrando Horário</h2>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a class="btn btn-maincolor align-items-center" href="{{route('schedules.index')}}" role="button">Voltar</a>
            </div>
        </div>
        <div>
            <hr>
            <form method="POST" action="{{ route('schedules.store')  }}">
                @csrf
                <div class="form-group">
                    <label for="laboratory_id">Laboratórios:</label>
                    <select name="laboratory_id" id="laboratory_id" class="form-control" required>
                        @if($laboratories)
                            @foreach($laboratories as $laboratory)
                                <option value="{{$laboratory->id}}">{{$laboratory->description}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="day">Dias da Semana:</label>
                    <select name="day" id="day" class="form-control" required>
                        <option value="Segunda-Feira">Segunda-Feira</option>
                        <option value="Terça-Feira">Terça-Feira</option>
                        <option value="Quarta-Feira">Quarta-Feira</option>
                        <option value="Quinta-Feira">Quinta-Feira</option>
                        <option value="Sexta-Feira">Sexta-Feira</option>
                    </select>
                </div>

                <div class="form-group row">
                    <label for="hour" class="col-2 col-form-label">Hora Início:</label>
                    <div class="col-10">
                        <input class="form-control" type="time" step='1' min="00:00:00" max="24:00:00" id="start" name="start"
                               required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hour" class="col-2 col-form-label">Hora Final:</label>
                    <div class="col-10">
                        <input class="form-control" type="time" step='1' min="00:00:00" max="24:00:00" id="end" name="end"
                               required>
                    </div>
                </div>
                <button type="submit" class="btn btn-maincolor cursor-pointer active">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
