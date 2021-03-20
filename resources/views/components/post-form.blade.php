<form class="flex flex-col self-center space-y-4 shadow-md p-5 rounded-xl" action="{{ $route }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-row space-x-4">
        <input class="border-dashed border-b-2 outline-none" type="text" placeholder="Name" name="name">
        <input class="border-dashed border-b-2 outline-none" type="text" placeholder="Title" name="title">
        <input type="file" name="file">
    </div>

    <textarea style="resize: none" class="h-32 outline-none border rounded-xl p-3" placeholder="Comment" name="com"></textarea>

    <input class="self-end p-3 px-5 rounded-full outline-none hover:shadow-md hover:bg-green-300 hover:text-white transition" type="submit" value="Submit">
</form>
