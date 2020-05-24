{extends file="layouts/app.tpl"}

{block name="content"}
    <h1 class="mb-3">{$title}</h1>

    <div class="card card-body mb-3">

        <form method="POST" action="/todos/store">
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Новая задача...">
            </div>

            <button class="btn btn-success">Создать</button>
        </form>
        
    </div>

    {include file="todo_list.tpl"}
{/block}

