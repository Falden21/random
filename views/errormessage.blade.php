@if (isset($_SESSION['err_msg']))
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($_SESSION['err_msg'] as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif