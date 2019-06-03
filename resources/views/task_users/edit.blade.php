@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Task User
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($taskUser, ['route' => ['taskUsers.update', $taskUser->id], 'method' => 'patch']) !!}

                        @include('task_users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection