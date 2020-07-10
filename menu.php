<?php
    $resp = $con->query('select * from tbl_usuarioMeta where meta = "habilitar_menu" and status = 1 and usuario = "'.$_SESSION['id'].'"');
    $menu = [];
    while($row = $resp->fetch_assoc()){
        $menu[$row['descricao']] = $row['valor'];
    }
?>
<!-- MENU -->
<div class="app-sidebar sidebar-shadow bg-dark sidebar-text-light">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

                <li>
                    <a class="" <?php echo ($menu['inicio'])?'href="index.php"':'disabled';?>>
                        <i class="metismenu-icon fa fa-home"></i>
                        Início
                    </a>
                </li>

                <li>
                    <a <?php echo $menu['cadastro']?'href=""':'disabled';?> >
                        <i class="metismenu-icon fa fa-address-book"></i>
                        Cadastros
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a <?php echo $menu['cadastro_clientes']?'href="cad-cliente.php"':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Clientes
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['cadastro_servicos']?'href="cad-servico.php"':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Serviços
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['cadastro_fornecedores']?'href="cad-fornecedor.php"':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Fornecedores
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['cadastro_funcionarios']?'href="cad-funcionario.php"':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Funcionários / Técnicos
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a <?php echo $menu['estoque']?'href="#"':'disabled';?>>
                        <i class="metismenu-icon fa fa-cubes"></i>
                        Gestão de estoque
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a <?php echo $menu['estoque_produtos']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Produtos
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['estoque_equipamentos']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Equipamentos
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a <?php echo $menu['producao']?'href="#"':'disabled';?>>
                        <i class="metismenu-icon fas fa-hammer"></i>
                        Produção
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a <?php echo $menu['producao_grade']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Grade de Produtos
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['producao_ordem']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Ordem de Produção
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['producao_baixa']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Baixa de Produção
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['producao_monitor']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Monitor de Produção
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['producao_liberacao']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Liberação de Produção
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a <?php echo $menu['servicos']?'':'disabled';?>>
                        <i class="metismenu-icon fas fa-stream"></i>
                        Serviços
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <!--<li>
                            <a href="serv-adicionar.php">
                                <i class="metismenu-icon">
                                </i>Adicionar
                            </a>
                        </li>-->
                        <li>
                            <a <?php echo $menu['servicos_contratos']?'href="serv-contratos.php"':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Gestão de contratos
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['servicos_chamados']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Chamados
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['servicos_ordens']?'href="serv-ordemServico.php"':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Ordens de Serviços
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['servicos_equipamentos']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Equipamentos
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a <?php echo $menu['fiscal']?'href="#"':'disabled';?>>
                        <i class="metismenu-icon fas fa-file-invoice-dollar"></i>
                        Fiscal
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a <?php echo $menu['fiscal_nfe']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Lançar NF
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['fiscal_nfe_manual']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Lançar NF (Manual)
                            </a>
                        </li>
                        <li>
                            <a <?php echo $menu['fiscal_nfe_saida']?'href=""':'disabled';?>>
                                <i class="metismenu-icon">
                                </i>Emitir NF Saída
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a <?php echo $menu['agenda']?'href="agenda.php?hoje"':'disabled';?>>
                        <i class="metismenu-icon fas fa-calendar-alt"></i>
                        Agenda
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<div class="app-main__outer">
    <div class="app-main__inner">