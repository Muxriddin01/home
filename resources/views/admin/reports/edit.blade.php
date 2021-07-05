@extends('layouts.app')
@section('title', 'Редактировать Отчет')

@section('content')
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <!-- basic form start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Редактировать Отчет</h4>
                            {{Form::open([
                                'route'	=> ['admin.reports.update',$report->id],
                                'files'	=>	true,
                                'method'=>'put',
                            ])}}
                            <div class="form-row align-items-center">
                                <div class="col-sm-3 my-1">
                                    <select name="category_id" class="form-control" id="inlineFormInputName">
                                        @foreach ($categories as $category)
                                                <option value="{{$category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <input type="number" name="summa" class="form-control" id="inlineFormInputName" placeholder="Сумма" required value="{{ $report->summa }}">
                                </div>
                                <div class="col-sm-3 my-1">
                                    <input type="text" name="commit" class="form-control" id="inlineFormInputName" placeholder="Комментарий" value="{{ $report->commit }}">
                                </div>
                                <div class="col-auto my-1">
                                    <select name="status" class="form-control" id="inlineFormInputName">
                                        <option value="1">Расход</option>
                                        <option value="0" selected>Доход</option>
                                    </select>
                                </div>
                                <div class="col-auto my-1">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- basic form end -->
        </div>
    </div>
@endsection