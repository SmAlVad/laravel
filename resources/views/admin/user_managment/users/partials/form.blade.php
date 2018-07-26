@if($errors->any())

    <div class="alert alert-danger">
        <ul>
             @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>

@endif

<label for="">Имя</label>
<input type="text" class="form-control" name="name" placeholder="Имя пользователя"
       value="@if(old('name')) {{ old('name') }} @else {{ $user->name or '' }} @endif" required />

<label for="">Электронная почта</label>
<input type="email" class="form-control" name="email" placeholder="mail@mail.ru"
       value="@if(old('email')) {{ old('email') }} @else {{ $user->email or '' }} @endif" required />

<label for="">Пароль</label>
<input type="password" class="form-control" name="password"  required />

<label for="">Подтверждение пароля</label>
<input type="password" class="form-control" name="password_confirmation" required />

<hr/>


<input type="submit" class="btn btn-primary" value="Сохранить">