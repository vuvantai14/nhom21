<?php
/* Smarty version 3.1.30, created on 2024-05-01 10:37:27
  from "C:\xampp\htdocs\Project_shop_hoa-master\views\trang_chu\v_banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6631ff47dfa291_82026006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd69fb78e95e17e5da9ee46fa4e8820b714a1ea6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\views\\trang_chu\\v_banner.tpl',
      1 => 1714552411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6631ff47dfa291_82026006 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container hidden-xs">
    <div class="cms-page-banner">
        <div class="row">
          <?php $_smarty_tpl->_assignInScope('i', 0);
?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_thong_tin']->value, 'thong_tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thong_tin']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
              <?php if (($_smarty_tpl->tpl_vars['i']->value%3 == 2)) {?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 box" data-aos="fade-down" data-aos-duration="600" >
              <?php } else { ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 box" data-aos="fade-up" data-aos-duration="600" >
              <?php }?>
                <div class="box-content"><a href="<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->DuongDan;?>
">
                    <img alt="" class="img-responsive" src="public/images/banner/<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->Hinh;?>
"></a>
                    <a class="btn-shop" href="<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->DuongDan;?>
"><?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->HanhDong;?>
</a>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
</div>
<?php }
}
