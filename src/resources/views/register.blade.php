<!-- ログインボタンの表示を記述 -->

@extends(layouts.css)
@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<main>
    <div class="register-form__content">
        <div class="register-form__heading">
            <h2>Register</h2>
        </div>

        @if ($errors->any())
            <div class="register-form__error">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form class="register-form">
            <div class="register-form__group">
                <div class="register-form__group-title">
                    <label class="register-form__label--item">お名前</label>
                </div>
                    <input type="text" name="name" placeholder="例:山田  太郎">
                <div class="register-form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="register-form__group">
                <div class="register-form__group-title">
                    <label class="register-form__label--item">メールアドレス</label>
                    <input type="email" name="email" placeholder="例:test@example.com">
                </div>
                <div class="register-form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="register-form__group">
                <div class="register-form__group-title">
                    <label class="register-form__label--item">パスワード</label>
                    <input type="password" name="password" placeholder="例:coachtech1106">
                </div>
                <div class="register-form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="register-form__button">
                <button class="register-form__button-submit">登録</button>
            </div>
        </form>
    </div>
</main>
@endsection