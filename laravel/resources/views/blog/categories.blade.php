<category></category>
<div id="categ-drop" class="categ-drop  p-3 shadow text-center align-items-center">
    <h3 class="text-dark">Categories</h3>
    <hr>
    @foreach($categories as $category)
        <a class="m-5" href="{{ route('categories.articles', [ 'category' => $category->id ]) }}">
            <h4> {{ $category->name }}</h4>
        </a>
    @endforeach
    <hr>
    <button class="btn" 
            onclick="document.getElementById('categ-drop').style = '-700px';">
     <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#007bff" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg> 
    </button>
</div>
