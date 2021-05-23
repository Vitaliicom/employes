@extends('layouts.main-layout')

@section('title','Сотрудники')

@section('content')
    <div class="btn-group mb-4" role="group" aria-label="">
        <a href="#" class="btn btn-outline-primary ">Отдел  1</a>
        <a href="#" class="btn btn-outline-primary">Отдел  2</a>
        
    </div>

    <div class="row">

        @foreach($employes as $item)
        <div class="card mb-4 ">
            <div class="card-header">
                <a href="#">{{$item->fio}}</a>
            </div>
            <div class="card-body">
                <!-- <h5 class="card-title">{{$item->type['name']}}</h5> -->
                <p class="card-text">
                    Дата рождения: {{$item->dob}} <br>
                    Отдел: {{$item->department['name']}} <br>
                    Должность: {{$item->position['name']}} <br>
                    Тип сотрудника: {{$item->type['name']}} <br>
                    Оплата за месяц: 
                    @if($item->type['id']==1)
                    	{{$item->position['monthlyRate']}}
                    @else
                        <? $cnt=0; ?>
                        @foreach($item->employeeTimes as $t)                            
                            <? $cnt+=$t->time; ?>                      
                        @endforeach
                            {{$cnt*$item->position['amountForHour']}}                    
                    @endif
                </p>
                
            </div>
        </div> 
        @endforeach
       

    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

    
@endsection