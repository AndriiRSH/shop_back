@extends('layouts.main')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Зміна Користувача</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Головна</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('user.index') }}">Користувачі</a></li>
                        <li class="breadcrumb-item active">Зміна користувача</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('user.update', $user->id) }}" method="POST" class="w-25">
                        @method('patch')
                        @csrf

                        <div class="form-group">
                            <input type="text" value="{{ $user->name ?? old('name') }}" class="form-control" name="name" placeholder="Імя">
                        </div>

                        <div class="form-group">
                            <input type="text" value="{{ $user->email ?? old('email') }}" class="form-control" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <input type="text" value="{{ $user->patronymic ?? old('patronymic') }}" class="form-control" name="patronymic" placeholder="По батькові">
                        </div>

                        <div class="form-group">
                            <input type="text" value="{{ $user->age ?? old('age') }}" class="form-control" name="age" placeholder="Вік">
                        </div>

                        <div class="form-group">
                            <input type="text" value="{{ $user->address ?? old('address') }}" class="form-control" name="address" placeholder="Адреса">
                        </div>

                        <div class="form-group">
                            <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                                <option disabled selected>Стать</option>
                                <option {{ $user->gender == 1 || old('gender') == 1 ? ' selected' : '' }} value="1">Чоловік</option>
                                <option {{ $user->gender == 2 || old('gender') == 2 ? ' selected' : '' }} value="2">Жінка</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Додати">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
