@props(['title', 'message'])

<article class="card">
    <div class="symbol" style="--symbol-background-color: var(--red-100); --symbol-color: var(--red-600);">
        <svg aria-hidden="true" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none">
            <path
                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"
                stroke-linejoin="round" stroke-linecap="round"></path>
        </svg>
    </div>
    <div class="content">
        <span class="title">{{ $title }}</span>
        <p class="message">
            {{ $message }}
        </p>
    </div>
    <div class="actions">
        <button class="button destructive" type="button">Deactivate</button>
        <button class="button outline" type="button">Cancel</button>
    </div>
</article>