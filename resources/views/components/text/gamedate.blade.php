<div {{ $attributes->class(
    'flex flex-row'
) }}>
    <p class="text-white text-[3rem] font-light mr-3">
        {{ date('d', strtotime($game->playtime)) }}
    </p>
    <p class="text-white text-[1.2rem] font-light pb-3">
        {{ date('M', strtotime($game->playtime)) }}
    </p>
</div>
