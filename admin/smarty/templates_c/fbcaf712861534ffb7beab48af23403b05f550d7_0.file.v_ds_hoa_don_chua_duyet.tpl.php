<?php
/* Smarty version 3.1.30, created on 2024-05-01 10:58:12
  from "C:\xampp\htdocs\Project_shop_hoa-master\admin\views\index\v_ds_hoa_don_chua_duyet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6632042444dfa8_01088612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbcaf712861534ffb7beab48af23403b05f550d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\admin\\views\\index\\v_ds_hoa_don_chua_duyet.tpl',
      1 => 1714552391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6632042444dfa8_01088612 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\admin\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
 <div class="card-header">
    <i class="fa fa-table"></i> Danh sách hóa đơn chưa xử lý hôm nay</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Mã đơn hàng</th>
            <th>Khách hàng</th>
            <th>Ngày đặt</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_don']->value, 'hoa_don');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_don']->value) {
?>
          <tr id="delete<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
">
            <td>
              <a href="chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
" title="Xem chi tiết đơn hàng" target="_blank">
                <?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>

              </a>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ten_khach_hang;?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['hoa_don']->value->ngay_dat,'%d-%m-%Y');?>
</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['hoa_don']->value->tong_thanh_tien);?>
 đ</td>
            <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai;?>
</td>
            <td>
                <button type="button" onclick="updateAjax(<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
)" class="btn btn-success">Xử lý</button>
                <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
)" class="btn btn-danger">Xóa6</button>
            </td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </tbody>
      </table>
    </div>
  </div>
<?php }
}
