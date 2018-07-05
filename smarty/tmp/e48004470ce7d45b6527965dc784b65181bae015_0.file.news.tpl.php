<?php
/* Smarty version 3.1.32, created on 2018-07-05 09:50:15
  from 'C:\Users\Mike van Diepen\Desktop\mvc\views\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3dcdb78a7c95_43434608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e48004470ce7d45b6527965dc784b65181bae015' => 
    array (
      0 => 'C:\\Users\\Mike van Diepen\\Desktop\\mvc\\views\\news.tpl',
      1 => 1530777013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3dcdb78a7c95_43434608 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>NEWS</h1>

<a href="index.php?page=home">HOME</a>
<h3>Current page: <?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</h3>

<?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
    <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
">PREVIOUS</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
    <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">NEXT</a>
<?php }?>

<h1>Number of pages: <?php echo $_smarty_tpl->tpl_vars['number_of_pages']->value;?>
</h1>

<p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'part');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['part']->value) {
?>
            <p><?php echo $_smarty_tpl->tpl_vars['part']->value;?>
</p>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</p><?php }
}
