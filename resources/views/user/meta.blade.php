
    <div class="raw-margin-top-24">
        <label for="phone">@lang('Phone')</label>
        <input id="phone" class="form-control" type="text" name="meta[phone]" value="{{ $user->meta->phone }}">
    </div>

    <div class="raw-margin-top-24">
        <input class="form-check-inline" type="checkbox" id="marketing" name="meta[marketing]" value="1" @if ($user->meta->marketing) checked @endif>
        <label for="marketing">@lang('I agree to receive marketing materials')</label>
    </div>

    <div class="raw-margin-top-24">
        <input type="checkbox" name="meta[terms_and_cond]" class="form-check-inline" value="1" @if ($user->meta->terms_and_cond) checked @endif>
        <label for="terms-and-cond">@lang('I agree with the terms and conditions')</label>
    </div>