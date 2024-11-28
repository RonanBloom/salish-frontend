@extends('app')

@section('title', 'Textbox')

@section('content')
    <div class="flex flex-row border-2 border-solid border-primary-varient rounded-[2rem] bg-primary">
        <style>
            textarea::placeholder { color: #4A4947; font-style:italic; }
        </style>
        <textarea 
            class="
                text-color-primary-text
                border-none
                flex
                basis-full
                mx-2
                max-h-40
                resize-y
                bg-transparent
                focus:bg-transparent
                focus:outline-none
                focus:ring-0"
            placeholder="Start typing your request..."
            ></textarea>
        <button class="flex-none px-2 py-2 border-solid ring-solid">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#4A4947"
                class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
            </svg>
        </button>
    </div>
@endsection
