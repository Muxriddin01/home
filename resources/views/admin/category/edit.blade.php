@extends('layouts.app')
@section('title', 'Редактировать категорию')

@section('content')
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <!-- basic form start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Редактировать категорию</h4>
                            {{Form::open([
                                'route'	=> ['admin.category.update',$category->id],
                                'method'=>'put',
                            ])}}
                            <div class="form-row align-items-center">
                                <div class="col-sm-3 my-1">
                                    <input type="text" name="name" class="form-control" id="inlineFormInputName" placeholder="Названия" required value="{{ $category->name }}">
                                </div>
                                <div class="col-auto my-1">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
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