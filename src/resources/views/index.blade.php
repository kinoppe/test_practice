@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <div class="form__input-name">
                        <input type="text" name="last" placeholder="例：山田" value="{{ old('last') }}">
                        <div class="form__error">
                        @error('last')
                        {{$message}}
                        @enderror
                        </div>
                    </div>
                    <div class="form__input-name">
                        <input type="text" name="first" placeholder="例：太郎" value="{{ old('first') }}">
                        <div class="form__error">
                        @error('first')
                        {{$message}}
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <label><input type="radio" name="gender" value="1"
                    @checked(old('gender')=='1')><span>男性</span></label>
                    <label><input type="radio" name="gender" value="2"
                    @checked(old('gender')=='2')><span>女性</span></label>
                    <label><input type="radio" name="gender" value="3"
                    @checked(old('gender')=='3')><span>その他</span></label>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例：test@example" value="{{ old('email') }}">
                </div>
                <div class="form__error">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--tel">
                    <input type="tel" name="tel1" maxlength="3" placeholder="080" value="{{ old('tel1') }}"><span>-</span>
                    <input type="tel" name="tel2" maxlength="4" placeholder="1234" value="{{ old('tel2') }}"><span>-</span>
                    <input type="tel" name="tel3" maxlength="4" placeholder="5678" value="{{ old('tel3') }}">
                </div>
                <div class="form__error">
                    @error('tel1')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                </div>
                <div class="form__error">
                    @error('address')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address2" placeholder="例：千駄ヶ谷マンション101" value="{{ old('address2') }}">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--select">
                <select class="search-form__item-select" name="select">
                    <option value="" disabled {{old('select') ? '' : 'selected'}}>選択してください</option>
                    <option value="商品の交換について"
                    @selected(old('select')=='商品の交換について')>商品の交換について</option>
                    <option value="商品のキャンセルについて"
                    @selected(old('select')=='商品のキャンセルについて')>商品のキャンセルについて</option>
                </select>
                </div>
                <div class="form__error">
                    @error('select')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="お問い合わせ内容をご記載ください" >{{ old('content') }}</textarea>
                </div>
                <div class="form__error">
                    @error('content')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
        <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>

@endsection