<div class="smooth">
    <div class="header">
        <ul>
            <li><a href="/"><i class="bi bi-house-fill fs-5"></i></a></li>
            @isset(auth()->user()->id)
            <li><a href="/shoes">shoes</a></li>
            <li><a href="/controllers">controllers</a></li>   
            @if(auth()->user()->is_admin == 1)
            <li><a href="/admin">admin</a></li>
            @endif   
            <li><a href="/like"><i class="bi bi-heart-fill fs-5"></i></a></li>
            @endisset
        </ul>
    </div>
</div>