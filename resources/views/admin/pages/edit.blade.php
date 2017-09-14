@component('admin.layouts.elements.body')
    @slot('title') Páginas @endslot
    @slot('description') Edição de Páginas @endslot

    <form action="{{route('pages.update', $page->id)}}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT"/>
        @include('admin.pages.form')
    </form>

    <a href="{{route('pages.index')}}" class="btn btn-xs btn-default">voltar</a>

@endcomponent