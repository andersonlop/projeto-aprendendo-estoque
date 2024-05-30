<div class="leftside-menu">
    <a href="#" class="mobmenu">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#44B1D9"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </a>

    <a href="<?php echo URL_BASE ?>" class="logo_2">
        <img src="<?php echo URL_BASE ?>assets/img/logo.png" alt="small">
    </a>

    <div class="h-100 show" id="leftside-menu-container" data-simplebar="init">
        <ul class="side-nav">

            <li class="side-nav-item">
                <a href="<?php echo URL_BASE ?>" class="side-nav-link active">
                    <i class="uil-globe">
                        <svg viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1 8.6166L8.80605 1.27011C9.18964 0.909963 9.81036 0.909963 10.1931 1.27011L18 8.6166M2.96154 6.77075V15.0771C2.96154 15.5865 3.40092 16 3.94231 16H7.53846V12.0007C7.53846 11.4912 7.97785 11.0777 8.51923 11.0777H10.4808C11.0222 11.0777 11.4615 11.4912 11.4615 12.0007V16H15.0577C15.5991 16 16.0385 15.5865 16.0385 15.0771V6.77075M6.23077 16H13.4231"
                                stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </i>
                    <span> Início </span>
                </a>
            </li>
            <li class="side-nav-item sub">
                <a href="">
                    <i class="uil-globe">
                        <svg viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.75 6.88462V12.1154M12.3654 9.5H7.13462M10.6741 3.23179L8.8259 1.38359C8.70448 1.26202 8.56029 1.16557 8.40158 1.09975C8.24287 1.03393 8.07274 1.00004 7.90092 1H3.21154C2.69131 1 2.19238 1.20666 1.82452 1.57452C1.45666 1.94238 1.25 2.44131 1.25 2.96154V13.4231C1.25 13.9433 1.45666 14.4422 1.82452 14.8101C2.19238 15.178 2.69131 15.3846 3.21154 15.3846H16.2885C16.8087 15.3846 17.3076 15.178 17.6755 14.8101C18.0433 14.4422 18.25 13.9433 18.25 13.4231V5.57692C18.25 5.05669 18.0433 4.55777 17.6755 4.18991C17.3076 3.82205 16.8087 3.61538 16.2885 3.61538H11.5991C11.2524 3.61508 10.9191 3.4771 10.6741 3.23179Z"
                                stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </i>
                    <span> Cadastros </span>
                </a>
                <ul>
                    <li><a href="<?php echo URL_BASE . "cliente" ?>">Clientes</a></li>
                    <li><a href="<?php echo URL_BASE . "produto"?>">Produtos</a></li>
                </ul>
            </li>
            <li class="side-nav-item sub">
                <a href="">
                    <i class="uil-globe">
                        <svg viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.9423 4.01923L16.3974 13.2882C16.3681 13.7877 16.1489 14.2572 15.7847 14.6005C15.4205 14.9437 14.939 15.1348 14.4385 15.1346H5.06149C4.56104 15.1348 4.07945 14.9437 3.71529 14.6005C3.35112 14.2572 3.13192 13.7877 3.10256 13.2882L2.55769 4.01923M8.00641 7.28846H11.4936M2.23077 4.01923H17.2692C17.8106 4.01923 18.25 3.57985 18.25 3.03846V1.73077C18.25 1.18938 17.8106 0.75 17.2692 0.75H2.23077C1.68938 0.75 1.25 1.18938 1.25 1.73077V3.03846C1.25 3.57985 1.68938 4.01923 2.23077 4.01923Z"
                                stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </i>
                    <span> Estoque</span>
                </a>
                <ul>
                    <li><a href="<?php echo URL_BASE ?>">Entrada de produto</a></li>
                    <li><a href="<?php echo URL_BASE ?>">Saída de produto</a></li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="<?php echo URL_BASE ?>">
                    <i class="uil-globe">
                        <svg viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.38462 1V11.625C2.38462 12.1886 2.60343 12.7291 2.99293 13.1276C3.38243 13.5261 3.9107 13.75 4.46154 13.75H6.53846M2.38462 1H1M2.38462 1H17.6154M6.53846 13.75H13.4615M6.53846 13.75L5.61538 16.5833M17.6154 1H19M17.6154 1V11.625C17.6154 12.1886 17.3966 12.7291 17.0071 13.1276C16.6176 13.5261 16.0893 13.75 15.5385 13.75H13.4615M13.4615 13.75L14.3846 16.5833M5.61538 16.5833H14.3846M5.61538 16.5833L5.15385 18M14.3846 16.5833L14.8462 18M5.84615 9.5L8.61538 6.66667L10.5982 8.69533C11.5297 7.32711 12.7435 6.18483 14.1538 5.34917"
                                stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </i>
                    <span> Vendas</span>
                </a>
            </li>
        </ul>
    </div>
</div>