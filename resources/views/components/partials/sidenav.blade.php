<aside class="col-span-1 space-y-6 text-gray-600">

    <div class="p-4 space-y-4 bg-white shadow">
        <div class="pb-4 border-b border-gray-200">

            {{-- Start Discusson Button --}}
            <a href="{{ route('threads.create') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-blue-500 border border-transparent rounded hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25" }}>
                {{ __('Zacznij nowy wątek') }}
            </a>
        </div>

        <div class="pb-4 space-y-4">

        </div>
    </div>

    {{-- Categories --}}
    <div class="p-4 space-y-4 bg-white shadow">
        <div class="pb-4 mb-4 border-b border-gray-200">
            <h2 class="font-bold uppercase">Działy</h2>
        </div>

        <ul class="space-y-4">
            <li>
                <a href="#" class="flex items-center justify-between">
                 Rozmówki ogólne
                    
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                 Ogłoszenia
                    
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                 Feedback    
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                 Sugestie  
                    
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                 Dyskusje techniczne  
                    
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                 Events 
                    
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                 Off-topic 
                </a>
            </li>
        </ul>
    </div>

</aside>
