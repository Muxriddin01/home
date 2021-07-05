@extends('layouts.app')
@section('title', 'Создать категорию')

@section('content')
    <div class="col-lg-8 col-ml-12">
        <div class="row">
            <!-- basic form start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Создать категорию</h4>
                            {{Form::open([
                                'route'	=> 'admin.category.store',
                                'files'	=>	true,
                            ])}}
                            <div class="form-row align-items-center">
                                <div class="col-sm-6 my-1">
                                    <input type="text" name="name" class="form-control" id="inlineFormInputName" placeholder="Названия" required>
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