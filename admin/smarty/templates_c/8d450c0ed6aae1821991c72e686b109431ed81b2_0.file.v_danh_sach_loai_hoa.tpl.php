<?php
/* Smarty version 3.1.30, created on 2024-05-01 11:10:27
  from "C:\xampp\htdocs\Project_shop_hoa-master\admin\views\loai_hoa\v_danh_sach_loai_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66320703cabc24_24119586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d450c0ed6aae1821991c72e686b109431ed81b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\admin\\views\\loai_hoa\\v_danh_sach_loai_hoa.tpl',
      1 => 1714552392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/loai_hoa/v_modal_sua_loai_hoa.tpl' => 1,
  ),
),false)) {
function content_66320703cabc24_24119586 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Tên loại hoa</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_loai_hoa']->value, 'loai_hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_hoa']->value) {
?>
    <tr id="delete<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
">
      <td><?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
</td>
      <td>
        <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
" >Sửa</button>
        <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
)" class="btn btn-danger">Xóa1</button>
      </td>
    </tr>
    <?php $_smarty_tpl->_subTemplateRender("file:views/loai_hoa/v_modal_sua_loai_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php }
}
