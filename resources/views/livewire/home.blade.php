<div>
    <h1 class="text-blue-500 text-5xl">Hello</h1>
    <div x-data="{ open: false }">
        <button @click="open = true">Expand</button>

        <span x-show="open">
            Content...
        </span>
    </div>
</div>
