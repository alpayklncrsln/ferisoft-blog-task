<x-layouts.admin title="admin">

    <div class="flex justify-between">
        <a href="{{route('admin.blogs.create')}}">
            Blog create
        </a>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>

            </tr>
            </thead>
            <tbody>
            @forelse($blogs as $blog)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$blog->title}}
                </th>
                <td class="px-6 py-4 flex">
                    <a href="{{route('admin.blogs.edit',$blog->id)}}">Edit</a>
                    <form action="{{route('admin.blogs.destroy',$blog->id)}}" method="post">
                        @method('Delete')
                        @csrf
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="2">
                        Blog yok
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

</x-layouts.admin>
