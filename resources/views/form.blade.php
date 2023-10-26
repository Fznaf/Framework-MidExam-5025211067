<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Input your Item!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('form.store')}}" method="post" enctype="multipart/form-data"class="flex flex-col space-x-4">
                    @csrf
                    Item Type 
                        <select name="itemType" class = "text-black dark:text-black"> 
                        @foreach($itemType as $itemType)
                            <option value="{{ $itemType->itemType }}" class = "text-black dark:text-black">{{ $itemType->itemType}}</option>
                        @endforeach
                    </select>
                    Item Condition
                    <select name="itemCondition" class = "text-black dark:text-black">   
                        @foreach($itemCondition as $itemCondition)
                            <option value="{{ $itemCondition->itemCondition }}" class = "text-black dark:text-black">{{ $itemCondition->itemCondition}}</option>
                        @endforeach
                    </select>
                    Item Description
                    <input type="text" name="itemDesc" placeholder="Item Description" class = "text-black dark:text-black">
                    Item Defect
                    <input type="text" name="itemDefect" placeholder="Item Defect" class = "text-black dark:text-black">
                    <button type="submit" name="submit" Value="Input" class="py-2 px-4 bg-blue-500 text-white rounded">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
