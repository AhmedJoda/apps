<div>
    <div class="p-2">
        <form method="post" action='{{route("$route.store")}}' enctype="multipart/form-data">
            @csrf
            {{$slot}}
        </form>
    </div>
</div>