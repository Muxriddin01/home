@extends('layouts.app')
@section('title', 'Таблица Категорий')

@section('content')
    <div class="main-content-inner">
        <div class="row">
              <!-- Progress Table start -->
              <div class="col-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="header-title">Таблица Категорий</h4>
                        <a type="button" class="btn btn-primary mb-3" href="{{ route('admin.category.create') }}">Добавить</a>
                        </div>
                        
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Названия</th>
                                            <th scope="col">Действия</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $key=>$category)
                                        <tr>
                                                <th scope="row">{{ $key+1 }}</th>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-3"><a href="{{ route('admin.category.edit',$category->id) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                        <li>
                                                            {{Form::open(['route'=>['admin.category.destroy', $category->id], 'method'=>'delete'])}}
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