@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-2">{{ $user->name }}</h1>
                    <a href="{{ route('user.edit', $user->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ route('user.delete', $user->id) }}"
                          method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fas fa-trash text-danger" role="button"></i>
                        </button>
                    </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Головна</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('user.index') }}">Користувачі</a></li>
                        <li class="breadcrumb-item active">{{ $user->name }}</li>
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
                <div class="col-6">
                        <div class="card">
                            <div class="card-header d-flex p-3">
                                <div class="mr-3">
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Редактувати</a>
                                </div>
                                <form action="{{ route('user.delete', $user->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Видалити">
                                </form>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $user->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Імя</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Прізвище</td>
                                        <td>{{ $user->surname }}</td>
                                    </tr>
                                    <tr>
                                        <td>По батькові</td>
                                        <td>{{ $user->patronymic }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Вік</td>
                                        <td>{{ $user->age }}</td>
                                    </tr>
                                    <tr>
                                        <td>Стать</td>
                                        @if($user->gender == 1)
                                        <td>Чоловік</td>
                                        @else
                                            <td>Жінка</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td>Адреса</td>
                                        <td>{{ $user->address }}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
