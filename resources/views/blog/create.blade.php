<x-layouts.admin title="Blog Create">

    <form action="{{route('admin.blogs.store')}}" method="post">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="John" name="title" required/>
                @error('title')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                    name</label>
                <textarea id="content"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="John" name="content" required></textarea>
                @error('content')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>


        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</x-layouts.admin>
