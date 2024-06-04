<div>
    <div x-data="{ isCollapsed: @js($isCollapsed) }">
        <div class="m-4">

            <button wire:click="next" class="bg-gray-200 font-medium px-4 py-2 rounded">
                When clicked, will set isCollapsed to true (click me at least 2 times to see the "strange" behaviours)
            </button>

            <p class="text-xs p-2">You clicked the button {{ $counter }} {{ $counter === 1 ? 'time' : 'times' }}</p>

            <p class="p-2">The value of x-text="isCollapsed": <span x-text="isCollapsed"></span></p>

            <p x-bind:class="isCollapsed ? 'hidden' : ''" class="p-2">Hi, I am controlled by x-bind:class</p>

            <p x-bind:class="{'hidden': isCollapsed}" class="p-2">Hi, I am controlled by x-bind:class with object syntax</p>

            <p x-show="!isCollapsed" class="p-2">Hi, I am controlled by x-show</p>

            <p x-if="!isCollapsed" class="p-2">Hi, I am controlled by x-if</p>

        </div>
    </div>
</div>

