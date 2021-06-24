<div>
    <div class="p-2">
        <form method="post" action="{{route("$route.store")}}">
            @csrf
            {{$slot}}
        </form>
    </div>
</div>