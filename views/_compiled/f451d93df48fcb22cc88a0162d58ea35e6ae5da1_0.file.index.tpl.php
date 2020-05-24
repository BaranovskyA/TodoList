<?php
/* Smarty version 3.1.36, created on 2020-05-21 17:18:02
  from 'W:\domains\todolist\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec68d9a5e1623_97966585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f451d93df48fcb22cc88a0162d58ea35e6ae5da1' => 
    array (
      0 => 'W:\\domains\\todolist\\views\\index.tpl',
      1 => 1590070680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:todo_list.tpl' => 1,
  ),
),false)) {
function content_5ec68d9a5e1623_97966585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3904714985ec68d9a5d5f35_68049784', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/app.tpl");
}
/* {block "content"} */
class Block_3904714985ec68d9a5d5f35_68049784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3904714985ec68d9a5d5f35_68049784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

    <div class="card card-body mb-3">

        <form method="POST" action="/todos/store">
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Новая задача...">
            </div>

            <button class="btn btn-success">Создать</button>
        </form>
        
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:todo_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
}
