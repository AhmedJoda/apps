<div>
    <div class="p-2">
        <form method="post" action='{{route("$route.update",$edit->id)}}' enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{$slot}}
        </form>
    </div>
</div>