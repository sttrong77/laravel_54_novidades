@component('admin.layouts.elements.body')
@slot('title') Páginas @endslot
@slot('description') Gerenciamento de Páginas @endslot

<a href="{{route('pages.create')}}" class="btn btn-xs btn-default">novo</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Título</th>
            <th class="text-right">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pages as $page)
        <tr>
            <td>{{ $page->id }}</td>
            <td>{{ $page->title }}</td>
            <td class="text-right">
                <a href="{{route('pages.show', $page->id)}}" class="btn btn-default btx xs">
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    {{ $pages->links() }}
@endcomponent