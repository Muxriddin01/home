@extends('layouts.app')
@section('title', 'Таблица отчетов')

@section('content')
        <?php
		use Carbon\Carbon;
		?>
    <div class="main-content-inner">
        <div class="row">
              <!-- Progress Table start -->
              <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="header-title">Таблица отчетов</h4>
                        <a type="button" class="btn btn-primary mb-3" href="{{ route('admin.reports.create') }}">Добавить</a>
                        </div>
                        
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Тип</th>
                                            <th scope="col">Категория</th>
                                            <th scope="col">Дата</th>
                                            <th scope="col">Сумма</th>
                                            <th scope="col">Итого</th>
                                            <th scope="col">Комментарий</th>
                                            <th scope="col">Действия</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reports as $key=>$item)
                                            <tr>
                                                <th scope="row">{{ $key+1 }}</th>
                                                <td>
                                                    @if ($item->status)
                                                        <?php $type = "Расход";  $color = 'bg-danger' ?>
                                                    @else
                                                        <?php $type = "Доход";  $color = 'bg-success' ?>
                                                    @endif
                                                    <span class="status-p {{ $color }}">{{ $type }}</span>
                                                </td>
                                                <td>{{ $item->category ? $item->category->name : null }}</td>
                                                <td>
                                                    {{ Carbon::parse($item->created_at)->translatedFormat('d')}}.
                                                    {{ Carbon::parse($item->created_at)->translatedFormat('m')}}.
                                                    {{ Carbon::parse($item->created_at)->translatedFormat('Y')}}
                                                </td>
                                                <td>{{ number_format($item->summa,0, ' ', ' ') }}</td>
                                                <td>{{ $item->total($item->summa) }}</td>
                                                <td>{{ $item->commit }}</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-3"><a href="{{ route('admin.reports.edit',$item->id) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                        <li>
                                                            {{Form::open(['route'=>['admin.reports.destroy', $item->id], 'method'=>'delete'])}}
                                                            <button type="submit" style="border: none;background: unset" >
                                                                <span class="text-danger"><i class="ti-trash"></i></span>
                                                                </button>
                                                            {{Form::close()}}
                                                        </li>
                                                    </ul>
                                                </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Progress Table end -->
        </div>
    </div>
@endsection