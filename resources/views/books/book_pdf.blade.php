<div class="container">
    @php
        $id = (string) $book['id'];
        $title = $book['title'];
        $author = $book['author'];
    @endphp
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div>
                <div class="mb-3">{!! DNS1D::getBarcodeHTML($id, 'UPCA') !!}</div>
                <p>{{ $id }}</p>
            </div>
            <h5 class="card-title" onclick="showAlert('{{ $title }}')">{{ $title }}</h5>
            <p class="card-text" id="author">{{ $author }}</p>
        </div>
    </div>
</div>
