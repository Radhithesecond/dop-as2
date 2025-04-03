<!-- @props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr> -->
@props(['url'])
        <table class="header" width="100%" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td class="align-center">
                    <a href="{{ config('app.url') }}" style="display: inline-block;">
                        <img src="{{ asset('img/pblogo.png') }}" alt="{{ config('app.name') }}">
                    </a>
                </td>
            </tr>
        </table>