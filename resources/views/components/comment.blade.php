<li class="mb-4 ms-6">
    <span class="absolute flex items-center justify-center size-8 bg-blue-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-800 dark:bg-blue-900">
        <img class="rounded-full shadow-lg" src="{{ $comment->user->profile_photo_url }}" alt="{{ $comment->user->username }}"/>
    </span>
    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
        <div class="items-center justify-between mb-3 sm:flex">
            <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">{{ $comment->user->username }} commented</div>
            <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">{{ $comment->getFormattedDate()  }}</time>
        </div>
        <div class="p-3 text-xs font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">
            {{ $comment->body }}
        </div>
        <div class="flex justify-end space-x-2 mt-2">
            <form v-if="comment.can?.update" @submit.prevent="$emit('edit', comment.id)">
                <SecondaryButton type="submit">
                    <PencilSquareIcon class="size-4" />
                </SecondaryButton>
            </form>

            <form v-if="comment.can?.delete" @submit.prevent="$emit('delete', comment.id)">
                <DangerButton type="submit">
                    <TrashIcon class="size-4" />
                </DangerButton>
            </form>
        </div>
    </div>
</li>

