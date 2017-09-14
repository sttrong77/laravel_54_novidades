@component('admin.layouts.elements.body')
@slot('title') Páginas @endslot
@slot('description') Gerenciamento de Páginas @endslot
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Título</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pages as $page)
        <tr>
            <td>{{ $page->id }}</td>
            <td>{{ $page->title }}</td>
            <td>##</td>
        </tr>
        @endforeach
    </tbody>
</table>

    {{ $pages->links() }}
@endcomponent