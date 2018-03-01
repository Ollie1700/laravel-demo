<form action="{{ url('/new') }}" method="post">
    {{ csrf_field() }}

    @if ($errors->any())
        <span style="red">Paste can't be empty!</span>
    @endif

    <textarea name="content" style="width:100%;height:90vh"></textarea>
    <button type="submit">Create Paste</button>
</form>
